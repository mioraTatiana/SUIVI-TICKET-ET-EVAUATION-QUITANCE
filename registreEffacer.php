<?php
   require 'connexionBase.php';

   $numFiche=$_GET['numFiche'];
   $req=mysqli_query($con,"DELETE FROM registre WHERE  numFiche='$numFiche';");
   
   if($req){
    echo ' effacé';
   }else{
    echo'non effacé';
   }
?> 