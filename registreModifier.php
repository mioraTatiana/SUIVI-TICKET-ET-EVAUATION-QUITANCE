<?php
    include_once 'connexionBase.php';

    $numFiche=$_GET['numFiche'];
    $Mois=$_GET['Mois'];
    $Annee=$_GET['Annee'];
    $DateDePaiement=$_GET['DateDePaiement'];
    $Tarif=$_GET['Tarif'];
    $numPavillon=$_GET['numPavillon'];
    $CIN=$_GET['CIN'];

    $req=mysqli_query($con,"UPDATE registre SET numFiche='$numFiche', Mois='$Mois', Annee=$Annee, DateDePaiement='$DateDePaiement', Tarif=$Tarif,numPavillon='$numPavillon', CIN=$CIN WHERE  numFiche='$numFiche' ;");

    if($req){
        echo 'Bien modifié';
    }else{
        echo 'Modification non effectué';
    }
    
?>