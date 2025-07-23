<?php
    Session_start();
    $id=$_SESSION['emailid'];
    $npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
    if($npass==$cpass){
        include '../dbcon.php';
        $query="update customer set pwd=$npass where cid='$id'";
        $cmd=mysqli_query($con,$query);
        if($cmd){
            header("location:custlog.php");
        }
        else{
            echo "Query not run";
        }
    }
?>