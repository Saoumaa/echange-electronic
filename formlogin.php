<!DOCTYPE html>

  <head>
    <title>Connexion - Fineblock</title>
    
    <?php include ("meta.php"); ?>
  </head>

  <body>
    <div class="page">

      <?php include("header.php"); ?>

     <div class="content">
        <h1 class="content__title">
          Connexion à votre espace personnel
        </h1>

       <form class=" form" action="" method="" >
          <h2 class="form__title">
            Informations d'accès
          </h2>
        <label for="login" class="login">  Email/Nom d'utilisateur:
          <input type="text" name="email" id="login">
        </label> <br>

        <label for="login" class="login">  Mot de passe:
          <input type="password" name="pass" id="pwd">
        </label> <br>

       
        <button type="submit" name="valider" 
        class="form__button" id="submit_login"> 
        Me connecter</button><br>

        <a href="form.php" class="registration-link">
          Pas encore de compte ? inscrivez vous 
        </a> <br>

        <a href="lostpasswd.php" 
        class="lostpasswd_btn">Mot de passe oublié ?</a>
        
      </form>
     </div>
      <!-- Page Footer-->
      <?php include("footer.php"); ?>
    </div>

    <script src="public/js/script.js"></script>
    <script src="public/js/login.js"></script>
  </body>
</html>
