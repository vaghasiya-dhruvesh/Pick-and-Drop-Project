<?php
session_start();
// $oid=$_SESSION['oid'];
// $vid=$_SESSION['vid'];
$vid=$_GET['vid'];
$oid=$_GET['oid'];
// $oid="dhruv@gmail.com";
include '../../dbcon.php';
$qry="select * from vehicle where vid=$vid";
$cmd=mysqli_query($con,$qry);
$num=mysqli_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysqli_fetch_array($cmd)){
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
    $puc=$row['puc'];
    $rcbook=$row['rcbook'];
    $ins=$row['insurance'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration</title>
    <link rel="stylesheet" href="css/vregist.css">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <form name="registration"  action="updvehicledb.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">

        <input type="hidden" name="vid" value="<?php echo $vid;?>">
        <input type="hidden" name="oldphoto" value="<?php echo $photo;?>">
        <input type="hidden" name="oldpuc" value="<?php echo $puc;?>">
        <input type="hidden" name="oldrcbook" value="<?php echo $rcbook;?>">
        <input type="hidden" name="oldins" value="<?php echo $ins;?>">

        <div class="heading">
            <h1>Update Vehicle's Details</h1>
        </div>
        <!-- Main container for all inputs -->
        <div class="Container1">
            <label class="cust">Vehicle Name:</label>
            <input type="text" placeholder="Enter your Vehicle name" name="vname" value="<?php echo $name;?>" >

            <br><br>
            <label class="cust">Vehicle Number:</label>
            <input type="text" placeholder="Enter your vehicle number" name="vno" value="<?php echo $vno;?>" >

            <br><br>
            <label class="brand">Brand:</label>
            <input type="text" placeholder="Enter your vehicle brand" name="brand" value="<?php echo $brand;?>">

            <br><br>
            <label class="color">Color:</label>
            <input type="text" placeholder="Enter your vehicle color" name="color" value="<?php echo $color;?>">

            <br><br>
            <label class="price">Rent Price:</label>
            <input type="text" placeholder="Enter your vehicle rental price/day" name="price" value="<?php echo $price;?>">

            <br><br>
            <label class="type">Type:</label>&nbsp;&nbsp;
            <select name="type" id="vcl">
                <option value="<?php echo $type;?>"><?php echo $type?></option>
                <option value="suv">SUV</option>
                <option value="hatchback">HATCHBACK</option>
                <option value="sedan">SEDAN</option>
                <option value="truck">TRUCK</option>
                <option value="van">VAN</option>
                <option value="sports">SPORTS CAR</option>
                <option value="motorcycle">MOTORCYCLE</option>
                <option value="luxury car">LUXURY CAR</option>
                <option value="tractor">TRACTOR</option>
                <option value="electric vehicle">ELECTRIC VEHICLE</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <label class="photo">Photo:</label>
            <input type="file" name="photo"  id="photo">

            <br><br>
            <label class="fuel_type">Fuel Type:</label>&nbsp;&nbsp;
            <select name="fuel" id="ftype">
                <option value="<?php echo $ftype;?>"><?php echo $ftype?></option>
                <option value="petrol">PETROL</option>
                <option value="petrol">DIESEL</option>
                <option value="petrol">LPG</option>
                <option value="petrol">ELECTRIC</option>
            </select>

            <label class="puc">PUC:</label>
            <input type="file" name="puc"   id="puc">

            <br><br>
            <label class="vdate">Duration Date:</label>
            <input type="date"  name="vdate" value="<?php echo $date;?>">&nbsp;

            <label class="Rcbook">RCBOOK:</label>
            <input type="file" name="rcbook"   id="rcbook">

            <br><br>
            <label class="seat">SEAT:</label>&nbsp;&nbsp;
            <select name="seat" id="seat">
                <option value="<?php echo $seat;?>"><?php echo $seat?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>&nbsp;
            
            <label class="insurance">INSURANCE:</label>
            <input type="file" name="insurance"  id="ins">
    
            <br><br>
            <div class="btn">
               	 <button type="submit" >Submit</button>
            </div>
        </div>
    </form>
    <div class="img">
        <h2>Vehicle photo: <img src="../owner_data/<?php echo $photo?>" alt="Image not found" width="200px" height="100px"></h2>
    </div>
    <div class="viewpuc">
        <a href="puc.php?vid=<?php echo $vid;?>&oid=<?php echo $oid;?>"><button>View Registered PUC</button></a>
    </div>
    <div class="viewbook">
        <a href="rcbook.php?vid=<?php echo $vid;?>&oid=<?php echo $oid;?>"><button>View Registered Rcbook</button></a>
    </div>
    <div class="viewins">
        <a href="ins.php?vid=<?php echo $vid;?>&oid=<?php echo $oid;?>"><button>View Registered Insurance</button></a>
    </div>
    <script src="../js/validate_vehicledata.js"></script>
</body>
</html>
<?php } ?>