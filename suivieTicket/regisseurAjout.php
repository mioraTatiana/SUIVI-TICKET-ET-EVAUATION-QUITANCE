<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">*
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>Ajouter un regisseur</title>
</head>
<body>
                                <div class="" id="regisseurModalA" >
                                    <div class="modal-dialog ">
                                        <div class="modal-content border border-primary">
                                            <div class="modal-header bg-primary">
                                                <span><img src="../image/ajouter1.png" alt="Ajouter" style=" width: 50px; height:50px"></span>
                                                <a href="../index.html" class="btn-close " data-bs-dismiss="modal" aria-label="Close" ></a>
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
</body>
</html>