<?php
$host = getenv('MEME_DB_HOST') ?: 'localhost';
$user = getenv('MEME_DB_USER') ?: 'root';
$pass = getenv('MEME_DB_PASSWORD') ?: '';
$dbname = getenv('MEME_DB_NAME') ?: 'meme_db';

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  http_response_code(500);
  die('Database connection failed. Check the local database configuration.');
}
?>