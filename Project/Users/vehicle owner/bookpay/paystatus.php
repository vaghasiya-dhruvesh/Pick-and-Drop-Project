<html>
    <head>
    <style>
p {
  color: red;
  font-family: courier;
  font-size: 160%;
  text-align: center;
  height: 20%;
  /* margin-top: 600px; */
  margin-left: 300px;
  width: 50%;
  border: 2px solid red;
  padding: 55px;
  position: relative;
}

p button{
  border: 2px solid red;
  border-radius:10px;
  background-color: black;
  color: white;
  font-size: 2rem;
  font-family: cursive;
}
        </style>
<link rel="stylesheet" href="css/nav.css">
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
<link rel="stylesheet" type="text/css" href="style.css">
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
      <a class="nav-link" href="../../customer/chome.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../customer/chome.php">Features</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../vehiclelist.php">Vehicles</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../../customer/chome.php">Our services</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../customer/chome.php">Contact us</a>
    </li>
  </ul>

  <div class="icon">
  <a href="../../customer/profile page/cprofile.php"><img src="image/user.png" alt="profile icon not found" width="30px" height="30px"></a>
  </div>
</nav><br><br><br><br><br><br><br><br><br>
<p>The payment paid successfully
<?php
session_start();
$vid=$_SESSION['vid'];
include '../../dbcon.php';
$qry="update vehicle set status=1 where vid='$vid'";
$cmd1=mysqli_query($con,$qry);
?>
<a href="pdf.php?vid=<?php echo $vid; ?>"><button>Print Bill</button></a>
</p>
</body>
</html>