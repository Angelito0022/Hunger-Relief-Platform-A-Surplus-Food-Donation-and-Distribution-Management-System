<?php
$host = 'localhost';
$db = 'hunger_relief_db';
$user = 'root'; // Default MySQL username
$pass = '';     // Default MySQL password for localhost (usually empty)

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn){
    echo 'Connection Successful! ';
}else{
    die(mysqli_error($conn));
}
?>
