<?php 



$conn = new mysqli('localhost', 'root', '', 'base');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




?>