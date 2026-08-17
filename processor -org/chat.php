<?php
// processor/chat.php
header('Content-Type: application/json');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the raw POST data
$input = json_decode(file_get_contents('php://input'), true);

if (!$input || !isset($input['message'])) {
    echo json_encode(['error' => 'No message provided']);
    exit;
}

$message = $input['message'];
$conversation_id = $input['conversation_id'] ?? uniqid();

// Define the system prompt - Enginove context
$system_prompt = "You are Enginove (Pvt) Ltd customer support assistant - a Zimbabwean construction and renovation company.

COMPANY INFO:
- Name: Enginove (Pvt) Ltd
- Location: 8 Glen Carron Road, Highlands, Harare | 24 Hindhead Road, Chisipite
- Phone: +263 77 578 0627 | +263 861 202 3233
- Email: sales@enginove.co.zw
- Website: www.enginove.co.zw
- Hours: Mon-Sat 8AM-8PM, Sun/Public Holidays by appointment, 24/7 reachable

SERVICES:
- Renovations: Kitchens, Bathrooms, Painting, Ceilings, Tiling, Roofing, Plumbing, Electrical, Paving, Walls, Fencing, Extensions
- Construction: Buildings, Homes, Roads, Drainage, Earthworks, Pavements, Project Management, Civil Engineering
- Materials: CATMIX, Asphalt, Aggregates, Bitumen, Steel, Meshwire
- Products: Infrared faucets, Sensor taps, Soap dispensers, Wall hung toilets, Bathtubs
- Equipment Hire: Tip Trucks, Bulldozers
- Flag Inscription: Professional flag restoration
- Upholstery: Fabric selection, Padding replacement
- Wood Benches: Custom design, Commercial & residential

CERTIFICATIONS (2026): GT002, ST004, GH003, SP002, SH002, SF001, GC007, SC006

ABOUT: Tech-based construction company. Mission: Worldwide presence of quality, affordable construction. Vision: State-of-the-art tech company. Core Values: Quality, Reliability, Trust, Innovation, Excellence.

KEY MESSAGES: Build your future home. Same-day service. Quality guaranteed. Eco-friendly materials. Free quotations. After-sales support.

RESPOND AS A HELPFUL, FRIENDLY ASSISTANT. Keep responses concise but informative. Always include contact details when relevant. For quotes, direct them to request_quote.php or call +263 77 578 0627.";

// Prepare the prompt for Ollama
$prompt = $system_prompt . "\n\nUser: " . $message . "\n\nAssistant:";

// Call Ollama API
$ch = curl_init('http://localhost:11434/api/generate');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'model' => 'phi:latest',
    'prompt' => $prompt,
    'stream' => false,
    'temperature' => 0.7,
    'max_tokens' => 500
]));

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    echo json_encode(['error' => 'Ollama error: ' . $error]);
    exit;
}

$data = json_decode($response, true);

if ($data && isset($data['response'])) {
    // Clean up the response
    $reply = trim($data['response']);
    // Remove any "Assistant:" prefix if present
    $reply = preg_replace('/^Assistant:\s*/', '', $reply);
    
    echo json_encode([
        'reply' => $reply,
        'conversation_id' => $conversation_id
    ]);
} else {
    echo json_encode(['error' => 'Failed to get response from Ollama']);
}