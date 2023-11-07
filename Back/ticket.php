<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticket back</title>
</head>
<body>
    <?php
    include_once 'connexionBase.php';

    $crud=$_GET['crud'];

    function tableauTicket($requette){
        ?>  
        <table>
            <thead>
                <th>Date De Distribution</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>NombreDeTicket</th>
                <th>Actions</th>
            </thead>
            <tbody>
        
<?php 
        while ($data = mysqli_fetch_assoc($requette)) {
?>          
            
                <tr>
                    <td><?=$data['DateDeDistribution']?></td>
                    <td><?=$data['Nom']?></td>
                    <td><?=$data['Prenom']?></td>
                    <td><?=$data['NombreDeTicket']?></td>
                    <td><img src="" alt="modifier"> <img src="" alt="supprimer"></td>
                </tr>
            
<?php                    
        }
?>
        </tbody>
        </table>
<?php         

    }


    function listerTicket(){
        include 'connexionBase.php';
        $lister="SELECT DateDeDistribution, NombreDeTicket, Nom, Prenom FROM registreticket, regisseur WHERE regisseur.CIN= registreticket.CIN";
        $req=mysqli_query($con,$lister);
        tableauTicket($req);

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
    }elseif($crud=='t'){
        $rec=date('Y-M-D');
        // date_format($rec,'YYYY-MM-DD');
        $lister="SELECT SUM(NombreDeTicket) FROM registreticket WHERE DateDeDistribution='".$rec."')";
        $req=mysqli_query($con,$lister);
        tableauTicket($req);

    }elseif($crud=='s'){ 
        $rec=$_GET['recherche'];
        $lister="SELECT DateDeDistribution, NombreDeTicket, Nom, Prenom FROM registreticket, regisseur WHERE regisseur.CIN= registreticket.CIN AND (DateDeDistribution='".$rec."')";
        $req=mysqli_query($con,$lister);
        tableauTicket($req);
   
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
</body>
</html>