<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>marche back</title>
</head>
<body>
    <?php
        include 'connexionBase.php';

        
        function tableauMarche($requette){
            ?>
            <table class="table table-bordered table-sm table-responsive-md" >
                <thead class="bg-success">
                    <th scope="col">N°Marché</th>
                    <th scope="col">Place de marché</th>
                    <th scope="col">Actions</th>
                </thead>
                <tbody>
    <?php    
            $i=0;
            while ($data = mysqli_fetch_assoc($requette)) {
                $i++;
    ?>
                
                    <tr>
                        <td><?=$data['idMarche']?></td>
                        <td><?=$data['PlaceDuMarche']?></td>
                        <td>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#marcheModalM<?php echo $i; ?>"><img src="../image/modifierTab.png" alt="modifier"></button>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#marcheModalS<?php echo $i; ?>"><img src="../image/supprimerTab.png" alt="supprimer"></button>
                        </td>

                    </tr>

                    <div class="modal fade" id="marcheModalM<?php echo $i; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <span><img src="../image/ajouter.png" alt="Ajouter marche" style="width: 40px; height: 40px;"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>

                                </div>
                                
                                <div class="modal-body">
                                    <div class="form-group">
                                        <form action="../Back/marche.php" method="POST" >
                                            <label for="idMarche" class="form-label" >N°marche</label><br>
                                            <input type="number" name="idMarche"  value="<?=$data['idMarche']?>" class="form-control" ><br> 

                                            <label for="PlaceDuMarche" class="form-label">PlaceDuMarche</label><br>
                                            <input type="text" name="PlaceDuMarche"  value="<?=$data['PlaceDuMarche']?>" class="form-control" ><br>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" value="Modifier" class="btn btn-success" name="modifierMarche">
                                </div>
                                        </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="marcheModalS<?php echo $i; ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <span><img src="../image/supprimer.png" alt="Ajouter marche" style="width: 40px; height: 40px;"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>

                                </div>
                                
                                <div class="modal-body">
                                    <div class="form-group">
                                <form action="../Back/marche.php" method="POST" >
                                            <label for="idMarche" class="form-label" >N°marche</label><br>
                                            <input type="number" name="idMarche"  value="<?=$data['idMarche']?>" class="form-control" ><br> 


                                        

                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <input type="submit" value="Supprimer" class="btn btn-danger" name="supprimerMarche">
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

        if(isset($_POST["ajouterMarche"])){
            $PlaceDuMarche=$_POST['PlaceDuMarche'];
            $req=mysqli_query($con,"INSERT INTO `marche`(`PlaceDuMarche`) VALUES (' $PlaceDuMarche');");
            
            if($req){
                header ("location: ../suivieTicket/marcheInterface.php");
            }else{
                echo 'Ajout non effectué';
            }    


        }elseif(isset($_POST["modifierMarche"])){
            $idMarche=$_POST['idMarche'];
            $PlaceDuMarche=$_POST['PlaceDuMarche'];
            $req=mysqli_query($con,"UPDATE marche SET idMarche=$idMarche, PlaceDuMarche='$PlaceDuMarche' WHERE idMarche=$idMarche;");
            
            if($req){
                header ("location: ../suivieTicket/marcheInterface.php");
            }else{
                echo 'Modification non effectué';
            }
        
            
        }elseif(isset($_POST['supprimerMarche'])){
            $idMarche=$_POST['idMarche'];
            $req=mysqli_query($con,"DELETE FROM marche WHERE  idMarche='$idMarche';");
            
            if($req){
                header ("location: ../suivieTicket/marcheInterface.php");
            }else{
                echo'non effacé';
            }
        }
    ?>
</body>
</html>