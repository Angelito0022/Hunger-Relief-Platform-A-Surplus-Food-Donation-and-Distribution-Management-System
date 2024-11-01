<?php
$host = 'localhost';
$db = 'hunger_relief_db';
$user = 'root'; 
$pass = '';     

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die(mysqli_error($conn));
} 
?>
