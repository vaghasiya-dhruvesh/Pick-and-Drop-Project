<!-- This file display Idproof PDF inserted by Vehicle owner -->

<?php 
$oid=$_GET['oid'];
include '../../dbcon.php';
$qry="select * from owner where oid='$oid'";
$cmd=mysqli_query($con,$qry);
$num=mysqli_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysqli_fetch_array($cmd)){
    $idproof=$row['oidproof'];
?>

<?php }

$file = '../../vehicle owner/owner_data/'.$idproof;
$filename = '../../vehicle owner/owner_data/'.$idproof;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename. '"');
header('Content-Transfer-Encoding: binary');
@readfile($file);
?>