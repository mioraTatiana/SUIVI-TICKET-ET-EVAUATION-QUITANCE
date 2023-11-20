<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>regisseur back</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';


        function tableauRegisseur($requette){
        ?>

            <table class="table table-bordered table-sm table-responsive-md">
                <thead class="bg-success" >
                    <th scope="col" >CIN</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Actions</th>
                </thead>
                <tbody>
            
        <?php
                $i=0;   
                while ($data = mysqli_fetch_assoc($requette)) {
                    $i++;
        ?>
                
                    <tr>
                        <td><?=$data['CIN']?></td>
                        <td><?=$data['Nom']?></td>
                        <td><?=$data['Prenom']?></td>
                        <td><?=$data['Adresse']?></td>
                        <td><?=$data['Telephone']?></td>
                        <td>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#regisseurModalM<?php echo $i; ?>"><img src="../image/modifierTab.png" alt="modifier"></button>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#regisseurModalS<?php echo $i; ?>"><img src="../image/supprimerTab.png" alt="supprimer"></button>
                        </td>
                    </tr>

                    <div class="modal fade" id="regisseurModalM<?php echo $i; ?>" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span><img src="../image/modifier.png" alt="Modifier" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>

                                <div class="form-group">

                                    <form action="../Back/regisseur.php" method="POST">
                                        <div class="modal-body">
                                            <label for="CIN" class="form-label" >CIN</label><br>
                                            <input type="number" name="CIN" id="" value="<?=$data['CIN']?>" class="form-control" ><br>

                                            <label for="Nom" class="form-label">Nom</label><br>
                                            <input type="text" name="Nom" id="" value="<?=$data['Nom']?>" class="form-control"><br>

                                            <label for="Prenom" class="form-label">Prenom</label><br>
                                            <input type="text" name="Prenom" id="" value="<?=$data['Prenom']?>" class="form-control" ><br>

                                            <label for="Adresse" class="form-label">Adresse</label><br>
                                            <input type="text" name="Adresse" id="" value="<?=$data['Adresse']?>" class="form-control" ><br>

                                            <label for="Telephone" class="form-label">Telephone</label><br>
                                            <input type="tel" name="Telephone" id="" value="<?=$data['Telephone']?>" class="form-control"><br>
                                        </div>

                                        <div class="modal-footer">
                                            <input type="submit" value="Modifier" name="modifierRegisseur" class="btn btn-success" >
                                        </div>
                                    </form>

                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="modal fade " id="regisseurModalS<?php echo $i; ?>" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content border border-warning">
                                <div class="modal-header">
                                    <span><img src="../image/supprimer.png" alt="Modifier" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>

                                <div class="form-group">
                                    <form action="../Back/regisseur.php" method="POST">
                                        <div class="modal-body">
                                            <label for="CIN" class="form-label" >CIN</label><br>
                                            <input type="number" name="CIN" id="" value="<?=$data['CIN']?>" class="form-control" ><br>
                                        </div>

                                        <div class="modal-footer">
                                            <input type="submit" value="Supprimer" name="supprimerRegisseur" class="btn btn-danger" >
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                
        <?php
                }
        ?>
            </tbody>
            </table>
        <?php    
    
        }

        
    
        if(isset($_POST["ajouterRegisseur"])){
            $CIN=$_POST['CIN'];
            $Nom=$_POST['Nom'];
            $Prenom=$_POST['Prenom'];
            $Adresse=$_POST['Adresse'];
            $Telephone=$_POST['Telephone'];
        

            $inserer="INSERT INTO regisseur (CIN,Nom,Prenom,Adresse,Telephone) VALUES ($CIN, '$Nom','$Prenom','$Adresse',$Telephone);";
            $req=mysqli_query($con,$inserer);
            if($req){
                header ("location: ../suivieTicket/regisseurInterface.php");
            }else{
                echo 'Erreur d\'enregistrement';
            }
        

        }elseif(isset($_POST["modifierRegisseur"])){
            $CIN=$_POST['CIN'];
            $Nom=$_POST['Nom'];
            $Prenom=$_POST['Prenom'];
            $Adresse=$_POST['Adresse'];
            $Telephone=$_POST['Telephone'];
        

            $modifier= "UPDATE regisseur SET CIN=$CIN, Nom='$Nom', Prenom='$Prenom', Adresse='$Adresse', Telephone=$Telephone WHERE CIN=$CIN;";
            $req=mysqli_query($con,$modifier);
            if($req){
                header ("location: ../suivieTicket/regisseurInterface.php");
            }else{
                echo 'modification annulée';
            }
        
        }elseif(isset($_POST['supprimerRegisseur'])){
            $CIN=$_POST['CIN'];
            $req=mysqli_query($con,"DELETE FROM regisseur WHERE CIN=$CIN ;");
            if($req){
                header ("location: ../suivieTicket/regisseurInterface.php");
            }else{
                echo' non effacé';
            }

        }
    ?>

</body>
</html>