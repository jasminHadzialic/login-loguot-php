<?php session_start(); 
require "connection.php";
				if (isset($_SESSION['id'])) {
						

$id = $_SESSION['id'];




$upit = $conn->query("SELECT password FROM users WHERE id = '$id'");











}
?>
