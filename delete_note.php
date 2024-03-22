<?php
include 'db_connection.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM notes WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Not başarıyla silindi.";
    } else {
        echo "Not silinirken hata oluştu: " . $conn->error;
    }
}

$conn->close();
?>