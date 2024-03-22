<?php
include 'db_connection.php';

$title = $_POST["title"];
$content = $_POST["content"];

$sql = "INSERT INTO notes (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "Note added successfully";
} else {
    echo "Error adding note: " . $conn->error;
}

$conn->close();
?>