<?php
session_start();
// $vid=$_SESSION['vid'];
$vid=$_POST['vid'];
$cid=$_POST['cid'];
$pdate=$_POST['pdate'];
$ptime=$_POST['ptime'];
$ddate=$_POST['ddate'];
$dtime=$_POST['dtime'];
// $amt=$_POST['amt'];
$status=1;

$date1 = new DateTime($pdate);
$date2 = new DateTime($ddate);

$interval = $date1->diff($date2);
$days = $interval->days;

// echo $days;

include '../../dbcon.php';
$qry="select * from vehicle where vid=$vid";
$cmd1=mysqli_query($con,$qry);
if($cmd1)
{
    while($row=mysqli_fetch_array($cmd1)){
        $price=$row['price'];
    ?>
    <?php
    }
    // echo $price;
}

$total = $price * $days;

// echo $total;

if($days>=5){
    $discount = $total*(10/100);
    $finalPrice = $total - $discount;
    echo $finalPrice;

    echo " You got a 10% discount for rent a vehicle more than 5 days... Thank you....";
    echo "Your total amount is = ".$finalPrice;
?>
<html>
<body>
    <!-- <a href="addbookdata.php"></a><button>Pay</button> -->
    <form action="addbookdata.php" method="post">
        <input type="hidden" value="<?php echo $vid?>" name="vid">
        <input type="hidden" value="<?php echo $cid?>" name="cid">
        <input type="hidden" value="<?php echo $pdate?>" name="pdate">
        <input type="hidden" value="<?php echo $ptime?>" name="ptime">
        <input type="hidden" value="<?php echo $ddate?>" name="ddate">
        <input type="hidden" value="<?php echo $dtime?>" name="dtime">
        <input type="hidden" value="<?php echo $finalPrice?>" name="amt">
        <input type="submit" value="Pay" name="pay">
    </form>
</body>
</htnml>

<?php
}else{
    echo "Your total amount is = ".$total;
    ?>

<html>
<body>
    <!-- <a href="addbookdata.php"></a><button>Pay</button> -->
    <form action="addbookdata.php" method="post">
        <input type="hidden" value="<?php echo $vid?>" name="vid">
        <input type="hidden" value="<?php echo $cid?>" name="cid">
        <input type="hidden" value="<?php echo $pdate?>" name="pdate">
        <input type="hidden" value="<?php echo $ptime?>" name="ptime">
        <input type="hidden" value="<?php echo $ddate?>" name="ddate">
        <input type="hidden" value="<?php echo $dtime?>" name="dtime">
        <input type="hidden" value="<?php echo $total?>" name="amt">
        <input type="submit" value="Pay" name="pay">
    </form>
</body>
</htnml>
<?php
}
?>