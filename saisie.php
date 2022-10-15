<?php
   include("connexion.inc.php");

   if(isset($_POST["valider"])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $DatNais=$_POST["dnais"];
    $ville=$_POST["ville"];
    $sexe=$_POST["sexe"];
    $filiere=$_POST["filiere"];
    $query="insert into candidat values('0','".$nom."','".$prenom."','".$DatNais."','".$ville."','".$sexe."','".$filiere."')";
   
    if($nom=="" || $prenom=="" || $filiere==""){
        echo "Nom, prenom et filiere sont obligatoire";
    }else{
        mysqli_query($cnx,$query);
        echo"enregistrement  effectuer";
    }
    
   
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>saisie</title>
</head>

<body>
    <fieldset>
        <legend>Vos coordonnées</legend>
        <fieldset>
            <form method="POST" action="saisie.php">
                <label>Nom:</label>
                <input type="text" name="nom"><br>
                <label> Prénom: </label>
                <input type="text" name="prenom"><br>
                <label>Date de naissance:</label>
                <input type="date" name="dnais"><br>
                <label>Ville:</label>
                <input type="text" name="ville"><br>
                <label>Sexe:</label>
                <input type="text" name="sexe"> <br>
                <label>Filiere:</label>
                <select name="filiere"> 
                    <option value=""></option>
                    <option value="SIL">SIL</option>
                    <option value="AGR">AGR</option>
                    <option value="RIT">RIT</option>
                    <option value="AGRO">AGRO</option>
				</select> <br>
                <input type="reset" value="Effacer" name="annuler">
                <input type="submit" value="Enregistrer" name="valider">
            </form>
        </fieldset>
    </fieldset>
</body>

</html>