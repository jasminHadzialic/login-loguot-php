
<?php session_start(); ?>

<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>

<?php require "connection.php" ?>
<head>
<style>
table, th, td {
    border: 3px solid black;
    text-align: left;
}
</style>
</head>

<?php 
        if (isset($_SESSION['id'])) {
          ?>

<div class="container">
  <div class="row">
    <div class="col">
     <h4>Lista registrovani korisnika </h4></a> 
         <?php 
      $id = $_SESSION['id'];
      $zahtjev = $conn->query("SELECT * FROM users");
     
      $zahtjev2 = $conn->query("SELECT * FROM users WHERE id='$id'");

            if ($zahtjev->num_rows > 0) {
    echo "<table><tr><th>Ime</th></tr>";
    // output data of each row
    while($row = $zahtjev->fetch_assoc()) {
      $name = $row['name'];
      $admin = $row['admin'];
        echo "<tr><td>" ?><a href='detalji.php?id=<?php echo $row['id'];?>'>
<?php if ($admin == 0 ) {echo $name;} else {echo $name."</a> je admin";}?>
<?php "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

            

              } 
   else {
          ?>
     </div>
     </div>
     </div>

          <div class="container">
          <div class="row">
           <div class="col-6 offset-3">
            <?php
              echo "<h1>Login or Register</h1>";?>
           </div>
          </div>
          </div>
      <?php } ?>
<?php require "partials/footer.php";
$conn->close(); ?>
  

