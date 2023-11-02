<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produit back</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';

        $crud=$_GET['crud'];

        function tableauProduit($requette){
    ?>
            <table>
                <thead>
                    <th>N°Produit</th>
                    <th>Nom Du Produits</th>
                </thead>
                <tbody>
    <?php    
            while ($data = mysqli_fetch_assoc($requette)) {
    ?>
                
                    <tr>
                        <td><?=$data['IdProduit']?></td>
                        <td><?=$data['NomDuProduits']?></td>
                    </tr>
                
    <?php        
            }
    ?> 
                </tbody>
            </table>       
    <?php     

        }
        function listerProduits(){
            require 'connexionBase.php';

            $req=mysqli_query($con,"SELECT * FROM produit ;");
            tableauProduit($req);
        }

        if($crud=='c'){
            $IdProduit=$_GET['IdProduit'];
            $NomDuProduits=$_GET['NomDuProduits'];
            $req=mysqli_query($con,"INSERT INTO produit  VALUES ($IdProduit,'$NomDuProduits');");
            
            if($req){
                listerProduits();
                echo 'Bien enregistré';
            }else{
                echo 'Ajout non effectué';
            }    

        }elseif($crud=='r'){
            listerProduits();
        }elseif($crud=='s'){
            $rec=$_GET['recherche'];
            $reqRec=mysqli_query($con,"SELECT * FROM produit WHERE IdProduit='".$rec."' ;");
            tableauProduit($reqRec);

        }elseif($crud=='u'){
            $IdProduit=$_GET['IdProduit'];
            $NomDuProduits=$_GET['NomDuProduits'];
            $req=mysqli_query($con,"UPDATE produit SET IdProduit=$IdProduit,NomDuProduits='$NomDuProduits' WHERE IdProduit=$IdProduit;");
            
            if($req){
                listerProduits();
                echo 'Modification bien enregistré';
            }else{
                echo 'Modification non effectué';
            }
        
            
        }elseif($crud=='d'){
            $IdProduit=$_GET['IdProduit'];
            $req=mysqli_query($con,"DELETE FROM produit WHERE  IdProduit='$IdProduit';");
            
            if($req){
                listerProduits();
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