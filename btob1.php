<?php
require "bat/phpmailer/PHPMailerAutoload.php";
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=fineblock',
'root','');

if(isset($_POST['valider'])){
    if(!empty($_POST['email'])){
        $cle = rand(100000, 9000000);
        $email = $_POST['email'];
       
        $society_name = $_POST['society_name'];
        $society_size = $_POST['society_size'];
        $category = $_POST['category'];
        $ceo = $_POST['ceo'];
        $code_phone =  $_POST['code_phone'];
        $phone = $_POST['phone'];
        $game = $_POST['game'];
        $whitebook = $_POST['whitebook'];

        $insereUser = $bdd->prepare('INSERT INTO 
        users(email, 
        code ,confirme,pass)values(? , ? ,?,?)');
        $insereUser->execute(array($email, $cle , 0,NULL));
       
        $recupUser = $bdd->prepare('SELECT  * FROM 
        users where email = ?');
        
        $recupUser->execute(array($email));
        if($recupUser->rowCount() > 0){
            $userInfos = $recupUser->fetch();
            $_SESSION['id'] = $userInfos['id'];

            $btobInser = $bdd->prepare('INSERT INTO btob( society_name, 
            category, society_size, ceo, email, code_phone, phone, game, whitebook,
            users_id )values(? , ? ,?, ? ,? ,? ,? ,? ,? ,?)'); 
        
            $btobInser ->execute(array($society_name, $category,
            $society_size,$ceo,$email,
            $code_phone, $phone, $game, $whitebook,$_SESSION['id']));        

            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'adekambirachad@gmail.com';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->Password = 'JaiSuiviUnNageurPalme666';

            $mail->setFrom('adekambirachad@gmail.com');
            $mail->addAddress($email);
            $mail->addReplyTo('infoto');
            $mail->isHTML(true);


            $mail->Subject = 'Email de confirmation Bienvenue mr/mme ? chez Fineblock, merci de cliquer sur ce lien afin de finaliser votre adhésion: 
            signé Service client Fineblock +0690402891 ';

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
    header('location: formbtob2.php?users_id=?');
}

?>
