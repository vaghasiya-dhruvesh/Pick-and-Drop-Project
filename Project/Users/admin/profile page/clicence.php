<!-- This file display PUC PDF inserted by Vehicle owner -->

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
    $lic=$row['C_licence'];
?>

<?php }

$file = '../../customer/customer_data/'.$lic;
$filename = '../../customer/customer_data/'.$lic;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename. '"');
header('Content-Transfer-Encoding: binary');
@readfile($file);
?>