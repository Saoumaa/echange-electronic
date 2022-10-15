<!DOCTYPE html>
<html class="wide wow-animation" lang="fr">

<head>
    <!-- Site Title-->
    <title>Préinscription BtoC - Fineblock</title>

    <?php include ("meta.php"); ?>
</head>

<body>
    <div class="page">
        
        <?php include("header.php"); ?>

        <div class="content">
        <form class="form" id="formbtobc1" method="POST" action="btoc1.php">
            <h2 class="form__title">
              Pré-inscription BtoC (Particuliers)
            </h2> 
            <label for="first-name" id="private-first-name"> Prénom:
                <input type="text" class="first-name" name="prenom" 
                id="first_name" required>
            </label> <br>

            <label for="last-name"> Nom:
                <input type="text"  name="nom" class="" id="last_name" required>
            </label> <br>

            <label  class="email"> Email:
                <input type="email" name="email" id="email" required>
            </label> <br>

            <label for="">
                      <p>Tél mobile +<input type="number"
                      name="code_phone"class="code_phone" minlength="1" 
                      maxlength="3" required placeholder="33"> 
                    <input type="number" class="phone" name="phone" required 
                    placeholder="06xxxxxxxx"> </p>
                    </label>
                      <br>

            <label for="">
            <p> Oui je souhaite recevoir le livre blanc  
                <input type="checkbox" name="whitebook" id="whitebook" value="1"></p>
            </label><br>

            <label for="">
            <p style="color: red;"> J'abandonne mon droit de rétraction de 14 jours
            , pour profiter immédiatement de mon adhésion chez FINEBLOCK
                <input type="checkbox" name="whitebook" id="whitebook" value="1"></p>
            </label><br>

            <label for="" class="cgv_click">
                <p>J'accepte les <a href="cgv.php">CGV</a> 
                <input type="checkbox" name="cgv_click_checkbox" value="1"
                id="cgv_click_checkbox" required="required"></p>
              </label><br>

            <button type="submit" name="valider" class="form__button" 
            id="formbtoc1_submit">valider</button>
        </form>
        </div>
        
        <?php include("footer.php"); ?>
    </div>

    <script src="public/js/script.js"></script>
</body>