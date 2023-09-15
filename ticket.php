<?php
include_once 'connexionBase.php';

$crud=$_GET['crud'];

function listerTicket(){
    include 'connexionBase.php';
    $lister="SELECT * FROM registreticket;";
    $req=mysqli_query($con,$lister);

    $colonnes = mysqli_fetch_fields($req);

    for ($i = 0; $i < count($colonnes); $i++) {
        echo $colonnes[$i]->name . ' - ';
    }
    echo '<br>';

    while ($data = mysqli_fetch_assoc($req)) {
        echo $data['DateDeDistribution'] . '    ' . $data['CIN'] . '    ' . $data['NombreDeTicket'] . '<br>';
    }

}

if($crud=='c'){

    $CIN=$_GET['CIN'];
    $DateDeDistribution=$_GET['DateDeDistribution'];
    $NombreDeTicket=$_GET['NombreDeTicket'];

    $inserer="INSERT INTO registreTicket (DateDeDistribution, CIN, NombreDeTicket) VALUES ('$DateDeDistribution', $CIN, '$NombreDeTicket');";
    $req=mysqli_query($con,$inserer);
    if($req){
        listerTicket();
        echo 'Ajout bien enregistré';
    }else{
        echo 'Erreur d\'enregistrement';
    }

}elseif($crud=='r'){
    listerTicket();
}elseif($crud=='u'){
    // seule le nombre de jour est modifiable
    $CIN=$_GET['CIN'];
    $DateDeDistribution=$_GET['DateDeDistribution'];
    $NombreDeTicket=$_GET['NombreDeTicket'];

    $modifier= "UPDATE registreTicket SET  NombreDeTicket=$NombreDeTicket, CIN=$CIN, DateDeDistribution='$DateDeDistribution' WHERE  DateDeDistribution='$DateDeDistribution' and CIN=$CIN;";
    $req=mysqli_query($con,$modifier);
    if($req){
        listerTicket();
        echo 'modification bien enregistré';
    }else{
        echo 'modification annulée';
    }

}elseif($crud=='d'){
    $CIN=$_GET['CIN'];
    $DateDeDistribution=$_GET['DateDeDistribution'];

    $req=mysqli_query($con,"DELETE FROM registreticket WHERE  DateDeDistribution='$DateDeDistribution' and CIN=$CIN;");
    if($req){
        listerTicket();
        echo ' ticket bien effacé';
    }else{
        echo' non effacé';
    }

}else{
    echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
}

?>