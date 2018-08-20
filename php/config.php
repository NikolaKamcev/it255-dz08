<?php
$servername = "localhost";
$username = "root";
$password = "";
$database =  "it255";
 
$conn = new mysqli($servername, $username, $password, $database);
 
 
if ($conn->connect_error) {
    die("Došlo je do greške prilikom konekcije: " . $conn->connect_error);
} 
?> 