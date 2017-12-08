<?php
require('config/db.php');

if (!isset($_POST['list_name'])) {
    die('No can do!');
}

$list_name = $conn->real_escape_string($_POST['list_name']);

$sql = "INSERT INTO lists (list_name, create_date) VALUES ('$list_name', NOW());";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: index.php');