<?php

require "bat/phpmailer/PHPMailerAutoload.php";
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=fineblock;',
'root','');

if(isset($_POST['valider'])){
    
    if(!empty($_POST['email'])){
        $cle = rand(100000, 9000000);
        $email = $_POST['email'];   
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $code_phone = $_POST['code_phone'];
        $phone = $_POST['phone'];
        $whitebook = $_POST['whitebook'];

        $insereUser = $bdd->prepare('INSERT INTO users(email, code ,confirme,pass)
        values(? , ? ,?,?)');
        
        $insereUser->execute(array($email, $cle , 0,NULL));
       
        $recupUser = $bdd->prepare('SELECT  * FROM users 
        where email = ?');
        $recupUser->execute(array($email));
        if($recupUser->rowCount() > 0){
            $userInfos = $recupUser->fetch();
            $_SESSION['id'] = $userInfos['id'];


            $btocInser = $bdd->prepare('INSERT INTO btoc(first_name, 
            last_name, email, code_phone, phone, whitebook, users_id )
            values(? , ? ,?, ? ,?, ?, ?)'); 
        
            $btocInser ->execute(array($nom,$prenom,$email,$code_phone, 
            $phone,$whitebook,$_SESSION['id']));

            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail';
            $mail->SMTPAuth = true;
            $mail->Username = 'adekambirachad@gmail.com';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->Password = 'JaiSuiviUnNageurPalme666';

            $mail->setFrom('adekambirachad@gmail.com');
            $mail->addAddress($email);
            $mail->addReplyTo('infoto');
            $mail->isHTML(true);


            $mail->Subject = 'Email de confirmation  ';

            $mail->Body = 'http://localhost:80/po/site/verif.php?id='.$_SESSION['id'].'&code='.$cle;

        if(!$mail->send()){
            echo 'message not send ';
            echo 'mailer error' . $mail->ErrorInfo;
            } else {
                echo 'message sent';
            }
        }
    }else{
        echo "veuillez entre votre mail svp ";
    }   

    header('location: formbtoc2.php?users_id=?');
    
}
?>