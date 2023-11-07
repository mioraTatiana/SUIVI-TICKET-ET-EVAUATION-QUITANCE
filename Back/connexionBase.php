<?php
    $con=mysqli_connect("localhost","root","","ticketquitance", 3306);
    if(!$con){
        echo 'Votre connexion n \' est pas réussie';
    }
?>