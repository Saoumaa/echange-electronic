<!DOCTYPE html>
<html class="wide wow-animation" lang="fr">

  <head>
    <title>Préinscription BtoB - Fineblock</title>

    <?php include ("meta.php"); ?>
  </head>
  
  <body>
  
    <div class="page">

    <?php include("header.php"); ?>

        <div class="content">

         
        <form class="form" id="formbtob1" action="btob1.php" method="POST">
            <h2 class="form__title">
            Pré-inscription BtoB (Professionels)
              </h2>
                <label for="society_name">
                    <p> Enseigne:</p>
                    <input type="text" name="society_name" 
                    id="society_name" required>
                </label> <br>
                
                <label>
                  <p> Catégorie:</p>
                  <select name="category" id="" required>              
                  <option value="">Selectionner</option>
                  <option value="entreprise_individuelle">Entreprise individuelle</option>
                  <option value="entreprise_cotee">Entreprise cotée</option>
                  <option value="tpe">TPE</option>
                  <option value="pme">PME</option>
                  <option value="pmi">PMI</option>
                  <option value="eti">ETI</option>
                  </select>
              </label>
                 <br>
            
                <label > 
                  <p>Surface du magasin en m2: </p>
                    <input type="number" name="society_size" 
                    class="qty" id="society_size" required>
                </label> <br>
            
                <label for="" class="ceo"> 
                  <p> Dirigeant:</p>
                    <input type="text" name="ceo" id="ceo" 
                    class="ceo" required>
                </label>  <br>
            
                <label for="email" class="email"> 
                  <p>Email:</p>
                    <input type="email" name="email" 
                    id="emailbtob" required> 
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
                    </label>
                      <br>
                    
                      <label for="">Oui je souhaite participer au concours
                <input type="checkbox" name="game" id="game" 
                value="1">
              
            </label><br>

                  <label for="">
            <p> Oui je souhaite recevoir le livre blanc  </p>
                <input type="checkbox" name="whitebook" id="whitebook" value="1"></p>
            </label><br>

            <label for="" class="cgv_click">
                <p>J'accepte les <a href="cgv.php">CGV</a> 
                <input type="checkbox" name="cgv_click_checkbox" value="1"
                id="cgv_click_checkbox" required="required"></p>
              </label><br>
            
                <button type="submit" class="form__button" 
                name="valider" 
                id="formbtob1_submit">valider</button>
                
        </form>
        </div>

        <?php include("footer.php"); ?>
    </div>

    <script src="public/js/script.js"></script> 
  </body>