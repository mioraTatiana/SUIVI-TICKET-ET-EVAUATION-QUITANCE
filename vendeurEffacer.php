<?php

    try {
        require 'connexionBase.php';

        $cin=$_GET['CIN'];
        $req=mysqli_query($con,"DELETE FROM vendeur WHERE CIN='$cin' ;");
        if($req){
         echo ' Vendeur bien effacé';
        }else{
         echo' non effacé';
        }
     
    } catch (Exception $e) {
        
        echo $e->getMessage();
    }
?> 