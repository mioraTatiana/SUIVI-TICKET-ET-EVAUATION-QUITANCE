<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marche back</title>
</head>
<body>
    <?php
        include 'connexionBase.php';

        $crud=$_GET['crud'];
        
        function tableauMarche($requette){
            ?>
            <table>
                <thead>
                    <th>N°Marché</th>
                    <th>Place de marché</th>
                </thead>
               
    <?php    
            while ($data = mysqli_fetch_assoc($requette)) {
    ?>
                <tbody>
                    <tr>
                        <td><?=$data['idMarche']?></td>
                        <td><?=$data['PlaceDuMarche']?></td>
                    </tr>
                </tbody>
    <?php        
            }
    ?> 
            </table>       
    <?php     

        }
        function listerMarche(){
            require 'connexionBase.php';

            $req=mysqli_query($con,"SELECT * FROM marche ;");
            tableauMarche($req);
        }

        if($crud=='c'){
            $PlaceDuMarche=$_GET['PlaceDuMarche'];
            $req=mysqli_query($con,"INSERT INTO `marche`(`PlaceDuMarche`) VALUES (' $PlaceDuMarche');");
            
            if($req){
                listerMarche();
                echo 'Bien enregistré';
            }else{
                echo 'Ajout non effectué';
            }    

        }elseif($crud=='r'){
            listerMarche();
        }elseif($crud=='s'){
            $rec=$_GET['recherche'];
            $reqRec=mysqli_query($con,"SELECT * FROM marche WHERE idMarche=".$rec." OR PlaceDuMarche='".$rec."';");
            tableauMarche($reqRec);

        }elseif($crud=='u'){
            $idMarche=$_GET['idMarche'];
            $PlaceDuMarche=$_GET['PlaceDuMarche'];
            $req=mysqli_query($con,"UPDATE marche SET idMarche=$idMarche, PlaceDuMarche='$PlaceDuMarche' WHERE idMarche=$idMarche;");
            
            if($req){
                listerMarche();
                echo 'Modification bien enregistré';
            }else{
                echo 'Modification non effectué';
            }
        
            
        }elseif($crud=='d'){
            $idMarche=$_GET['idMarche'];
            $req=mysqli_query($con,"DELETE FROM marche WHERE  idMarche='$idMarche';");
            
            if($req){
                listerMarche();
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