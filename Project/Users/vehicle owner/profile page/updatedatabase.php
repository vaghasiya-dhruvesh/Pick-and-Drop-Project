<?php
session_start();
$oid=$_SESSION['oid'];
$name=$_POST['name'];
$num=$_POST['ono'];
$birth=$_POST['date'];
$city=$_POST['city'];
$id=$_POST['id'];
$pass=$_POST['pwd'];
$add=$_POST['add'];
$role=$_POST['role'];

// echo $oid." ".$name."  ".$num." ".$birth."  ".$city." ".$id." ".$pass." ".$add." ".$role;
include '../../dbcon.php';
$query="update owner set oid='$id', pwd='$pass', oname='$name', ono='$num', obdate='$birth', o_city='$city', oadd='$add', fpass='$role' where oid='$oid'";
//$query="update owner set oid="dhruv123@gmail.com", pwd="Drv@123456", oname="Dhruv patel", ono="1122334455", obdate="02-12-2023", o_city="Anand", oadd="Mota bazaar", fpass="Jay shree Ram" where oid="dhruv@gmail.com" ";
$cmd=mysqli_query($con,$query);
if($cmd){
    // echo "Profile data is updated";
    $_SESSION['updatedid']=$id;
    $_SESSION['checkforupdate']=1;
    header("location:oprofile.php?un=".$_SESSION['updatedid'].$_SESSION['checkforupdate']);
}
else{
echo "Query not run";
}
?>