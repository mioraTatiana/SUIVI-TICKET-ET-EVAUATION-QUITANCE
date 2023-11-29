<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="../css/bootstrap.css">

    <title>Produit interface</title>
</head>
<body class="bg-success" >
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
                    <div class="row bg-light p-3 pe-0 me-1" style=" border-radius: 20px; height:85%;" >
                        <div class="col-3 border border-success rounded border-2 m-2 p-3 " id="" style=" height:80%; background-color: #B0F2B6;">   
                            <div >
                                <span>
                                    <h6 class="text-decoration-underline">Formulaire pour les nouveaux produits</h6>
                                </span>
                                <form action="../Back/produit.php" method="POST">
                                    <label for="idProduit" class="form-label" >N°Produit</label><br>
                                    <input type="text" name="idProduit" id="" class="form-control border border-success border-1  mb-3">

                                    <label for="NomDuProduit" class="form-label">Nom Du Produit</label><br>
                                    <input type="text" name="NomDuProduit" id="" class="form-control border border-success border-1 mb-3">
                                    
                                    <div style="gap:40px;" class="text-center">
                                        <button type="submit" class="btn bg-primary" style="width:55px;" name="ajouterProduit"><img src="../image/ajouter1.png" alt="ajouter"  ></button>
                                        <input type="reset" value="Réinitialiser" class="btn border border-dark border-1 btn-light border border-black " >

                                    </div>
                                </form>
                            </div>
                            <div class="border border-2 border-success mt-3">

                            </div>

                            <form action="produitInterface.php" method="post" >
                                <div class="form-group  ">
                                    <label for="search" class="form-label text-decoration-underline">Recherche</label><br>
                                    <div style="display:flex;  flex-direction: row;  ">
                                        <input type="search" placeholder="Nom du Produit" name="search" id="" class="form-control border border-success border-1 d-inline me-1">
                                        <button type="submit"   name="rechercheProduit"  class=" btn border border-dark border-1  btn-sm d-inline bg-light " ><img src="../bootstrap-icons-1.11.1/search.svg" alt="recherche"></button>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="col-8 pt-2">
                            <?php
                                require '../Back/connexionBase.php';
                                include '../Back/produit.php';
                            if(isset($_POST['rechercheProduit'])){
                                $rec=$_POST['search'];
                                $reqRec=mysqli_query($con,"SELECT * FROM produit WHERE NomDuProduit LIKE '%".$rec."%' ;");

                            }else {
                                
                                $reqRec=mysqli_query($con,"SELECT * FROM produit ;");
                            } 
                            tableauProduit($reqRec);

                            ?>

                            <div class="row bottom-0 end-0">
                                <div class="col-10"></div>
                                <a href="produitInterface.php" class="btn btn-primary" style="width: 100px;">Actualiser</a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
    </div>

</body>
</html>