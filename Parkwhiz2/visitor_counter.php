<?php
// contact_process.php
header('Content-Type: application/json');

// Read JSON body
$data = json_decode(file_get_contents('php://input'), true);

$name = trim($data['name'] ?? '');
$email = trim($data['email'] ?? '');
$message = trim($data['message'] ?? '');

$errors = [];

if ($name === '') $errors[] = 'Name is required.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
if (strlen($message) < 5) $errors[] = 'Message must be at least 5 characters.';

if (count($errors) > 0) {
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// Save to messages.txt with timestamp (append)
$entry = date('Y-m-d H:i:s') . " | " . $name . " | " . $email . " | " . str_replace(["\r","\n"], ' ', $message) . PHP_EOL;
$file = 'messages.txt';
if (!file_exists($file)) file_put_contents($file, '');

$fp = fopen($file, 'a');
if ($fp) {
    if (flock($fp, LOCK_EX)) {
        fwrite($fp, $entry);
        fflush($fp);
        flock($fp, LOCK_UN);
    }
    fclose($fp);
}

echo json_encode(['success' => true, 'message' => 'Message received.']);
