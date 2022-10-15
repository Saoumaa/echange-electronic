<?php
session_start();
       
        $jcard = $_POST['jcard'];
        $zip_adress = $_POST['zip_adress'];
        $city = $_POST['city'];
        $mpd1 = $_POST['mdp1'] ;
        $mpd2 = $_POST['mdp2']; 
        $identity_numbers = $_POST['identity_numbers1'];
        $expiration_year = $_POST['expiration_year'];
        $society_bill = $_POST['society_bill'];
        $bill_amount = $_POST['bill_amount'];
        $identity_card = $_POST['identity_card'];
    

        if($mpd1 == $mpd2){
          $pwd = password_hash($mpd1 , PASSWORD_DEFAULT); // hashage du mots de passe recuperé avec la methode hash de php 

          $updateusers =  $bdd->prepare('UPDATE users set pass = ? where id = ?');
          $updateusers->execute(array($pwd,$_SESSION['id']));

          $updatebtoc = $bdd->prepare('UPDATE btoc set zip_adress = ?, city = ? , jcard = ?, identity_card = ?, 
          identity_numbers = ?, expiration_year = ?, society_bill = ?, bill_amount = ? where users_id =  ?');

        $updatebtoc->execute(array($zip_adress,$city,$jcard,$identity_card, $identity_numbers, $expiration_year,
          $society_bill,$bill_amount, $_SESSION['id']));

          echo "ajouté";
          header('location: formlogin.php');

        }else{
            echo "les mots de passe ne sont pas identiques ";
        }  
} 
        ?>
 