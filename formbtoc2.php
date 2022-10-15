<!DOCTYPE html> 
  <head>
    <title>Inscription BtoC-Fineblock</title>

    <?php include ("meta.php"); ?>  
  </head>
  <body>
    
    <div class="page">
    <?php include("header.php"); ?>
    
        <div class="content">
        <form class="form" id="form" action="btoc2.php"
        method="POST">
            <h2 class="form__title">
              Inscription BtoC (Particuliers)
            </h2>

                <label for="zip-adress"> Adresse postale:
                    <input type="number" name="zip_adress" 
                    required id="zip_adress">
                </label> <br>

                <label  class="text"> Ville:
                    <input type="text" name="city" id="city" required>
                </label> <br>


                <label> Justificatif utilisé:
            <select name="jcard" required> 
              <option value="">selectionner</option>
              <option value="passeport">Passeport</option>
              <option value="Carte d'identite">Carte d'identité</option>
              <option value="kbi">KBI</option>
            </select> 
          </label><br>

                <label> Images du justificatif utilisé:<br>
                    <input type="file" accept="image/*,.pdf" required name="identity_card" id="">
                </label> <br>

                <label for=""> Numéro du Justificatif: 
              <input type="number"  id="jnumbers1"  required name="identity_numbers1">
          </label><br>

          <label for=""> Veuillez confirmer le numéro du justificatif
            <input type="number" id="jnumbers2" name="identity_numbers2" required >
          </label>

          <label for="expiration_date"> Année d'expiration de la pièce:
            <input type="number" id="expiration_date" name="expiration_year" 
            required lenght="4">
          </label> <br>

                <label for="society-bill"> Copie de la facture:
                  <input type="file" name="society_bill" id="society_bill" required>
                </label> <br>
  
                <label for="society_bill-amount"> Justificatif d'achat:
                  <input type="number" name="bill_amount" class="bill_amount_input" 
                  id="bill_amount" required min="50"> euros (50 euros minimum)
                </label> <br>
               

                <div class="line"></div> <br>
                
              <label for="mdp"> Veuillez définir un mot de passe:
                <input type="password" name="mdp1" id="pwd1" required>
              </label> <br>

              <label for="pwd"> Veuillez confirmer le mot de passe:
                <input type="password" name="mdp2" id="pwd2"required>
              </label> <br>

              <button class="form__button" type="submit"
               id="formbtoc2_submit" name="valider">
               vak
        </form>
        </div>

        <?php include("footer.php"); ?>
    </div>

    <script src="public/js/script.js"></script>
  </body>
</html>