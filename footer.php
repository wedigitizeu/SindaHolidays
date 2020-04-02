<?php
include_once('phonebook.php');
?>
    <div class="footer-top pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <div class="footer-widget widget-about">
              <div class="widget-about-content">
                <!---<a href="index.html" class="footer-logo"><img src="assets/images/logo-footer.png" alt="logo"></a>--->
                <p style="text-align:justify;"> 
                  We offer Tour Packages to World most popular and exotic tourist locations both International and National. Offered at comprehensive price, our packages are planned to perfection covering all the requirements, including tickets, accommodation, food, local guides and visa processing.We will provide other services like AIR TICKETS, BUS TICKETS, TRAIN TICKETS, HOTEL BOOKING, PACKAGE TOURS, VISA ASSIT, PASSPORT SERVICES
                </p>
                <ul class="social-links">
                  <li><a href="<?php echo facebook(); ?>"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<?php echo twitter(); ?>"><i class="fa fa-twitter"></i></a></li>
                  
                  <li><a href="<?php echo gmail();?>">
                    <i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">useful link</h4>
              <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="http://localhost/sinda/tour-package.php?package=India">Indian</a></li>
                <li><a href="tour-package.php?package=International">International</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-address">
              <h4 class="widget-title">contact with us</h4>
              <ul>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <span>
                  <?php echo address(); ?>
                </span>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <span>
                    <?php echo gmail();?>
                  </span>
                </li>
                <li>
                  <i class="fa fa-phone-square"></i>
                  <span><?php echo mobile();?></span>
                 
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
            <p class="copy-right-text"><a href="https://www.wedigitizeu.com">Powered By We Digitize U</a></p>
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