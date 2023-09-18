<?php
    include_once 'connexionBase.php';

    $crud=$_GET['crud'];


    function listerVendeur(){
        require 'connexionBase.php';

        $lister="SELECT * FROM vendeur ";
        $requette=mysqli_query($con,$lister);
         
        $colonnes = mysqli_fetch_fields($requette);
        for ($i = 0; $i < count($colonnes); $i++) {
            echo ' - ' .$colonnes[$i]->name . ' - ';
        }
        echo '<br>';
     
        while ($data = mysqli_fetch_assoc($requette)) {
            echo $data['CIN']  . '    ' .$data['Nom']  . '    ' . $data['Prenom'] . '    ' .$data['Telephone']. '    ' .$data['Adresse']  . '    ' .$data['CarteProfessionnelle']  . '  ' .$data['numPavillon']  . '<br>';
        }
        if($requette){
           echo ' afficher';
        }
     
    }

    if($crud=='c'){
        $CIN=$_GET['CIN'];
        $Nom=$_GET['Nom'];
        $Prenom=$_GET['Prenom'];
        $Telephone=$_GET['Telephone'];
        $Adresse=$_GET['Adresse'];
        $Carte=$_GET['CarteProfessionnelle'];
        $numPavillon=$_GET['numPavillon'];
    
        $req=mysqli_query($con,"INSERT INTO vendeur (CIN, Nom, Prenom, Telephone, Adresse, CarteProfessionnelle, numPavillon) VALUES ('$CIN','$Nom','$Prenom',$Telephone,'$Adresse','$Carte','$numPavillon')");
    
        if($req){
            listerVendeur();
            echo 'Un étudiant ajouté';
        }else{
            echo 'Ajout non effectué';
        }
    

    }elseif($crud=='r'){
        listerVendeur();
    }elseif($crud=='u'){
        $CIN=$_GET['CIN'];
        $Nom=$_GET['Nom'];
        $Prenom=$_GET['Prenom'];
        $Telephone=$_GET['Telephone'];
        $Adresse=$_GET['Adresse'];
        $Carte=$_GET['CarteProfessionnelle'];
        $numPavillon=$_GET['numPavillon'];
    
        $req=mysqli_query($con,"UPDATE vendeur SET CIN='$CIN', Nom='$Nom', Prenom='$Prenom', Telephone=$Telephone, Adresse='$Adresse', CarteProfessionnelle='$Carte', numPavillon='$numPavillon' WHERE CIN='$CIN';");
        if($req){
            listerVendeur();
            echo 'Modification bien enregistrée';
        }else{
            echo 'Modification annulée';
        }
    
    }elseif($crud=='d'){

        $CIN=$_GET['CIN'];
        $req=mysqli_query($con,"DELETE FROM vendeur WHERE CIN='$CIN' ;");
        if($req){
            listerVendeur();
            echo ' Vendeur bien effacé';
        }else{
            echo' non effacé';
        }

    }else{
        echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
    }
    
?>