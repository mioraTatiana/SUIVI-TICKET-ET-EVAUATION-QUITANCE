<?php
    include_once 'connexionBase.php';

    $numPavillon=$_GET['numPavillon'];
    $localite=$_GET['Localite'];
    $PlaceDuMarche=$_GET['PlaceDuMarche'];
    $TypeDeProduits=$_GET['TypeDeProduits'];
    $cin=$_GET['CIN'];
    $inserer="INSERT INTO pavillon (numPavillon, Localite, PlaceDuMarche, TypeDeProduits, CIN) VALUES ('$numPavillon', '$localite', '$PlaceDuMarche', $TypeDeProduits,'$cin');";
    $req=mysqli_query($con,$inserer);
    if($req){
        echo 'Ajout bien enregistré';
    }else{
        echo 'Erreur d\'enregistrement';
    }
?>