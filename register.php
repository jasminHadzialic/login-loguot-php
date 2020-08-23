<?php 

require "connection.php";



$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$dyear = $_POST['dyear'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if(strlen($name) < 6) {
    exit("Username mora sadržavati najmanje 6 znakova.");
}

if($password != $password2) {
    exit("Lozinke se moraju poklapati.");
}

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

if($uppercase == false || !$lowercase || !$number || strlen($password) < 8) {
    // tell the user something went wrong
    exit("Nešto ti nije ok sa lozinkom.");
}

if($uppercase == false || !$lowercase || !$number || strlen($password) < 8) {
    // tell the user something went wrong
    exit("Nešto ti nije ok sa lozinkom.");
}



if ((isset($_POST['name']) && $_POST['lastName'] && $_POST['email'] && $_POST['dyear'] && $_POST['password']  )) {
	$sql = "INSERT INTO users (name, lastName, email, dyear, password) VALUES ('$name','$lastName', '$email', '$dyear', '$password')";


	mysqli_query($conn,$sql)
    or die(mysqli_error($conn));
   

    header('Location: login.php');


} 

	




$conn->close();
?>



