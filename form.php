<!DOCTYPE html>

  <head>
    <title>Nos offres irrésitibles-Fineblock</title>

    <?php include ("meta.php"); ?>
  </head>

  <body>
    <div class="page">

    <?php include("header.php"); ?>

        <div class="content">
          <h1 class="content__title">
            Voir nos offres irrésitibles
          </h1>

          <form class="form" id="form1">   

              <h2 class="form__title">
                Selection de votre statut
              </h2>

              <label for="client"> Vous êtes:
                <select name="client" id="client" require=required>
                  <option value="">Selectionner</option>
                  <option value="btoc">Particulier</option>
                  <option value="btob">Professionel</option>
                </select>
              </label> <br>
            
              <button type="submit" class="form__button" id="form_submit" 
              name="valider">valider</button>
              <br>
            </div>
          </form>
        </div>

        <?php include("footer.php"); ?>
    </div>

   <script src="public/js/script.js"></script>
  </body>
</html>