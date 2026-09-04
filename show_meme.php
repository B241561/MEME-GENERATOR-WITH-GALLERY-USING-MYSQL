<?php
require 'db.php';

$sql = "SELECT id, image, top_text, bottom_text, created_at FROM memes ORDER BY created_at DESC";
$result = $conn->query($sql);

echo '<!DOCTYPE html><html><head><title>Saved Memes</title></head><body>';
echo '<h1>Saved Memes</h1>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $base64Image = base64_encode($row['image']);
        echo '<div style="margin-bottom: 40px; text-align: center;">';
        echo '<img src="data:image/png;base64,' . $base64Image . '" width="400"/><br>';
        echo '<p><strong>Top:</strong> ' . htmlspecialchars($row['top_text']) . '</p>';
        echo '<p><strong>Bottom:</strong> ' . htmlspecialchars($row['bottom_text']) . '</p>';
        echo '<p><em>' . $row['created_at'] . '</em></p>';
        echo '</div>';
    }
} else {
    echo '<p>No memes found.</p>';
}
echo '</body></html>';
?>
