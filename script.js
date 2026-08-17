(function () {

    // =============================
    // Inject CSS
    // =============================

    const style = document.createElement("style");

    style.innerHTML = `

.chat-widget{
    position:fixed;
    right:25px;
    bottom:25px;
    z-index:999999;
    font-family:Arial,sans-serif;
}

.chat-button{

    width:65px;
    height:65px;
    border-radius:50%;
    background:#2e9e4d;
    color:#fff;
    border:none;
    cursor:pointer;
    font-size:28px;
    box-shadow:0 8px 20px rgba(0,0,0,.25);
    transition:.3s;

}

.chat-button:hover{

    transform:scale(1.08);

}

.chat-window{

    position:absolute;
    right:0;
    bottom:80px;
    width:340px;
    max-height:520px;

    background:#fff;

    border-radius:18px;

    overflow:hidden;

    box-shadow:0 10px 40px rgba(0,0,0,.2);

    display:none;

}

.chat-header{

    background:#2e9e4d;
    color:#fff;
    padding:18px;
    font-size:18px;
    font-weight:bold;

}

.chat-body{

    padding:18px;
    max-height:400px;
    overflow:auto;

}

.bot-message{

    background:#f5f5f5;
    padding:12px;
    border-radius:12px;
    margin-bottom:15px;
    line-height:1.5;

}

.quick-question{

    width:100%;

    border:none;

    background:#eef7ef;

    margin-bottom:10px;

    padding:12px;

    text-align:left;

    cursor:pointer;

    border-radius:10px;

    transition:.25s;

}

.quick-question:hover{

    background:#dff1e3;

}

.chat-answer{

    margin-top:15px;
    padding:12px;
    background:#fafafa;
    border-left:4px solid #2e9e4d;
    display:none;
    border-radius:6px;

}

@media(max-width:600px){

.chat-widget{

right:15px;
bottom:15px;

}

.chat-window{

width:92vw;
right:0;

}

.chat-button{

width:58px;
height:58px;

font-size:24px;

}

}

`;

    document.head.appendChild(style);

    // =============================
    // HTML
    // =============================

    const widget=document.createElement("div");

    widget.className="chat-widget";

    widget.innerHTML=`

<div class="chat-window">

<div class="chat-header">

💬 FortFor Assistant

</div>

<div class="chat-body">

<div class="bot-message">

Hello 👋

How can we help you today?

Choose one of the questions below.

</div>

<button class="quick-question"
data-answer="FortFor Technologies provides Payroll, HR Consulting, Outsourcing and Tax Consulting services.">

What services do you offer?

</button>

<button class="quick-question"
data-answer="You can request a free consultation through our Contact page.">

How do I request a consultation?

</button>

<button class="quick-question"
data-answer="We support Sage 300 People, Sage Intacct and Payroll Outsourcing solutions.">

What software do you support?

</button>

<button class="quick-question"
data-answer="Our consultants will guide you through implementation, migration and training.">

Can you help us migrate payroll?

</button>

<button class="quick-question"
data-answer="Yes. We provide ongoing support after implementation.">

Do you provide support?

</button>

<button class="quick-question"
data-answer="This chatbot will soon connect to our AI backend for live conversations.">

Talk to an AI Assistant

</button>

<div class="chat-answer"></div>

</div>

</div>

<button class="chat-button">

💬

</button>

`;

    document.body.appendChild(widget);

    // =============================
    // Behaviour
    // =============================

    const button=widget.querySelector(".chat-button");

    const windowBox=widget.querySelector(".chat-window");

    const answer=widget.querySelector(".chat-answer");

    button.onclick=function(){

        if(windowBox.style.display==="block"){

            windowBox.style.display="none";

        }

        else{

            windowBox.style.display="block";

        }

    };

    widget.querySelectorAll(".quick-question").forEach(function(btn){

        btn.onclick=function(){

            answer.style.display="block";

            answer.innerHTML=this.dataset.answer;

        };

    });

})();