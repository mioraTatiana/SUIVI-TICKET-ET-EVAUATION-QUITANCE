<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>pavillon back</title>
</head>
<body>
    <?php
        include 'connexionBase.php';

        function tableauPavillon($requette){
            ?>        
            <table class="table table-bordered table-sm table-responsive-md ">
                <thead class="bg-success">
                    <th scope="col" >N°Pavillon</th>
                    <th scope="col">Localité</th>
                    <th scope="col">Place du marché</th>
                    <th scope="col">Type de pavillon</th>
                    <th scope="col">Produits</th>
                    <th scope="col">Tarif</th>
                    <th scope="col">Actions</th>
                </thead>
                <tbody>
        <?php   
                $i=0; 
                while ($data=mysqli_fetch_assoc($requette)) {
                    $i=$i+1;
        ?>          
                    
                        <tr>
                            <td><?php echo $data['numPavillon'] ?></td> 
                            <td><?=$data['Localite']?></td>
                            <td><?=$data['PlaceDuMarche']?></td>
                            <td><?=$data['TypeDePavillon']?></td> 
                            <td><?=$data['TypeDeProduit']?></td>
                            <td><?=$data['Tarif']?></td>
                            <td>
                                <a href="../suivieTicket/pavillonModifier.php?numPavillon=<?php echo $data['numPavillon'] ?> " class="btn"><img src="../image/modifierTab.png" alt=""></a>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#pavillonModalS<?php echo $i; ?>" class="btn"><img src="../image/supprimerTab.png" alt="supprimer" ></button>
                            </td>

                        </tr>


                        <div class="modal fade" id="pavillonModalS<?php echo $i; ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-cente">
                                <div class="modal-content border border-2 border-danger">
                                    <div class="modal-header bg-danger">
                                        <span><img src="../image/supprimer1.png" alt="supprimer localite" style=" width: 50px; height:50px"></span>
                                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close" ></button>
                                    </div>

                                    <form action="../Back/pavillon.php" method="post">
                                        <div class="modal-body">
                                            <label for="numPavillon" class="form-label" >N°pavillon</label><br>
                                            <input type="text" class="form-control border border-danger" name="numPavillon" id="" value="<?=$data['numPavillon'] ?>"><br><br>

                                        </div>

                                        <div class="modal-footer border-top border-2 border-danger">
                                            <input type="submit" value="Supprimer" name="supprimerPavillon" class="btn btn-danger">
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


        if(isset($_POST["ajouterPavillon"])){
            $numPavillon=$_POST['numPavillon'];
            $idLocalite=$_POST['idLocalite'];
            $idMarche=$_POST['idMarche'];
            $TypeDeProduit=$_POST['TypeDeProduit'];
            $TypeDePavillon=$_POST['TypeDePavillon'];
            $numAutorisation=$_POST['numAutorisation'];
            $DateDautorisation=$_POST['DateDautorisation'];
            $numDeDeliberation=$_POST['numDeliberation'];
            $DateDeDeliberation=$_POST['DateDeDeliberation'];
            $Tarif=$_POST['Tarif'];
            
        
            $inserer="INSERT INTO pavillon (numPavillon, idLocalite, idMarche, TypeDeProduit, TypeDePavillon,numAutorisation,DateDautorisation,numDeliberation,DateDeDeliberation, Tarif) VALUES ('$numPavillon', '$idLocalite', $idMarche, '$TypeDeProduit' , '$TypeDePavillon',' $numAutorisation',' $DateDautorisation','$numDeDeliberation',' $DateDeDeliberation',$Tarif);";
            $req=mysqli_query($con,$inserer);
            if($req){
                header ('location: ../suivieTicket/pavillonInterface.php') ;
            }else{
                echo 'Erreur d\'enregistrement';
            }
        

 
        }elseif(isset($_POST["modifierPavillon"])){
            $numPavillon=$_POST['numPavillon'];
            $idLocalite=$_POST['idLocalite'];
            $idMarche=$_POST['idMarche'];
            $TypeDeProduit=$_POST['TypeDeProduit']; 
            $TypeDePavillon=$_POST['TypeDePavillon'];
            $numAutorisation=$_POST['numAutorisation'];
            $DateDautorisation=$_POST['DateDautorisation'];
            $numDeDeliberation=$_POST['numDeliberation'];
            $DateDeDeliberation=$_POST['DateDeDeliberation'];
            $Tarif=$_POST['Tarif'];
    
            $modifier= "UPDATE pavillon SET numPavillon='$numPavillon', idLocalite='$idLocalite', idMarche='$idMarche', TypeDeProduit='$TypeDeProduit', TypeDePavillon='$TypeDePavillon', numAutorisation='$numAutorisation',DateDautorisation='$DateDautorisation',numDeliberation='$numDeDeliberation', Tarif=$Tarif WHERE numPavillon='$numPavillon';";
            $req=mysqli_query($con,$modifier);
            if($req){
                header ('location: ../suivieTicket/pavillonInterface.php') ;
            }else{
                echo'Modification annulée';
            }
        
        }elseif(isset($_POST['supprimerPavillon'])){
            $numPavillon=$_POST['numPavillon'];
            $req=mysqli_query($con,"DELETE FROM pavillon WHERE numPavillon='$numPavillon' ;");
            if($req){
                header ('location: ../suivieTicket/pavillonInterface.php') ;
            }else{
            echo' non effacé';
            }
        }            
    ?>
</body>
</html>