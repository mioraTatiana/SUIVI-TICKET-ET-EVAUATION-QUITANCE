<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>

    <title>Interface</title>
</head>
<body class="bg-success" >
    <div class="container-fluid  h-100">
        <div class="row">
            <div class="col-3 bg-success p-3" >
                <div>
                    <p class="lead text-center border rounded-pill" style="background-color: #fff9c4;"> 
    
                        Bureau économique 
                    </p>

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
            <div class="col-9 bg-light">
                <div class="row border-bottom border-2 border-light p-2  bg-success ">
                        <span class=" col-2 " >
                            <img src="../image/LOGO ARMOIRIE DE FIANARANTSOA.jpg" alt=""  style="height: 60px; width: 50px; ">

                        </span>
                            <div class="col-7  text-center">
                                <h6>COMMUNE URBAINE DE FIANARANTSOA</h6>
                                <blockquote class="blockquote "><i>"Soa fianatsa ro mahavokatsa"</i> </blockquote>

                            </div>
                </div>
                <div class="row  rounded m-0" style=" border-radius: 30px;">
                    <div class="col-5 border border-2 border-success rounded-start m-3 shadow" style="background-color: #b0f2b5d8;" >
                        <div >
                            <img src="../image/ajouter1.png"  alt="ajouter" style="width: 40px; height:40px;">

                        </div>
                        <div class="form-group ">
                            <form action="../Back/localite.php" method="post">

                                <label for="Localite" class="form-label">Localite</label>
                                <input type="text" name="Localite" id="" class="form-control border border-success border border-2">

                                <div class="row p-2 ">
                                    <input type="submit" value="Ajouter" name="ajouterLocalite" class=" btn  btn-sm  btn-info d-inline float-start ms-1" style="width: 25%; ">
                                    <div style="width: 42%;"></div>
                                    <input type="reset" value="Réinitialiser" class="  btn btn-info btn-sm d-inline  text-center" style="width: 30%;">
                                    <div style="width: 6%;"></div>

                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 border border-success border-2 rounded m-3 shadow" style="display:flex;   justify-content: center; align-items: center; background-color: #b0f2b5d8;" >
                        <form action="localiteInterface.php" method="post">
                            
                                <div class="form-group  ">
                                    <label for="search" class="form-label text-decoration-underline">Recherche</label><br>
                                    <div style="display:flex;  flex-direction: row;  ">
                                        <input type="search" name="search" id="" placeholder=" localite " class="form-control d-inline border border-success border-2">
                                        <button type="submit"   name="rechercheLocalite" class=" border border-success btn  btn-sm d-inline border border-2 bg-light ms-1" ><img src="../bootstrap-icons-1.11.1/search.svg" alt="recherche"></button>

                                    </div>
                                </div>

                            
                        </form>
                    </div>
                    <div>
                        <?php
                            include '../Back/localite.php';
                            

                            if(isset($_POST['rechercheLocalite'])){

                                $rec=$_POST['search'];
                                $requette=mysqli_query($con,"SELECT * FROM localite WHERE  Localite LIKE '%".$rec."%';");
                            }else {
                                require '../Back/connexionBase.php';
                                $requette=mysqli_query($con,"SELECT * FROM localite ;");
                            }
                            tableauLocalite($requette);
                
                        ?>
                    </div>


                    <div class="row text-end position-relative bottom-0 end-0">
                            <div class="col-10">
            
                            </div>

                            <a href="localiteInterface.php" class="btn btn-primary mb-3" style="width: 100px;">Actualiser</a>
                    </div>





                </div>
            </div>

        </div>
    </div> 

             
            


</body>
</html>