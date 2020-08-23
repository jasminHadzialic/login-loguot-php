<?php 
session_start();
require "connection.php";


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE email='$email' AND password ='$password'";

$query = $conn->query($sql);
$id = mysqli_fetch_assoc($query)['id'];

if ($id) {
	$_SESSION['id'] = '$id';
	header('Location: index.php');
} else {
	echo "netacan password ili ime";
	
}



$conn->close();

?>