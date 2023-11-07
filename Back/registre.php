<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';

        $crud=$_GET['crud'];

        function tableauRegitre($requette){
    ?>

            <table class="registre">
                <thead>
                    <th>Numéro de la fiche</th>
                    <th>Mois</th>
                    <th>Année</th>
                    <th>Date de paiement</th>
                    <th>Tarifs</th>
                    <th>N°pavillon</th>
                    <th>Noms et prénoms</th>
                    <th>CIN</th>
                    <th>N°Quitance</th>
                    <th>Actions</th>
                </thead>
                <tbody>
    <?php
                while ($data = mysqli_fetch_assoc($requette)) {
    ?>
                    <tr>
                        <td><?=$data['numFiche']?></td>
                        <td><?=$data['Mois']?></td> 
                        <td><?=$data['Annee']?></td>
                        <td><?=$data['DateDePaiement'] ?></td>
                        <td><?=$data['Tarif']?></td> 
                        <td><?=$data['numPavillon'] ?></td> 
                        <td><?php echo '' .$data['Nom']. ' ' .$data['Prenom'] ?></td>
                        <td><?= $data['CIN']?></td>
                        <td><?=$data['numQuitance']?></td>
                        <td><img src="" alt="modifier"> <img src="" alt="supprimer"></td>

                    </tr>
    <?php           
                }
                            
    ?>
                </tbody>
            </table>

            
    <?php

        }
        function listerRegistre(){
            include 'connexionBase.php';
            $lister="SELECT registre.numFiche, mois.Mois, Annee, DateDePaiement, Tarif,registre.numPavillon, registre.CIN, Nom, Prenom, numQuitance FROM `registre`, vendeur, mois WHERE registre.CIN=vendeur.CIN AND registre.idMois=mois.idMois GROUP BY registre.numPavillon, Annee, registre.idMois ORDER BY Annee, registre.idMois; ";
            $req=mysqli_query($con,$lister);
            tableauRegitre($req);
                    
        
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
        }elseif($crud=='s'){
            $rec=$_GET['recherche'];
            $lister="SELECT registre.numFiche, mois.Mois, Annee, DateDePaiement, Tarif,registre.numPavillon, registre.CIN, Nom, Prenom, numQuitance FROM `registre`, vendeur, mois WHERE registre.CIN=vendeur.CIN AND registre.idMois=mois.idMois AND ( registre.CIN='".$rec."' OR registre.numFiche ='".$rec."' OR registre.Annee=".$rec." OR registre.idMois=".$rec.") GROUP BY registre.numPavillon, Annee, registre.idMois ORDER BY Annee, registre.idMois;";
            $reqRec=mysqli_query($con,$lister);
            tableauRegitre($reqRec);



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
            echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
        }  

        
    ?>
    
</body>
</html>
