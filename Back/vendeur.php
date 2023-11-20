<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>vendeur back</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';


        function tableauVendeur($requette){
            ?>      
            <table class="table table-bordered table-sm table-responsive-md">
                <thead class="bg-success" >
                    <th scope="col">CIN</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Adresse</th> 
                    <th scope="col">Carte Professionnelle</th>
                    <th scope="col">N°pavillon</th>
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
                        <td><?=$data['Telephone']?></td>
                        <td><?=$data['Adresse']?></td>
                        <td><?=$data['CarteProfessionnelle']?></td>
                        <td><?=$data['numPavillon']?></td>
                        <td>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#vendeurModalM<?php echo $i; ?>"><img src="../image/modifierTab.png" alt="modifier"></button>
                            <button  class="btn"type="button" data-bs-toggle="modal" data-bs-target="#vendeurModalS<?php echo $i; ?>"><img src="../image/supprimerTab.png" alt="supprimer"></button>
                        </td>
                    </tr>

                    <div class="modal fade " id="vendeurModalM<?php echo $i; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span><img src="../image/modifier.png" alt="Modifier localite" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group" >
                                        <form action="../Back/vendeur.php" method="POST" >
                                            <label class="form-label" for="CIN">CIN</label><br>
                                            <input class="form-control" type="number" name="CIN" id="" value="<?=$data['CIN']?>"><br><br>

                                            <label class="form-label" for="Nom">Nom</label><br>
                                            <input class="form-control" type="text" name="Nom" id="" value="<?=$data['Nom']?>" ><br><br>

                                            <label class="form-label" for="Prenom">Prenom</label><br>
                                            <input class="form-control" type="text" name="Prenom" id="" value="<?=$data['Prenom']?>" ><br><br>

                                            <label class="form-label" for="Adresse">Adresse</label><br>
                                            <input class="form-control" type="text" name="Adresse" id="" value="<?=$data['Adresse']?>" ><br><br>

                                            <label class="form-label" for="CarteProfessionnelle">Carte Professionnelle</label><br>
                                            <input class="form-control" type="text" name="CarteProfessionnelle" id="" value="<?=$data['CarteProfessionnelle']?>" ><br><br>

                                            <label class="form-label" for="Telephone">Telephone</label><br>
                                            <input class="form-control" type="tel" name="Telephone" id="" value="<?=$data['Telephone']?>" ><br><br>


                                            <label class="form-label" for="numPavillon">numPavillon</label><br>
                                            <select class="form-select" name="numPavillon" id="">
                                <?php
                                            include 'connexionBase.php';
                                            $query2=mysqli_query($con,"SELECT numPavillon FROM pavillon ");
                                            while ($row2 = mysqli_fetch_assoc($query2)) {
                                                if ( $row2["numPavillon"]==$data["numPavillon"]) {
                                ?>
                                                    <option value="<?=$row2['numPavillon']?>" selected ><?=$row2['numPavillon']?></option>
                                    
                                <?php
                                                    }

                                ?>

                                <?php
                                            }

                                ?>
                                            </select>
                                </div>

                                <div class="modal-footer">
                                    <input  class="btn btn-success" type="submit" value="Modifier" name="modifierVendeur"  style="background-color:green;" >
                                </div>

                                </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal fade " id="vendeurModalS<?php echo $i; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <span><img src="../image/supprimer1.png" alt="Modifier localite" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group" >
                                        <form action="../Back/vendeur.php" method="POST" >
                                            <label class="form-label" for="CIN">CIN</label><br>
                                            <input class="form-control" type="number" name="CIN" id="" value="<?=$data['CIN']?>"><br><br>

                                </div>

                                <div class="modal-footer">
                                    <input class="btn bn-danger" type="submit" value="Supprimer" name="supprimerVendeur" style="background-color:red;" >
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


        if(isset($_POST["ajouterVendeur"])){
            $CIN=$_POST['CIN'];
            $Nom=$_POST['Nom'];
            $Prenom=$_POST['Prenom'];
            $Telephone=$_POST['Telephone'];
            $Adresse=$_POST['Adresse'];
            $Carte=$_POST['CarteProfessionnelle'];
            $numPavillon=$_POST['numPavillon'];
        
            $req=mysqli_query($con,"INSERT INTO vendeur (CIN, Nom, Prenom, Telephone, Adresse, CarteProfessionnelle, numPavillon) VALUES ('$CIN','$Nom','$Prenom',$Telephone,'$Adresse','$Carte','$numPavillon')");
        
            if($req){
                header("location: ../suivieTicket/vendeurInterface.php");
            }else{
                echo 'Ajout non effectué';
            }


        }elseif(isset($_POST["modifierVendeur"])){
            $CIN=$_POST['CIN'];
            $Nom=$_POST['Nom'];
            $Prenom=$_POST['Prenom'];
            $Telephone=$_POST['Telephone'];
            $Adresse=$_POST['Adresse'];
            $Carte=$_POST['CarteProfessionnelle'];
            $numPavillon=$_POST['numPavillon'];
        
            $req=mysqli_query($con,"UPDATE vendeur SET CIN='$CIN', Nom='$Nom', Prenom='$Prenom', Telephone=$Telephone, Adresse='$Adresse', CarteProfessionnelle='$Carte', numPavillon='$numPavillon' WHERE CIN='$CIN';");
            if($req){
                header("location: ../suivieTicket/vendeurInterface.php");

            }else{
                echo 'Modification annulée';
            }
        
        }elseif(isset($_POST['supprimerVendeur'])){

            $CIN=$_POST['CIN'];
            $req=mysqli_query($con,"DELETE FROM vendeur WHERE CIN='$CIN' ;");
            if($req){
                header("location: ../suivieTicket/vendeurInterface.php");

            }else{
                echo' non effacé';
            }

        }
        
    ?>
</body>
</html>