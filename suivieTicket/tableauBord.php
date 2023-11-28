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
                <p class="lead text-center border rounded-pill"  style="background-color: #fff9c4;"> 
                    <img src="../image/LOGO ARMOIRIE DE FIANARANTSOA.jpg" alt="armoirie"  class="rounded"> 
    
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
                        <a href="registreQuitance.php" style="text-decoration: none; color: #1a237e ;">Registre</a>
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
            <div class="col-9 bg-light">
            <div class="row border-bottom border-2 border-light p-2 bg-success" >
                        <span class=" col-2 " >
                            <img src="../image/LOGO ARMOIRIE DE FIANARANTSOA.jpg" alt=""  style="height: 60px; width: 50px; ">

                        </span>
                            <div class="col-7  text-center">
                                <h6>COMMUNE URBAINE DE FIANARANTSOA</h6>
                                <blockquote class="blockquote "><i>"Soa fianatsa ro mahavokatsa"</i> </blockquote>

                            </div>
                    </div>
                <div class="row" style="display:flex; margin-top: 120px; justify-content: center; align-items:center; gap:20px;">
                    <div class="rounded text-muted " style="width: 350px; height: 150px; display:flex; flex-direction:column;
                    justify-content: center; align-items:center; background-color: #fff9c4;    border-top: 1px solid grey; border-right: 1px solid grey; border-bottom: 1px solid grey; border-left:6px solid rgb(0, 140, 255)" >
                        <div class="lead "> <span class='m-3'>Nombre de tickets</span> <br> distribués aujourd'hui:</div> 
                        <div style="font-size:40px;">
                            <?php

                                include("nombre.php");
                                echo $Nombre;
                            ?> 

                        </div>
                        
                    </div>
                    <div class="rounded text-muted " style="width: 350px; height: 150px; display:flex; flex-direction:column;
                    justify-content: center; align-items:center; background-color: #fff9c4;    border-top: 1px solid grey; border-right: 1px solid grey; border-bottom: 1px solid grey; border-left:6px solid rgb(0, 140, 255)" >
                        <div class="lead "> <span class=''>Nombre de Loyers</span> <br> <span class='m-1'> payés aujourd'hui:</span> </div> 
                        <div style="font-size:40px;">
                            <?php
                             include("nombre.php");

                                echo $quitance;
                            ?> 

                        </div>
                        
                    </div>

                </div>
            </div>

        </div>
   </div> 
</body>
</html>