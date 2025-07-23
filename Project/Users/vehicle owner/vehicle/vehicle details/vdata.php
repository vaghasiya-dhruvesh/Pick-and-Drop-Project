<?php
session_start();
if(isset($_SESSION['cid'])){
include '../../../vhead.php';
$vid=$_GET['vid'];
// $vid=4;
include '../../../dbcon.php';
$qry="select * from vehicle where vid=$vid";
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
        $stt="Vehicle Booked";
    }else{
        $stt="Vehicle not booked";
    }
    ?>
<html>
<head>
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="v.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<!-- Navbar links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/icon" href="imgs/fav-img.png">

<!-- swiper online -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!-- swiper online -->
<!-- Navbar links -->
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

<a href="#" class="logo navbar-brand"><i class="fa fa-car" aria-hidden="true"></i></a>

 <!-- Navbar text-->
 <span class="navbar-text">
    Vehicle Renting System  
  </span>

<!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../../../customer/chome.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../../customer/chome.php">Features</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../../vehiclelist.php">Vehicles</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../../../customer/chome.php">Our services</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../../../customer/chome.php">Contact us</a>
    </li>
  </ul>

  <div class="icon">
  <a href="../customer/profile page/cprofile.php"><img src="image/user.png" alt="profile icon not found" width="30px" height="30px"></a>
  </div>
</nav>

<div class="body" >
  <div class="product_img">
     <img src=" <?php echo "../../owner_data/".$photo; ?>" alt="image not found" width="690px" height="100%">
  </div>
  <div class="product_info">
    <div class="seller_info">
      
    </div>
   
    <div class="product_title title"><?php echo $name;?></div>
    <div class="product_price price">&#8377 <?php echo $price;?> </div>
    <div class="product_avaibility available">AVAILABLE TILL: <?php echo $date;?></div>
    <div class="product_color number" >VEHICLE NUMBER: <?php echo $vno;?></div>
    <div class="product_color brand" >BRAND: <?php echo $brand;?> </div>
    <div class="product_color type" >TYPE: <?php echo $type;?></div>
    <div class="product_color color">COLOR: <?php echo $color;?></div>
    <div class="product_color fuel">FUEL: <?php echo $ftype;?></div>
    <div class="product_color seating">SEATING: <?php echo $seat;?></div>
    
   <?php
   if($status){

   }else{?>
     <a href="../../bookpay/bookpay.php?vid=<?php echo $vid;?>"><div class="add_to_cart">Rent Now</div></a>
    <?php
   }
   ?>
  </div>
  </div>
</body>
</html>
<?php
    }
  }
}else{
  ?>
    <script>
        alert("*Error:- You Need To Login First");
    </script>
    <?php
}
?>