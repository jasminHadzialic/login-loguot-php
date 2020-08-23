<?php session_start(); ?>
<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>
<?php require "connection.php" ?>
<?php 
 if (isset($_SESSION['id'])) {
                   $id = $_SESSION['id'];
                   ?>



<div class="container">
	<h3 style="text-align: center;">Dodaj novog korisnika</h3>
	<div class="row">
		<div class="col-6 offset-3">
			<form action="dodaj.php" method="post">
				<input type="text" name="name" placeholder="name" class="form-control"><br>
				<input type="text" name="lastName" placeholder="lastName" class="form-control"><br>
				<input type="email" name="email" placeholder="email" class="form-control"><br>
				<input type="date" name="dyear" placeholder="dyear" class="form-control"><br>
				<input type="password" name="password" placeholder="password" class="form-control"><br>
				<input type="password" name="password2" placeholder="re-password" class="form-control"><br>
				<input type="number" name="admin" placeholder="admin" class="form-control"><br>
				<button type="submit" class="btn btn-primary form-control">Register</button>
			</form>
		</div>
	</div>
</div>



<?php





?>



<?php require "partials/footer.php";

               }
               else {
            
            header('Location: index.php');
        }

    ?>