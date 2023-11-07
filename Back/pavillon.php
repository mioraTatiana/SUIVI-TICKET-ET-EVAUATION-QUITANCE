<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pavillon back</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';

        $crud=$_GET['crud'];
        function tableauPavillon($requette){
            ?>        
            <table>
                <thead>
                    <th>N°Pavillon</th>
                    <th>Localité</th>
                    <th>Place du marché</th>
                    <th>Type de pavillon</th>
                    <th>Produits</th>
                    <th>Actions</th>
                </thead>
                <tbody>
        <?php    
                while ($data = mysqli_fetch_assoc($requette)) {
        ?>          
                    
                        <tr>
                            <td><?=$data['numPavillon']?></td> 
                            <td><?=$data['Localite']?></td>
                            <td><?=$data['PlaceDuMarche']?></td>
                            <td><?=$data['TypeDePavillon']?></td> 
                            <td><?=$data['NomDuProduits']?></td>
                            <td><img src="" alt="modifier"> <img src="" alt="supprimer"></td>

                        </tr>
                                
        <?php                        
                }
        ?>
               </tbody>
            </table>
        <?php
    
        }

        function listerPavillon(){
            include 'connexionBase.php';
            $lister="SELECT numPavillon, Localite, PlaceDuMarche, pavillon.IdProduit, TypeDePavillon, NomDuProduits  FROM pavillon, produit,marche, localite WHERE pavillon.IdProduit=produit.IdProduit AND pavillon.idMarche=marche.idMarche AND pavillon.idLocalite=localite.idLocalite;";
            $req=mysqli_query($con,$lister);

            tableauPavillon($req);
        }

        if($crud=='c'){
            $numPavillon=$_GET['numPavillon'];
            $Localite=$_GET['Localite'];
            $idMarche=$_GET['idMarche'];
            $IdProduit=$_GET['IdProduit'];
            $TypeDePavillon=$_GET['TypeDePavillon'];
            $numAutorisation=$_GET['numAutorisation'];
            $DateDautorisation=$_GET['DateDautorisation'];
            $numDeDeliberation=$_GET['numDeliberation'];
            $DateDeDeliberation=$_GET['DateDeDeliberation'];
            
        
            $inserer="INSERT INTO pavillon (numPavillon, Localite, idMarche, IdProduit, TypeDePavillon,numAutorisation,DateDautorisation,numDeliberation,DateDeDeliberation) VALUES ('$numPavillon', '$Localite', '$idMarche', $IdProduit , '$TypeDePavillon',' $numAutorisation',' $DateDautorisation','$numDeDeliberation',' $DateDeDeliberation');";
            $req=mysqli_query($con,$inserer);
            if($req){
                listerPavillon();
                echo 'Ajout bien enregistré';
            }else{
                echo 'Erreur d\'enregistrement';
            }
        
        }elseif($crud=='r'){
            listerPavillon();

        }elseif($crud=='s'){
            $rec=$_GET['recherche'];
            $lister="SELECT numPavillon, Localite, PlaceDuMarche, pavillon.IdProduit, TypeDePavillon, NomDuProduits FROM pavillon, produit, marche, localite WHERE pavillon.IdProduit=produit.IdProduit AND pavillon.idMarche=marche.IdMarche AND pavillon.idLocalite=Localite.idLocalite AND pavillon.numPavillon='".$rec."';";
            $reqRec=mysqli_query($con,$lister);
            tableauPavillon($reqRec);

 
        }elseif($crud=='u'){
            $numPavillon=$_GET['numPavillon'];
            $idLocalite=$_GET['idLocalite'];
            $idMarche=$_GET['idMarche'];
            $IdProduit=$_GET['IdProduit']; 
            $TypeDePavillon=$_GET['TypeDePavillon'];
            $numAutorisation=$_GET['numAutorisation'];
            $DateDautorisation=$_GET['DateDautorisation'];
            $numDeDeliberation=$_GET['numDeliberation'];
            $DateDeDeliberation=$_GET['DateDeDeliberation'];
    
            $modifier= "UPDATE pavillon SET numPavillon='$numPavillon', Localite='$Localite', idMarche='$idMarche', IdProduit=$IdProduit, TypeDePavillon='$TypeDePavillon', numAutorisation='$numAutorisation',DateDautorisation='$DateDautorisation',numDeliberation='$numDeDeliberation' WHERE numPavillon='$numPavillon';";
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
    
</body>
</html>