<?php
    include_once 'connexionBase.php';
    $lister="SELECT * FROM pavillon;";
    $req=mysqli_query($con,$lister);
    if($req){
        echo'affichage reussi';
    }else{
        echo'non affiché';
    }
?>