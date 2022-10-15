<!DOCTYPE html>

  <head>
    <title>Inscription BtoB - Fineblock</title>

    
    <?php include ("meta.php"); ?>
  </head>

  <body>
    <div class="page">
      
      <?php include("header.php"); ?>

        <div class="content">
        <form class="form" id="formbtob2" method="POST" 
        action="btob2.php" >
            <h2 class="form__title">
                Inscription BtoB (Professionels)
              </h1> <br>
               
                  <label for="shop-qty"> Nbre de magasins:
                    <input type="number" name="shop_quantity" 
                    class="qty" id="shopqty">
                </label>
            <br>
                <label  class="zip-adress"> Adresse postale principale:
                    <input type="text" name="zip_adress" id="zip_adress" class="zip_adress">
                </label>
                 <br>
            
                <label for="city" class=""> Ville:
                    <input type="text" class="city_input" name="city" 
                    id="city" required>
                </label> <br>
            
                <label for="post" > Code postal:
                    <input type="number" name="zip_code" class="zip_code" 
                    id="zip_code" required>
                </label> <br>

                <label for="">
                      <p>Tél fixe +<input type="number"
                      name="code_office_phone"class="code_phone" minlength="1" 
                      maxlength="3" required placeholder="33"> 
                    <input type="number" class="phone" name="office_phone" required 
                    placeholder="06xxxxxxxx"> </p>
                    </label>
                      <br>

              <label for="filiere"> Filière d'activité:
                <select name="filiere" id="filiere" reqired>
                  <option value="">Selectionner</option>
                  <option value="commerce">Commerce</option>
                  <option value="immobilier">Immobilier</option>
                  <option value="association">Association</option>
                  <option value="creation">En création</option>
                </select>
              </label> <br>

              <label for="">
                <p> Facture:</p>
                <input type="file" required>
              </label> <br>

              <label>
                <p>Montant de la facture (min 500€)</p>
                <input type="number" class="qty" min=500 required >
              </label>

              <div class="line"></div> <br>

              <label for="mdp"> Veuillez définir un mot de passe:
                <input type="password" name="mdp1" id="pwd1" required>
              </label> <br>

              <label for=""> Veuillez confirmer le mot de passe:
                <input type="password" name="mdp2" id="pwd2" required>
              </label> <br> <br>
       
              <button class="form__button" 
              type="submit" name="valider" id="formbtob2_submit">
              valider
              </button> 
        </form>
        </div>

      
      <?php include("footer.php"); ?>
    </div>
    
    <script src="public/js/script.js"> </script>
  </body>
</html>