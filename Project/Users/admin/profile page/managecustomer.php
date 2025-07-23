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
        th{
            border: 2px solid;
            width: 0px;
        }

.body .section-1 .table-wrapper
{
    margin-left: -5%;
    width: 115%;
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
            <th style="width: 16%;">Email id</th>
            <th style="width: 13%;">Name</th>
            <th style="width: 8%;">Number</th>
            <th style="width: 8%;">Birth Date</th>
            <th style="width: 8%;">City</th>
            <th style="width: 20%;">Address</th>
            <th style="width: 10%;">Role Model</th>
            <th style="width: 6%;">Idproof</th>
            <th style="width: 7%;">Licence</th>
            <th style="width: 2%;"></th>
            <th style="width: 5%;"></th>
        </tr>
        </thead>
<?php 
session_start();
include '../../dbcon.php';
$query="select * from customer";
$cmd=mysqli_query($con,$query);
while($row=mysqli_fetch_array($cmd)){
    $cid=$row['cid'];
    $name=$row['cname'];
    $cno=$row['cno'];
    $date=$row['cbdate'];
    $city=$row['c_city'];
    $add=$row['cadd'];
    $role=$row['fpass'];
?>
<tbody style="border: 2px solid;">
    <tr style="border: 2px solid;">
        <td>
            <?php echo $cid;?>
        </td>
        <td>
            <?php echo $name;?>
        </td>
        <td>
            <?php echo $cno;?>
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
            <a href="cidproof.php?cid=<?php echo $cid;?>"><i class="fa fa-eye"></i></a>
        </td>
        <td>
            <a href="clicence.php?cid=<?php echo $cid;?>"><i class="fa fa-eye"></i></a>
        </td>
        <td>
            <a href="../../customer/profile page/updateprofile.php?cid=<?php echo $cid;?>"><i style='font-size:20px' class='fas'>&#xf304;</i></a>
        </td>
        <td>
            <a href="../../customer/profile page/delete.php?cid=<?php echo $cid;?>"><i class="fa fa-trash" style='font-size:20px' aria-hidden="true"></i></a>
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