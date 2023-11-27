<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>Registre</title>
</head>
<body>
    <?php
        include 'connexionBase.php';



        function tableauRegitre($lister){
            include 'connexionBase.php';

            $query=mysqli_query($con,$lister);
    ?>
            
            <table class="table table-bordered table-sm table-responsive-md">
                <thead class="bg-success">
                    <th scope="col" >Numéro de la fiche</th>
                    <th scope="col">Année</th>
                    <th scope="col">Mois</th>
                    <th scope="col">Date de paiement</th>
                    <th scope="col">Tarifs</th>
                    <th scope="col">N°pavillon</th>
                    <th scope="col">Vendeur</th>
                    <th scope="col">N°Quitance</th>
                    <th scope="col">Actions</th>
                    
                </thead>
                <tbody>
    <?php
            $i=0;
                while ($data = mysqli_fetch_assoc($query)) {
                    $i++;

    ?>
                    <tr>
                        <td><?=$data['numFiche']?></td>
                        <td><?=$data['Annee']?></td>
                        <td><?=$data['Mois']?></td> 
                        <td><?=$data['DateDePaiement'] ?></td>
                        <td><?=$data['Tarif']?></td> 
                        <td><?=$data['numPavillon'] ?></td> 
                        <td><?php echo '' .$data['Nom']. ' ' .$data['Prenom'] ?></td>
                        <td><?=$data['numQuitance']?></td>
                        <td >
                            <a class="btn m-0" href="../suivieTicket/registreModifier.php?numFiche=<?=$data['numFiche']?>"><img src="../image/modifierTab.png" alt="modifier"></a> 
                            <button class="btn m-0" type="button" data-bs-toggle="modal" data-bs-target="#registreModalS<?=$i?>">
                                <img src="../image/supprimerTab.png" alt="supprimer" >
                            </button>
                            <a href="../Back/fiche.php?numPavillon=<?=$data['numPavillon']?>" class="btn m-0"><img src="../image/pdfRose.png" alt="PDF"></a>
                        </td>

                    </tr>

                    <div class="modal fade" id="registreModalS<?=$i?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border border-danger">
                                <div class="modal-header bg-danger">
                                    <span><img src="../image/supprimer1.png" alt="Supprimer registre" style=" width: 50px; height:50px"></span>

                                    <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>

                                </div>

                                <div class="form-group">
                                    <form action="../Back/registre.php" method="POST">
                                        <div class="modal-body">
                                            <label for="numFiche">N°Fiche</label><br>
                                            <input type="text" name="numFiche" id="" value="<?=$data['numFiche']?>" class="form-control border border-danger"><br>

                                        </div>

                                        <div class="modal-footer border-top border-danger">
                                            <input type="submit" value="Supprimer" name="supprimerRegistre" class="btn btn-danger" >
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

        if(isset($_POST["ajouterRegistre"])){
            // $numFiche=$_POST['numFiche'];
            $Mois=$_POST['idMois'];
            $Annee=$_POST['Annee'];
            $DateDePaiement=$_POST['DateDePaiement'];
            $Tarif=$_POST['Tarif'];
            $numPavillon=$_POST['numPavillon'];
            $CIN=$_POST['CIN'];
            $numQuitance=$_POST['numQuitance'];
        
            $req=mysqli_query($con,"INSERT INTO registre ( idMois, Annee, DateDePaiement, Tarif,numPavillon, CIN,numQuitance) VALUES ('$Mois',$Annee,'$DateDePaiement',$Tarif,'$numPavillon',$CIN,$numQuitance)");
        
            if($req){
                header('location: ../suivieTicket/registreInterface.php') ;
            }else{
                echo 'Ajout non effectué';
            }


        }elseif(isset($_POST["modifierRegistre"])){
            $numFiche=$_POST['numFiche'];
            $Mois=$_POST['idMois'];
            $Annee=$_POST['Annee'];
            $DateDePaiement=$_POST['DateDePaiement'];
            $Tarif=$_POST['Tarif'];
            $numPavillon=$_POST['numPavillon'];
            $CIN=$_POST['CIN'];
            $numQuitance=$_POST['numQuitance'];
        
            $req=mysqli_query($con,"UPDATE registre SET numFiche=$numFiche, idMois='$Mois', Annee=$Annee, DateDePaiement='$DateDePaiement', Tarif=$Tarif,numPavillon='$numPavillon', CIN=$CIN, numQuitance=$numQuitance WHERE  numFiche='$numFiche' ;");
        
            if($req){
                header('location: ../suivieTicket/registreInterface.php') ;
            }else{
                echo 'Modification non effectué';
            }
        
        }elseif(isset($_POST['supprimerRegistre'])){
            $numFiche=$_POST['numFiche'];
            $req=mysqli_query($con,"DELETE FROM registre WHERE  numFiche=$numFiche;");
            
            if($req){
                header('location: ../suivieTicket/registreInterface.php') ;
            }else{
                echo'non effacé';
            }
        
        }  

        
    ?>
    
</body>
</html>
