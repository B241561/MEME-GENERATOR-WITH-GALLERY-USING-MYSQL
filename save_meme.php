<?php
require 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
if (!is_array($data) || empty($data['image']) || !is_string($data['image'])) {
    echo json_encode(['success' => false, 'error' => 'Image missing']);
    exit;
}

$imagePayload = preg_replace('/^data:image\/png;base64,/', '', $data['image']);
$imageData = base64_decode($imagePayload, true);
if ($imageData === false || strlen($imageData) === 0 || strlen($imageData) > 16 * 1024 * 1024) {
    echo json_encode(['success' => false, 'error' => 'Invalid image data']);
    exit;
}

$topText = $data['topText'] ?? '';
$bottomText = $data['bottomText'] ?? '';
$topText = is_string($topText) ? $topText : '';
$bottomText = is_string($bottomText) ? $bottomText : '';

$sqli = $conn->prepare("INSERT INTO memes (image, top_text, bottom_text) VALUES (?, ?, ?)");
$sqli->bind_param("sss", $imageData, $topText, $bottomText);

if ($sqli->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Could not save the meme']);
}

$sqli->close();
$conn->close();
?>
