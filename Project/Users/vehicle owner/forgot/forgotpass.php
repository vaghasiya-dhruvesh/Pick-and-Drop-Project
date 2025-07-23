<?php
	Session_start();
	$id=$_POST['id'];
	$role=$_POST['role'];
	include '../../dbcon.php';
	$query="select fpass from owner where oid='$id'";
	$cmd=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($cmd))
	{
		$fpass=$row['fpass'];
	?>
	<?php 
	if(!(strcasecmp($role,$fpass))){
		$_SESSION['emailid']=$id;
		header("location:../onewpass.php");
	}
	else{	
		echo "Please enter correct details";
	}
	?>
	<?php }
?>
	