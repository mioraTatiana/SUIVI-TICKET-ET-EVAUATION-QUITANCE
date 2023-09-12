<?php
    include_once 'connexionBase.php';

    $TypeDeProduits=$_GET['TypeDeProduits'];
    $NomDuProduits=$_GET['NomDuProduits'];
    $req=mysqli_query($con,"INSERT INTO produit  VALUES ($TypeDeProduits,'$NomDuProduits');");
    
    if($req){
        echo 'Bien enregistré';
    }else{
        echo 'Ajout non effectué';
    }

?>