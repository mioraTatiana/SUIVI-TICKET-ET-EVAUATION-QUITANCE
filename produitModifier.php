<?php
    include_once 'connexionBase.php';

    $TypeDeProduits=$_GET['TypeDeProduits'];
    $NomDuProduits=$_GET['NomDuProduits'];
    $req=mysqli_query($con,"UPDATE produit SET TypeDeProduits=$TypeDeProduits,NomDuProduits='$NomDuProduits' WHERE TypeDeProduits=$TypeDeProduits;");
    
    if($req){
        echo 'Modification bien enregistré';
    }else{
        echo 'Modification non effectué';
    }

?>