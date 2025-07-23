<?php
$cid=$_GET['cid'];
include '../../dbcon.php';
echo $cid;
$qry="delete from customer where cid=$cid";
$cmd=mysqli_query($con,$qry);
if($cmd){
    // echo "Records deleted successfully";
    header('location:../../admin/profile page/managecustomer.php.php');
}else{
    echo "Records not deleted";
}
?>