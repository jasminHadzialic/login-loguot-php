<?php session_start(); ?>
<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>
<?php require "connection.php" ?>
<?php 
				if (isset($_SESSION['id'])) {
					?>

<div class="container">
	<div class="row">
                <div class="col"><a href="profil.php"><h4>Profil</h4></a> </div>
                          <div class="col">
     <?php 
         $id = $_SESSION['id'];
            $query = "SELECT * FROM users WHERE id='$id'";

            $query2 = $conn->query($query);
          

            if ($query2 ->num_rows > 0) {
                  while ($red = $query2->fetch_assoc()) {
                    $name = $red['name'];
                        echo "<h2>Welcome $name</h2>";
                  }
            }
      ?>
                          </div>
                                         <div class="col">
      
                                          </div>
     </div>
           






            </div>
<div class="container">
    <div class="row">
         <div class="col">
             <?php
        $user_info_query = $conn->query($query);
        $user_info = mysqli_fetch_assoc($user_info_query);


        $user_id = $user_info['id'];
        $user_admin = $user_info["admin"];
                if($user_admin == 1) {
                    echo "<h4>Vi ste administrator</h4>";
                    echo "<a href='admin.php'<h4>Admin panel</h4></a>";
                    
                   
                    $all_users_query = $conn->query("SELECT * FROM users");}

                    ?>
         </div>
    </div>
    <div class="row">
        <div class="col"><h4>prazan1</h4></div>
         
    </div>
    <div class="row">
         <div class="col"><h4>Prazan2</h4></div>
         
    </div>
</div>
<?php 
				} else {
					?>
					<div class="container">
					<div class="row">
					 <div class="col-6 offset-3">
					 	<?php
					 		echo "<h1>Login or Register</h1>";?>
					 </div>
					</div>
					</div>
			<?php } ?>
<?php require "partials/footer.php" ?>