<?php
session_start();
if(isset($_POST['submit'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="dashadmin.css">
    <style>
        td{
            border: 2px solid;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        th{
            border: 2px solid;
            width: 0px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

.body .section-1 .table-wrapper
{
    /* margin-left: -5%; */
    width: 60%;
}
        
    </style>
</head>
<body>
<?php
$num=$_POST['num'];
include '../../dbcon.php';
$cemail=' ';
$count=0;

$fet = "SELECT cid FROM booking_payment group by cid having count(*) >= $num";
$res1=mysqli_query($con, $fet);
if(mysqli_num_rows($res1) > 0){
    while($row = mysqli_fetch_assoc($res1)){
        $cid=$row['cid'];
    }
?>
<div class="table-wrapper">   
<table class="f1-table" style="border: 2px solid; text-align: center; margin-top: 250px; margin-left: 150px; border-radius: 6px; width:80%">
    <thead>
    <tr style="border: 2px solid;">
            <th style="width: 20%;">Cust id</th>
            <th style="width: 16%;">Name</th>
            <th style="width: 9%;">Number</th>
            <th style="width: 12%;">Vehicle Name</th>
            <th style="width: 12%;">Vehicle Number</th>
            <th style="width: 10%;">Price</th>
            <th style="width: 10%;">Type</th>
            <th style="width: 6%;">Seat</th>
        </tr>
    </thead>
<?php
}else{
    echo "NO Records found";
}

$sql = "SELECT * FROM customer WHERE cid='$cid'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
    $cname=$row['cname'];
    $cno=$row['cno'];
?>
<tbody style="border: 2px solid;">
<tr style="border: 2px solid;">
    <td>
        <?php echo $cid?>
    </td>
    <td>
        <?php echo $cname;?>
    </td>
    <td>
        <?php echo $cno;?>
    </td>
    <?php
$query="SELECT vehicle.* FROM vehicle INNER JOIN booking_payment b ON vehicle.vid = b.vid where b.cid='$cid'";
$cmd=mysqli_query($con,$query);
if(mysqli_num_rows($cmd)>0){
while($row=mysqli_fetch_assoc($cmd)){
    if($cemail==$cid){      // Here we check if same customer data are comming then we move to next iteration. This way we protect data redundancy
    ?>
    <td>
        <?php echo $cid?>
    </td>
    <td>
        <?php echo $cname;?>
    </td>
    <td>
        <?php echo $cno;?>
    </td>
    <td>
        <?php echo $row["vname"];?>
    </td>
    <td>
        <?php echo $row['vno'];?>
    </td>
    <td>
        <?php echo $row['price'];?>
    </td>
    <td>
        <?php echo $row['type'];?>
    </td>
    <td>
        <?php echo $row['seat'];?>
    </td>
</tr>
<?php
    }else{?>
        <td>
        <?php echo $row["vname"];?>
    </td>
    <td>
        <?php echo $row['vno'];?>
    </td>
    <td>
        <?php echo $row['price'];?>
    </td>
    <td>
        <?php echo $row['type'];?>
    </td>
    <td>
        <?php echo $row['seat'];?>
    </td>
</tr>
<?php
$cemail=$cid;
    }
} // second while loop end here
}else{
echo "Query not run";
}
} // first while loop end here
}else{
// echo "No result found";
}
?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
     
<?php
}else{
    ?>
    <script>
        alert("You Need To Login First");
    </script>
    <?php
}?>