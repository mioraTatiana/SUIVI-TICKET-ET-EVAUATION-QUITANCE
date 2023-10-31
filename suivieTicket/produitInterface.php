<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit front</title>
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
            include '../produit.php';
            listerProduits();
        ?>
    </div>
</body>
</html>