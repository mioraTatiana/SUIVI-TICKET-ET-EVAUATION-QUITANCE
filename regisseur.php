<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regisseur back</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';

        $crud=$_GET['crud'];

        function tableauRegisseur($requette){
        ?>

            <table>
                <thead>
                    <th>CIN</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                </thead>
                <tbody>
            
        <?php
                while ($data = mysqli_fetch_assoc($requette)) {
        ?>
                
                    <tr>
                        <td><?=$data['CIN']?></td>
                        <td><?=$data['Nom']?></td>
                        <td><?=$data['Prenom']?></td>
                        <td><?=$data['Adresse']?></td>
                        <td><?=$data['Telephone']?></td>
                    </tr>
                
        <?php
                }
        ?>
            </tbody>
            </table>
        <?php    
    
        }

        
        function listerRegisseur(){
            include 'connexionBase.php';
            $lister="SELECT * FROM regisseur;";
            $req=mysqli_query($con,$lister);
            tableauRegisseur($req);
        
        }
    
        if($crud=='c'){
            $CIN=$_GET['CIN'];
            $Nom=$_GET['Nom'];
            $Prenom=$_GET['Prenom'];
            $Adresse=$_GET['Adresse'];
            $Telephone=$_GET['Telephone'];
        

            $inserer="INSERT INTO regisseur (CIN,Nom,Prenom,Adresse,Telephone) VALUES ($CIN, '$Nom','$Prenom','$Adresse',$Telephone);";
            $req=mysqli_query($con,$inserer);
            if($req){
                listerregisseur();
                echo 'Ajout reussi';
            }else{
                echo 'Erreur d\'enregistrement';
            }
        
        }elseif($crud=='r'){
            listerregisseur();
        }elseif($crud=='s'){
            $rec=$_GET['recherche'];
            $lister="SELECT * FROM regisseur WHERE CIN='".$rec."';";
            $req=mysqli_query($con,$lister);
            tableauRegisseur($req);

        }elseif($crud=='u'){
            $CIN=$_GET['CIN'];
            $Nom=$_GET['Nom'];
            $Prenom=$_GET['Prenom'];
            $Adresse=$_GET['Adresse'];
            $Telephone=$_GET['Telephone'];
        

            $modifier= "UPDATE regisseur SET CIN=$CIN, Nom='$Nom', Prenom='$Prenom', Adresse='$Adresse', Telephone=$Telephone WHERE CIN=$CIN;";
            $req=mysqli_query($con,$modifier);
            if($req){
                listerregisseur();
                echo 'modification effectuée';
            }else{
                echo 'modification annulée';
            }
        
        }elseif($crud=='d'){
            $CIN=$_GET['CIN'];
            $req=mysqli_query($con,"DELETE FROM regisseur WHERE CIN=$CIN ;");
            if($req){
                listerregisseur();
                echo ' regisseur bien effacé';
            }else{
                echo' non effacé';
            }

        }else{
            echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
        }
    ?>

</body>
</html>