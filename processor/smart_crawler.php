<?php
// processor/smart_crawler.php - Smart crawling with version checking
header('Content-Type: application/json');

class SmartCrawler {
    private $cacheFile;
    private $versionFile;
    private $basePath;
    private $cacheDuration = 86400; // 24 hours (since content rarely changes!)
    
    public function __construct() {
        $this->basePath = dirname(__DIR__);
        $this->cacheFile = __DIR__ . '/crawler_cache.json';
        $this->versionFile = __DIR__ . '/content_version.txt';
    }
    
    public function getContent($forceRefresh = false) {
        // Check if content has changed
        $currentVersion = $this->getContentVersion();
        $cachedVersion = $this->getCachedVersion();
        
        // If content changed or cache expired, crawl
        if ($forceRefresh || $currentVersion !== $cachedVersion || !file_exists($this->cacheFile)) {
            return $this->crawl();
        }
        
        // Check if cache is still fresh
        if (file_exists($this->cacheFile)) {
            $cache = json_decode(file_get_contents($this->cacheFile), true);
            if ($cache && isset($cache['timestamp']) && (time() - $cache['timestamp']) < $this->cacheDuration) {
                return $cache;
            }
        }
        
        // Cache expired - crawl
        return $this->crawl();
    }
    
    private function getContentVersion() {
        // Create a hash of all PHP files to detect changes
        $hash = '';
        $files = $this->getPhpFiles($this->basePath);
        
        foreach ($files as $file) {
            $hash .= filemtime($file) . '|';
        }
        
        // Include the version file if it exists (manual version bump)
        if (file_exists($this->versionFile)) {
            $hash .= file_get_contents($this->versionFile);
        }
        
        return md5($hash);
    }
    
    private function getCachedVersion() {
        if (file_exists($this->cacheFile)) {
            $cache = json_decode(file_get_contents($this->cacheFile), true);
            return $cache['content_version'] ?? '';
        }
        return '';
    }
    
    private function getPhpFiles($dir) {
        $results = [];
        $items = scandir($dir);
        $excludeDirs = ['processor', 'images', 'uploads', 'node_modules', 'vendor', 'cache'];
        $excludeFiles = ['header.php', 'footer.php', 'config.php'];
        
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') continue;
            $path = $dir . '/' . $item;
            
            if (is_dir($path)) {
                if (!in_array($item, $excludeDirs)) {
                    $results = array_merge($results, $this->getPhpFiles($path));
                }
            } elseif (pathinfo($item, PATHINFO_EXTENSION) === 'php') {
                if (!in_array($item, $excludeFiles)) {
                    $results[] = $path;
                }
            }
        }
        
