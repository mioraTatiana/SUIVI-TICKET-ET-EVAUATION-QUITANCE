<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>localie back</title>
</head>
<body>
<?php
    include 'connexionBase.php';
        
        function tableauLocalite($req){
            include 'connexionBase.php';


            ?>
            <table class="table table-bordered table-sm table-responsive-md">
                <thead class="bg-success">
                    <th scope="col">N°Localité</th>
                    <th scope="col">Localité</th>
                    <th scope="col">Actions</th>
                </thead>
                <tbody>
               
    <?php    
            $i=0;
            while ($data = mysqli_fetch_assoc($req)) {
                $i=$i+1; 
    ?>
              
                    <tr>
                        <td><?=$data['idLocalite']?></td>
                        <td><?=$data['Localite']?></td>
                        <td>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#localiteModalM<?php echo $i; ?>"><img src="../image/modifierTab.png" alt="modifier"></button>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#localiteModalS<?php echo $i; ?>"><img src="../image/supprimerTab.png" alt="supprimer"></button>
                        </td>

                    </tr>
                
        <div class="modal fade border border-3 border-success" id="localiteModalM<?php echo $i; ?>" aria-hidden="TRUE">
            <div class="modal-dialog modal-dialog-center">
                <div class="modal-content">

                    <div class="modal-header">
                        <span><img src="../image/modifier.png" alt="Modifier localite" style=" width: 50px; height:50px"></span>
                        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <form action="../Back/localite.php" method="POST">
                                <label for="idLocalite" class="form-label">N°Localite</label><br>
                                <input type="text" name="idLocalite" id="" value="<?=$data['idLocalite'] ?>" class="form-control">
    
                                <label for="Localite" class="form-label">Localite</label><br>
                                <input type="text" name="Localite" id="" value="<?=$data['Localite'] ?>" class="form-control">
    
                            </form>
    
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" value="Modifier" name="modifierLocalite" class="btn btn-success">
            

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade " id="localiteModalS<?php echo $i; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <span><img src="../image/supprimer1.png" alt="Modifier localite" style=" width: 50px; height:50px"></span>
                        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <form action="../Back/localite.php" method="POST">
                                <label for="idLocalite" class="form-label">N°Localite</label><br>
                                <input type="text" name="idLocalite" id="" value="<?=$data['idLocalite'] ?>" class="form-control"><br>
    
                            
                        </div>

                    </div>

                    <div class="modal-footer">
                        <input type="submit" value="Supprimer" name="supprimerLocalite" class="btn btn-danger">

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

        
        if(isset($_POST['ajouterLocalite'])){
            $Localite=$_POST['Localite'];
            $req=mysqli_query($con,"INSERT INTO `localite`(`Localite`) VALUES ('$Localite');");
            
            if($req){
                header("location: ../suivieTicket/localiteInterface.php");
            }else{
                echo 'Ajout non effectué';
            }    

        // }elseif(isset($_POST['rechercheLocalite'])){
        //     $rec=$_POST['recherche'];
        //     $reqRec=mysqli_query($con,"SELECT * FROM localite WHERE idLocalite=".$rec." OR Localite='$rec';");
        //     tableaulocalite($reqRec);

        }elseif(isset($_POST["modifierLocalite"])){
            $idLocalite=$_POST['idLocalite'];
            $Localite=$_POST['Localite'];
            $req=mysqli_query($con,"UPDATE localite SET idLocalite=$idLocalite,Localite='$Localite' WHERE idLocalite=$idLocalite OR Localite='$Localite';");
            
            if($req){
                header("location: ../suivieTicket/localiteInterface.php");
            }else{
                echo 'Modification non effectué';
            }
        
            
        }elseif(isset($_POST["supprimerLocalite"])){
            $idLocalite=$_POST['idLocalite'];
            $req=mysqli_query($con,"DELETE FROM localite WHERE  idLocalite='$idLocalite';");
            
            if($req){
                header("location: ../suivieTicket/localiteInterface.php");
            }else{
                echo'non effacé';
            }
        
        }else{
           
        }
    ?>
</body>
</html>