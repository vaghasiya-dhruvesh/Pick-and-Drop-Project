<?php
$oid=$_GET['oid'];
include '../../dbcon.php';
echo $oid;
$qry="delete from owner where oid=$oid";
$cmd=mysqli_query($con,$qry);
if($cmd){
    // echo "Records deleted successfully";
    header('location:../../admin/profile page/manageowner.php');
}else{
    echo "Records not deleted";
}
?>