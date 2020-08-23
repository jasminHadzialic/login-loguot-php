
<?php session_start(); ?>

<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>

<?php require "connection.php" ?>
<head>
<style>
table, th, td {
    border: 3px solid black;
    text-align: center;
}
</style>
</head>

<?php 
                        if (isset($_SESSION['id'])) {
                              ?>

<div class="container">
      <div class="row">
    <div class="col">
     <h4>Profil korisnika</h4>
      <?php 
      $id = $_SESSION['id'];

            
            $zahtjev = $conn->query("SELECT * FROM users WHERE id='$id'");
           
            if ($zahtjev ->num_rows > 0) {
                  echo 
                  "<table>
                  <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Last name</th>
                  <th>email</th>
                  <th>Year</th>
                  <th>Password</th>
                  </tr>";
                  while ($red = $zahtjev->fetch_assoc()) {
                          echo "<tr>
                          <td>".$red["id"]. "</td>
                          <td>".$red["name"]."</td>
                          <td>".$red["lastName"]."</td>
                          <td>".$red["email"]."</td>
                          <td>".$red["dyear"]."</td>
                          <td>".$red["password"]."</td>



                          </tr>";
                      /*  $id =$red['id'];
                        $name = $red['name'];
                        $lastName = $red['lastName'];
                        $email = $red['email'];
                        $dyear = $red['dyear'];
                        $password = $red['password'];


                        echo "id korisnika: ".$id."<br>".
                        "ime korisnika: ".$name."<br>".
                        "prezime korisnika: ".$lastName."<br>".
                        "email korisnika: ".$email."<br>".
                        "godina i datum rodjenja ".$dyear."<br>".
                        "sifra korisnika:".$password."<br>";*/
                  }  echo "</table>";
            } else {
    echo "0 results";
}

   }


      ?>
    </div>
    
    
  </div>
</div>

                       
                              
                              <div class="container">
                              <div class="row">
                               <div class="col-6 offset-3">
                                    
                               </div>
                              </div>
                              </div>
                        
                     
            
      






<?php require "partials/footer.php"; 
$conn->close();
?>