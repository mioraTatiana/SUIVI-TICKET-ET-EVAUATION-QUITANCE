<?php
    include("../Back/connexionBase.php");
    $timeS=time();
    $rech=date("Y-m-d",$timeS);
    $Nombre=0;
    $requette=mysqli_query($con,"SELECT NombreDeTicket, sum(NombreDeTicket) as somme FROM registreTicket WHERE DateDeDistribution= '$rech' ;");
    while($row=mysqli_fetch_array($requette)){
        $Nombre=$row['somme']. " " ;
    }

    $quitance=0;
    $requette=mysqli_query($con,"SELECT numFiche FROM registre WHERE DateDePaiement= '$rech' ;");
    while($row1=mysqli_fetch_array($requette)){
        $quitance=$quitance+ 1;
        $row1['numFiche'] ;
    }
    

    
?>