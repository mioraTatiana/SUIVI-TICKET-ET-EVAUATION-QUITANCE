<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localite create</title>
</head>
<body>
    <div>
        <span><img src="" alt="Ajouter localite"></span>
        <form action="">
            <label for="idLocalite">N°Localite</label><br>
            <input type="text" name="idLocalite" id="" value="<?=$data['idLocalité'] ?>"><br><br>

            <label for="Localite">Localite</label><br>
            <input type="text" name="Localite" id="" value="<?=$data['Localité'] ?>"><br><br>
            <button><a href="../Back/localite.php">Modifier</a></button>
            <img src="" alt="retour">
        </form>
    </div>
</body>
</html>