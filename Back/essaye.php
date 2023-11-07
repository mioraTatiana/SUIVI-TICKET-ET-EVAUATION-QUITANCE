<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        include 'connexionBase.php';

        
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
                            <a href="../suivieTicket/localiteModifier.php?idLocalite=<?php echo $data['idLocalite']; ?>"><img src="" alt="modifier"></a> 
                            <a href="essaye.php?idLocalite=<?php echo $data['idLocalite']; ?>"><img src="" alt="supprimer" name="supprimerLocalite" ></a>
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

        if(isset($_GET["supprimerLocalite"])){
            $idLocalite=$_GET['idLocalite'];
            $req=mysqli_query($con,"DELETE FROM localite WHERE  idLocalite='$idLocalite';");
            
            if($req){
                listerLocalite();
                echo ' effacé';
            }else{
                echo'non effacé';
            }
        }else{
            echo ' allo';
        }
        echo ' ooooo';
?>
        <?php listerLocalite() ?>
</body>
</html>