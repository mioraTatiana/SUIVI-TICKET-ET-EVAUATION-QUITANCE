<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pavillon front</title>
</head>
<body>
    <iframe src="header.html" frameborder="0"></iframe>
    <iframe src="side_bar.html" frameborder="0"></iframe>

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
            include '../Back/pavillon.php';
            listerPavillon();
        ?>
    </div>
    <iframe src="footer.html" frameborder="0"></iframe>

</body>
</html>