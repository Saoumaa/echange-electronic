<?php
$bdd = new PDO('mysql:host=localhost;dbname=promarket;',
'root','');

$host = "localhost";
$username = "root";
$password ="";
$database ="promarket";


  
if(isset($_POST['valider'])){
  $date_of_registration = $_POST['date_of_registration'];
  $quantity = $_POST['quantity'];
  $keeper = $_POST['keeper'];
  $identity_card = $_POST['identity_card'];
  $card_numbers = $_POST['card_numbers'];
  $expiration_date = $_POST['expiration_date'];


for ($nombre_de_lignes = 1; $nombre_de_lignes <= $quantity; $nombre_de_lignes++)
{ 
  $conn = new mysqli($host, $username, $password, $database);

  $sql = "SELECT * FROM tfbk";

  if ($result=mysqli_query($conn,$sql)) {
      $rowcount=mysqli_num_rows($result);
  }

  $value = ($rowcount +1);
  $txt = $value."TFBK".$card_numbers.$identity_card.$expiration_date;
  

  $inseretfbk = $bdd->prepare('INSERT INTO tfbk 
  (date_of_registration, quantity, keeper, identity_card,
  card_numbers , expiration_date, tfbk_key)
         values(? , ? ,?,?, ?, ?, ?)');
    
  $inseretfbk->execute(array($date_of_registration, $quantity,
  $keeper, $identity_card, $card_numbers, $expiration_date, $txt));
}
}
?>



<!DOCTYPE html>
<html class="wide wow-animation" lang="fr">
  <head>
    <!-- Site Title-->
    <title>Formulaire de modification de TFBK - Fineblock</title>
    
    <?php include ("meta.php"); ?>
  </head>
  <body>
  <?php include ("preloader.php"); ?>
    <div class="page">
      <!-- Page Header-->
      <?php include("header.php"); ?>

      <div class="content">
          <h1 class="content_title">
                Espace personnel administrateur
            </h1> 

        <form action="" method="POST" class="form_layout">
            <h2 class="form_layout_title">
                Transfert manuel de TFBK
            </h2> <br>
            
            <label for="">
                <p>Quantité à tranférer</p>
                <input type="number">
            </label> <br>

            <label for="">
                <p>Ancien propriétaire</p>
                <input type="text">
            </label><br>

            <label for="">
                <p>Nouveau propriétaire</p>
                <input type="number">
            </label> <br>

            <label for="">
                <p>6 caractères de la pièce</p>
                <input type="number">
            </label> <br>

            <label for="">
                <p>date d'expiration de la pièce</p>
            </label> <br>
            
            <button class="form_layout_button">
                Transférer
            </button>

        </form>
      
        <ul class=content_logout_options>
          <li><a href="dashboardadmin.php">Retour à l'espace personnel</a></li>
          <li><a href="logout.php">Déconnexion</a></li>
        </ul>
      </div>

      <?php include("footer.php"); ?>
    </div>
    
    <script src="js/core.min.js"> </script>
    <script src="js/script.js"></script>
    <script src="https://widgets.bitcoin.com/widget.js"></script>
    <!-- coded by Himic-->
  </body>
</html>