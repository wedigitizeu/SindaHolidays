<?php
include_once('phonebook.php');
?>
<div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="<?php echo facebook();?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo twitter();?>"><i class="fa fa-twitter"></i></a></li>
             
            </ul>
          </div>
          <div class="col-lg-9">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p><?php echo address1();?></p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p><?php echo timings();?></p>
              </li>
              <li>
                <i class="fa fa-phone"></i>
                  <p><?php echo mobile();?></p>
              </li>
              
            </ul>
          </div>
         
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <!--<a class="site-logo site-title" href="index.html"><img src="assets/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>--->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About us</a>
              <li><a href="tour-package.php?package=India">Indian Tour Package</a>
                
              </li>
              <li><a href="tour-package.php?package=International">International Tour Package</a>
                
              </li>
             
              <li><a href="contact.php">contact us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>