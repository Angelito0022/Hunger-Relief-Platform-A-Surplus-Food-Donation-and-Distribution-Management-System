<?php
$host = 'localhost';
$db = 'hunger_relief_db';
$user = 'root'; 
$pass = '';     

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Successfully connected to the database: " . $db;
}
?>
