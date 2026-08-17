<?php
// processor/chat.php - Fixed version with proper services handling
header('Content-Type: application/json');

error_reporting(E_ALL);
ini_set('display_errors', 0);

$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['message'])) {
    echo json_encode(['error' => 'No message provided']);
    exit;
}

$message = trim($input['message']);
$message_lower = strtolower($message);

// =====================================================
// FALLBACK KNOWLEDGE (hardcoded - ALWAYS works)
// =====================================================

$knowledge = [
    'clients' => ['University of Zimbabwe', 'Harare City Council', 'NUST', 'EcoHomes', 'ZimBuild'],
    'services' => [
        'Renovations' => 'Kitchens, bathrooms, painting, ceilings, tiling, roofing, plumbing, electrical, paving, walls, fencing, extensions',
        'Construction' => 'Buildings, homes, roads, drainage, earthworks, pavements, project management, civil engineering',
        'Materials' => 'CATMIX 70/100, Ss60, Mc30, Tp7, PREKOTES, Asphalt, Aggregates, Bitumen, Steel, Meshwire',
        'Products' => 'Infrared faucets, Sensor taps, Soap dispensers, Wall hung toilets, Bathtubs',
        'Equipment Hire' => 'Tip Trucks, Bulldozers',
        'Flag Inscription' => 'Professional flag restoration for companies, schools, churches',
        'Upholstery' => 'Fabric selection, Padding replacement, Professional installation',
        'Wood Benches' => 'Custom design, Commercial & residential projects'
    ],
    'certifications' => ['GT002', 'ST004', 'GH003', 'SP002', 'SH002', 'SF001', 'GC007', 'SC006'],
    'company' => [
        'name' => 'Enginove (Pvt) Ltd',
        'location' => '8 Glen Carron Road, Highlands, Harare | 24 Hindhead Road, Chisipite',
        'phone' => '+263 77 578 0627 | +263 861 202 3233',
        'email' => 'sales@enginove.co.zw',
        'hours' => 'Mon-Sat 8AM-8PM, Sun/Public Holidays by appointment'
    ]
];

// Try to load from cache if available
$cacheFile = __DIR__ . '/crawler_cache.json';
if (file_exists($cacheFile)) {
    $cache = json_decode(file_get_contents($cacheFile), true);
    if ($cache && isset($cache['knowledge']) && !empty($cache['knowledge']['services'])) {
        // Merge cache with fallback to ensure we have data
        $cachedServices = $cache['knowledge']['services'] ?? [];
        if (!empty($cachedServices) && is_array($cachedServices)) {
            // Only use cache if it has actual service names
            $knowledge['services'] = $cachedServices;
        }
        if (!empty($cache['knowledge']['clients'])) {
            $knowledge['clients'] = $cache['knowledge']['clients'];
        }
        if (!empty($cache['knowledge']['certifications'])) {
            $knowledge['certifications'] = $cache['knowledge']['certifications'];
        }
    }
}

// =====================================================
// BUILD KNOWLEDGE STRINGS
// =====================================================

$clients_list = implode(', ', $knowledge['clients']);
$certs_list = implode(', ', $knowledge['certifications']);

// Get service names properly
$service_names = array_keys($knowledge['services']);
$services_list = implode(', ', $service_names);

// Build detailed service descriptions
$service_details = [];
foreach ($knowledge['services'] as $name => $details) {
    $service_details[] = "• " . $name . ": " . $details;
}
$service_details_str = implode("\n", $service_details);

$phone = $knowledge['company']['phone'];
$email = $knowledge['company']['email'];
$location = $knowledge['company']['location'];
$hours = $knowledge['company']['hours'];

// =====================================================
// QUICK ANSWER SYSTEM
// =====================================================

$reply = null;

