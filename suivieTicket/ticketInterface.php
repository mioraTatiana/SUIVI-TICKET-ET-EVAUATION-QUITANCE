<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>ticket front</title>
</head>
<body>

<?php
        include("../Back/connexionBase.php");
?>
    <div class="container-fluid h-100">
            <div class="row">
                <div class="col-3 bg-success p-3" >
                    <p class="lead text-center border rounded-pill"  style="background-color: #fff9c4;"> 
        
                        Bureau économique 
                </p>

                <ul class="list-group rounded" >
                        <li><span class="list-group-item rounded-top p-1" style="background-color: #B0F2B6;">Tableau de bord</span></li>
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

                </div>


                <div class="col-9 bg-light">
                <div class="row border-bottom border-2 border-light p-2 " style="background-color: #e1f5fe">
                    <span class=" col-2 " >
                        <img src="../image/LOGO ARMOIRIE DE FIANARANTSOA.jpg" alt=""  style="height: 60px; width: 50px; ">

                    </span>
                        <blockquote class="blockquote bottom-0 end-0  col-7 pt-3  text-center"><i>"Soa fianatsa ro mahavokatsa"</i> </blockquote>
                        <span class="col-3 border border-primary border-2 rounded bg-light text-center" style="padding-top: 10px;" > 
                            <a href="../index.html" class="text-decoration-none" >
                                <img src="../image/deconnexionBleu.png" alt="" class="d-inline">
                                <h5 class="d-inline"><i>Deconnexion</i></h5>
                            </a>
                        </span>
                </div>

                    <div class=" border rounded border-2 p-3 shadow mt-3" style="display: flex; background-color: #81d4fa; flex-direction:row;" >

                        <form action="../Back/ticket.php" method="POST" >
                            <div class="form-group row border border-2 rounded ms-2" >
                                <div>
                                    <h6><u>Formulaire</u></h6>
                                </div>
                                <div class="col-6">
                                    <label for="DateDeDistribution" class="form-label">Date De Distribution</label><br>
                                    <input type="date" name="DateDeDistribution" id="" value="<?php echo date('y-m-d')?>" class="form-control"><br>

                                    <label for="CIN" class="form-label">Regisseur</label><br>
                                    <select name="CIN" id=""  class="form-select">
                                    <?php   
                                    $query3=mysqli_query($con,'SELECT * FROM regisseur');
                                    while($data=mysqli_fetch_array($query3)){
                        ?>
                                        <option value="<?= $data['CIN']?>"><?= $data['Nom']?> <?= $data['Prenom']?> </option>
                        <?php
                                    }
                        ?>
                                    </select><br>

                                </div>

                                <div class="col-6">
                                    <label for="NombreDeTicket" class="form-label" >Nombre De Tickets</label><br>
                                    <input type="number" name="NombreDeTicket" id=""  class="form-control"><br>

                                    <input type="submit" value="Ajouter" name="ajouterTicket" class="btn btn-primary" >
                                    <input type="reset" value="Réinitialiser"  class="btn btn-light border border-dark">

                                </div>


                            </div>

                        </form>

                        <div style="width:10px;"></div>

                        <div class=" border border-2 rounded ">
                            <form action="ticketInterface.php" method="POST">

                                <div class="form-group  rounded p-2 m-3"    style="display:flex;  flex-direction: column; justify-content:center; text-align:center;">
                                    <label for="search" class="form-label text-decoration-underline me-1" >Recherche</label><br>

                                    <div  style="display:flex;  flex-direction: row; justify-content:center; text-align:center;">
                                        <input type="search" name="search" id="" class="form-control d-inline "  placeholder="date distribution">
                                        <button type="submit"  name="rechercheTicket" class=" btn  btn-sm d-inline border border-dark ms-1" ><img src="../bootstrap-icons-1.11.1/search.svg" alt="recherche"></button>

                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                    <div class="row bottom-0 end-0 m-2">
                            <div class="col-10"></div>
                            <a href="ticketInterface.php" class="btn btn-primary" style="width: 100px;">Actualiser</a>
                    </div>


                    <div class="row">
                        <?php
                            include '../Back/ticket.php';
                            include '../Back/connexionBase.php';
                        if(isset($_POST['rechercheTicket'])){ 
                            $rec=$_POST['search'];
                            $lister="SELECT numEnregistrement ,DateDeDistribution, NombreDeTicket, Nom, Prenom,regisseur.CIN FROM registreticket, regisseur WHERE regisseur.CIN= registreticket.CIN AND (DateDeDistribution LIKE '%".$rec."%')";
                            $req=mysqli_query($con,$lister);
                        }else{       
                        $lister="SELECT DateDeDistribution, NombreDeTicket, Nom, Prenom, numEnregistrement,regisseur.CIN FROM registreticket, regisseur WHERE regisseur.CIN= registreticket.CIN ORDER BY numEnregistrement";
                        $req=mysqli_query($con,$lister);
                        }
                        tableauTicket($req);

                        ?>

                    </div>


                </div>




            </div>
    </div>

    <div>
    </div>
</body>
</html>