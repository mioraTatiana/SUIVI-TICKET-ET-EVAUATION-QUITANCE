<?php
    include_once 'connexionBase.php';

    $numFiche=$_GET['numFiche'];
    $Mois=$_GET['Mois'];
    $Annee=$_GET['Annee'];
    $DateDePaiement=$_GET['DateDePaiement'];
    $Tarif=$_GET['Tarif'];
    $numPavillon=$_GET['numPavillon'];
    $CIN=$_GET['CIN'];

    $req=mysqli_query($con,"INSERT INTO registre (numFiche, Mois, Annee, DateDePaiement, Tarif,numPavillon, CIN) VALUES ('$numFiche','$Mois',$Annee,'$DateDePaiement',$Tarif,'$numPavillon',$CIN)");

    if($req){
        echo 'Bien enregistré';
    }else{
        echo 'Ajout non effectué';
    }
    
?>