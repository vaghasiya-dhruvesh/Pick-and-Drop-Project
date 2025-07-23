<!-- This file display Rcbook PDF inserted by Vehicle owner -->

<?php 
$vid=$_GET['vid'];
$oid=$_GET['oid'];
// $vid=4;
// $oid="dhruv@gmail.com";
include '../../dbcon.php';
$qry="select * from vehicle where vid=$vid AND oid='$oid'";
$cmd=mysqli_query($con,$qry);
$num=mysqli_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysqli_fetch_array($cmd)){
    $rcbook=$row['rcbook'];
?>

<?php }

$file = '../../vehicle owner/owner_data/'.$rcbook;
$filename = '../../vehicle owner/owner_data/'.$rcbook;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename. '"');
header('Content-Transfer-Encoding: binary');
@readfile($file);
?>