<?php
/*connection à la base de données*/
$bdd = new PDO('mysql:host=localhost;dbname=fineblock;',
'root','');

$host = "localhost";
$username = "root";
$password ="";
$database ="fineblock";


  /*vérifier que le formulaire est soumis*/
if(isset($_POST['valider'])){

  /*définition des variables*/
  $date_of_registration = $_POST['date_of_registration'];
  $quantity = $_POST['quantity'];
  $keeper = $_POST['keeper'];
  $identity_card = $_POST['identity_card'];
  $card_numbers = $_POST['card_numbers'];
  $expiration_date = $_POST['expiration_date'];
  $keeper_status = $_POST['keeper_status'];

/*on compte le nombre de lignes pour générer une nouvelle
clé incrémentée à chaque nouvelle ligne*/
for ($nombre_de_lignes = 1; $nombre_de_lignes <= $quantity; $nombre_de_lignes++)
{ 
  $conn = new mysqli($host, $username, $password, $database);

  $sql = "SELECT * FROM tfbk";

  if ($result=mysqli_query($conn,$sql)) {
      $rowcount=mysqli_num_rows($result);
  }


  /*on génère la nouvelle clé ""txt" */
  $total_quantity = ($rowcount +1);
  $txt = $total_quantity."TFBK".$card_numbers.$identity_card.$expiration_date;
  
  /*on prépare la requete*/
  $inseretfbk = $bdd->prepare('INSERT INTO tfbk 
  (date_of_registration, quantity, keeper, keeper_status, identity_card,
  card_numbers , expiration_date, tfbk_key)
         values(? , ? ,?,?, ?, ?, ?, ?)');
    
  /*on exécute la requete, c'est là que ca prend su temps*/
  $inseretfbk->execute(array($date_of_registration, $quantity,
  $keeper, $keeper_status, $identity_card, $card_numbers, $expiration_date, $txt));
}
header('Location: formaddtfbk.php');
}
?>