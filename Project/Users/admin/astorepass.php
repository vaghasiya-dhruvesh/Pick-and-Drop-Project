<?php
    Session_start();
    $id=$_SESSION['emailid'];
    $npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
    if($npass==$cpass){
        include '../dbcon.php';
        $query="update admin set pwd=$npass where aid='$id'";
        $cmd=mysqli_query($con,$query);
        if($cmd){
            header("location:adminlog.php");
        }
        else{
            echo "Query not run";
        }
    }
?>