// 1. CLIENTS question
if (preg_match('/\b(client|clients|customer|customers|work with|worked with|partner|partners)\b/i', $message_lower) && !preg_match('/\b(service|phone|email|location)\b/i', $message_lower)) {
    $reply = "🏗️ Our valued clients include: **" . $clients_list . "**. We've built lasting partnerships across education, government, and private sectors. Need more details? Call us at " . $phone;
}

// 2. SERVICES / OFFER question
elseif (preg_match('/\b(service|services|offer|offers|provide|provides|do you do|what you do|what do you|help with)\b/i', $message_lower) || 
        preg_match('/\b(what|which)\s+(service|offer|provide|do)\b/i', $message_lower)) {
    
    $reply = "🔨 **We offer: " . $services_list . "**\n\n" .
             "Here's what we do:\n" . $service_details_str . "\n\n" .
             "📞 Call us at " . $phone . " for more details or a free quotation!";
}

// 3. LOCATION question
elseif (preg_match('/\b(location|address|where|located|find|office|offices|visit)\b/i', $message_lower)) {
    $reply = "📍 **Visit Us:**\n" .
             "• Highlands Office: 8 Glen Carron Road, Highlands, Harare\n" .
             "• Chisipite Office: 24 Hindhead Road, Chisipite, Harare\n\n" .
             "📞 Call: " . $phone . "\n" .
             "📧 Email: " . $email . "\n\n" .
             "Open Mon-Sat 8AM-8PM. Come visit us!";
}

// 4. CONTACT/PHONE question
elseif (preg_match('/\b(phone|call|mobile|contact|email|mail|reach|how to reach|number)\b/i', $message_lower)) {
    $reply = "📞 **Contact Us:**\n" .
             "• Phone: " . $phone . "\n" .
             "• Email: " . $email . "\n" .
             "• Website: www.enginove.co.zw\n\n" .
             "🕒 Hours: " . $hours . "\n\n" .
             "📍 Address: " . $location;
}

// 5. CERTIFICATIONS question
elseif (preg_match('/\b(certif|certified|qualif|accredit|license|approved|registration)\b/i', $message_lower)) {
    $reply = "✅ **Active Certifications (2026):**\n" .
             "• " . $certs_list . "\n\n" .
             "We are fully certified and insured for all construction works.\n\n" .
             "📞 Need verification? Call " . $phone;
}

// 6. QUOTE/PRICE question
elseif (preg_match('/\b(quote|quotation|estimate|price|cost|budget|how much|fee|charges|amount)\b/i', $message_lower)) {
    $reply = "📋 **Free Quotations!**\n\n" .
             "We offer free, no-obligation quotations for all services.\n\n" .
             "**To get a quote:**\n" .
             "• Visit our Request Quote page on the website\n" .
             "• Call us: " . $phone . "\n" .
             "• Email: " . $email . "\n\n" .
             "We'll arrange a site visit and provide a detailed estimate. No payment needed upfront - just tell us what you need!";
}

// 7. ABOUT/COMPANY question
elseif (preg_match('/\b(about|company|who are you|what is enginove|tell me about|history|background)\b/i', $message_lower)) {
    $reply = "🏗️ **About Enginove (Pvt) Ltd**\n\n" .
             "We are a tech-driven construction company based in Zimbabwe.\n\n" .
             "**Mission:** Worldwide presence of quality, affordable construction.\n" .
             "**Vision:** State-of-the-art tech company.\n" .
             "**Values:** Quality, Reliability, Trust, Innovation, Excellence.\n\n" .
             "We specialize in:\n" . $services_list . "\n\n" .
             "🌐 www.enginove.co.zw\n" .
             "📞 " . $phone;
}

// 8. THANK YOU / GREETING
elseif (preg_match('/\b(thank|thanks|hey|hello|hi|good morning|good afternoon|thanks)\b/i', $message_lower) && strlen($message_lower) < 25) {
    $greetings = [
        "You're welcome! 😊 How can I help you with your construction or renovation needs today?",
        "Hello there! 👋 What can I assist you with at Enginove? Feel free to ask about our services, materials, or projects.",
        "Hi! 😊 I'm here to help with any questions about our services, materials, or projects. What would you like to know?",
        "Good to hear from you! 🏗️ What would you like to know about Enginove?"
    ];
    $reply = $greetings[array_rand($greetings)];
}

