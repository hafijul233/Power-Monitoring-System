<?php
$servername = "iot.travelhostbd.com";
$username = "hafij";
$password = "hafij@1234";
$dbname = "iotpower";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 