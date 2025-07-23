<?php
session_start();
$cid=$_SESSION['oldcid'];
$name=$_POST['name'];
$num=$_POST['cno'];
$birth=$_POST['date'];
$city=$_POST['city'];
$id=$_POST['id'];
$pass=$_POST['pwd'];
$add=$_POST['add'];
$role=$_POST['role'];

// echo $cid." ".$name."  ".$num." ".$birth."  ".$city." ".$id." ".$pass." ".$add." ".$role;
include '../../dbcon.php';
$query="update customer set cid='$id', pwd='$pass', cname='$name', cno='$num', cbdate='$birth', c_city='$city', cadd='$add', fpass='$role' where cid='$cid'";
//$query="update owner set cid="dhruv123@gmail.com", pwd="Drv@123456", cname="Dhruv patel", cno="1122334455", cbdate="02-12-2023", c_city="Anand", cadd="Mota bazaar", fpass="Jay shree Ram" where cid="dhruv@gmail.com" ";
$cmd=mysqli_query($con,$query);
if($cmd){
    // echo "Profile data is updated";
    $_SESSION['updatecid']=$id;
    $_SESSION['checkupdate']=1;
    header("location:cprofile.php?un=".$_SESSION['updatecid'].$_SESSION['checkupdate']);
}
else{
echo "Query not run";
}
?>