// processor/embed.js - Enginove Chat Assistant (Smart Crawling)
(function() {
    'use strict';

    // =====================================================
    // CONFIGURATION
    // =====================================================

    const CONFIG = {
        apiEndpoint: '/Enginove/processor/chat.php',
        position: 'bottom-right',
        theme: {
            primary: '#1f8b4c',
            primaryDark: '#0f6a36',
            bg: '#ffffff',
            text: '#1e2a2f',
            lightBg: '#f4f9f6',
            border: '#e2f0e6'
        }
    };

    // Quick questions for users
    const QUICK_QUESTIONS = [
        'What services do you offer?',
        'Which clients have you worked with?',
        'Where are you located?',
        'How can I request a quote?',
        'What certifications do you have?',
        'What are your contact details?'
    ];

    // =====================================================
    // STATE
    // =====================================================

    let isOpen = false;
    let conversationId = null;
    let isTyping = false;
    let messageHistory = [];

    // =====================================================
    // SMART CRAWLER - Only crawls when content changes
    // =====================================================

    class SmartCrawler {
        constructor() {
            this.isRunning = false;
            this.lastCrawl = null;
            this.crawlCount = 0;
            this.contentVersion = null;
            this.isMainPage = this.checkIfMainPage();
            this.checkInterval = 3600000; // Check every hour
            
            if (this.isMainPage) {
                this.start();
            }
        }

        checkIfMainPage() {
            const path = window.location.pathname;
            return path.includes('index.php') || 
                   path === '/' || 
                   path === '/Enginove/' ||
                   path === '/Enginove/index.php';
        }

        start() {
            // Initial check after page load
            setTimeout(() => {
                this.checkForUpdates();
            }, 5000);

            // Check periodically (every hour)
            setInterval(() => {
                this.checkForUpdates();
            }, this.checkInterval);
        }

        checkForUpdates() {
            if (this.isRunning) return;
            this.isRunning = true;

            // Check if content version has changed
            fetch('/Enginove/processor/smart_crawler.php?action=version')
                .then(response => response.json())
                .then(data => {
                    if (data.has_changed || !this.contentVersion) {
                        console.log('🔄 Content changed - crawling...');
                        this.performCrawl();
                    } else {
                        console.log('✅ Content unchanged - no crawl needed');
                        this.isRunning = false;
                        
                        // Check if cache exists
                        return fetch('/Enginove/processor/smart_crawler.php?action=status');
                    }
                })
                .then(response => {
                    if (response && response.ok) {
                        return response.json();
                    }
                    return null;
                })
                .then(data => {
                    if (data && !data.cached) {
                        console.log('🔄 No cache found - initial crawl...');
                        this.performCrawl();
                    }
                    this.isRunning = false;
                })
                .catch(() => {
                    // If check fails, try a full crawl
                    this.performCrawl();
                    this.isRunning = false;
                });
        }

        performCrawl() {
            // Use sendBeacon for background crawling
            if (navigator.sendBeacon) {
                navigator.sendBeacon('/Enginove/processor/smart_crawler.php?action=refresh');
            } else {
                fetch('/Enginove/processor/smart_crawler.php?action=refresh', {
                    keepalive: true
                });
            }
            
            this.crawlCount++;
            this.lastCrawl = new Date();
            console.log('✅ Crawl initiated (update #' + this.crawlCount + ')');
        }

        getStatus() {
            return {
                isRunning: this.isRunning,
                lastCrawl: this.lastCrawl,
                crawlCount: this.crawlCount,
                isMainPage: this.isMainPage,
                checkInterval: this.checkInterval / 60000 + ' minutes'
            };
        }
    }

    // =====================================================
    // CREATE CHAT UI
    // =====================================================

    function createChatUI() {
        // Main container
        const container = document.createElement('div');
        container.id = 'enginove-chat-container';
        container.style.cssText = `
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 999999;
            font-family: 'Inter', Arial, sans-serif;
        `;

        // Chat toggle button
        const toggleBtn = document.createElement('button');
        toggleBtn.id = 'chat-toggle-btn';
        toggleBtn.innerHTML = '💬';
        toggleBtn.style.cssText = `
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: ${CONFIG.theme.primary};
            color: white;
            border: none;
            font-size: 28px;
            cursor: pointer;
            box-shadow: 0 4px 20px rgba(31, 139, 76, 0.3);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        `;
        toggleBtn.onmouseover = () => {
            toggleBtn.style.transform = 'scale(1.05)';
            toggleBtn.style.boxShadow = '0 6px 30px rgba(31, 139, 76, 0.4)';
        };
        toggleBtn.onmouseout = () => {
            toggleBtn.style.transform = 'scale(1)';
            toggleBtn.style.boxShadow = '0 4px 20px rgba(31, 139, 76, 0.3)';
        };
        toggleBtn.onclick = toggleChat;

        // Chat window
        const chatWindow = document.createElement('div');
        chatWindow.id = 'chat-window';
        chatWindow.style.cssText = `
            position: absolute;
            bottom: 80px;
            right: 0;
            width: 380px;
            height: 520px;
            background: ${CONFIG.theme.bg};
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            border: 1px solid ${CONFIG.theme.border};
            display: none;
            flex-direction: column;
            overflow: hidden;
            transition: all 0.3s ease;
        `;

        // Chat header
        const header = document.createElement('div');
        header.style.cssText = `
            padding: 16px 20px;
            background: ${CONFIG.theme.primary};
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-shrink: 0;
        `;
        header.innerHTML = `
            <div style="display:flex;align-items:center;gap:10px;">
                <span style="font-size:20px;">🏗️</span>
                <div>
                    <div style="font-weight:700;font-size:16px;">Enginove Assistant</div>
                    <div style="font-size:12px;opacity:0.8;" id="chat-status">Online • Ready to help</div>
                </div>
            </div>
            <button id="close-chat-btn" style="background:none;border:none;color:white;font-size:22px;cursor:pointer;padding:0 4px;">×</button>
        `;
        header.querySelector('#close-chat-btn').onclick = toggleChat;

        // Messages container
        const messagesDiv = document.createElement('div');
        messagesDiv.id = 'chat-messages';
        messagesDiv.style.cssText = `
            flex: 1;
            overflow-y: auto;
            padding: 16px 20px;
            background: ${CONFIG.theme.lightBg};
            display: flex;
            flex-direction: column;
            gap: 12px;
        `;

        // Welcome message
        const welcomeMsg = document.createElement('div');
        welcomeMsg.style.cssText = `
            background: ${CONFIG.theme.bg};
            padding: 12px 16px;
            border-radius: 12px;
            border-bottom-left-radius: 4px;
            max-width: 85%;
            font-size: 14px;
            line-height: 1.6;
            color: ${CONFIG.theme.text};
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            align-self: flex-start;
        `;
        welcomeMsg.textContent = "👋 Hi there! I'm the Enginove assistant. How can I help you with construction, renovations, or materials today?";
        messagesDiv.appendChild(welcomeMsg);

        // Quick questions
        const quickDiv = document.createElement('div');
        quickDiv.id = 'quick-questions';
        quickDiv.style.cssText = `
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding: 4px 0;
        `;
        
        QUICK_QUESTIONS.forEach(q => {
            const btn = document.createElement('button');
            btn.textContent = q;
            btn.style.cssText = `
                padding: 6px 14px;
                border-radius: 20px;
                border: 1px solid ${CONFIG.theme.border};
                background: ${CONFIG.theme.bg};
                color: ${CONFIG.theme.text};
                font-size: 12px;
                cursor: pointer;
                transition: all 0.2s ease;
                font-family: inherit;
                white-space: nowrap;
            `;
            btn.onmouseover = () => {
                btn.style.background = CONFIG.theme.primary;
                btn.style.color = 'white';
                btn.style.borderColor = CONFIG.theme.primary;
            };
            btn.onmouseout = () => {
                btn.style.background = CONFIG.theme.bg;
                btn.style.color = CONFIG.theme.text;
                btn.style.borderColor = CONFIG.theme.border;
            };
            btn.onclick = () => sendMessage(q);
            quickDiv.appendChild(btn);
        });
        messagesDiv.appendChild(quickDiv);

        // Typing indicator
        const typingIndicator = document.createElement('div');
        typingIndicator.id = 'typing-indicator';
        typingIndicator.style.cssText = `
            display: none;
            padding: 10px 16px;
            background: ${CONFIG.theme.bg};
            border-radius: 12px;
            border-bottom-left-radius: 4px;
            max-width: 70%;
            align-self: flex-start;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        `;
        typingIndicator.innerHTML = `
            <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:${CONFIG.theme.primary};margin-right:4px;animation:bounce 1.4s infinite ease-in-out both;"></span>
            <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:${CONFIG.theme.primary};margin-right:4px;animation:bounce 1.4s infinite ease-in-out both;animation-delay:0.16s;"></span>
            <span style="display:inline-block;width:8px;height:8px;border-radius:50%;background:${CONFIG.theme.primary};animation:bounce 1.4s infinite ease-in-out both;animation-delay:0.32s;"></span>
        `;
        messagesDiv.appendChild(typingIndicator);

        // Input area
        const inputArea = document.createElement('div');
        inputArea.style.cssText = `
            padding: 12px 16px;
            border-top: 1px solid ${CONFIG.theme.border};
            display: flex;
            gap: 10px;
            background: ${CONFIG.theme.bg};
            flex-shrink: 0;
        `;
        
        const inputField = document.createElement('input');
        inputField.id = 'chat-input';
        inputField.type = 'text';
        inputField.placeholder = 'Type your message...';
        inputField.style.cssText = `
            flex: 1;
            padding: 10px 16px;
            border: 1px solid ${CONFIG.theme.border};
            border-radius: 12px;
            font-size: 14px;
            outline: none;
            font-family: inherit;
            background: ${CONFIG.theme.lightBg};
            transition: border-color 0.2s ease;
        `;
        inputField.onfocus = () => {
            inputField.style.borderColor = CONFIG.theme.primary;
        };
        inputField.onblur = () => {
            inputField.style.borderColor = CONFIG.theme.border;
        };
        inputField.onkeydown = (e) => {
            if (e.key === 'Enter') {
                const msg = inputField.value.trim();
                if (msg) {
                    sendMessage(msg);
                    inputField.value = '';
                }
            }
        };

        const sendBtn = document.createElement('button');
        sendBtn.innerHTML = '➤';
        sendBtn.style.cssText = `
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: ${CONFIG.theme.primary};
            color: white;
            border: none;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        `;
        sendBtn.onmouseover = () => {
            sendBtn.style.background = CONFIG.theme.primaryDark;
            sendBtn.style.transform = 'scale(1.05)';
        };
        sendBtn.onmouseout = () => {
            sendBtn.style.background = CONFIG.theme.primary;
            sendBtn.style.transform = 'scale(1)';
        };
        sendBtn.onclick = () => {
            const msg = inputField.value.trim();
            if (msg) {
                sendMessage(msg);
                inputField.value = '';
            }
        };

        inputArea.appendChild(inputField);
        inputArea.appendChild(sendBtn);

        chatWindow.appendChild(header);
        chatWindow.appendChild(messagesDiv);
        chatWindow.appendChild(inputArea);

        container.appendChild(chatWindow);
        container.appendChild(toggleBtn);

        document.body.appendChild(container);

        // Add bounce animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes bounce {
                0%, 80%, 100% { transform: scale(0); }
                40% { transform: scale(1); }
            }
        `;
        document.head.appendChild(style);

        // Update status with crawler info
        setTimeout(() => {
            const statusEl = document.getElementById('chat-status');
            if (statusEl && window.crawler) {
                const info = window.crawler.getStatus();
                if (info.lastCrawl) {
                    const timeAgo = Math.round((Date.now() - info.lastCrawl.getTime()) / 60000);
                    statusEl.textContent = `🔄 Content updated ${timeAgo}m ago • ${info.crawlCount} updates`;
                }
            }
        }, 3000);
    }

    // =====================================================
    // TOGGLE CHAT
    // =====================================================

    function toggleChat() {
        isOpen = !isOpen;
        const window = document.getElementById('chat-window');
        const btn = document.getElementById('chat-toggle-btn');
        if (isOpen) {
            window.style.display = 'flex';
            btn.innerHTML = '✕';
            btn.style.background = '#dc2626';
            setTimeout(() => {
                document.getElementById('chat-input').focus();
            }, 300);
        } else {
            window.style.display = 'none';
            btn.innerHTML = '💬';
            btn.style.background = CONFIG.theme.primary;
        }
    }

    // =====================================================
    // SEND MESSAGE
    // =====================================================

    function sendMessage(message) {
        const messagesDiv = document.getElementById('chat-messages');
        const typingIndicator = document.getElementById('typing-indicator');
        const quickDiv = document.getElementById('quick-questions');
        
        if (quickDiv) quickDiv.style.display = 'none';

        const userMsg = document.createElement('div');
        userMsg.style.cssText = `
            background: ${CONFIG.theme.primary};
            color: white;
            padding: 10px 16px;
            border-radius: 12px;
            border-bottom-right-radius: 4px;
            max-width: 85%;
            font-size: 14px;
            line-height: 1.6;
            align-self: flex-end;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        `;
        userMsg.textContent = message;
        messagesDiv.appendChild(userMsg);

        messageHistory.push({ role: 'user', content: message });

        typingIndicator.style.display = 'block';
        messagesDiv.scrollTop = messagesDiv.scrollHeight;

        fetch(CONFIG.apiEndpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                message: message,
                conversation_id: conversationId,
                history: messageHistory.slice(-5)
            })
        })
        .then(response => response.json())
        .then(data => {
            typingIndicator.style.display = 'none';
            
            if (data.error) {
                const errorMsg = document.createElement('div');
                errorMsg.style.cssText = `
                    background: #fee2e2;
                    color: #b91c1c;
                    padding: 10px 16px;
                    border-radius: 12px;
                    border-bottom-left-radius: 4px;
                    max-width: 85%;
                    font-size: 14px;
                    line-height: 1.6;
                    align-self: flex-start;
                `;
                errorMsg.textContent = 'Sorry, I encountered an error. Please try again or contact us directly.';
                messagesDiv.appendChild(errorMsg);
            } else {
                const reply = data.reply || "I'm sorry, I didn't understand that. Could you please rephrase?";
                conversationId = data.conversation_id;
                
                messageHistory.push({ role: 'assistant', content: reply });
                
                const botMsg = document.createElement('div');
                botMsg.style.cssText = `
                    background: ${CONFIG.theme.bg};
                    padding: 10px 16px;
                    border-radius: 12px;
                    border-bottom-left-radius: 4px;
                    max-width: 85%;
                    font-size: 14px;
                    line-height: 1.6;
                    color: ${CONFIG.theme.text};
                    align-self: flex-start;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
                `;
                botMsg.textContent = reply;
                messagesDiv.appendChild(botMsg);
            }
            
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        })
        .catch(error => {
            typingIndicator.style.display = 'none';
            const errorMsg = document.createElement('div');
            errorMsg.style.cssText = `
                background: #fee2e2;
                color: #b91c1c;
                padding: 10px 16px;
                border-radius: 12px;
                border-bottom-left-radius: 4px;
                max-width: 85%;
                font-size: 14px;
                line-height: 1.6;
                align-self: flex-start;
            `;
            errorMsg.textContent = 'Connection error. Please check your internet and try again.';
            messagesDiv.appendChild(errorMsg);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        });
    }

    // =====================================================
    // INITIALIZATION
    // =====================================================

    function initCrawler() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() {
                window.crawler = new SmartCrawler();
            });
        } else {
            window.crawler = new SmartCrawler();
        }
    }

    function initChat() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', createChatUI);
        } else {
            createChatUI();
        }
    }

    initChat();
    initCrawler();

    // =====================================================
    // EXPOSE FOR DEBUGGING & MANUAL CONTROL
    // =====================================================

    window.EnginoveChat = {
        toggle: toggleChat,
        send: sendMessage,
        getHistory: () => messageHistory,
        crawler: () => window.crawler ? window.crawler.getStatus() : null,
        refreshContent: () => {
            if (window.crawler) {
                window.crawler.performCrawl();
                return 'Crawler triggered!';
            }
            return 'Crawler not initialized';
        }
    };

    // Legacy functions for backward compatibility
    window.checkCrawlerStatus = function() {
        if (window.crawler) {
            return window.crawler.getStatus();
        }
        return 'Crawler not initialized';
    };

    window.refreshContent = function() {
        if (window.crawler) {
            window.crawler.performCrawl();
            return 'Crawler triggered!';
        }
        return 'Crawler not initialized';
    };

    console.log('🏗️ Enginove Chat Assistant loaded!');
    console.log('📊 Type checkCrawlerStatus() to check crawler status');
    console.log('🔄 Type refreshContent() to manually refresh content');

})();