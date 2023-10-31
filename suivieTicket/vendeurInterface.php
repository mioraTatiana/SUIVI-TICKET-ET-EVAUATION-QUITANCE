<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendeur front</title>
</head>
<body>
    <div>
        <img src="" alt="ajouter">
        <img src="" alt="modifier">
        <img src="" alt="supprimer">
    </div>
    <div>
        <form action="">
            <label for="search">Recherche</label><br>
            <input type="text" name="search" id="" >
            <img src="" alt="recherche">
        </form>
    </div>
    <div>
        <?php
            include '../vendeur.php';
            listerVendeur();
        ?>
    </div>
</body>
</html>