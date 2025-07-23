<?php
session_start();
if(isset($_SESSION['oid'])){
?>
<html>
<head>
  <title>
      vehicle renting system
  </title>

       
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/navbar.css">  
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript">
		function preventBack(){window.history.forward()};
		setTimeout("preventBack()", 0);
		window.onunload=function(){null;}
	</script>
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
      <a class="nav-link" href="ohome.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#features">Features</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#brand">Our services</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#footer">Contact us</a>
    </li>
  </ul>

  <div class="icon">
  <a href="profile page/oprofile.php"><img src="image/user.png" alt="profile icon not found" width="30px" height="30px"></a>
  </div>
</nav>

    <!-- Banner slider section -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                
                <div class="carousel-item active">
                  <img class="d-block w-100 cr-image" src="image/image1.png" alt="First slide">
                  
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 cr-image" src="image/image2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 cr-image" src="image/image3.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              
            </div>
    <!-- Banner slider section -->
    <br>
    <!-- Vehicle box slider section -->
    <h1 class="heading" id="features" style="text-align: center;"> Our <span>Popular Vehicles</span></h1>
            <div class="listing-section">
              <div class="carousel" data-flickity='{"groupCells": true }'>
              <div class="product">
                <div class="image-box">
                  <div class="images" id="image-1"></div>
                </div>
                <div class="text-box">
                  <h2 class="item">hyundai i10</h2>
                  <h3 class="price"> &#8377;5000</h3>
                </div>
              </div>
              <div class="product">
                <div class="image-box">
                  <div class="images" id="image-2"></div>
                </div>
                <div class="text-box">
                  <h2 class="item">audi a7</h2>
                  <h3 class="price"> &#8377;40000</h3>
                </div>
              </div>
              <div class="product">
                <div class="image-box">
                  <div class="images" id="image-3"></div>
                </div>
                <div class="text-box">
                  <h3 class="item">lamborgini</h3>
                  <h3 class="price"> &#8377;100000</h3>
                </div>
              </div>
              <div class="product">
                <div class="image-box">
                  <div class="images" id="image-3"></div>
                </div>
                <div class="text-box">
                  <h3 class="item">lamborgini</h3>
                  <h3 class="price"> &#8377;100000</h3>
                </div>
              </div>
              <div class="product">
                <div class="image-box">
                  <div class="images" id="image-3"></div>
                </div>
                <div class="text-box">
                  <h3 class="item">lamborgini </h3>
                  <h3 class="price"> &#8377;100000</h3>
                </div>
              </div>
              <div class="product">
                <div class="image-box">
                  <div class="images" id="image-3"></div>
                </div>
                <div class="text-box">
                  <h3 class="item">lamborgini</h3>
                  <h3 class="price"> &#8377;100000</h3>
                </div>
              </div>
              <div class="product">
                <div class="image-box">
                  <div class="images" id="image-4"></div>
                </div>
                <div class="text-box">
                  <h3 class="item">mercedes</h3>
                  <h3 class="price"> &#8377;100000</h3>
                 </div>
              </div>
              </div>
    <!-- Vehicle box slider section-->
    <br>
<!-- Brand section -->
<h1 class="heading" id="brand" style="text-align: center;"> All <span>Brands</span></h1>
<div class="brand"><img src="image/brand.jpg" alt="image not opened" style="width: 100%;"></div>
<!-- Brand section -->
<br><br><br><br><br>

<!-- footer section -->
<?php include '../foot.php' ?>
<!-- Footer Section -->
</body>
</html>
<?php 
}else{
  ?>
    <script>
        alert("*Error:- You Need To Login First");
    </script>
    <?php
} ?>