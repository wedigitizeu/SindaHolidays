<?php
include_once('db/db.php');
error_reporting(0);
?>
<?php
include_once('functions.php');
include_once('phonebook.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('head.php');?>
</head>
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->   

  <!--  header-section start  -->
  <header class="header-section">
      <?php include_once('header.php');?>
  </header>
  <!--  header-section end  -->

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">page not found</h2>
          <ol class="page-list">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li>404</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- error-section start -->
  <section class="error-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="error-content text-center">
           <!-- <img src="assets/images/elements/404.png" alt="image">-->
            <h2 class="title">Oops! sorry page not found </h2>
            
            <a href="index.php" class="cmn-btn">got to home</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- error-section end -->

  <!-- footer-section start -->
  <footer class="footer-section">
    <div class="footer-top pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-about">
              <div class="widget-about-content">
                <a href="index.html" class="footer-logo"><img src="assets/images/logo-footer.png" alt="logo"></a>
                <p>Lorem ipsum dolor sit amet, congue placeranec. Leo faucibus sed eleifend bibendum n vehicula nulla mauris nulla ipsum neque sed. Gravida egestas fermentum urna, velit sed. </p>
                <ul class="social-links">
                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">our cars</h4>
              <ul>
                <li><a href="#0">mistubishi lancer</a></li>
                <li><a href="#0">forester subar</a></li>
                <li><a href="#0">mirage ange</a></li>
                <li><a href="#0">pajero range</a></li>
                <li><a href="#0">subaru liberty</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">useful link</h4>
              <ul>
                <li><a href="#0">about</a></li>
                <li><a href="#0">reservation</a></li>
                <li><a href="#0">faq</a></li>
                <li><a href="#0">blog</a></li>
                <li><a href="#0">car list</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-address">
              <h4 class="widget-title">contact with us</h4>
              <ul>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <span>Medino, NY 10012, Kitaniya Road Nikamobo Libono USA</span>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <span>www.carrentalinfo2457@gmail.com www.oursupport/info@gmail.com</span>
                </li>
                <li>
                  <i class="fa fa-phone-square"></i>
                  <span>+88014578541-09 , +0885424-542-254 +88047859-4541</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-sm-6">
            <p class="copy-right-text"><a href="templateshub.net">Templates Hub</a></p>
          </div>
          <div class="col-sm-6">
            <ul class="payment-method d-flex justify-content-end">
              <li>We accept</li>
              <li><img src="assets/images/money-method/1.png" alt="image"></li>
              <li><img src="assets/images/money-method/2.png" alt="image"></li>
              <li><img src="assets/images/money-method/3.png" alt="image"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-section end -->
  
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- jquery js link -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- jquery migrate js link -->
  <script src="assets/js/jquery-migrate-3.0.0.js"></script>
  <!-- bootstrap js link -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- lightcase js link -->
  <script src="assets/js/lightcase.js"></script>
  <!-- wow js link -->
  <script src="assets/js/wow.min.js"></script>
  <!-- nice select js link -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- datepicker js link -->
  <script src="assets/js/datepicker.min.js"></script>
  <script src="assets/js/datepicker.en.js"></script>
  <!-- wickedpicker js link -->
  <script src="assets/js/wickedpicker.min.js"></script>
  <!-- owl carousel js link -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- jquery ui js link -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- main js link -->
  <script src="assets/js/main.js"></script>
</body>

</html>