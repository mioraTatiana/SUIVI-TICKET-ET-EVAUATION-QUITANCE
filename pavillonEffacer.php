<?php
            require 'connexionBase.php';

            $numPavillon=$_GET['numPavillon'];
            $req=mysqli_query($con,"DELETE FROM pavillon WHERE numPavillon='$numPavillon' ;");
            if($req){
             echo ' pavillon bien effacé';
            }else{
             echo' non effacé';
            }
    
?>