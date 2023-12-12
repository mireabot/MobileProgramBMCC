<?php
$servername = "localhost";
$username = "id21563087_super";
$password = "BMCCMobile44$";
$database = "id21563087_main";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>