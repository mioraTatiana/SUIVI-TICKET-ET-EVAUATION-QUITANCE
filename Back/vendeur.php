<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendeur back</title>
</head>
<body>
    <?php
        include_once 'connexionBase.php';

        $crud=$_GET['crud'];

        function tableauVendeur($requette){
            ?>      
            <table>
                <thead>
                    <th>CIN</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Adresse</th> 
                    <th>Carte Professionnelle</th>
                    <th>N°pavillon</th>
                    <th>Actions</th>
                </thead>
                <tbody>
          
    <?php    
            while ($data = mysqli_fetch_assoc($requette)) {
    ?>          
                
                    <tr>
                        <td><?=$data['CIN']?></td>
                        <td><?=$data['Nom']?></td>
                        <td><?=$data['Prenom']?></td>
                        <td><?=$data['Telephone']?></td>
                        <td><?=$data['Adresse']?></td>
                        <td><?=$data['CarteProfessionnelle']?></td>
                        <td><?=$data['numPavillon']?></td>
                        <td><img src="" alt="modifier"> <img src="" alt="supprimer"></td>
                    </tr>
                
               
    <?php
            }
    ?> 
               </tbody>
            </table>
    <?php     

        }

        function listerVendeur(){
            require 'connexionBase.php';

            $lister="SELECT * FROM vendeur ";
            $req=mysqli_query($con,$lister);
            tableauVendeur($req);
        }

        if($crud=='c'){
            $CIN=$_GET['CIN'];
            $Nom=$_GET['Nom'];
            $Prenom=$_GET['Prenom'];
            $Telephone=$_GET['Telephone'];
            $Adresse=$_GET['Adresse'];
            $Carte=$_GET['CarteProfessionnelle'];
            $numPavillon=$_GET['numPavillon'];
        
            $req=mysqli_query($con,"INSERT INTO vendeur (CIN, Nom, Prenom, Telephone, Adresse, CarteProfessionnelle, numPavillon) VALUES ('$CIN','$Nom','$Prenom',$Telephone,'$Adresse','$Carte','$numPavillon')");
        
            if($req){
                listerVendeur();
                echo 'Un étudiant ajouté';
            }else{
                echo 'Ajout non effectué';
            }
        

        }elseif($crud=='r'){
            listerVendeur();
        }elseif($crud=='s'){
            $rec=$_GET['recherche'] ;
            $lister="SELECT * FROM vendeur WHERE CIN='".$rec."' OR Nom='".$rec."' OR Prenom='".$rec."' ;";
            $reqRec=mysqli_query($con,$lister);
            tableauVendeur($reqRec);

        }elseif($crud=='u'){
            $CIN=$_GET['CIN'];
            $Nom=$_GET['Nom'];
            $Prenom=$_GET['Prenom'];
            $Telephone=$_GET['Telephone'];
            $Adresse=$_GET['Adresse'];
            $Carte=$_GET['CarteProfessionnelle'];
            $numPavillon=$_GET['numPavillon'];
        
            $req=mysqli_query($con,"UPDATE vendeur SET CIN='$CIN', Nom='$Nom', Prenom='$Prenom', Telephone=$Telephone, Adresse='$Adresse', CarteProfessionnelle='$Carte', numPavillon='$numPavillon' WHERE CIN='$CIN';");
            if($req){
                listerVendeur();
                echo 'Modification bien enregistrée';
            }else{
                echo 'Modification annulée';
            }
        
        }elseif($crud=='d'){

            $CIN=$_GET['CIN'];
            $req=mysqli_query($con,"DELETE FROM vendeur WHERE CIN='$CIN' ;");
            if($req){
                listerVendeur();
                echo ' Vendeur bien effacé';
            }else{
                echo' non effacé';
            }

        }else{
            echo'vous devez choisir entre c-r-u-d, veuillez reessayer';
        }
        
    ?>
</body>
</html>