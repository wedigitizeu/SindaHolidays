<?php
include_once('phonebook.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('head.php');?>
</head>
<body>
   

  <!--  header-section start  -->
  <header class="header-section">
     <?php include_once('header.php');?>
    <!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/banner.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">get in touch with us</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>contact</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- contact-section start -->
  <section class="contact-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="contact-item text-center">
            <div class="icon"><i class="fa fa-building"></i></div>
            <div class="content">
              <h4 class="title">office address</h4>
              <p style="font-style:justify">
                
                <?php echo address();?>
              </p>
            </div>
          </div>
        </div><!-- contact-item end -->
        <div class="col-lg-4">
          <div class="contact-item text-center">
            <div class="icon"><i class="fa fa-phone"></i></div>
            <div class="content">
              <h4 class="title">Phone Number</h4>
              <p style="margin-bottom:20%;">
                <a style="text-decoration:none;" href="tel:<?php echo mobile();?>"><?php echo mobile();?></a>
                
                
              </p>
            </div>
          </div>
        </div><!-- contact-item end -->
        <div class="col-lg-4">
          <div class="contact-item text-center">
            <div class="icon"><i class="fa fa-envelope-o"></i></div>
            <div class="content">
              <h4 class="title">Email Address</h4>
              <p style="margin-bottom:20%;"><?php echo gmail();?></p>
            </div>
          </div>
        </div><!-- contact-item end -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-form-area">
            <h3 class="title">send your messages</h3>
            <form class="contact-form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="frm-group">
                    <input class="input-sm form-full" id="name" type="text"  placeholder="Your Name">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="frm-group">
                    <input class="input-sm form-full" id="mobile" 
                     type="text"  placeholder="Mobile Number">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="frm-group">
                   <textarea class="form-full" id="message" rows="7"  placeholder="Your Message" ></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="frm-group">
                      <button class="btn-text"  style="background-color:#da1c36;color:white;padding:1%;"type="button" id="submit" name="button">Send Message</button>
                      <p id="result"></p>
                      <span>
                          <h4 id="warning"></h4>
                      </span>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

  <!-- footer-section start -->
  <footer class="footer-section">
    <?php include_once('footer.php');?>
  </footer>
  <!-- footer-section end -->
  
  <!-- scroll-to-top start -->
  <?php include_once('scroll-to-top.php')?>
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


  <script >
  
  $('document').ready(function()
  {
    $("#submit").click(function()
    {
    
  
  var emailReg= '^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$'; 
      mobileReg='^[0-9]{10}$';
      var name =$("#name").val();
    
      var mobile=$("#mobile").val();
      var message=$("#message").val();
      if(name=="")
      {
        $("#warning").html("Please Enter Your Name <i class='em em-disappointed'></i>");
      }
      else if(!mobile.match(mobileReg))
      {
        $("#warning").html("Please Enter Valid Mobile Number <i class='em em-disappointed'></i>");
      }
      else if(message=="")
      {
        $("#warning").html("Message Field Should Not Empty <i class='em em-disappointed'></i>");
      }
else
{



  $("#warning").css("display","none")
  $.post("scripts/insert-contact_form.php",
  {
    name:name,
    mobile:mobile,
    message:message

  },function(data)
  {

    $("#result").html(data);

  
  });




    
}


});
  });

</script>
</body>

</html>