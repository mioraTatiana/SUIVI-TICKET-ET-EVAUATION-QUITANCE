<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>localie back</title>
</head>
<body>
    <?php
        include 'connexionBase.php';

        $crud=$_GET['crud'];
        
        function tableauLocalite($requette){
            ?>
            <table>
                <thead>
                    <th>N°Localité</th>
                    <th>Localité</th>
                    <th>Actions</th>
                </thead>
                <tbody>
               
    <?php    
            while ($data = mysqli_fetch_assoc($requette)) {
    ?>
               
                    <tr>
                        <td><?=$data['idLocalite']?></td>
                        <td><?=$data['Localite']?></td>
                        <td>
                            <a href="../suivieTicket/localiteM.php"><img src="" alt="modifier"></a> 
                            <img src="" alt="supprimer">
                        </td>

                    </tr>
                
    <?php        
            }
    ?> 
                </tbody>
            </table>       
    <?php     

        }
        function listerLocalite(){
            require 'connexionBase.php';

            $req=mysqli_query($con,"SELECT * FROM localite ;");
            tableaulocalite($req);
        }

        if($crud=='c'){
            $Localite=$_GET['Localite'];
            $req=mysqli_query($con,"INSERT INTO `localite`(`Localite`) VALUES (' $Localite');");
            
            if($req){
                listerLocalite();
                echo 'Bien enregistré';
            }else{
                echo 'Ajout non effectué';
            }    

        }elseif($crud=='r'){
            listerLocalite();
        }elseif($crud=='s'){
            $rec=$_GET['recherche'];
            $reqRec=mysqli_query($con,"SELECT * FROM localite WHERE idLocalite=".$rec." OR Localite='$rec';");
            tableaulocalite($reqRec);

        }elseif($crud=='u'){
            $idLocalite=$_GET['idLocalite'];
            $Localite=$_GET['Localite'];
            $req=mysqli_query($con,"UPDATE localite SET idLocalite=$idLocalite,Localite='$Localite' WHERE idLocalite=$idLocalite;");
            
            if($req){
                listerLocalite();
                echo 'Modification bien enregistré';
            }else{
                echo 'Modification non effectué';
            }
        
            
        }elseif($crud=='d'){
            $idLocalite=$_GET['idLocalite'];
            $req=mysqli_query($con,"DELETE FROM localite WHERE  idLocalite='$idLocalite';");
            
            if($req){
                listerLocalite();
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