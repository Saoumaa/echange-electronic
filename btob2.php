<?php 

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=fineblock;','root','');
if(isset($_POST['valider'])){
   
       
        $shop_quantity = $_POST['shop_quantity'];
        $zip_adress = $_POST['zip_adress'];
        $city = $_POST['city'];
        $zip_code =  $_POST['zip_code'];
        $code_office_phone = $_POST['code_office_phone'];
        $office_phone = $_POST['office_phone'];
        $filiere = $_POST['filiere']; 

        
        $mdp1 = $_POST['mdp1'] ;
        $mdp2 = $_POST['mdp2'];
        

        if($mdp1 == $mpd2){
          $pwd = password_hash($mdp1 , PASSWORD_DEFAULT); 
          // hashage du mots de passe recuperé avec la methode hash de php 

          $updateusers =  $bdd->prepare('UPDATE users set pass = ? 
          where id = ?');
          $updateusers->execute(array($pwd,$_SESSION['id']));

          $updatebtob = $bdd->prepare('UPDATE btob set shop_quantity = ? , 
          zip_adress = ? ,  city = ? , zip_code, code_office_phone, 
          office_phone = ? , filiere = ? where users_id =  ?');

        $updatebtob->execute(array($shop_quantity,$zip_adress,$city,$zip_code,
        $code_office_phone, $office_phone, $filiere ,$_SESSION['id']));
        }else{
            echo "les mots de passe ne sont pas identiques ";
        }
        header('location: formlogin.php');
}
        ?>