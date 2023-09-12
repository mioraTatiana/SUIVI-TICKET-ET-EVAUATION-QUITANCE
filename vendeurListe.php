<?php
   require 'connexionBase.php';

   $req=mysqli_query($con,"SELECT * FROM vendeur ");
   $affiche=mysqli_fetch_all($req);
   if($affiche){
    echo ' afficher';
   }
?> 