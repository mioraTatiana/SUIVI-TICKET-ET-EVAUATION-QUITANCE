<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>Pavillon</title>
</head>
<body class="bg-success" >
    <?php include '../Back/connexionBase.php' ?>
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
                    <div class="row border-bottom border-2 border-light p-2 bg-success">
                        <span class=" col-2 " >
                            <img src="../image/LOGO ARMOIRIE DE FIANARANTSOA.jpg" alt=""  style="height: 60px; width: 50px; ">

                        </span>
                            <div class="col-7  text-center">
                                <h6>COMMUNE URBAINE DE FIANARANTSOA</h6>
                                <blockquote class="blockquote "><i>"Soa fianatsa ro mahavokatsa"</i> </blockquote>

                            </div>
                    </div>

                        <div class="row " style=" border-radius: 5px;">
                            <div style="display:flex;   flex-direction:row ; justify-content:center; align-items:center; " class=" col-9 pt-2 pb-2 form-group">
                                <form action="pavillonInterface.php" method="post" >

                                    <div class=" border border-1 border-success  p-2"  style="display:flex;  flex-direction: row; background-color: #B0F2B6;" >

                                        <input type="search" placeholder="N°pavillon" name="search" id="" class="form-control d-inline" style="width: 400px;" >
                                        <button type="submit"   name="recherchePavillon" class=" btn  btn-sm d-inline bg-light ms-2" ><img src="../bootstrap-icons-1.11.1/search.svg" alt="recherche"></button>

                                    </div>

                                </form>

                                <div class="text-center border border-success col-3 "  style="background-color:#B0F2B6;" ;>
                                        <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#pavillonModalAjouter" >
                                            <img src="../bootstrap-icons-1.11.1/person-add.svg" alt="">
                                            Nouveau
                                        </button>
                                    </div>

                            </div>

                            <div>

                                <div class=" modal fade" id="pavillonModalAjouter" aria-hidden="true" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-center" id="pavillonModalA" aria-hidden="true">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <img src="../image/ajouter.png" alt="Ajouter" style=" width: 50px; height:50px" >
                                                <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                                            </div>

                                            
                                                <div class="modal-body">
                                                    <form action="" method="post">
                                                    <label for="numPavillon" class="form-label" >N°pavillon</label><br>
                                                    <input type="text" name="numPavillon" id="" class="form-control"><br>

                                                    <label for="idLocalite"  class="form-label">Localite</label><br>
                                                    <select name="idLocalite" id="" class="form-select" >
        <?php
                                                    $req=mysqli_query($con,'SELECT * FROM localite');
                                                    while ($data=mysqli_fetch_array($req)){
        ?>
                                                    <option value="<?=$data['idLocalite'] ?>"><?=$data['Localite'] ?></option>
        <?php                
                                                    }
        ?>
                            
                                                    </select><br>

                                                    <label for="idMarche" class="form-label" >Place Du Marche</label><br>
                                                    <select name="idMarche" id="" class="form-select" >
        <?php
                                                    $requette=mysqli_query($con,'SELECT * FROM marche');
                                                    while($data=mysqli_fetch_array($requette)){
        ?>
                                                    <option value="<?=$data['idMarche']?>"><?=$data['PlaceDuMarche'] ?></option>
        <?php
                                                    }      
        ?>
                            
                                                    </select><br>
                                                    
                                                    <label for="idProduit" class="form-label" >Produits</label><br>
                                                    <select name="idProduit" id="" class="form-select" >
        <?php
                    
                                                    $query=mysqli_query($con,'SELECT * FROM produit');
                                                    while ($data=mysqli_fetch_array($query)) {
        ?>
                                                    <option value="<?=$data['idProduit'] ?>"> <?=$data['NomDuProduit']?></option>
        <?php                
                                                    }

        ?>               
                                                    </select><br>
                                                    
                                                    <label for="TypeDePavillon" class="form-label">Type De Pavillon</label><br>
                                                    <select name="TypeDePavillon" id="" class="form-select" >
                                                        <option value="Bois">Bois</option>
                                                        <option value="Brique">Brique</option>
                                                        <option value="Tôle">Tôle</option>
                                                        <option value="autre">autre</option>
                                                    </select>

                                                    <label for="numAutorisation" class="form-label">N°Autorisation</label><br>
                                                    <input type="text" name="numAutorisation" id="" class="form-control"><br>

                                                    <label for="DateDautorisation" class="form-label">Date d' autorisation</label><br>
                                                    <input type="date" name="DateDautorisation" id="" class="form-control"><br>

                                                    <label for="numDeliberation" class="form-label">N°Deliberation</label><br>
                                                    <input type="text" name="numDeliberation" id="" class="form-control"><br>

                                                    <label for="DateDeDeliberation" class="form-label">Date de Deliberation</label><br>
                                                    <input type="date" name="DateDeDeliberation" id="" class="form-control" ><br>

                                                </div>

                                                <div class="modal-footer">
                                                    <input type="submit" value="Ajouter" name="ajouterPavillon" class="btn btn-primary" >
                                                    <input type="reset" value="Réinitialiser" class="btn btn-light" >

                                                </div>
                                               </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
 
                        </div>

                        <div class="row ">
                            <?php
                                include '../Back/pavillon.php';
                            if(isset($_POST['recherchePavillon'])){
                                $rec=$_POST['search'];
                                $lister="SELECT numPavillon,pavillon.idLocalite, Localite, pavillon.idMarche, PlaceDuMarche, pavillon.idProduit, TypeDePavillon, NomDuProduit,numAutorisation,DateDautorisation,numDeliberation,DateDeDeliberation FROM pavillon, produit, marche, localite WHERE pavillon.idProduit=produit.idProduit AND pavillon.idMarche=marche.IdMarche AND pavillon.idLocalite=Localite.idLocalite AND pavillon.numPavillon LIKE '%".$rec."%';";
                                $reqRec=mysqli_query($con,$lister);
                            }else{
                                $lister="SELECT numPavillon, Localite, pavillon.idLocalite, pavillon.idMarche , PlaceDuMarche, pavillon.idProduit, TypeDePavillon, NomDuProduit,numAutorisation,DateDautorisation,numDeliberation,DateDeDeliberation  FROM pavillon, produit,marche, localite WHERE pavillon.idProduit=produit.idProduit AND pavillon.idMarche=marche.idMarche AND pavillon.idLocalite=localite.idLocalite;";
                                $reqRec=mysqli_query($con,$lister);

                            }
                            tableauPavillon($reqRec);

                            ?>

                        </div>

                        <div class="row text-end position-relative bottom-0 end-0">
                            <div class="col-10">
            
                            </div>

                            <a href="pavillonInterface.php" class="btn btn-primary mb-3" style="width: 100px;">Actualiser</a>
                        </div>



                </div>


            </div>
    </div>

</body>
</html>