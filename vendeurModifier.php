<?php
    require 'connexionBase.php';

    $cin=$_GET['CIN'];
    $Nom=$_GET['Nom'];
    $Prenom=$_GET['Prenom'];
    $Telephone=$_GET['Telephone'];
    $Adresse=$_GET['Adresse'];
    $Carte=$_GET['CarteProfessionnelle'];

    $req=mysqli_query($con,"UPDATE vendeur SET CIN='$cin', Nom='$Nom', Prenom='$Prenom', Telephone=$Telephone, Adresse='$Adresse', CarteProfessionnelle='$Carte' WHERE CIN='$cin';");
    if($req){
        echo 'Modification bien enregistrée';
    }else{
        echo 'Modification annulée';
    }
?>