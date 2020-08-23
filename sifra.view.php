<?php session_start(); ?>
<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>
<?php require "connection.php" ?>
<?php 
				if (isset($_SESSION['id'])) {
						

?>
<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<form action="sifra.php" method="post">
				<input type="password" name="password" placeholder="Unesite staru šifru" class="form-control" required><br>
				<input type="password" name="password" placeholder="Unesite novu šifru" class="form-control" required><br>
				<input type="password" name="password" placeholder="Ponovite novu šifru" class="form-control" required><br>
				
				<button type="submit" class="btn btn-primary form-control">Izmjeni</button>
			</form>
		</div>
	</div>
</div>
<?php 
				} else {
					?>
					<div class="container">
					<div class="row">
					 <div class="col-6 offset-3">
					 	<?php
					 		echo "<h1>Login or Register</h1>";
					 		echo "morate biti logovani da pristupite ovom linku";?>
					 </div>
					</div>
					</div>
			<?php } ?>
<?php require "partials/footer.php";
$conn->close(); ?>