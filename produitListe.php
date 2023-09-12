<?php
   require 'connexionBase.php';

   $req=mysqli_query($con,"SELECT * FROM produit ;");
   
   if($req){
    echo ' afficher';
   }else{
    echo'non afficher';
   }
?> 