<?php
    include_once 'connexionBase.php';

    $crud=$_GET['crud'];

    function listerPavillon(){
        include 'connexionBase.php';
        $lister="SELECT * FROM pavillon;";
        $requette=mysqli_query($con,$lister);
        
        $colonnes = mysqli_fetch_fields($requette);
        for ($i = 0; $i < count($colonnes); $i++) {
            echo ' - ' .$colonnes[$i]->name . ' - ';
        }
        echo '<br>';
    
        while ($data = mysqli_fetch_assoc($requette)) {
            echo $data['numPavillon']  . '    ' .$data['Localite']  . '    ' . $data['PlaceDuMarche'] . '    ' .$data['TypeDeProduits']  . '    ' .$data['CIN']  . '<br>';
        }
    
    }

    if($crud=='c'){
        $numPavillon=$_GET['numPavillon'];
        $Localite=$_GET['Localite'];
        $PlaceDuMarche=$_GET['PlaceDuMarche'];
        $TypeDeProduits=$_GET['TypeDeProduits'];
        $CIN=$_GET['CIN'];
    
        $inserer="INSERT INTO pavillon (numPavillon, Localite, PlaceDuMarche, TypeDeProduits, CIN) VALUES ('$numPavillon', '$Localite', '$PlaceDuMarche', $TypeDeProduits,'$CIN');";
        $req=mysqli_query($con,$inserer);
        if($req){
            listerPavillon();
            echo 'Ajout bien enregistré';
        }else{
            echo 'Erreur d\'enregistrement';
        }
    
    }elseif($crud=='r'){
        listerPavillon();
    }elseif($crud=='u'){
        $numPavillon=$_GET['numPavillon'];
        $Localite=$_GET['Localite'];
        $PlaceDuMarche=$_GET['PlaceDuMarche'];
        $TypeDeProduits=$_GET['TypeDeProduits'];
        $CIN=$_GET['CIN'];
        $modifier= "UPDATE pavillon SET numPavillon='$numPavillon', Localite='$Localite', PlaceDuMarche='$PlaceDuMarche', TypeDeProduits=$TypeDeProduits, CIN=$CIN WHERE numPavillon='$numPavillon';";
        $req=mysqli_query($con,$modifier);
        if($req){
            listerPavillon();
            echo'Modification reussie';
        }else{
            echo'Modification annulée';
        }
    
    }elseif($crud=='d'){
        $numPavillon=$_GET['numPavillon'];
        $req=mysqli_query($con,"DELETE FROM pavillon WHERE numPavillon='$numPavillon' ;");
        if($req){
            listerPavillon();
           echo ' pavillon bien effacé';
        }else{
           echo' non effacé';
        }

    }else{
        echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
    }
?>