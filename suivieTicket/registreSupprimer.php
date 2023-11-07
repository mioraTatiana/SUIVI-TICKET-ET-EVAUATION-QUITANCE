<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registre create update</title>
</head>
<?php
        include '../Back/connexionBase.php';
?>

<body>
   <div>
        <div>
            <img src="" alt="ajouter">
            <span>Registre</span>
        </div>
        <form action="">
            <label for="numFiche">N°Fiche</label><br>
            <input type="text" name="numFiche" id=""><br><br>

            <label for="idMois">Mois</label><br>
            <select name="idMois" id="">
<?php
            $query=mysqli_query($con,'SELECT * FROM mois');
            while($data=mysqli_fetch_array($query)){
?>
                <option value="<?=$data['idMois']?>"><?=$data['Mois']?></option>
<?php
            }
?>                

</select><br><br>

            <label for="annee">Annee</label><br>
            <input type="number" name="annee" id=""><br><br>

            <label for="dateDePaiement">date De paiement</label><br>
            <input type="date" name="dateDePaiement" id=""><br><br>

            <label for="tarif">Tarif</label><br>
            <input type="number" name="tarif" id=""><br><br>

            <label for="numPavillon">N°pavillon</label><br>
            <select name="numPavillon" id="">
<?php
            $query2=mysqli_query($con,'SELECT numPavillon FROM pavillon');
            while($data=mysqli_fetch_array($query2)){
?>
                <option value="<?=$data['numPavillon']?>"><?=$data['numPavillon']?></option>
<?php
        }
?>                
            </select><br><br>

            <label for="CIN">Vendeur</label><br>
            <select name="CIN" id="">
<?php   
            $query3=mysqli_query($con,'SELECT * FROM vendeur');
            while($data=mysqli_fetch_array($query3)){
?>
                 <option value="<?= $data['CIN']?>"><?= $data['Nom']?> <?= $data['Prenom']?> </option>
<?php
            }
?>
            </select><br><br>

            <label for="numQuitance">N°Quitance</label><br>
            <input type="text" name="numQuitance" id="">

            <img src="" alt="retour">
            <button><a href="../Back/registre.php">Ajouter</a></button>

            

        </form>
   </div> 
</body>
</html>