<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>produit front</title>
</head>
<body>
    <div class="container-fluid h-100">
        <div class="row">
            <div class="col-3 bg-success p-3" >
                <p class="lead text-center border rounded-pill"  style="background-color: #fff9c4;"> 
    
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

                <div class="row mb-3 " style=" display: flex; justify-content:center; align-items:center">
                    <div class="col-5   rounded shadow  mt-3" style=" border:  2px solid rgba(128, 128, 128, 0.377); background-color: #b0f2b5d8;"  >
                        <div class="form-group" >
                            <span><img src="../image/ajouter1.png" alt="Ajouter marche" style="width:40px; height:40px; " ></span>
                            
                            <form action="../Back/marche.php" method="POST" >

                                <label for="PlaceDuMarche" class="form-label">Place Du Marche</label><br>
                                <input type="text" name="PlaceDuMarche" id="" class="form-control"><br>

                                <div class="d-flex justify-content-end">
                                    <input type="submit"  value="Ajouter" class="btn btn-primary mb-2" name="ajouterMarche" >
                                </div>

                            </form>
                        </div>

                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 rounded   shadow" style=" border:  2px solid rgba(128, 128, 128, 0.377); background-color: #B0F2B6;" >
                        <div class="form-group" >
                            <form action="marcheInterface.php" method="post" >
                                <label for="search" class="form-label text-decoration-underline" >Recherche</label><br>
                                <div class="d-flex mb-2">
                                    <div class="w-100">
                                        <input type="search" name="search" id="" class="form-control" >
                                    </div>
                                    <div class="flex-shrink-1 ms-2">
                                        <button type="submit"  name="rechercheMarche" class="border border-1 " ><img src="../bootstrap-icons-1.11.1/search.svg" alt="recherche" style="width: 30px; height: 30px;;" ></button>

                                    </div>
                                </div>                                
                            </form>
                        </div>

                    </div>
                </div>

                <div>
                    <?php
                    require '../Back/connexionBase.php';
                    include'../Back/marche.php';

                    if(isset($_POST['rechercheMarche'])){
                        $rec=$_POST['search'];
                        $req=mysqli_query($con,"SELECT * FROM marche WHERE PlaceDuMarche LIKE '%".$rec."%';");

                    }else {
                        
                        $req=mysqli_query($con,"SELECT * FROM marche ;");
                    }  
                    tableauMarche($req);
  
            
                    ?>
                </div>

                <div class="row text-end position-relative bottom-0 end-0">
                            <div class="col-10">
            
                            </div>

                            <a href="marcheInterface.php" class="btn btn-primary mb-3" style="width: 100px;">Actualiser</a>
                    </div>





            </div>

        </div>
    </div>

</body>
</html>