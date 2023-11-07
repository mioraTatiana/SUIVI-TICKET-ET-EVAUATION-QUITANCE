<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pavillon Create Modifier</title>
<?php
     include '../Back/connexionBase.php';
?>

</head>
<body>
    <!-- Create -->
    <iframe src="header.html" frameborder="0"></iframe>
    <iframe src="side_bar.html" frameborder="0"></iframe>

    <span>
        Veuillez insérer les informations à propros de votre pavillon
    </span>
    <div>
        <form action="">
            <label for="numPavillon">N°pavillon</label><br>
            <input type="text" name="numPavillon" id=""><br><br>

            <label for="Localite">Localite</label><br>
            <select name="Localite" id="">
<?php
            $req=mysqli_query($con,'SELECT * FROM localite');
            while ($data=mysqli_fetch_array($req)){
?>
                <option value="<?=$data['idLocalite'] ?>"><?=$data['Localite'] ?></option>
<?php                
            }
?>
                
            </select><br><br>

            <label for="PlaceDuMarche">Place Du Marche</label><br>
            <select name="PlaceDuMarche" id="">
<?php
                $requette=mysqli_query($con,'SELECT * FROM marche');
                while($data=mysqli_fetch_array($requette)){
?>
                <option value="<?=$data['idMarche']?>"><?=$data['PlaceDuMarche'] ?></option>
<?php
                }      
?>
                
            </select><br><br>
            
            <label for="IdProduits">Produits</label><br>
            <select name="IdProduits" id="">
<?php
           
            $query=mysqli_query($con,'SELECT * FROM produit');
            
            while ($data=mysqli_fetch_array($query)) {
?>
             <option value="<?=$data['IdProduit'] ?>"> <?=$data['NomDuProduits']?></option>
<?php                
            }

?>               
            </select><br><br>
            
            <label for="TypeDePavillon">Type De Pavillon</label><br>
            <input type="text" name="TypeDePavillon" id=""><br><br>

            <label for="numAutorisation">N°Autorisation</label><br>
            <input type="text" name="numAutorisation" id=""><br><br>

            <label for="DateDautorisation">Date d' autorisation</label><br>
            <input type="text" name="DateDautorisation" id=""><br><br>

            <label for="numDeliberation">N°Deliberation</label><br>
            <input type="text" name="numDeliberation" id=""><br><br>

            <label for="DateDeDeliberation">Date de Deliberation</label><br>
            <input type="text" name="DateDeDeliberation" id=""><br><br>
   
            <img src="" alt="retour">
            <button id="ajouterPavillon" ><a href="../Back/pavillon.php">Ajouter</a></button>
            

        </form>
    </div>
    <iframe src="footer.html" frameborder="0"></iframe>
</body>
</html>