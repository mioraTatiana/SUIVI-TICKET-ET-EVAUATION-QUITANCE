<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre des loyers des pavillons</title>
</head>
<body>
    <iframe src="header.html" frameborder="0"></iframe>
    <iframe src="side_bar.html" frameborder="0"></iframe>

    <div class="actions">
        <a href=""><img src="" alt="create button"></a> <!-- ajout --> 
        <a href=""><img src="" alt="update button"></a> <!-- modification -->
        <a href=""><img src="" alt="delete button"></a> <!-- supression -->
    </div>

    <div class="search">
        <h4>Recherche</h4><br>
        <input type="text" name="search" id="search">
        <img src="" alt="search button">
    </div>

    <div>
        <?php
            include '../Back/registre.php';
            listerRegistre();
        ?>
    </div>
    <iframe src="footer.html" frameborder="0"></iframe>

</body>
</html>