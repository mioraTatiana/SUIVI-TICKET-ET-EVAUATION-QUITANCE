<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>Pavillon modifier</title>
<?php
     include '../Back/connexionBase.php';
     $numPavillon=$_GET['numPavillon'];
     $query=mysqli_query($con, "SELECT numPavillon, Localite, PlaceDuMarche, pavillon.idProduit, pavillon.idMarche, pavillon.idLocalite, TypeDePavillon, NomDuProduit,numAutorisation,DateDautorisation,numDeliberation,DateDeDeliberation FROM pavillon, produit, marche, localite WHERE pavillon.idProduit=produit.idProduit AND pavillon.idMarche=marche.IdMarche AND pavillon.idLocalite=Localite.idLocalite AND pavillon.numPavillon='".$numPavillon."';" );
     $data=mysqli_fetch_assoc($query);
?>

</head>
<body>
    <!-- Create -->
    <div class="row">
        <form action="../Back/pavillon.php" method="POST" >
                        <div class="mt-1" id="pavillonModalM" >
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                <form action="../Back/pavillon.php" method="post">

                                    <div class="modal-header">
                                        <span><img src="../image/modifier.png" alt="Modifier localite" style=" width: 50px; height:50px"></span>
                                       
                                        <div class="border border-3 p-1 rounded ">
                                            <label for="numPavillon" class="" >N°pavillon</label>
                                            <input type="text" class="form-control " name="numPavillon" id="" value="<?=$data['numPavillon'] ?>" style="width: 200px;">

                                        </div>
                                    </div>
 
                                        <div class="modal-body row">

                                           <div class="col-6">
                                                <label for="idLocalite" class="form-label">Localite</label><br>
                                                <select class="form-select" name="idLocalite" id="">
    <?php
                                                include 'connexionBase.php';
                                                $req=mysqli_query($con,'SELECT * FROM localite');
                                                while ($row=mysqli_fetch_assoc($req)){
                                                    if ($row['idLocalite']==$data['idLocalite']) {
    ?>
                                                <option value="<?=$row['idLocalite'] ?>" selected><?=$row['Localite'] ?></option>
    <?php                

                                                }
    ?>
                                                <option value="<?=$row['idLocalite'] ?>"><?=$row['Localite'] ?></option>
    <?php                

                }
    ?>
                    
                                                </select><br>

                                                <label for="idMarche" class="form-label">Place Du Marche</label><br>
                                                <select  class="form-select" name="idMarche" id="">
    <?php
                                                $requette=mysqli_query($con,'SELECT * FROM marche');
                                                while($row=mysqli_fetch_assoc($requette)){
                                                    if ($row['idMarche']==$data['idMarche']) {
    ?>
                                                <option value="<?=$row['idMarche']?>" selected><?=$row['PlaceDuMarche'] ?></option>
    <?php
                                    
                                                }
    ?>
                                                <option value="<?=$row['idMarche']?>"><?=$row['PlaceDuMarche'] ?></option>
    <?php
                    }      
    ?>
                    
                                                </select><br>
                                                
                                                <label for="idProduit" class="form-label">Produits</label><br>
                                                <select name="idProduit"  class="form-select" id="">
    <?php
            
                                                $query=mysqli_query($con,'SELECT * FROM produit');
                                                
                                                while ($row=mysqli_fetch_assoc($query)) {
                                                    if ($row['idProduit']==$data['idProduit']) {
                                                        ?>
                                                        <option value="<?=$row['idProduit'] ?>" selected> <?=$row['NomDuProduit']?></option>
        <?php                
                                                }
    ?>
                                                <option value="<?=$row['idProduit'] ?>"> <?=$row['NomDuProduit']?></option>
    <?php                
                                                }

    ?>               
                                                </select><br>

                                                <label for="TypeDePavillon" class="form-label">Type De Pavillon</label><br>
                                                
                                                <select name="TypeDePavillon"  id="" class="form-select">
                                                    <option value="<?=$data['TypeDePavillon']?>" ><?=$data['TypeDePavillon']?> </option>
                                                    <option value="Bois">Bois</option>
                                                    <option value="Brique">Brique</option>
                                                    <option value="Tôle">Tôle</option>
                                                    <option value="autre">autre</option>

                                                </select>


                                            </div>

                                            <div class="col-6">

                                                <label for="numAutorisation" class="form-label">N°Autorisation</label><br>
                                                <input type="text" class="form-control" name="numAutorisation" id="" value="<?=$data['numAutorisation']?>"><br>

                                                <label for="DateDautorisation" class="form-label">Date d' autorisation</label><br>
                                                <input type="text" class="form-control" name="DateDautorisation" id="" value="<?=$data['DateDautorisation']?>"><br>

                                                <label for="numDeliberation" class="form-label">N°Deliberation</label><br>
                                                <input type="text" class="form-control" name="numDeliberation" id="" value="<?=$data['numDeliberation']?>"><br>

                                                <label for="DateDeDeliberation" class="form-label">Date de Deliberation</label><br>
                                                <input type="text" class="form-control" name="DateDeDeliberation" id="" value="<?=$data['DateDeDeliberation']?>"><br>

                                            </div>
                                            

                                        </div>

                                        <div class="modal-footer row ">
                                            <div class="col-8" >
                                                <a href="../suivieTicket/pavillonInterface.php"><img src="../image/retour.png" alt=""  style="width:30px ; height: 30px;"></a>

                                            </div>
                                            <input type="submit" value="Modifier" name="modifierPavillon" class="btn btn-success col-3 me-3">

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


        </form>
    </div>
</body>
</html>