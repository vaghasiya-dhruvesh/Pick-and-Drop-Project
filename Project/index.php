<html>
    <head>
        <title>
            vehicle renting system
        </title>

       
     <link rel="stylesheet" href="index.css">   
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
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <a href="#" class="logo navbar-brand"><i class="fa fa-car" aria-hidden="true"></i></a>

             <!-- Navbar text-->
             <span class="navbar-text">
                Vehicle Renting System  
              </span>

              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <!-- Links -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="html/login.html">Vehicles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#brand">Our services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact us</a>
                </li>
              </ul>

              <div class="icon">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <div class="fa fa-bars" id="menu-btn"></div> -->
             
                <!-- <div class="fa fa-shopping-cart" id="cart-btn"></div>
                <div class="fa fa-user" id="login-btn"></div> -->
                 <a href="html/login.html" class="btn1 btn btn-danger" style=" width: 90px; height:50px; padding: 0.75rem 0.3rem;">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="html/registration.html" class="btn2 btn btn-danger"style=" width: 90px; height:50px; padding: 0.75rem 0.3rem;">Register</a>
            </div>
           
            
            </nav>

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
<!-- Vehicle box slider section-->
            <br>
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
<h1 class="heading" id="brand" style="text-align: center;"> All <span>Brands</span></h1>
<div class="brand"><img src="image/brand.jpg" alt="image not opened" style="width: 100%;"></div>

<br><br><br><br><br><br><br><br>

<!-- footer section -->


<section class="footer" id="footer">
  <div class="box-container">
      <div class="box">
          <h3>Vehicle Rental Services <i class="fa fa-car" aria-hidden="true"></i></h3><br><br>
          <p>Feel free to follow us on our social media handlers. All the links are given below</p>
          <div class="share">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-instagram"></a>
              <a href="#" class="fa fa-linkedin"></a>
          </div>
      </div>

      <div class="box">
        <h3>Contact info</h3><br>
        <a href="#" class="links"><i class="fa fa-phone"></i> +91 8780463161</a>
        <a href="#" class="links"><i class="fa fa-phone"></i> +91 9173561696</a>
        <a href="#" class="links"><i class="fa fa-envelope"></i> dhruveshpatel2005@gmail.com</a>
        <a href="#" class="links"><i class="fa fa-map-marker"></i> Anand, India 388120</a>
      </div>

      <div class="box">
        <h3>Quick Links</h3><br>
        <a href="#home" class="links"><i class="fa fa-arrow-right"></i> Home</a>
        <a href="#features" class="links"><i class="fa fa-arrow-right"></i> Features</a>
        <a href="#products" class="links"><i class="fa fa-arrow-right"></i> Vehicles</a>
        <a href="#brand" class="links"><i class="fa fa-arrow-right"></i> Our Services</a>
        <a href="#footer" class="links"><i class="fa fa-arrow-right"></i> Contact Us</a>
      </div>

      <div class="box">
        <h3>Newsletters</h3><br>
        <p>Subscribe for Latest Update</p>
        <input type="email" placeholder="Your Email" class="email">
        <input type="submit" value="Subscribe" class="btn">
      </div>
  </div>
</section>
<!-- Footer Section -->
  
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/home.js"></script>
</body>
</html>