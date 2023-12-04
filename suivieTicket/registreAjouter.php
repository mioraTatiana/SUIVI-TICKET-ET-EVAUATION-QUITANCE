<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>registre create </title>
</head>
<?php
        include '../Back/connexionBase.php';
?>

<body>
    <div class="" id="registreModalA" >
                                <div class="modal-dialog">
                                    <div class="modal-content border border-2 border-primary ">
                                        <div class="modal-header bg-primary">
                                                <img src="../image/ajouterFiche.png" alt="Ajouter" style=" width: 50px; height:50px" >
                                                <a href="registreInterface.php" class="btn-close" aria-label="Close"></a>

                                        </div>

                                        <div class="form-group">
                                            <div class="modal-body">
                                                <div class="row" style="display:flex; flex-direction:row;">
                                                    <form action="../Back/registre.php" method="POST">

                                                        <div class="">
                                                                <label for="idMois" class="form-label" >Mois</label><br>
                                                                <select name="idMois" id="" class="form-select border border-primary">
                                                            <?php
                                                                $query=mysqli_query($con,'SELECT * FROM mois');
                                                                while($data=mysqli_fetch_array($query)){
                                                            ?>
                                                                    <option value="<?=$data['idMois']?>"><?=$data['Mois']?></option>
                                                            <?php
                                                                }
                                                            ?>                

                                                                </select><br>

                                                                <label for="Annee" class="form-label">Annee</label><br>
                                                                <input type="number" name="Annee" id="" class="form-control border border-primary"><br>

                                                                <label for="DateDePaiement" class="form-label">Date De paiement</label><br>
                                                                <input type="date" name="DateDePaiement" id="" class="form-control border border-primary"><br>


                                                        </div>

                                                        <div class="c">
                                                                <label for="numPavillon" class="form-label">N°pavillon</label><br>
                                                                <select name="numPavillon" id="" class="form-control border border-primary" >
                                                            <?php
                                                                $query2=mysqli_query($con,'SELECT numPavillon FROM pavillon');
                                                                while($data=mysqli_fetch_array($query2)){
                                                            ?>
                                                                    <option value="<?=$data['numPavillon']?>"><?=$data['numPavillon']?></option>
                                                            <?php
                                                            }
                                                            ?>                
                                                                </select><br>

                                                                <label for="CIN_vendeur" class="form-label">Vendeur</label><br>
                                                                <select name="CIN" id="" class="form-control border border-primary">
                                                            <?php   
                                                                $query3=mysqli_query($con,'SELECT * FROM vendeur');
                                                                while($data=mysqli_fetch_array($query3)){
                                                            ?>
                                                                    <option value="<?= $data['CIN_vendeur']?>"><?= $data['Nom_vendeur']?> <?= $data['Prenom_vendeur']?> </option>
                                                            <?php
                                                                }
                                                            ?>
                                                                </select><br>

                                                                <label for="numQuitance" class="form-label">N°Quitance</label><br>
                                                                <input type="text" name="numQuitance" id="" class=" form-control border border-primary mb-3">

                                                        </div>

                                                        

                                                </div>

                                                <div class="modal-footer border-top border-2 border-primary">
                                                    <input type="submit" value="Ajouter" name="ajouterRegistre" class="btn btn-primary" >
                                                    <input type="reset" value="Réinitialiser" class="btn bg-light  border border-primary"  >

                                                </div>
                                                    </form>
                                            </div>

                                    </div>
                                </div>
                            </div>

</body>
</html>