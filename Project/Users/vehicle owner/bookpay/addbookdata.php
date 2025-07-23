<?php
session_start();
// $vid=$_SESSION['vid'];
$vid=$_POST['vid'];
$cid=$_POST['cid'];
$pdate=$_POST['pdate'];
$ptime=$_POST['ptime'];
$ddate=$_POST['ddate'];
$dtime=$_POST['dtime'];
$amt=$_POST['amt'];
$status=1;

include '../../dbcon.php';
$qry="select * from vehicle where vid=$vid";
$cmd1=mysqli_query($con,$qry);
if($cmd1)
{
    while($row=mysqli_fetch_array($cmd1)){
        $oid=$row['oid'];
    ?>
<?php
// echo $oid." ".$cid." ".$pdate." ".$ptime."  ".$ddate." ".$dtime." ".$amt;
$tz= 'Asia/Kolkata';
date_default_timezone_set($tz);
$curdate = date('y-m-d');
$curtime = date("h:i:s");
// echo $curdate." ".$curtime;
$qry="insert into booking_payment(pickup_date, pickup_time, drop_date, drop_time, pay_date, pay_amt, pay_time, status, cid, oid, vid) values ('$pdate','$ptime','$ddate','$dtime','$curdate','$amt','$curtime','$status','$cid','$oid', '$vid')";
//$qry="insert into booking_payment values ('20-04-2023','10:22:22','28-05-2023','07:00:00','19-04-2023','15000','10:58:00','1','dhruveshpatel2005@gmail.com','dhruv@gmail.com', '4')";
$cmd=mysqli_query($con,$qry);
if($cmd){
    // echo "Date inserted";
    header('location:paystatus.php');
}else{
    echo "Data not inserted";
}
	}
}
?>