<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>ticket back</title>
</head>
<body>
    <?php
    include 'connexionBase.php';


    function tableauTicket($requette){
        ?>  
        <table class="table table-bordered table-sm table-responsive-md me-2">
            <thead class="bg-success" >
                <th scope="col">N°Enregistrement</th>
                <th scope="col">Date De Distribution</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">NombreDeTicket</th>
                <th scope="col">Actions</th>
            </thead>
            <tbody>
        
<?php 
        $i=0;
        while ($data = mysqli_fetch_assoc($requette)) {
            $i++;
?>          
            
                <tr>
                    <td><?=$data['numEnregistrement']?></td>
                    <td><?=$data['DateDeDistribution']?></td>
                    <td><?=$data['Nom_regisseur']?></td>
                    <td><?=$data['Prenom_regisseur']?></td>
                    <td><?=$data['NombreDeTicket']?></td>
                    <td>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#ticketModalM<?php echo $i; ?>"><img src="../image/modifierTab.png" alt="modifier"></button>
                            <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#ticketModalS<?php echo $i; ?>"><img src="../image/supprimerTab.png" alt="supprimer"></button>
                    </td>
                </tr>

                <div class="modal fade" id="ticketModalM<?php echo $i; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content border border-success">
                            <div class="modal-header bg-success">
                                    <span><img src="../image/modifier1.png" alt="Modifier" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                            </div>

                            <div class="modal-body">
                                <div class="form-group" >
                                    <form action="../Back/ticket.php" method="POST">
                                        <label  class="form-label" for="numEnregistrement">N°Enregistrement</label><br>
                                        <input  class="form-control border border-success" type="number" name="numEnregistrement" id="" value="<?=$data['numEnregistrement']?>" ><br>

                                        <label  class="form-label" for="DateDeDistribution">Date De Distribution</label><br>
                                        <input  class="form-control border border-success" type="date" name="DateDeDistribution" id="" value="<?=$data['DateDeDistribution']?>" ><br>

                                        <label  class="form-label" for="CIN">Regisseur</label><br>
                                        <select name="CIN" id="" class="form-select border border-success">
                                        <?php 
                                        include "connexionBase.php";  
                                        $query3=mysqli_query($con,'SELECT * FROM regisseur');
                                        while($row=mysqli_fetch_array($query3)){
                                            if($row['CIN_regisseur']==$data['CIN_regisseur']){
                            ?>
                                                <option value="<?= $row['CIN_regisseur']?>" selected><?= $row['Nom_regisseur']?> <?= $row['Prenom_regisseur']?> </option>
                            <?php
                            
                                            }
                            ?>
                                            <option value="<?= $row['CIN_regisseur']?>"><?= $row['Nom_regisseur']?> <?= $row['Prenom_regisseur']?> </option>
                            <?php
                                        }
                            ?>
                                        </select><br>

                                        <label  class="form-label" for="NombreDeTicket">Nombre De Tickets</label><br>
                                        <input  class="form-control border border-success" type="number" name="NombreDeTicket" id="" value="<?=$data['NombreDeTicket']?>" ><br>


                                    
                                </div>


                            </div>
                            <div class="modal-footer border-top border-2 border-success">
                                <input  class="btn btn-success" type="submit" value="Modifier" name="modifierTicket">
                            </div>

                            </form>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="ticketModalS<?php echo $i; ?>">
                    <div class="modal-dialog">
                        <div class="modal-content border border-danger">
                            <div class="modal-header bg-danger">
                                    <span><img src="../image/supprimer1.png" alt="Supprimer" style=" width: 50px; height:50px"></span>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
                            </div>

                            <div class="form-group" >
                            <div class="modal-body ">
                               
                                    <form action="../Back/ticket.php" method="POST">
                                        <label  class="form-label" for="numEnregistrement">N°Enregistrement</label><br>
                                        <input  class="form-control border border-danger" type="number" name="numEnregistrement" id="" value="<?=$data['numEnregistrement']?>" ><br>


                            </div>
                            <div class="modal-footer border-top border-2 border-danger ">
                                <input  class="btn btn-danger" type="submit" value="Supprimer" name="supprimerTicket">
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



    if(isset($_POST["ajouterTicket"])){

        $CIN=$_POST['CIN'];
        $DateDeDistribution=$_POST['DateDeDistribution'];
        $NombreDeTicket=$_POST['NombreDeTicket'];

        $inserer="INSERT INTO registreTicket (DateDeDistribution, CIN_regisseur, NombreDeTicket) VALUES ('$DateDeDistribution', $CIN, '$NombreDeTicket');";
        $req=mysqli_query($con,$inserer);
        if($req){
            header ("location: ../suivieTicket/ticketInterface.php");
        }else{
            echo 'Erreur d\'enregistrement';
        }

    }elseif(isset($_POST['recherche'])){

   
    }elseif(isset($_POST["modifierTicket"])){
        // seule le nombre de jour est modifiable
        $CIN=$_POST['CIN'];
        $numEnregistrement=$_POST['numEnregistrement'];
        $DateDeDistribution=$_POST['DateDeDistribution'];
        $NombreDeTicket=$_POST['NombreDeTicket'];

        $modifier= "UPDATE registreTicket SET  NombreDeTicket=$NombreDeTicket, CIN_regisseur=$CIN, DateDeDistribution='$DateDeDistribution' WHERE numEnregistrement='$numEnregistrement' ;";
        $req=mysqli_query($con,$modifier);
        if($req){
            header ("location: ../suivieTicket/ticketInterface.php");
        }else{
            echo 'modification annulée';
        }

    }elseif(isset($_POST['supprimerTicket'])){
        $numEnregistrement=$_POST['numEnregistrement'];

        $req=mysqli_query($con,"DELETE FROM registreticket WHERE numEnregistrement='$numEnregistrement';");
        if($req){
            header ("location: ../suivieTicket/ticketInterface.php");
        }else{
            echo' non effacé';
        }

    }

    ?>
</body>
</html>