<?php
    include 'connexionBase.php';

    $email=$_POST['email'];
    $passWord=$_POST['passWord'];


    if(isset($_POST['connecterButton'])){
    
        $query=mysqli_query($con,"SELECT * FROM login ");
        while($row=mysqli_fetch_array($query)){
            if($row["email"]== $email AND $row['passWord']==$passWord ){
                header('location: ../suivieTicket/registreInterface.php');
            }else{
                header('location: ../suivieTicket/userNotFound.php');
            }    
        }
    }elseif(isset($_POST['inscrireButton'])){
    
        $query=mysqli_query($con,"INSERT INTO login (email, passWord) VALUES ('".$email."','".$passWord."') ;");
        if(!$query){
            echo"  Veuillez recommencer il y une erreur";
        }else{
            header ("location: ../suivieTicket/registreInterface.php");
        }
        
    }


?>