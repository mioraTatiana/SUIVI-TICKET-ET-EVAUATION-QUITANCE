<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit back</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';


        function tableauProduit($requette){
    ?>
            <table class="table table-bordered table-sm table-responsive-md rounded">
                <thead class="bg-success">
                    <th scope="col">N°Produit</th>
                    <th scope="col">Nom Du Produits</th>
                    <th scope="col">Actions</th>
                </thead>
                <tbody>
    <?php   
            $i=0;
            while ($data = mysqli_fetch_assoc($requette)) {
                $i=$i+1;
    ?>
                
                    <tr>
                        <td><?=$data['idProduit']?></td>
                        <td><?=$data['NomDuProduit']?></td>
                        <td>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#produitModalM<?php echo $i; ?>"><img src="../image/modifierTab.png" alt="modifier"></button>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#produitModalS<?php echo $i; ?>"><img src="../image/supprimerTab.png" alt="supprimer"></button>
                        </td>

                    </tr>

                    <div class="modal fade" id="produitModalM<?php echo $i; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span><img src="../image/modifier.png" alt="Modifier" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <form action="../Back/produit.php" method="POST">
                                            <label for="idProduit" class="form-label" >N°Produit</label><br>
                                            <input type="text" name="idProduit" id="" value="<?=$data['idProduit']?>" class="form-control" ><br>

                                            <label for="NomDuProduit" class="form-label">Nom Du Produit</label><br>
                                            <input type="text" name="NomDuProduit" id="" value="<?=$data['NomDuProduit']?>" class="form-control" ><br>
                                            
                                            

                                    
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <input type="submit" value="Modifier" class=" btn btn-success" name="modifierProduit" >
                                </div>
                                    </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="produitModalS<?php echo $i; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span><img src="../image/supprimer1.png" alt="Modifier" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <form action="../Back/produit.php" method="POST">
                                            <label for="idProduit" class="form-label" >N°Produit</label><br>
                                            <input type="text" name="idProduit" id="" value="<?=$data['idProduit']?>" class="form-control" ><br>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <input type="submit" value="Supprimer" class=" btn btn-success" name="supprimerProduit" >
                                </div>
                                        </form>
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

        if(isset($_POST["ajouterProduit"])){
            $idProduit=$_POST['idProduit'];
            $NomDuProduit=$_POST['NomDuProduit'];
            $req=mysqli_query($con,"INSERT INTO produit  VALUES ($idProduit,'$NomDuProduit');");
            
            if($req){
                header ("location: ../suivieTicket/produitInterface.php");
            }else{
                echo 'Ajout non effectué';
            }    


        }elseif(isset($_POST["modifierProduit"])){
            $idProduit=$_POST['idProduit'];
            $NomDuProduit=$_POST['NomDuProduit'];
            $req=mysqli_query($con,"UPDATE produit SET idProduit=$idProduit,NomDuProduit='$NomDuProduit' WHERE idProduit=$idProduit;");
            
            if($req){
                header ("location: ../suivieTicket/produitInterface.php");
            }else{
                echo 'Modification non effectué';
            }
        
            
        }elseif(isset($_POST['supprimerProduit'])){
            $idProduit=$_POST['idProduit'];
            $req=mysqli_query($con,"DELETE FROM produit WHERE  idProduit='$idProduit';");
            
            if($req){
                header ("location: ../suivieTicket/produitInterface.php");
            }else{
                echo'non effacé';
            }
        }
    ?>
</body>
</html>