        return $results;
    }
    
    private function crawl() {
        $startTime = microtime(true);
        $pages = $this->scanDirectory($this->basePath);
        
        $extractedData = [];
        foreach ($pages as $page) {
            $extractedData[] = $this->extractPageData($page);
        }
        
        $knowledge = $this->buildKnowledgeBase($extractedData);
        $contentVersion = $this->getContentVersion();
        
        $cacheData = [
            'timestamp' => time(),
            'duration' => $this->cacheDuration,
            'content_version' => $contentVersion,
            'pages' => $extractedData,
            'knowledge' => $knowledge,
            'crawl_time' => round(microtime(true) - $startTime, 2),
            'last_crawl' => date('Y-m-d H:i:s')
        ];
        
        file_put_contents($this->cacheFile, json_encode($cacheData));
        
        return $cacheData;
    }
    
    private function scanDirectory($dir) {
        $results = [];
        $items = scandir($dir);
        $excludeDirs = ['processor', 'images', 'uploads', 'node_modules', 'vendor', 'cache'];
        $excludeFiles = ['header.php', 'footer.php', 'config.php'];
        
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') continue;
            $path = $dir . '/' . $item;
            
            if (is_dir($path)) {
                if (!in_array($item, $excludeDirs)) {
                    $results = array_merge($results, $this->scanDirectory($path));
                }
            } elseif (pathinfo($item, PATHINFO_EXTENSION) === 'php') {
                if (!in_array($item, $excludeFiles)) {
                    $results[] = $path;
                }
            }
        }
        
        return $results;
    }
    
    private function extractPageData($filePath) {
        $content = file_get_contents($filePath);
        $fileName = basename($filePath);
        
        return [
            'page' => $fileName,
            'title' => $this->extractTag($content, 'title'),
            'description' => $this->extractMeta($content, 'description'),
            'headings' => $this->extractHeadings($content),
            'paragraphs' => $this->extractParagraphs($content),
            'clients' => $this->extractClients($content),
            'services' => $this->extractServices($content),
            'keywords' => $this->extractKeywords($content)
        ];
    }
    
    private function extractTag($content, $tag) {
        preg_match('/<' . $tag . '[^>]*>(.*?)<\/' . $tag . '>/i', $content, $matches);
        return isset($matches[1]) ? trim(strip_tags($matches[1])) : '';
    }
    
    private function extractMeta($content, $name) {
        preg_match('/<meta[^>]*name="' . $name . '"[^>]*content="([^"]*)"[^>]*>/i', $content, $matches);
        return isset($matches[1]) ? trim($matches[1]) : '';
    }
    
    private function extractHeadings($content) {
        preg_match_all('/<h[1-6][^>]*>(.*?)<\/h[1-6]>/i', $content, $matches);
        return isset($matches[1]) ? array_map('strip_tags', $matches[1]) : [];
    }
    
    private function extractParagraphs($content) {
        preg_match_all('/<p[^>]*>(.*?)<\/p>/i', $content, $matches);
        return isset($matches[1]) ? array_slice(array_map('strip_tags', $matches[1]), 0, 10) : [];
    }
    
    private function extractClients($content) {
        preg_match_all('/<div[^>]*class="client-logo[^"]*"[^>]*>(.*?)<\/div>/i', $content, $matches);
        return isset($matches[1]) ? array_map('strip_tags', $matches[1]) : [];
    }
    
    private function extractServices($content) {
        preg_match_all('/<div[^>]*class="media-card"[^>]*>.*?<h4[^>]*>(.*?)<\/h4>.*?<p[^>]*>(.*?)<\/p>/is', $content, $matches);
        $services = [];
        for ($i = 0; $i < count($matches[1] ?? []); $i++) {
            $services[] = [
                'title' => trim(strip_tags($matches[1][$i] ?? '')),
                'description' => trim(strip_tags($matches[2][$i] ?? ''))
            ];
        }
        return $services;
    }
    
    private function extractKeywords($content) {
        $keywords = [];
        $patterns = [
            '/\b(renovation|construction|building|materials|engineering|survey|electrical|plumbing|roofing|tiling|paving|fencing)\b/i',
            '/\b(supply|delivery|installation|maintenance|repair|hire|rental)\b/i',
            '/\b(certified|quality|sustainable|eco-friendly|reliable)\b/i'
        ];
        
        foreach ($patterns as $pattern) {
            preg_match_all($pattern, $content, $matches);
            if (isset($matches[0])) {
                $keywords = array_merge($keywords, $matches[0]);
            }
        }
        
        return array_unique($keywords);
    }
    
    private function buildKnowledgeBase($pages) {
        $knowledge = [
            'clients' => [],
            'services' => [],
            'keywords' => [],
            'headings' => [],
            'content_summary' => ''
        ];
        
        foreach ($pages as $page) {
            if (!empty($page['clients'])) {
                $knowledge['clients'] = array_merge($knowledge['clients'], $page['clients']);
            }
            if (!empty($page['services'])) {
                foreach ($page['services'] as $service) {
                    if (!empty($service['title'])) {
                        $knowledge['services'][] = $service['title'];
                    }
                }
            }
            if (!empty($page['keywords'])) {
                $knowledge['keywords'] = array_merge($knowledge['keywords'], $page['keywords']);
            }
            if (!empty($page['headings'])) {
                $knowledge['headings'] = array_merge($knowledge['headings'], $page['headings']);
            }
        }
        
        $knowledge['clients'] = array_unique($knowledge['clients']);
        $knowledge['services'] = array_unique($knowledge['services']);
        $knowledge['keywords'] = array_unique($knowledge['keywords']);
        $knowledge['headings'] = array_unique($knowledge['headings']);
        
        $knowledge['content_summary'] = "Clients: " . implode(', ', $knowledge['clients']) . ". ";
        $knowledge['content_summary'] .= "Services: " . implode(', ', $knowledge['services']) . ". ";
        $knowledge['content_summary'] .= "Keywords: " . implode(', ', array_slice($knowledge['keywords'], 0, 20));
        
        return $knowledge;
    }
}

// Handle API requests
$crawler = new SmartCrawler();
$action = $_GET['action'] ?? 'get';

if ($action === 'refresh') {
    // Force refresh
    $data = $crawler->getContent(true);
    echo json_encode([
        'success' => true,
        'action' => 'refresh',
        'timestamp' => date('Y-m-d H:i:s'),
        'pages' => count($data['pages'] ?? []),
        'crawl_time' => $data['crawl_time'] ?? 0,
        'content_version' => $data['content_version'] ?? ''
    ]);
} elseif ($action === 'status') {
    // Check cache status
    $cacheFile = __DIR__ . '/crawler_cache.json';
    if (file_exists($cacheFile)) {
        $cache = json_decode(file_get_contents($cacheFile), true);
        $age = time() - ($cache['timestamp'] ?? 0);
        echo json_encode([
            'success' => true,
            'cached' => true,
            'age' => $age,
            'age_hours' => round($age / 3600, 1),
            'expires_in' => max(0, ($cache['duration'] ?? 86400) - $age),
            'expires_in_hours' => round(max(0, ($cache['duration'] ?? 86400) - $age) / 3600, 1),
            'pages' => count($cache['pages'] ?? []),
            'clients' => $cache['knowledge']['clients'] ?? [],
            'services' => $cache['knowledge']['services'] ?? [],
            'last_crawl' => $cache['last_crawl'] ?? 'Unknown',
            'content_version' => $cache['content_version'] ?? ''
        ]);
    } else {
        echo json_encode([
            'success' => true,
            'cached' => false,
            'message' => 'No cache found. Run crawler first.'
        ]);
    }
} elseif ($action === 'version') {
    // Check if content has changed
    $currentVersion = $crawler->getContentVersion();
    $cachedVersion = $crawler->getCachedVersion();
    
    echo json_encode([
        'success' => true,
        'current_version' => $currentVersion,
        'cached_version' => $cachedVersion,
        'has_changed' => ($currentVersion !== $cachedVersion)
    ]);
} else {
    // Default: get cached content
    $data = $crawler->getContent();
    echo json_encode([
        'success' => true,
        'action' => 'get',
        'timestamp' => date('Y-m-d H:i:s'),
        'pages' => count($data['pages'] ?? []),
        'knowledge' => $data['knowledge'] ?? [],
        'cached' => true,
        'cache_age' => time() - ($data['timestamp'] ?? 0),
        'last_crawl' => $data['last_crawl'] ?? 'Unknown'
    ]);
}
?>