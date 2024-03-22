<?php
include 'db_connection.php';

$sql = "SELECT * FROM notes ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["content"] . "</p>";
        echo "<p>" . $row["created_at"] . "</p>";
        echo "<a href='delete_note.php?id=" . $row["id"] . "'>Sil</a>";
        echo "<hr>";
    }
} else {
    echo "Not bulunamadı.";
}

$conn->close();
?>