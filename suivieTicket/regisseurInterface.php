<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>


    <title>Regisseur interface</title>
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

                    <div class="bg-light p-3 mt-2 h-75 " style="border-radius: 20px;" >

                        <div class="row  border-radius: 5px;" >
                            <div class="form-group col-3 border  border-2 border-success m-3  pb-2 rounded" style="background-color: #B0F2B6;">
                                <form action="regisseurInterface.php" method="post" >

                                    <label for="search" class="form-label text-decoration-underline">Recherche</label><br>
                                    <div style="display:flex;  flex-direction: row;  ">
                                        <input type="search" placeholder="CIN" name="search" id="" class="form-control border border-success border-1 d-inline me-1">
                                        <button type="submit"   name="rechercheRegisseur"  class=" btn  btn-sm d-inline border border-1 border-dark  bg-light " ><img src="../bootstrap-icons-1.11.1/search.svg" alt="recherche"></button>

                                    </div>

                                </form>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-2 pt-4 pb-0 mb-3" >
                                <div class="row" >
                                    <button type="button"  class="btn btn-primary  bottom-0 end-0 mb-0" data-bs-toggle="modal" data-bs-target="#regisseurModalA"><img src="../bootstrap-icons-1.11.1/person-add.svg" alt="ajouter">Nouveau</button>
                                    <a href="regisseurInterface.php" class="btn btn-primary mt-3">Actualiser</a>
                                </div>

                                <div class="modal fade" id="regisseurModalA" aria-hidden="true" >
                                    <div class="modal-dialog ">
                                        <div class="modal-content border border-primary">
                                            <div class="modal-header bg-primary">
                                                <span><img src="../image/ajouter1.png" alt="Ajouter" style=" width: 50px; height:50px"></span>
                                                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close" ></button>
                                            </div>

                                            <div class="form-group">
                                                <div class="modal-body">
                                                    <form action="../Back/regisseur.php" method="POST">
                                                        <label for="CIN" class="form-label " >CIN</label><br>
                                                        <input type="number" name="CIN" id="" class="form-control border border-primary"><br>
                                            
                                                        <label for="Nom" class="form-label" >Nom</label><br>
                                                        <input type="text" name="Nom" id="" class="form-control border border-primary"><br>

                                                        <label for="Prenom" class="form-label">Prénoms</label><br>
                                                        <input type="text" name="Prenom" id="" class="form-control border border-primary"><br>

                                                        <label for="Adresse" class="form-label" >Adresse</label><br>
                                                        <input type="text" name="Adresse" id="" class="form-control border border-primary"><br>

                                                        <label for="Telephone" class="form-label" >Téléphone</label><br>
                                                        <input type="tel" name="Telephone" pattern="[0-9]{10}" class="form-control border border-primary"><br>

                                                        <label for="name">Adresse mail</label><br>
                                                        <input type="text" name="email" class="form-control border border-primary"><br>

                                                        <label for="name">Mot de passe</label><br>
                                                        <input type="text" name="MotPasse" class="form-control border border-primary"><br>

                                                    

                                                </div>

                                                <div class="modal-footer border border-top  border-primary">
                                                        <div class="row  w-100">
                                                            <input type="submit" value="Ajouter" name="ajouterRegisseur" class="btn btn-primary col-5" >
                                                            <div class="col-2"></div>
                                                            <input type="reset" value="Réinitialiser" class="col-5 rounded border border-primary" >
                                                        </div>

                                                </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-3">
                                <?php
                                    include '../Back/regisseur.php';
                                    include '../Back/connexionBase.php';

                                if(isset($_POST['rechercheRegisseur'])){
                                    $rec=$_POST['search'];
                                    $lister="SELECT * FROM regisseur WHERE CIN_regisseur LIKE ".$rec.";";
                                    $req=mysqli_query($con,$lister);
                                }else{
                                    $lister="SELECT * FROM regisseur;";
                                    $req=mysqli_query($con,$lister);
                        
                                }
                                tableauRegisseur($req);

                                ?>
                        </div>

                    </div>

                </div>
                

            </div>
    </div>

</body>
</html>