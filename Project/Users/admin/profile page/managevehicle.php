<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="dashadmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <?php include 'head.php'; ?>
	<?php include 'sidepanel.php'; ?>
    <style>
        td{
            border: 2px solid;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        th{border: 2px solid;}
.body .section-1 .table-wrapper
{
    margin-top: 0px;
    margin-left: 4%;
    background-color: whitesmoke;
    /* border: 2px solid red;  */
    /* height: 600px; */
    width: 95%;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}
        
    </style>

</head>
<body>
	<div class="body">
		<section class="section-1">
     <div class="table-wrapper">   
    <table class="f1-table" style="border: 2px solid; text-align: center;">
        <thead>
        <tr style="border: 2px solid;">
            <th style="width: 3%;">Owner id</th>
            <th style="width: 4%;">Model</th>
            <th style="width: 5%;">Number</th>
            <th style="width: 4%;">Brand</th>
            <th style="width: 3%;">Status</th>
            <th style="width: 4%;">Price</th>
            <th style="width: 4%;">Date</th>
            <th style="width: 2%;">Type</th>
            <th style="width: 1%;">Fuel</th>
            <th style="width: 1%;">PUC</th>
            <th style="width: 1%;">Rcbook</th>
            <th style="width: 1%;">Insurance</th>
            <th style="width: 1%;"></th>
        </tr>
        </thead>
<?php 
session_start();
include '../../dbcon.php';
$query="select * from vehicle";
$cmd=mysqli_query($con,$query);
while($row=mysqli_fetch_array($cmd)){
    $vid=$row['vid'];
    $oid=$row['oid'];
    $vname=$row['vname'];
    $vno=$row['vno'];
    $brand=$row['brand'];
    $color=$row['color'];
    $price=$row['price'];
    $date=$row['date'];
    $type=$row['type'];
    $ftype=$row['ftype'];
    $puc=$row['puc'];
    $rcbook=$row['rcbook'];
    $ins=$row['insurance'];
    $status=$row['status'];

    if($status){
        $stt="Booked";
    }else{
        $stt="Available";
    }
?>
<tbody style="border: 2px solid;">
    <tr style="border: 2px solid;">
    <td>
            <?php echo $oid;?>
        </td>
        <td>
            <?php echo $vname;?>
        </td>
        <td>
            <?php echo $vno;?>
        </td>
        <td>
            <?php echo $brand;?>
        </td>
        <td>
            <?php echo $stt;?>
        </td>
        <td>
            <?php echo $price;?>
        </td>
        <td>
            <?php echo $date;?>
        </td>
        <td>
            <?php echo $type;?>
        </td>
        <td>
            <?php echo $ftype;?>
        </td>
        <td>
            <a href="puc.php?vid=<?php echo $vid;?>&oid=<?php echo $oid;?>"><i class="fa fa-eye"></i></a>
        </td>
        <td>
            <a href="rcbook.php?vid=<?php echo $vid;?>&oid=<?php echo $oid;?>"><i class="fa fa-eye"></i></a>
        </td>
        <td>
            <a href="ins.php?vid=<?php echo $vid;?>&oid=<?php echo $oid;?>"><i class="fa fa-eye"></i></a>
        </td>
        <td>
            <a href="../../vehicle owner/profile page/vdelete.php?vid=<?php echo $vid;?>"><i class="fa fa-trash" style='font-size:20px' aria-hidden="true"></i></a>
        </td>

    </tr>
    <script src="../js/validate_vehicledata.js"></script>
<?php } ?>
</tbody>
</table>
</div>

		</section>
	</div>

</body>
</html>