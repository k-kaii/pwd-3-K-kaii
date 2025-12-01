<?php
include 'database.php';

$title     = $_POST['title'];
$genre     = $_POST['genre'];
$release_date  = $_POST['release_date'];
$producer = $_POST['producer'];

$sql = "INSERT INTO films (title, genre, release_date, producer)
        VALUES ('$title', '$genre', '$release_date', '$producer')";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>