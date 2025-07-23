<?php
require_once "vendor/autoload.php";

use Dompdf\Dompdf;

include '../../dbcon.php';
$vid=$_GET['vid'];
// $vid=4;

// Query to fetch data from database
$qry="select * from booking_payment where vid=$vid";
$cmd1=mysqli_query($con,$qry);

while ($row = mysqli_fetch_assoc($cmd1)) {
    $cid=$row['cid'];
    $oid=$row['oid'];
    $vid=$row['vid'];
    $pay_date=$row['pay_date'];
    $pay_time=$row['pay_time'];
    $pdate=$row['pickup_date'];
    $ptime=$row['pickup_time'];
    $ddate=$row['drop_date'];
    $dtime=$row['drop_time'];
}

$qry1="select * from customer where cid='$cid'";
$cmd=mysqli_query($con,$qry1);

while ($row = mysqli_fetch_assoc($cmd)) {
    $cname=$row['cname'];
    $cno=$row['cno'];
}

$query="select * from owner where oid='$oid'";
$result=mysqli_query($con,$query);

while ($row = mysqli_fetch_assoc($result)) {
    $oid=$row['oid'];
    $oname=$row['oname'];
    $ono=$row['ono'];
}

$query1="select * from vehicle where vid='$vid'";
$result1=mysqli_query($con,$query1);

while ($row = mysqli_fetch_assoc($result1)) {
    $vname=$row['vname'];
    $vno=$row['vno'];
    $brand=$row['brand'];
    $seat=$row['seat'];
    $type=$row['type'];
    $price=$row['price'];
}
//instatiate and use the dompdf class
$dompdf = new Dompdf();

$html = '
<html>
<head>
<style>

h1{
// border: 2px solid red;
width: 50px;
margin-left: 500px;
}
h2{
// border: 2px solid red;
margin-top: 50px;
width: 450px;
display: inline;
position: absolute;
}
h3{
// border: 2px solid red;
width: 300px;
display: inline;
position: absolute;
}
h4{
// border:  2px solid red;
width: 370px;
margin-left: 600px;
font-size: 1.5rem;
}
h5{
//   border:  2px solid red;
  width: 450px;
  margin-left: 600px;
  font-size: 1.2rem;
}
h6{
//  border: 2px solid red;
 width:150px;
 font-size: 1.5rem;
 margin-left:450px;
}
</style>
</head>
    <body>
        <h1>Bill</h1>
        <h2>Customer Name:- '.$cname.' <br>
        Email:- '.$cid.' <br>
        Contact no:- '.$cno.'</h2><br>
        
        <h4>Owner Name:- '.$oname.' <br>
        Email:- '.$oid.' <br>
        Contact no:- '.$ono.'</h4>

        <h3>Pickup Date:- '.$pdate.'<br><br>
        Pickup Time:- '.$ptime.' <br><br>
        Drop Date:- '.$ddate.' <br><br>
        Drop Time:- '.$dtime.' <br><br>
        Payment Date:- '.$pay_date.' <br><br>
        Payment Time:- '.$pay_time.' </h3>
        
        

        <h5>Vehicle Name:- '.$vname.' <br><br>
        Vehicle Number:- '.$vno.' <br><br>
        Brand :- '.$brand.' <br><br>
        Seat:- '.$seat.' <br><br>
        Type:- '.$type.' </h5><br>
        
        <h6>Paid:- '.$price.'</h6>
    </body>
</html>
';

// $html = file_get_contents('data.php');
$dompdf->loadHtml($html);

// $dompdf->loadHtml('<h1>Hello Dhruv</h1>');

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('bill.pdf');
?>