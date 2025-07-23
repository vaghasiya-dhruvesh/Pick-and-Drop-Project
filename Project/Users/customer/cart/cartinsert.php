<?php
$name=$_POST['vname'];
$date=$_POST['date'];
$price=$_POST['price'];
$oid=$_POST['oid'];
$cid=$_POST['cid'];
$photo=$_FILES['vphoto']['name'];

$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
if($db)
	echo "Database selected successfully";
else
	echo "Database not selected";

$qry="insert into cart values ('$cid','$name','$price','$date','$photo','$oid')";
$cmd=mysql_query($qry,$con);
if($cmd)
{
	move_uploaded_file($_FILES["vphoto"]["tmp_name"], "cart_images/".$_FILES["vphoto"]["name"]);
	// header("location:custlog.php");	
    echo "Record inserted successfully";
}
else
{
	echo "Record not";
}
?>