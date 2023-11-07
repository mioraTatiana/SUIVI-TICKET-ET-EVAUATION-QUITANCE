<?php
    include 'connexionBase.php';

    $email=$_POST['email'];
    $passWord=$_POST['passWord'];

    if(isset($_GET['connecterButton'])){
        $query=mysqli_query($con,"SELECT * FROM login WHERE email='".$email."' AND passWord='".$passWord."' ");

        if(!$query){
            header ("location: ../suivieTicket/userNotFound.php");
        }else{
            header ("location: ../suivieTicket/registreQuitance.php");
        }
    }elseif(isset($_GET['inscrireButton'])){
        $query=mysqli_query($con,"INSERT INTO login VALUES ('".$email."','".$passWord."') ;");
        if(!$query){
            echo"  Veuillez recommencer il y une erreur";
        }else{
            header ("location: ../suivieTicket/registreQuitance.php");
        }
        
    }


?>