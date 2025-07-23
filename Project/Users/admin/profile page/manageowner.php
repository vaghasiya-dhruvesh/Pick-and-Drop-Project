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
            /* padding: 10; */
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left:10px;
            padding-right: 10px;
        }
        th{
            border: 2px solid;
            padding: 10;
        }

.body .section-1 .table-wrapper
{
    margin-top: 0px;
    margin-left: -6%;
    background-color: whitesmoke;
    /* border: 2px solid red;  */
    /* height: 600px; */
    width: 115%;
    box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}
        
    </style>
</head>
<body>
	<div class="body">
	<section class="section-1">
    <center>
    <div class="table-wrapper"> 
    <table class="f1-table" style="border: 2px solid; text-align: center;">
    <thead>
    <tr style="border: 2px solid;">
            <th style="width: 16%;" >Email id</th>
            <th style="width: 14%;" >Name</th>
            <th style="width: 6%;" >Number</th>
            <th style="width: 10%;" >Birth Date</th>
            <th style="width: 7%;" >City</th>
            <th style="width: 20%;" >Address</th>
            <th style="width: 15%;" >Role Model</th>
            <th style="width: 6%;">Idproof</th>
            <th style="width: 8%;">Licence</th>
            <th style="width: 4%;"></th>
            <th style="width: 4%;"></th>
        </tr>
    </thead>
<?php 
include '../../dbcon.php';
$query="select * from owner";
$cmd=mysqli_query($con,$query);
while($row=mysqli_fetch_array($cmd)){
    $oid=$row['oid'];
    $name=$row['oname'];
    $ono=$row['ono'];
    $date=$row['obdate'];
    $city=$row['o_city'];
    $add=$row['oadd'];
    $role=$row['fpass'];
?>
<tbody style="border: 2px solid;">
    <tr style="border: 2px solid;">
        <td>
            <?php echo $oid;?>
        </td>
        <td>
            <?php echo $name;?>
        </td>
        <td>
            <?php echo $ono;?>
        </td>
        <td>
            <?php echo $date;?>
        </td>
        <td>
            <?php echo $city;?>
        </td>
        <td>
            <?php echo $add;?>
        </td>
        <td>
            <?php echo $role;?>
        </td>
    
        <td>
            <a href="oidproof.php?oid=<?php echo $oid;?>"><i class="fa fa-eye"></i></a>
        </td>
        <td>
            <a href="olicence.php?oid=<?php echo $oid;?>"><i class="fa fa-eye"></i></a>
        </td>
        <td>
            <a href="../../vehicle owner/profile page/updateprofile.php?oid=<?php echo $oid;?>"><i style='font-size:20px' class='fas'>&#xf304;</i></a>
        </td>
        <td>
            <a href="../../vehicle owner/profile page/odelete.php?oid=<?php echo $oid;?>"><i class="fa fa-trash" style='font-size:20px' aria-hidden="true"></i></a>
        </td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>

</center>

		</section>
	</div>

</body>
</html>