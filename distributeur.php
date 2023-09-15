<?php
    include_once 'connexionBase.php';

    $crud=$_GET['crud'];
    
    function listerDistributeur(){
        include 'connexionBase.php';
        $lister="SELECT * FROM distributeur;";
        $requette=mysqli_query($con,$lister);
    
        $colonnes = mysqli_fetch_fields($requette);
        for ($i = 0; $i < count($colonnes); $i++) {
            echo ' - ' .$colonnes[$i]->name . ' - ';
        }
        echo '<br>';

    
        while ($data = mysqli_fetch_assoc($requette)) {
            echo $data['CIN']  . '    ' .$data['Nom']  . '    ' . $data['Prenom'] . '    ' .$data['Adresse']  . '    ' .$data['Telephone']  . '<br>';
        }
    
    }

    if($crud=='c'){
        $CIN=$_GET['CIN'];
        $Nom=$_GET['Nom'];
        $Prenom=$_GET['Prenom'];
        $Adresse=$_GET['Adresse'];
        $Telephone=$_GET['Telephone'];
    

        $inserer="INSERT INTO distributeur (CIN,Nom,Prenom,Adresse,Telephone) VALUES ($CIN, '$Nom','$Prenom','$Adresse',$Telephone);";
        $req=mysqli_query($con,$inserer);
        if($req){
            listerDistributeur();
            echo 'Ajout reussi';
        }else{
            echo 'Erreur d\'enregistrement';
        }
    
    }elseif($crud=='r'){
        listerDistributeur();
    }elseif($crud=='u'){
        $CIN=$_GET['CIN'];
        $Nom=$_GET['Nom'];
        $Prenom=$_GET['Prenom'];
        $Adresse=$_GET['Adresse'];
        $Telephone=$_GET['Telephone'];
    

        $modifier= "UPDATE distributeur SET CIN=$CIN, Nom='$Nom', Prenom='$Prenom', Adresse='$Adresse', Telephone=$Telephone WHERE CIN=$CIN;";
        $req=mysqli_query($con,$modifier);
        if($req){
            listerDistributeur();
            echo 'modification effectuée';
        }else{
            echo 'modification annulée';
        }
    
    }elseif($crud=='d'){
        $CIN=$_GET['CIN'];
        $req=mysqli_query($con,"DELETE FROM distributeur WHERE CIN=$CIN ;");
        if($req){
            listerDistributeur();
            echo ' Distributeur bien effacé';
        }else{
            echo' non effacé';
        }

    }else{
        echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
    }
?>
