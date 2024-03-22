<?php
include 'db_connection.php';

$title = $_POST["title"];
$content = $_POST["content"];

$sql = "INSERT INTO notes (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "Not başarıyla eklendi";
} else {
    echo "Not eklemede hata: " . $conn->error;
}

$conn->close();
?>