<?php
    include_once 'connexionBase.php';

    $crud=$_GET['crud'];
    function listerProduits(){
        require 'connexionBase.php';

        $requette=mysqli_query($con,"SELECT * FROM produit ;");
        $colonnes = mysqli_fetch_fields($requette);
        for ($i = 0; $i < count($colonnes); $i++) {
            echo $colonnes[$i]->name . ' - ';
        }
        echo '<br>';
     
        while ($data = mysqli_fetch_assoc($requette)) {
           echo $data['TypeDeProduits'] . ' - ' . $data['NomDuProduits'] . ' <br>';
        }
        
        if($requette){
          echo ' afficher';
        }else{
          echo'non afficher';
        }
     
    }

    if($crud=='c'){
        $TypeDeProduits=$_GET['TypeDeProduits'];
        $NomDuProduits=$_GET['NomDuProduits'];
        $req=mysqli_query($con,"INSERT INTO produit  VALUES ($TypeDeProduits,'$NomDuProduits');");
        
        if($req){
            listerProduits();
            echo 'Bien enregistré';
        }else{
            echo 'Ajout non effectué';
        }    

    }elseif($crud=='r'){
        listerProduits();
    }elseif($crud=='u'){
        $TypeDeProduits=$_GET['TypeDeProduits'];
        $NomDuProduits=$_GET['NomDuProduits'];
        $req=mysqli_query($con,"UPDATE produit SET TypeDeProduits=$TypeDeProduits,NomDuProduits='$NomDuProduits' WHERE TypeDeProduits=$TypeDeProduits;");
        
        if($req){
            listerProduits();
            echo 'Modification bien enregistré';
        }else{
            echo 'Modification non effectué';
        }
    
        
    }elseif($crud=='d'){
        $TypeDeProduits=$_GET['TypeDeProduits'];
        $req=mysqli_query($con,"DELETE FROM produit WHERE  TypeDeProduits='$TypeDeProduits';");
        
        if($req){
            listerProduits();
            echo ' effacé';
        }else{
            echo'non effacé';
        }
     
    }else{
        echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
    }
?>