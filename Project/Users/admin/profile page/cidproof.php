<!-- This file display Idproof PDF inserted by Vehicle owner -->

<?php 
$cid=$_GET['cid'];
include '../../dbcon.php';
$qry="select * from customer where cid='$cid'";
$cmd=mysqli_query($con,$qry);
$num=mysqli_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysqli_fetch_array($cmd)){
    $idproof=$row['cidproof'];
?>

<?php }

$file = '../../customer/customer_data/'.$idproof;
$filename = '../../customer/customer_data/'.$idproof;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename. '"');
header('Content-Transfer-Encoding: binary');
@readfile($file);
?>