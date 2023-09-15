<?php
    include_once 'connexionBase.php';

    $crud=$_GET['crud'];

    function listerRegistre(){
        include 'connexionBase.php';
        $lister="SELECT * FROM registre ";
        $requette=mysqli_query($con,$lister);
     
         
        $colonnes = mysqli_fetch_fields($requette);
        for ($i = 0; $i < count($colonnes); $i++) {
            echo ' - ' .$colonnes[$i]->name . ' - ';
        }
        echo '<br>';
     
        while ($data = mysqli_fetch_assoc($requette)) {
            echo $data['numFiche']  . '    ' .$data['Mois']  . '    ' . $data['Annee'] . '    ' .$data['DateDePaiement']  . '    ' .$data['Tarif']  . '   ' .$data['numPavillon']  . '   ' .$data['CIN']  . '<br>';
        }
     
        if($requette){
         echo ' afficher';
        }
     
    }

    if($crud=='c'){
        $numFiche=$_GET['numFiche'];
        $Mois=$_GET['Mois'];
        $Annee=$_GET['Annee'];
        $DateDePaiement=$_GET['DateDePaiement'];
        $Tarif=$_GET['Tarif'];
        $numPavillon=$_GET['numPavillon'];
        $CIN=$_GET['CIN'];
    
        $req=mysqli_query($con,"INSERT INTO registre (numFiche, Mois, Annee, DateDePaiement, Tarif,numPavillon, CIN) VALUES ('$numFiche','$Mois',$Annee,'$DateDePaiement',$Tarif,'$numPavillon',$CIN)");
    
        if($req){
            listerRegistre();
            echo 'Bien enregistré';
        }else{
            echo 'Ajout non effectué';
        }
    
        
    }elseif($crud=='r'){
        listerRegistre();
    }elseif($crud=='u'){
        $numFiche=$_GET['numFiche'];
        $Mois=$_GET['Mois'];
        $Annee=$_GET['Annee'];
        $DateDePaiement=$_GET['DateDePaiement'];
        $Tarif=$_GET['Tarif'];
        $numPavillon=$_GET['numPavillon'];
        $CIN=$_GET['CIN'];
    
        $req=mysqli_query($con,"UPDATE registre SET numFiche='$numFiche', Mois='$Mois', Annee=$Annee, DateDePaiement='$DateDePaiement', Tarif=$Tarif,numPavillon='$numPavillon', CIN=$CIN WHERE  numFiche='$numFiche' ;");
    
        if($req){
            listerRegistre();
            echo 'Bien modifié';
        }else{
            echo 'Modification non effectué';
        }
    
    }elseif($crud=='d'){
        $numFiche=$_GET['numFiche'];
        $req=mysqli_query($con,"DELETE FROM registre WHERE  numFiche='$numFiche';");
        
        if($req){
            listerRegistre();
            echo ' effacé';
        }else{
            echo'non effacé';
        }
     
    }else{

    }  echo'vous devez choisir entre c-r-u-d, veuillez reessayer';

    
?>