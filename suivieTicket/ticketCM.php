<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket create update</title>
<?php
        include '../Back/connexionBase.php';
?>

</head>
<body>
    <div>
        <img src="" alt="ajouter">
        <span>Ajouter</span>
    </div>
    <div>
        <form action="">
            <label for="DateDeDistribution">Date De Distribution</label><br>
            <input type="date" name="DateDeDistribution" id=""><br><br>

            <label for="CIN">CIN</label><br>
            <select name="CIN" id="">
            <?php   
            $query3=mysqli_query($con,'SELECT * FROM regisseur');
            while($data=mysqli_fetch_array($query3)){
?>
                 <option value="<?= $data['CIN']?>"><?= $data['Nom']?> <?= $data['Prenom']?> </option>
<?php
            }
?>
            </select><br><br>

            <label for="NombreDeTickets">Nombre De Tickets</label><br>
            <input type="number" name="NombreDeTickets" id=""><br><br>

            <button><a href="../Back/ticket.php">Ajouter</a></button>
            <img src="" alt="retour">

        </form>
    </div>
</body>
</html>