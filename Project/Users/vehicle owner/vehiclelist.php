<html>
    <head>
        <title>Vehicle Details Webpage</title>
        <?php include '../vhead.php' ?>
        <link rel="stylesheet" href="listvehicle.css">
    </head>
<body>
<div class="search">
        <form action="search.php" method="post">
            <input type="text" name="search" placeholder="Search here...">
            <input type="submit" name="submit" value="Submit">
        </form>

        <form action="search.php" method="post">
        <select name="status">
                <option value="0">Available</option>
                <option value="1">Booked</option>
        </select>
            <input type="submit" name="stt" value="Submit">
        </form>
</div>
<?php
session_start();
if(isset($_SESSION['cid'])){
$cid=$_SESSION['cid'];
include '../dbcon.php';
$qry="SELECT * FROM vehicle";
$cmd1=mysqli_query($con,$qry);
if($cmd1)
{
    while($row=mysqli_fetch_array($cmd1)){
        $vid=$row['vid'];
        $name=$row['vname'];
        $vno=$row['vno'];
        $brand=$row['brand'];
        $color=$row['color'];
        $price=$row['price'];
        $date=$row['date'];
        $type=$row['type'];
        $ftype=$row['ftype'];
        $seat=$row['seat'];
        $photo=$row['photo'];
        $oid=$row['oid'];
        $status=$row['status'];
    ?>
    <?php 
    if($status){
        $stt="Booked";
    }else{
        $stt="Available";
    }
    ?>
        <div class="container1">
                <div class="img">
                    <img src=" <?php echo "owner_data/".$photo; ?>" alt="image not found" width="500px" height="323px">
                </div> 
                <div class="vr1"></div>
                <div class="data">
                    <div class="vr2"></div>
                    <div class="name">
                        <h2><?php echo $name?></h2>
                        <a href="vehicle/vehicle details/vdata.php?vid=<?php echo $vid;?>"><p>View More Details...</p></a>
                    </div>
                    <div class="brand">
                        <h4>Brand</h4>
                        <h5><?php echo $brand?></h5>
                    </div>
                    <div class="vr3"></div>
                    <div class="color">
                        <h4>Color</h4>
                        <h5><?php echo $color?></h5>
                    </div>
                    <div class="price">
                        <h1>&#x20B9;<?php echo $price?>/day</h1>
                        <h5>Status: <?php echo $stt; ?></h5>
                        <p>Available till:- <?php echo $date?></p>
                        <?php
                        if($status){
                        }else{?>
                            <a href="bookpay/bookpay.php?vid=<?php echo $vid;?>"><button>Rent Now</button></a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <br><br><br>
        </body>
        </html>
    <?php
    }
    include '../foot.php';
}else{
	echo "Query not run";
}
}else{
    ?>
    <script>
        alert("*Error:- You Need To Login First");
    </script>
    <?php
}
?>