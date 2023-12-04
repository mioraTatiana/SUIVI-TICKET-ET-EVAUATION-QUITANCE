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
     $query=mysqli_query($con, "SELECT numPavillon, Localite, PlaceDuMarche, pavillon.idMarche, pavillon.idLocalite, TypeDePavillon,numAutorisation,DateDautorisation,numDeliberation,DateDeDeliberation , Tarif, TypeDeProduit FROM pavillon, marche, localite  WHERE  pavillon.idMarche=marche.IdMarche AND pavillon.idLocalite=Localite.idLocalite AND pavillon.numPavillon='".$numPavillon."';" );
     $data=mysqli_fetch_assoc($query);
?>

</head>
<body>
    <!-- Create -->
    <div class="row">
        <form action="../Back/pavillon.php" method="POST" >
                        <div class="mt-1" id="pavillonModalM" >
                            <div class="modal-dialog ">
                                <div class="modal-content bordrer border-success border-2">
                                <form action="../Back/pavillon.php" method="post">

                                    <div class="modal-header bg-success">
                                        <span><img src="../image/modifier1.png" alt="Modifier localite" style=" width: 50px; height:50px"></span>
                                          <a href="../suivieTicket/pavillonInterface.php" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></a>
                                    </div>
 
                                        <div class="modal-body row">

                                           <div class="col-6">
                                                <label for="numPavillon" class="form-label">N°pavillon</label><br>
                                                <input type="text" class="form-control border-success " name="numPavillon" id="" value="<?=$data['numPavillon'] ?>" style="width: 200px;"><br>


                                                <label for="idLocalite" class="form-label">Localite</label><br>
                                                <select class="form-select border border-success border border-success" name="idLocalite" id="">
    <?php
                                                include 'connexionBase.php';
                                                $req=mysqli_query($con,'SELECT * FROM localite ORDER BY Localite');
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
                                                <select  class="form-select border border-success" name="idMarche" id="">
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
                                                
                                                <label for="TypeDeProduit" class="form-label">Type De Produits</label><br>
                                                <input type="text" name="TypeDeProduit"  class="form-control border border-success" value="<?=$data['TypeDeProduit']?>"><br>

                                                <label for="TypeDePavillon" class="form-label">Type De Pavillon</label><br>
                                                
                                                <select name="TypeDePavillon"  id="" class="form-select border border-success">
                                                    <option value="<?=$data['TypeDePavillon']?>" ><?=$data['TypeDePavillon']?> </option>
                                                    <option value="Bois">Bois</option>
                                                    <option value="Brique">Brique</option>
                                                    <option value="Tôle">Tôle</option>
                                                    <option value="autre">autre</option>

                                                </select>


                                            </div>

                                            <div class="col-6">
                                                <label for="Tarif" class="form-label" > Tarif</label><br>
                                                <input type="number" name="Tarif" value="<?=$data['Tarif']?>" class="form-control border border-1 border-success " ><br>


                                                <label for="numAutorisation" class="form-label">N°Autorisation</label><br>
                                                <input type="text" class="form-control border border-success" name="numAutorisation" id="" value="<?=$data['numAutorisation']?>"><br>

                                                <label for="DateDautorisation" class="form-label">Date d' autorisation</label><br>
                                                <input type="text" class="form-control border border-success" name="DateDautorisation" id="" value="<?=$data['DateDautorisation']?>"><br>

                                                <label for="numDeliberation" class="form-label">N°Deliberation</label><br>
                                                <input type="text" class="form-control border border-success" name="numDeliberation" id="" value="<?=$data['numDeliberation']?>"><br>

                                                <label for="DateDeDeliberation" class="form-label">Date de Deliberation</label><br>
                                                <input type="text" class="form-control border border-success" name="DateDeDeliberation" id="" value="<?=$data['DateDeDeliberation']?>"><br>

                                            </div>
                                            

                                        </div>

                                        <div class="modal-footer border border-2 border-success">
                                            <input type="submit" value="Modifier" name="modifierPavillon" style="width:80px;"class="btn btn-success col-3 me-3">


                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


        </form>
    </div>
</body>
</html>