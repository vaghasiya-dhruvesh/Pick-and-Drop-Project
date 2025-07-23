<?php
session_start();

	$name=$_POST['vname'];
	$vno=$_POST['vno'];
	$brand=$_POST['brand'];
	$color=$_POST['color'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	$ftype=$_POST['fuel'];
	$date=$_POST['vdate'];
    $seat=$_POST['seat'];
	$photo=$_FILES['photo']['name'];
	$puc=$_FILES['puc']['name'];
	$rcbook=$_FILES['rcbook']['name'];
	$ins=$_FILES['insurance']['name'];
    $oid = $_SESSION['oid'];
	$status=0;

	include '../../dbcon.php';
	$qry="insert into vehicle(vname, vno, brand, color, price, date, type, ftype, seat, photo, puc, rcbook, insurance, oid, status) values ('$name','$vno','$brand','$color','$price','$date','$type', '$ftype', '$seat', '$photo', '$puc', '$rcbook', '$ins', '$oid', $status)";
	// $qry="insert into vehicle values ('swift','321','maruti','white','1000', '02-12-2023','car','diesel','5', 'car.jpg', 'puc.jpg', 'rcbk.jpg', 'insurance.jpg', 'dhruveshpatel@gmail.com');";
	$cmd=mysqli_query($con,$qry);
	if($cmd)
	{
		move_uploaded_file($_FILES["photo"]["tmp_name"], "../owner_data/".$_FILES["photo"]["name"]);
		move_uploaded_file($_FILES["puc"]["tmp_name"], "../owner_data/".$_FILES["puc"]["name"]);
		move_uploaded_file($_FILES["rcbook"]["tmp_name"], "../owner_data/".$_FILES["rcbook"]["name"]);
		move_uploaded_file($_FILES["insurance"]["tmp_name"], "../owner_data/".$_FILES["insurance"]["name"]);
		header("location:../profile page/oprofile.php");	
        // echo "Data inserted";
	}
	else
	{
		echo "Record not";
	}
?>