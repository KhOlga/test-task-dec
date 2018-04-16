<?php

$server_name = "localhost";
$username = "user_name";
$password = "user_password";
$dbname = "test_task_dec";


$conn = new mysqli($server_name, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO `applications` (`name`, `phone`, `email`, `message`) VALUES ('{$name}', '{$phone}', '{$email}', '{$message}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();