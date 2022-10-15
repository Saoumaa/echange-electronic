<!DOCTYPE html>
<html class="wide wow-animation" lang="fr">
  <head>
    <title>Formulaire Livre blanc-Fineblock</title>

    <?php include ("meta.php"); ?>
  </head>
  
  <body>
    <div class="page">

    <?php include("header.php"); ?>

        <div class="content">
        <form class="form" id="form1">
            <h1 class="form__title">
            Formulaire d'achat livre blanc
              </h1> <br>

            <label for="">
              <p> Nom:</p>
              <input type="text" class="last_name" name="last_name" id="last_name">
            </label> <br>

            <label for="">
              <p> Prenom:</p>
              <input type="text" class="first_name" name="first_name" id="first_name" >
            </label> <br>

            <label for="">
              <p> Email:</p>
              <input type="email" class="email" name="email" id="email">
            </label> <br>

            <label for="">
                      <p>Mobile +<input type="number"
                      name="code_phone"class="code_phone" 
                      minlength="1" 
                      maxlength="3" required placeholder="33"> 

                    <input type="number" class="phone" 
                    name="phone" required 
                    placeholder="06xxxxxxxx"> 
                  </p>
                    </label> <br>

            <label for="">
              <p>Je suis:</p>
              <select name="" id="">
                <option value="selectionner">Selectionner</option>
                <option value="particulier">Particulier</option>
                <option value="professionnel">professionnel</option>
              </select>
            </label> <br> <br>  

            <button type="submit" class="form__button" 
            name="valider">valider</button>
        </form>
        </div>

        <?php include("footer.php"); ?>
    </div>
    
   
   <script src="public/js/script.js"></script>
  </body>
</html>