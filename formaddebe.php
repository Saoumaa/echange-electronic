<!DOCTYPE html>
  <head>
    <!-- Site Title-->
    <title>Ajout de l'EBE  - Fineblock</title>

    <?php include ("meta.php"); ?>
  </head>
  
  <body>
  
    <div class="page">

    <?php include("header.php"); ?>
      <div class="content">
        <h1 class="content__title">
          Espace personnel Professionnel
        </h1>

        <form action="" class="form">
            <h2 class="form__title">Formulaire d'ajout EBE (en %)</h2>
            <label for="">
                <p>Montant de l'EBE</p>
                <input type="number">
            </label> 
            <br>

            <button type="submit" name="valider" 
              class="form__button" id="formaddebe_submit">
              valider
          </button>
        </form>

        <ul class="content_logout_options">
                <li><a href="dashboardbtob.php">Retour à l'espace personnel</a></li>
                <li><a href="index.php">Déconnexion</a></li>
            </ul>

</div>
      </div>
        

        <?php include("footer.php"); ?>
    </div>
    
    <script src="public/js/script.js"> </script>
  </body>
</html>