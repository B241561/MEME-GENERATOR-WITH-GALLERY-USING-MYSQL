<?php
require 'db.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
if (!isset($data['image']) || empty($data['image'])) {
    echo json_encode(['success' => false, 'error' => 'Image missing']);
    exit;
}

$imageData = preg_replace('/^data:image\/\w+;base64,/', '', $data['image']);
$imageData = base64_decode($imageData);
$topText = $data['topText'] ?? '';
$bottomText = $data['bottomText'] ?? '';

$sqli = $conn->prepare("INSERT INTO memes (image, top_text, bottom_text) VALUES (?, ?, ?)");
$sqli->bind_param("sss", $imageData, $topText, $bottomText);

if ($sqli->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $stmt->error]);
}

$sqli->close();
$conn->close();
?>
