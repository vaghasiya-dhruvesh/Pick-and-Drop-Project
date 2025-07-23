<?php
    Session_start();
    $id=$_SESSION['emailid'];
    $npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
    if($npass==$cpass){
        include '../dbcon.php';
        $query="update owner set pwd=$npass where oid='$id'";
        $cmd=mysqli_query($con,$query);
        if($cmd){
            header("location:ownerlog.php");
        }
        else{
            echo "Query not run";
        }
    }
?>