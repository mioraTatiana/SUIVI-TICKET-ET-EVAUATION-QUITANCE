<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>registre create update</title>
</head>
<?php
        include '../Back/connexionBase.php';
        $numFiche=$_GET['numFiche'];
        $query=mysqli_query($con,"SELECT registre.numFiche, mois.Mois,registre.idMois, Annee, DateDePaiement, Tarif,registre.numPavillon, registre.CIN, Nom, Prenom, numQuitance FROM `registre`, vendeur, mois WHERE registre.CIN=vendeur.CIN AND registre.idMois=mois.idMois AND  registre.numFiche ='".$numFiche."' ;");
        $row=mysqli_fetch_assoc($query);
?>

<body>

    <div class="" id="modifierRegistrem">
        <div class="modal-dialog">
            <div class="modal-content border border-2 border-success">
                <div class="modal-header bg-success">
                    <span><img src="../image/modifier1.png" alt="Modifier localite" style=" width: 50px; height:50px"></span>
                    <a href="registreInterface.php" ><img src="../image/retour.png" alt=""></a>
                </div>

                <div class="form-group">
                    <div class="modal-body">
                        <form action="../Back/registre.php" method="POST">
                            <label for="numFiche" class="form-label" >N°Fiche</label><br>
                            <input type="number" name="numFiche" id="" value="<?=$row['numFiche']?>" class="form-control  border border-success" ><br>

                            <label for="idMois" class="form-label">Mois</label><br>
                            <select name="idMois" id="" class="form-select  border border-success">
                <?php
                            $query=mysqli_query($con,'SELECT * FROM mois');
                            while($data=mysqli_fetch_array($query)){
                                if ($row['idMois']== $data['idMois']) {
                ?>
                                <option value="<?=$data['idMois']?>" selected ><?=$data['Mois']?></option>
                <?php

                                }

                ?>
                                <option value="<?=$data['idMois']?>"><?=$data['Mois']?></option>
                <?php
                            }
                ?>                

                            </select><br>

                            <label for="Annee" class="form-label">Annee</label><br>
                            <input type="number" name="Annee" id="" value="<?=$row['Annee']?>" class="form-control  border border-success" ><br>

                            <label for="DateDePaiement" class="form-label">Date De paiement</label><br>
                            <input type="date" name="DateDePaiement" id="" value="<?=$row['DateDePaiement']?>" class="form-control  border border-success"><br>

                            <label for="Tarif" class="form-label">Tarif</label><br>
                            <input type="number" name="Tarif" id="" value="<?=$row['Tarif']?>" class="form-control  border border-success"><br>

                            <label for="numPavillon" class="form-label">N°pavillon</label><br>
                            <select name="numPavillon" id="" class="form-select  border border-success" >
                <?php
                            $query2=mysqli_query($con,'SELECT numPavillon FROM pavillon');
                            while($data=mysqli_fetch_array($query2)){
                                if ($row['numPavillon']== $data['numPavillon']) {
                ?>
                                    <option value="<?=$data['numPavillon']?>" selected ><?=$data['numPavillon']?></option>
                <?php
                                }
                ?>
                                <option value="<?=$data['numPavillon']?>"><?=$data['numPavillon']?></option>
                <?php
                        }
                ?>                
                            </select><br>

                            <label for="CIN" class="form-label">Vendeur</label><br>
                            <select name="CIN" id="" class="form-select  border border-success">
                <?php   
                            $query3=mysqli_query($con,'SELECT * FROM vendeur');
                            while($data=mysqli_fetch_array($query3)){
                                if ($row['CIN']== $data['CIN']) {
                ?>
                                    <option value="<?= $data['CIN']?>" selected><?= $data['Nom']?> <?= $data['Prenom']?> </option>
                <?php
                                }
                ?>
                                <option value="<?= $data['CIN']?>"><?= $data['Nom']?> <?= $data['Prenom']?> </option>
                <?php
                            }
                ?>
                            </select><br>

                            <label for="numQuitance" class="form-label">N°Quitance</label><br>
                            <input type="text" name="numQuitance" id="" value="<?=$row['numQuitance']?>" class="form-control  border border-success" >

                            

                        

                    </div>

                    <div class="modal-footer border-2 border-success">
                            <input type="submit" value="Modifier" name="modifierRegistre"  class="btn btn-success">

                    </div>
                    </form>    
                </div>
            </div>
        </div>
    </div>


</body>
</html>