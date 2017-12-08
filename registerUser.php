<?php
require('config/db.php');

// TODO
// Input validation

$email          = $conn->real_escape_string($_POST['email']);
$first_name     = $conn->real_escape_string($_POST['first_name']);
$last_name      = $conn->real_escape_string($_POST['last_name']);
$password       = $conn->real_escape_string($_POST['password']);
$password_again = $conn->real_escape_string($_POST['password_again']);


$sql = " INSERT INTO users (email, first_name, last_name, password, register_date) "; 
$sql .= "VALUES ('$email', '$first_name', '$last_name',PASSWORD('$password'), NOW());";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: login.php');