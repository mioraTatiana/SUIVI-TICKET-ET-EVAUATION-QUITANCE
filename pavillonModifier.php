<?php
    include_once 'connexionBase.php';

    $numPavillon=$_GET['numPavillon'];
    $localite=$_GET['Localite'];
    $PlaceDuMarche=$_GET['PlaceDuMarche'];
    $TypeDeProduits=$_GET['TypeDeProduits'];
    $cin=$_GET['CIN'];
    $modifier= "UPDATE pavillon SET numPavillon='$numPavillon', Localite='$localite', PlaceDuMarche='$PlaceDuMarche', TypeDeProduits=$TypeDeProduits, CIN=$cin WHERE numPavillon='$numPavillon';";
    $req=mysqli_query($con,$modifier);
    if($req){
        echo'Modification reussie';
    }else{
        echo'Modification annulée';
    }
?>