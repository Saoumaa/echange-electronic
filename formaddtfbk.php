<!DOCTYPE html>
  <head>
    <title>Ajout manuel de TFBK</title>

    <?php include ("meta.php"); ?>
  </head>
  <body>
    <div class="page">

    <?php include("header.php"); ?>

        <div class="content">
        <h1 class="content__title">
                Espace personnel administrateur
            </h1>


          <form class="form" method="POST"action="addtfbk.php" >
          
          <h2 class="form__title">
            Formulaire d'ajout de TFBK
          </h2> <br>
          
          <label for=""> 
                <p>Date de souscription:</p>
              <input type="date" name="date_of_registration" 
              id="date_of_registration" required>
          </label> <br>

          <label for="qty"> <p>Quantité:</p>
            <input type="number" name="quantity" id="qty" 
            class="qty" required>
          </label> <br>

          <label for=""> 
            <p>Propriétaire: </p>
              <input type="text" id="keeper" name="keeper" class="keeper" required > 
          </label> <br>

          <label for="">
            <p> Statut du propriétaire:</p>
            <select name="keeper_status" id="" required>
                <option value="">
                  Selectionner
                </option>

                <option value="btob">
                    Professionnel
                </option>

                <option value="btoc">
                  Particulier
                </option>

                <option value="jeu">
                  Jeu-Concours
                </option>
            </select>
          </label> <br>

          <label for="card"> Pièce utilisée:
            <select name="identity_card" id="identity_card" required> 
              <option value="">selectionner</option>
              <option value="P">passeport</option>
              <option value="CI">carte d'identité</option>
              <option value="KBIS">KBI</option>
              <option value="CO">CO</option>
            </select> 
          </label><br>

          <label for=""> 
              <p> 6 caractères de la pièce: </p> 
              <input type="text" id="card_numbers" name="card_numbers" 
              class="card_numbers" minlength="6" max-length="6"  required>
          </label><br>
          
          <label for="expiration_date">
            <p> Année d'expiration de la pièce:</p>
            <input type="number" id="expiration_date" required
            class="expiration_date" 
            name="expiration_date" >
          </label> <br>

            <button type="submit" name="valider" 
            class="form__button">Ajouter</button>
        </form>
        </div>
    </div>
  </body>
</html>