// 9. MATERIALS question
elseif (preg_match('/\b(material|materials|supply|supplies|product|products|steel|cement|asphalt)\b/i', $message_lower) && !preg_match('/\b(service|client|location)\b/i', $message_lower)) {
    $reply = "🔩 **Materials We Supply:**\n\n" .
             "• CATMIX 70/100\n" .
             "• Ss60, Mc30, Tp7, PREKOTES\n" .
             "• Asphalt, Aggregates, Bitumen\n" .
             "• Steel, Meshwire\n" .
             "• Infrared faucets, Sensor taps\n" .
             "• Soap dispensers, Wall hung toilets, Bathtubs\n\n" .
             "📞 Order at: " . $phone . " or email: " . $email;
}

// 10. HOURS question
elseif (preg_match('/\b(hour|working|open|close|time|schedule|when)\b/i', $message_lower)) {
    $reply = "🕒 **Working Hours:**\n" .
             "• Monday – Saturday: 8:00 AM – 8:00 PM\n" .
             "• Sunday / Public Holidays: By appointment\n" .
             "• 24/7 Reachable for emergencies\n\n" .
             "📞 Call: " . $phone;
}

// 11. SCHOOL / OLD BUILDING question
elseif (preg_match('/\b(school|building|old|year|built|construction|renovation|repair|fix|maintenance)\b/i', $message_lower) && 
        !preg_match('/\b(service|offer|provide|client|location)\b/i', $message_lower)) {
    $reply = "🏗️ **Yes, we can help with that!**\n\n" .
             "Enginove specializes in:\n" .
             "• Renovations and repairs for older buildings\n" .
             "• School construction and maintenance\n" .
             "• Structural assessments and improvements\n" .
             "• Modernization and upgrades\n\n" .
             "📞 Call us at " . $phone . " to schedule a site visit and assessment.\n" .
             "We'll provide a free quotation after evaluating your needs!";
}

// =====================================================
// SEND RESPONSE
// =====================================================

if ($reply) {
    echo json_encode(['reply' => $reply]);
    exit;
}

// =====================================================
// FALLBACK: Use Ollama for complex questions
// =====================================================

$context = "Enginove (Pvt) Ltd - Construction company in Zimbabwe.\n";
$context .= "Services: " . $services_list . "\n";
$context .= "Service Details:\n" . $service_details_str . "\n";
$context .= "Clients: " . $clients_list . "\n";
$context .= "Certifications: " . $certs_list . "\n";
$context .= "Phone: " . $phone . "\n";
$context .= "Email: " . $email . "\n";
$context .= "Location: " . $location . "\n";

$prompt = "You are Enginove support assistant. Use this info:\n" . $context . "\n\n" .
          "Answer briefly (2-3 sentences) and BE SPECIFIC: " . $message . "\n\nAnswer:";

$ch = curl_init('http://localhost:11434/api/generate');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'model' => 'phi:latest',
    'prompt' => $prompt,
    'stream' => false,
    'temperature' => 0.5,
    'max_tokens' => 150
]));
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    $reply = "I'm here to help! For specific questions about Enginove, please call " . $phone . " or email " . $email . ". You can also visit our website at www.enginove.co.zw";
} else {
    $data = json_decode($response, true);
    $reply = $data['response'] ?? "I'm here to help! Could you please rephrase your question about Enginove?";
    $reply = trim($reply);
    $reply = preg_replace('/^Answer:\s*/', '', $reply);
    
    // If reply is too generic, add contact info
    if (strlen($reply) < 30 || strpos($reply, 'Enginove') === false) {
        $reply .= "\n\n📞 For more details, call " . $phone . " or visit www.enginove.co.zw";
    }
}

echo json_encode(['reply' => $reply]);
?>