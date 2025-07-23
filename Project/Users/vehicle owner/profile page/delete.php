<?php
$vid=$_GET['vid'];
include '../../dbcon.php';
$qry="delete from vehicle where vid=$vid";
$cmd=mysqli_query($con,$qry);
if($cmd){
    // echo "Records deleted successfully";
    header('location:oprile.php');
}else{
    echo "Records not deleted";
}
?>