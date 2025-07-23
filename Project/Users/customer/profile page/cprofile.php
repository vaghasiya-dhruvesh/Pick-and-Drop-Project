<?php 
session_start();
if(isset($_SESSION['cid'])){
$id=$_SESSION['cid'];
// $id="dhruv123@gmail.com";
$_SESSION['cid']=$id;
if(isset($_SESSION['checkupdate'])){
    $id=$_SESSION['updatecid'];
    $_SESSION['cid']=$id;
}
include '../../dbcon.php';
$query="select * from customer where cid='$id'";
$cmd=mysqli_query($con,$query);
$num=mysqli_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysqli_fetch_array($cmd)){
    $cid=$row['cid'];
    $pwd=$row['pwd'];
    $name=$row['cname'];
    $cno=$row['cno'];
    $date=$row['cbdate'];
    $city=$row['c_city'];
    $add=$row['cadd'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include '../../chead.php' ?>
    <link rel="stylesheet" href="profcust.css">
    <link rel="stylesheet" href="veh.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="left">
            <img src="image/alex.jpg" alt="user" width="200" height="200px">
            <h4><?php echo $name;?></h4>
        </div>
        <div class="right">
            <div class="info">
                <h3>
                    Customer Information
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="updateprofile.php?cid=<?php echo $cid;?>"><i class='fas fa-edit' style='font-size:24px'></i></a></h3>
                <div class="info_data">
                    <div class="data1">
                        <h4>Email id</h4>
                        <p><?php echo $cid;?></p>
                    </div>
                    <div class="data3">
                        <h4>Contact Number</h4>
                        <p><?php echo $cno;?></p>
                    </div>
                </div>
            </div>

            <div class="projects">
                <div class="projects_data">
                    <div class="data4">
                        <h4>birthdate</h4>
                        <p><?php echo $date;?></p>
                    </div>
                    <div class="data5">
                        <h4>City</h4>
                        <p><?php echo $city;?></p>
                    </div>
                    <div class="data6">
                        <h4> Address</h4>
                        <p><?php echo $add;?></p>
                    </div>
                    <center><a href="logout.php"><button>Logout</button></a></center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
} 

error_reporting(E_ALL ^ E_WARNING);
$fetch="select * from booking_payment where cid='$cid'";
$result=mysqli_query($con, $fetch);
if($result)
{
    
    while($row=mysqli_fetch_array($result)){
        $vid=$row['vid'];
    }
    $fetveh="select * from vehicle where vid='$vid'";
    $res=mysqli_query($con,$fetveh);
    while($row=mysqli_fetch_array($res)){
        $name=$row['vname'];
        $brand=$row['brand'];
        $color=$row['color'];
        $price=$row['price'];
        $photo=$row['photo'];
        $date=$row['date'];
        $status=$row['status'];
    ?>
    <?php 
    if($status){
        $stt="Booked";
    }else{
        $stt="Available";
    }
    ?>
        <html>
        <body>
            <div class="name">
                <h2><?php echo $name;?></h2>
            </div>
            <div class="container1">
                <div class="img">
                    <img src=" <?php echo "../../vehicle owner/owner_data/".$photo; ?>" alt="image not found" width="500px" height="323px">
                </div> 
                <div class="vr1"></div>
                <div class="data">
                    <div class="vr2"></div>
                    <div class="brand">
                        <h4 class="h4">Brand</h4>
                        <h3><?php echo $brand?></h3>
                    </div>
                    <div class="vr3"></div>
                    <div class="color">
                        <h4 class="h4">Color</h4>
                        <h3><?php echo $color?></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="price">
                        <h1>&#x20b9;<?php echo $price?>/day</h1>
                        <h5>Status: <?php echo $stt;
                        
                        if($status){
                        ?>
                            <a href="pdf.php?vid=<?php echo $vid; ?>"><button>View Bill</button></a>
                        <?php
                        }?></h5>
                        <p>Available till:- <?php echo $date?></p>
                    </div>
                </div>
            </div>
            </body>
        </html>
    <?php
    }
}else{
	echo "Query not run";
}
}else{
    ?>
    <script>
        alert("*Error:- You Need To First Login");
    </script>
    <?php
}
?>