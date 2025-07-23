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
    width: 100%;
}
        
    </style>
</head>
<body>
<?php
$type=$_POST['type'];
include '../../dbcon.php';
$oemail=' ';
$count=0;

$fet = "SELECT * FROM vehicle where type='$type'";
$res1=mysqli_query($con, $fet);
if(mysqli_num_rows($res1) > 0){
?>
<div class="table-wrapper">   
<table class="f1-table" style="border: 2px solid; text-align: center; margin-top: 40px; margin-left: 150px; border-radius: 6px; width:80%">
    <thead>
    <tr style="border: 2px solid;">
            <th style="width: 20%;">Owner email_id</th>
            <th style="width: 15%;">Name</th>
            <th style="width: 10%;">Number</th>
            <th style="width: 12%;">Vehicle Name</th>
            <th style="width: 12%;">Vehicle Number</th>
            <th style="width: 10%;">Price</th>
            <th style="width: 10%;">Type</th>
            <th style="width: 6%;">Seat</th>
        </tr>
    </thead>
<?php
    while($row = mysqli_fetch_assoc($res1)){
        $oid=$row['oid'];
        $vname=$row["vname"];
        $vno=$row['vno'];
        $price=$row['price'];
        $type=$row['type'];
        $seat=$row['seat'];

$qry = "SELECT * FROM owner where oid='$oid'";
$cmd=mysqli_query($con, $qry);
if(mysqli_num_rows($cmd) > 0){
    while($row = mysqli_fetch_assoc($cmd)){
        $oname=$row['oname'];
        $ono=$row['ono'];
    }
?>
    <tbody style="border: 2px solid;">
    <tr style="border: 2px solid;">
    <td>
        <?php echo $oid;?>
    </td>
    <td>
        <?php echo $oname;?>
    </td>
    <td>
        <?php echo $ono;?>
    </td>
    <td>
        <?php echo $vname;?>
    </td>
    <td>
        <?php echo $vno;?>
    </td>
    <td>
        <?php echo $price;?>
    </td>
    <td>
        <?php echo $type;?>
    </td>
    <td>
        <?php echo $seat;?>
    </td>
</tr>
<?php
}
}
}else{
    echo "NO RECORDS FOUND";
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