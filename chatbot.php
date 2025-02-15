<?php
session_start();  // Start session to track conversation history

header("Content-Type: application/json");

// Get API key (Replace with your actual OpenAI API key)
$apiKey = "Api-key-here";

// Read user input
$input = json_decode(file_get_contents("php://input"), true);
$userMessage = trim($input['message'] ?? '');
$sessionId = $input['session_id'] ?? session_id();

// Validate input
if (empty($userMessage)) {
    echo json_encode(["response" => "⚠️ Error: No message received."]);
    exit;
}

// Initialize chat history in session if not set
if (!isset($_SESSION['chat_history'][$sessionId])) {
    $_SESSION['chat_history'][$sessionId] = [];
}

// Store user message in session
$_SESSION['chat_history'][$sessionId][] = ["role" => "user", "content" => $userMessage];

// Prepare API request
$apiUrl = "https://api.openai.com/v1/chat/completions";
$data = [
    "model" => "gpt-4o-mini",
    "messages" => $_SESSION['chat_history'][$sessionId],
    "temperature" => 0.7,
    "max_tokens" => 200,
    "top_p" => 1,
    "frequency_penalty" => 0,
    "presence_penalty" => 0
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo json_encode(["response" => "⚠️ cURL Error: " . curl_error($ch)]);
    curl_close($ch);
    exit;
}
curl_close($ch);

// Handle API response
if ($response === FALSE) {
    echo json_encode(["response" => "⚠️ Error: Unable to connect to AI service."]);
    exit;
}

$responseData = json_decode($response, true);

// Extract chatbot response
$botResponse = $responseData['choices'][0]['message']['content'] ?? "⚠️ Error: No response from AI.";

// Store bot response in session
$_SESSION['chat_history'][$sessionId][] = ["role" => "assistant", "content" => $botResponse];

// Return chatbot response
echo json_encode(["response" => $botResponse]);
?>

