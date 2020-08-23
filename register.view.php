
<?php require "partials/head.php";?>
<?php require "partials/navbar.php";?>

<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<form action="register.php" method="post">
				<input type="text" name="name" placeholder="name" class="form-control" required><br>
				<input type="text" name="lastName" placeholder="lastName" class="form-control" required><br>
				<input type="email" name="email" placeholder="email" class="form-control" required><br>
				<input type="date" name="dyear" placeholder="dyear" class="form-control" required><br>
				<input type="password" name="password" placeholder="password" class="form-control" required><br>
				<input type="password" name="password2" placeholder="re-password" class="form-control" required><br>
				<button type="submit" class="btn btn-primary form-control">Register</button>
			</form>
		</div>
	</div>
</div>



?>
<?php require "partials/footer.php";?>
