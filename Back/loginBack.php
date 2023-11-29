<?php
    include 'connexionBase.php';

    $email=$_POST['email'];
    $MotPasse=$_POST['MotPasse'];


    if(isset($_POST['connecterButton'])){
    
        $query=mysqli_query($con,"SELECT email, MotPasse FROM regisseur ");

        while($row=mysqli_fetch_array($query)){
            
            if($row["email"]== $email AND $row['MotPasse']==$MotPasse ){
                header('location: ../suivieTicket/tableauBord.php');
            }else{
                header('location: ../suivieTicket/userNotFound.php');
            }    
        }
    }elseif(isset($_POST['inscrireButton'])){
    
        $query=mysqli_query($con,"INSERT INTO regisseur (email, MotPasse) VALUES ('".$email."','".$MotPasse."') ;");

        if(!$query){
            echo"  Veuillez recommencer il y une erreur";
        }else{
            header ("location: ../suivieTicket/registreInterface.php");
        }
        
    }


?>