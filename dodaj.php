<?php session_start(); ?>
<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>
<?php require "connection.php" ?>
<?php 
 if (isset($_SESSION['id'])) {
                   $id = $_SESSION['id'];
                   


?>


<div class="container">
	<div class="row">
		<div class="col"></div>
	</div>
</div>
<div class="container">
	<div class="row">
			<div class="col"></div>
			<div class="col">
				

				<?php
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$dyear = $_POST['dyear'];
$password = $_POST['password'];
$sql = "INSERT INTO users (name, lastName, email, dyear, password) VALUES ('$name','$lastName', '$email', '$dyear', '$password')";

if ($conn->query($sql) === TRUE) {
     header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

			</div>
			<div class="col"></div>
	</div>
</div>
<div class="container">
	<div class="row">
			<div class="col"></div>
	</div>
</div>





<?php




require "partials/footer.php";

               }
               else {
            
            header('Location: index.php');
        }
$conn->close();
    ?>