<?php
$day=$_POST['day'];
include '../../dbcon.php';
$cid=' ';
$sql = "SELECT customer.* FROM customer INNER JOIN booking_payment b ON customer.cid = b.cid WHERE DATEDIFF(b.drop_date, b.pickup_date)>$day";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        if($cid==$row['cid']){      // Here we check if same customer data are comming then we move to next iteration. This way we protect data redundancy
            continue;
        }
        echo "Customer name : ". $row["cname"]. "<br>";
        echo "Customer id: ". $row['cid']. "<br>";
        echo "Customer number: ". $row['cno']. "<br>";
        echo "Customer city: ". $row['c_city']. "<br>";
        $cid=$row['cid'];
$query="SELECT vehicle.* FROM vehicle INNER JOIN booking_payment b ON vehicle.vid = b.vid where b.cid='$cid' AND DATEDIFF(b.drop_date, b.pickup_date)>$day";
$cmd=mysqli_query($con,$query);
if(mysqli_num_rows($cmd)>0){
    while($row=mysqli_fetch_assoc($cmd)){
        echo "Vehicle name : ". $row["vname"];
        echo "Vehicle number : ".$row['vno'];
        echo "Vehicle brand : ".$row['brand'];
        echo "Vehicle color : ".$row['color'];
        echo "Vehicle price : ".$row['price'];
        echo "Vehicle date : ".$row['date'];
        echo "Vehicle type : ".$row['type'];
        echo "Vehicle fuel : ".$row['ftype'];
        echo "Vehicle seat : ".$row['seat'];
    ?><br>
<?php
}
}else{
    echo "Query not run";
}
}
}else{
    echo "No result found";
}
?>