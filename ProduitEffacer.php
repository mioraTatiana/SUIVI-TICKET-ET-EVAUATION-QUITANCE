<?php
   require 'connexionBase.php';

   $TypeDeProduits=$_GET['TypeDeProduits'];
   $req=mysqli_query($con,"DELETE FROM produit WHERE  TypeDeProduits='$TypeDeProduits';");
   
   if($req){
    echo ' effacé';
   }else{
    echo'non effacé';
   }
?> 