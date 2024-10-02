<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "knowledge_sharing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle article uploads and user contributions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";
    $conn->query($sql);
}

$conn->close();
?>
