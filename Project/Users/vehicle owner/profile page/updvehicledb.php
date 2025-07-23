<?php
session_start();
	$vid=$_POST['vid'];
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
	$oldphoto=$_POST['oldphoto'];
	$puc=$_FILES['puc']['name'];
	$oldpuc=$_POST['oldpuc'];
	$rcbook=$_FILES['rcbook']['name'];
	$oldrcbook=$_POST['oldrcbook'];
	$ins=$_FILES['insurance']['name'];
	$oldins=$_POST['oldins'];
    $oid = $_SESSION['oid'];

	if($photo != ' ' || $puc != ' ' || $rcbook != ' ' || $ins != ' '){
		$update_file1 = $_FILES['photo']['name'];
		$update_file2 = $_FILES['puc']['name'];
		$update_file3 = $_FILES['rcbook']['name'];
		$update_file4 = $_FILES['insurance']['name'];
	}
	else{
		$update_file1 = $oldphoto;
		$update_file2 = $oldphoto;
		$update_file3 = $oldphoto;
		$update_file4 = $oldphoto;
	}

	include '../../dbcon.php';
	$qry="update vehicle set vname='$name', vno='$vno', brand='$brand', color='$color', price='$price', type='$type', ftype='$ftype', seat='$seat', photo='$update_file1', puc='$update_file2', rcbook='$update_file3', insurance='$update_file4'   where vid=$vid";
	$cmd=mysqli_query($con,$qry);
	if($cmd)
	{
		if($photo != ' ' || $puc != ' ' || $rcbook != ' ' || $ins != ' '){
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../owner_data/".$_FILES["photo"]["name"]);
			move_uploaded_file($_FILES["puc"]["tmp_name"], "../owner_data/".$_FILES["puc"]["name"]);
			move_uploaded_file($_FILES["rcbook"]["tmp_name"], "../owner_data/".$_FILES["rcbook"]["name"]);
			move_uploaded_file($_FILES["insurance"]["tmp_name"], "../owner_data/".$_FILES["insurance"]["name"]);
			// header("location:custlog.php");	
            echo "Data updated";
		}
		else{
			echo "inside if";
		}
	}
	else
	{
		echo "Record not";
	}
?>