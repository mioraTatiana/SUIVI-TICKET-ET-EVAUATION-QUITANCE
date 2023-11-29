<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>Registre de tickets</title>
</head>
<body class="bg-success" >

<?php
        include("../Back/connexionBase.php");
?>
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-3 bg-success p-3" >
                <p class="lead mt-2 text-center border rounded-pill" style="background-color: #fff9c4;"> 
                
                Bureau économique 
                </p>

                <div  class="pt-5">

                    <ul class="list-group rounded" >
                        <li><span class="list-group-item rounded-top p-1 " style="background-color: #B0F2B6;">Tableau de bord</span></li>
                        <li class="list-group-item p-1 text-center" style="background-color: #81d4fa;">
                        <img src="../image/tableau-de-bord-80.png" alt="">
                            <a href="tableauBord.php" style="text-decoration: none; color: #1a237e ;">Ticket et quitance</a>

                        </li>
                    </ul>

                    <ul class="list-group mt-3 rounded">
                        <li>
                            <span class="list-group-item rounded-top p-1 " style="background-color: #B0F2B6;">Tickets de marché</span>
                        </li>

                        <li class="list-group-item p-1 text-center" style="background-color: #81d4fa;" >
                            <img src="../image/ticket.png" alt="">
                            <a href="ticketInterface.php" style="text-decoration: none; color: #1a237e ;">Registre</a>
                        </li>
                        <li class="list-group-item p-1 text-center" style="background-color: #81d4fa;" >
                            <img src="../image/regisseur.png" alt="regisseur">
                            <a href="regisseurInterface.php" style="text-decoration: none; color: #1a237e ;">Regisseur</a>
                        </li>
                    </ul>

                    <ul class="list-group mt-3 ">
                    <li >
                            <span class="list-group-item rounded-top p-1 " style="background-color: #B0F2B6;">Loyers de pavillons</span>
                    </li>
                    <li class="list-group-item p-1 text-center" style="background-color: #81d4fa">
                            <img src="../image/registre.png" alt="">
                            <a href="registreInterface.php" style="text-decoration: none; color: #1a237e ;">Registre</a>
                    </li>
                    <li class="list-group-item p-1 text-center" style="background-color: #81d4fa">
                            <img src="../image/vendeur.png" alt="">
                            <a href="vendeurInterface.php" style="text-decoration: none; color: #1a237e ;">Vendeur</a>
                    </li>
                    <li class="list-group-item p-1 text-center" style="background-color: #81d4fa">
                            <img src="../image/pavillon.png" alt="">
                            <a href="pavillonInterface.php" style="text-decoration: none; color: #1a237e ;">Pavillons</a>
                    </li>
                    <li class="list-group-item p-1 text-center" style="background-color: #81d4fa">
                            <img src="../image/produit.png" alt="">
                            <a href="produitInterface.php" style="text-decoration: none; color: #1a237e ;">Produits</a>
                    </li>
                    <li class="list-group-item p-1 text-center" style="background-color: #81d4fa">                   
                            <img src="../image/localite1.png" alt="">
                            <a href="localiteInterface.php" style="text-decoration: none; color: #1a237e ;">Localité</a>
                    </li>
                    <li class="list-group-item p-1 text-center" style="background-color: #81d4fa">
                            <img src="../image/marche.png" alt="">
                            <a href="marcheInterface.php" style="text-decoration: none; color: #1a237e ;">Marché</a>
                    </li>
                    </ul>

                    <ul class="list-group mt-3 text-center" >
                    <li>
                        <span class=" rounded bg-light   m-3 p-2" style=" width:60px;" > 
                                    <a href="../index.html" class="text-decoration-none" >
                                        <img src="../image/deconnexionBleu.png" alt="" class="d-inline">
                                        <h5 class="d-inline"><i>Deconnexion</i></h5>
                                    </a>
                        </span>

                    </li>
                    </ul>


                </div>

            </div>


                <div class="col-9 bg-success">
                    <div class="row  p-2 bg-success" >
                        <span class=" col-2 " >
                            <img src="../image/LOGO ARMOIRIE DE FIANARANTSOA.jpg" alt=""  style="height: 60px; width: 50px; ">

                        </span>
                            <div class="col-7  text-center">
                                <h6>COMMUNE URBAINE DE FIANARANTSOA</h6>
                                <blockquote class="blockquote "><i>"Soa fianatsa ro mahavokatsa"</i> </blockquote>

                            </div>
                    </div>


                    <div class="bg-light p-3"  style="border-radius: 20px;">

                        <form action="../Back/ticket.php" method="POST" >
                                <div class="form-group row  border border-success border-2 rounded mt-2 m-2 ps-3 pe-3 pt-3   shadow " style="background-color: #B0F2B6;"> 
                                    <div>
                                        <h6><u>Formulaire</u></h6>
                                    </div>
                                    <div class="col-6  ">
                                        <label for="DateDeDistribution" class="form-label">Date De Distribution</label><br>
                                        <input type="date" name="DateDeDistribution" id="" value="<?php echo date('y-m-d')?>" class="form-control border border-success border-1"><br>

                                        <label for="CIN" class="form-label">Regisseur</label><br>
                                        <select name="CIN" id=""  class="form-select border border-success border-1">
                                        <?php   
                                        $query3=mysqli_query($con,'SELECT * FROM regisseur');
                                        while($data=mysqli_fetch_array($query3)){
                            ?>
                                            <option value="<?= $data['CIN_regisseur']?>"><?= $data['Nom_regisseur']?> <?= $data['Prenom_regisseur']?> </option>
                            <?php
                                        }
                            ?>
                                        </select><br>

                                    </div>

                                    <div class="col-6 p-3 ">
                                        <label for="NombreDeTicket" class="form-label" >Nombre De Tickets</label><br>
                                        <input type="number" name="NombreDeTicket" id=""  class="form-control border border-success border-1"><br>

                                        <input type="submit" value="Ajouter" name="ajouterTicket" class="btn btn-primary" >
                                        <input type="reset" value="Réinitialiser"  class="btn btn-light border border-dark">

                                    </div>


                                </div>

                        </form>


                        <div class="row ">
                            <div class="col-8">
                                <form action="ticketInterface.php" method="POST">

                                    <div class="form-group  rounded p-2 m-3"    style="display:flex;  flex-direction: column; justify-content:center; text-align:center;">

                                        <div  style="display:flex;  flex-direction: row; justify-content:center; text-align:center;">
                                            <input type="date" name="search" style="height:50px; border:1px solid black;" class="form-control d-inline  text-muted  rounded "  placeholder="date distribution">
                                            <button type="submit"  name="rechercheTicket"  class=" btn  btn-md d-inline rounded border border-dark ms-3" ><img src="../bootstrap-icons-1.11.1/search.svg" alt="recherche"></button>

                                        </div>
                                    </div>

                                </form>

                            </div>

                                <div class="col-3 p-2 m-3 bottom-0 end-0">
                                    <a href="ticketInterface.php" class="btn btn-primary" >Actualiser</a>

                                </div>
                        </div>


                        <div class="row">
                            <?php
                                include '../Back/ticket.php';
                                include '../Back/connexionBase.php';
                            if(isset($_POST['rechercheTicket'])){ 
                                $rec=$_POST['search'];
                                $lister="SELECT numEnregistrement ,DateDeDistribution, NombreDeTicket, Nom_regisseur, Prenom_regisseur,regisseur.CIN_regisseur FROM registreticket, regisseur WHERE regisseur.CIN_regisseur= registreticket.CIN_regisseur AND (DateDeDistribution LIKE '%".$rec."%')";
                                $req=mysqli_query($con,$lister);
                            }else{       
                            $lister="SELECT DateDeDistribution, NombreDeTicket, Nom_regisseur, Prenom_regisseur, numEnregistrement,regisseur.CIN_regisseur FROM registreticket, regisseur WHERE regisseur.CIN_regisseur= registreticket.CIN_regisseur ORDER BY numEnregistrement DESC";
                            $req=mysqli_query($con,$lister);
                            }
                            tableauTicket($req);

                            ?>

                        </div>


                    </div>

                </div>




        </div>
    </div>

    <div>
    </div>
</body>
</html>