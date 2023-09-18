<?php
    include 'connexionBase.php';

    $numPavillon=$_GET['numPavillon'];
    $requette="SELECT `numFiche`, `Mois`, `Annee`, `DateDePaiement`, `Tarif`, vendeur.`CIN`, pavillon.numPavillon, `Localite`, `PlaceDuMarche`, `TypeDeProduits`, `Nom`, `Prenom`, `Telephone`, `Adresse`, vendeur.CarteProfessionnelle FROM vendeur, pavillon, registre WHERE pavillon.numPavillon='$numPavillon' AND registre.numPavillon='$numPavillon' AND vendeur.numPavillon='$numPavillon';";
    $rec=mysqli_query($con, $requette);

    while($data=mysqli_fetch_assoc($rec)){
        $numFiche=$data['numFiche'];
        $Mois=$data['Mois']; 
        $Annee =$data['Annee'];
        $DateDePaiement =$data['DateDePaiement']; 
        $Tarif =$data['Tarif']; 
        $CIN=$data['CIN']; 
        $numPavillon=$data['numPavillon']; 
        $Localite =$data['Localite']; 
        $PlaceDuMarche =$data['PlaceDuMarche'];
        $TypeDeProduits =$data['TypeDeProduits']; 
        $Nom=$data['Nom'];
        $Prenom=$data['Prenom'];
        $Telephone =$data['Telephone']; 
        $Adresse=$data['Adresse']; 
        $CarteProfessionnelle=$data['CarteProfessionnelle'];  
    }

    echo 'bien selectionnée';
    echo $numFiche.' ---- '.$CIN. ' '. $numPavillon. ' ----- '.$CarteProfessionnelle ;
    
?>