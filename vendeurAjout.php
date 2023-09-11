<?php
    include_once 'connexionBase.php';

    $cin=$_GET['CIN'];
    $Nom=$_GET['Nom'];
    $Prenom=$_GET['Prenom'];
    $Telephone=$_GET['Telephone'];
    $Adresse=$_GET['Adresse'];
    $Carte=$_GET['CarteProfessionnelle'];

    $req=mysqli_query($con,"INSERT INTO vendeur (CIN, Nom, Prenom, Telephone, Adresse, CarteProfessionnelle) VALUES ('$cin','$Nom','$Prenom',$Telephone,'$Adresse','$Carte')");

    if($req){
        echo 'Un étudiant ajouté';
    }else{
        echo 'Ajout non effectué';
    }
    
?>