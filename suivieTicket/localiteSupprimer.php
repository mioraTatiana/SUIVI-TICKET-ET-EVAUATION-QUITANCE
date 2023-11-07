<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localite create</title>
</head>
<body>
<?php
    include '../Back/connexionBase.php';
    $idLocalite = $_GET['idLocalite'];

    $requette = mysqli_query($con, "SELECT * FROM localite WHERE idLocalite = $idLocalite");
    $data = mysqli_fetch_assoc($requette);
?>    
    <div>
        <span><img src="" alt="Ajouter localite"></span>
        <form action="../Back/localite.php" method="POST">
            <label for="idLocalite">N°Localite</label><br>
            <input type="text" name="idLocalite" id="" value="<?=$data['idLocalite'] ?>"><br><br>

            <label for="Localite">Localite</label><br>
            <input type="text" name="Localite" id="" value="<?=$data['Localite'] ?>"><br><br>

            <input type="submit" value="Modifier" name="modifierLocalite" >
            
            <img src="" alt="retour">
        </form>
    </div>
</body>
</html>