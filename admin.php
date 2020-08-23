<?php session_start(); ?>
<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>
<?php require "connection.php" ?>

<?php 
                if (isset($_SESSION['id'])) {
                   $id = $_SESSION['id'];


            

            $zahtjev = $conn->query("SELECT * FROM users WHERE id='$id'");

            if ($zahtjev ->num_rows > 0) {
                  while ($red = $zahtjev->fetch_assoc()) {
                    $name = $red['name'];
                       
                  }
            }



                    ?>


<div class="container">
    <div class="row">
        <div class="col">
            <?php 
          echo "<h2>Welcome $name</h2>";
      ?>
        </div>
        <div class="col">prostor2</div>
        <div class="col">prostor3</div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="listaKorisnika.php">Imena svih registrovanih korisnika</a>
        </div>
        <div class="col">prostor5</div>
        <div class="col">prostor6</div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            
            <?php 
                echo "<a href='dodaj.view.php'<h4>Dodaj korisnika</h4></a>";
            ?>

        </div>
        <div class="col">prostor8</div>
        <div class="col">prostor9</div>
    </div>
</div>
	



    <?php

}

        else {
            
            header('Location: index.php');
        }
$conn->close();
    ?>