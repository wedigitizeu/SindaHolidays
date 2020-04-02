<?php include_once('db/db.php')?>
<?php
include_once('functions.php');
?>

<?php
if(isset($_GET['id']))
{
  $id=$_GET['id'];
}
else
{
  header('Location:index.php');
}


  $sel="SELECT * FROM `package_tours` WHERE id=$id ORDER BY id DESC";
          
    

  

              global $conn;
             
              
              $exe=mysqli_query($conn,$sel);
              if(mysqli_num_rows($exe)==0)
                {
                   echo "No Data Found";
    
                }
              else
                {
                
                    $data=mysqli_fetch_assoc($exe);                    
                    $title=$data['title'];
                    $long_desc=$data['long_desc'];
                }

          
                    
                        
            
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('head.php');?> 

    <style>
      
      
    @media screen and (max-width: 480px)
    {
   
      .wa-icon
      {
          display: block; /* On small screens make whatsapp icon appear */
      }
  } 
@media screen and (min-width: 481px)
{
    .wa-icon
    {
        display: none; /* On large screens make whatsapp icon disappear */
    }
    
}


    </style>
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->   

  <!--  header-section start  -->
  <header class="header-section">

    <?php include_once('header.php');?>
    <!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title"><?php echo $title?></h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- blog-details-section start -->
  <section class="blog-details-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-details">
            <div class="post-item-header">
              <a href="#0" class="post-date"><?php echo  $data['days']?><br>DAYS TRIP</a>
              <h3 class="post-title">
                   <?php echo $title; ?>
              </h3>
            </div>
            <div class="thumb">
              <img src="assets/images/view-more-image/<?php echo $data['view-more-image']?>" alt="<?php echo $data['alt1'];?>">
            </div>
            <ul class="post-meta">
              <li><a href="#0"><i class="fa fa-user"></i><?php echo title_name();?></a></li>
              <li><a href="#0"><i class="fa fa-tag"></i> <?php echo $title; ?></a></li>
             
            </ul>
            <div class="content">
         
              <p style="text-align:justify;color:black;">
                <?php echo $long_desc;?>
              </p>

              
             
              
             
              
            </div>
            <div class="blog-details-footer">
              <ul class="post-tags-list">
                <li class="title"><i class="fa fa-tag"></i></li>
                <li>
                 <?php echo $title; ?>
                  
                </li>
              </ul>
              <div class="post-share-count">
                <a href="#0">
                  <span class="amount">
                    
                  </span>
                  <span class="wa-icon">
                    
                    <a style="text-decoration:none" href="whatsapp://send?text=<?php echo current_page_url() ?>" data-action="share/whatsapp/share">
                      <i style="font-size:35px;color:#25D366;"class="fa fa-whatsapp" title="Share on Whatsapp"></i>
                      
                    </a>
                     
                    
                  </span>
                  
                </a>
              </div>
            </div>
          </div>
         
          
          
         
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            
            <!-- widget end -->
            <?php include_once('new-categories.php')?>
            
            <!-- widget end -->
           
           <!------Enquiry Form Starts----------->

           <?php include_once('offers.php');?>

           <!----Enquiry Form ends--------------->
           
            <!-- widget end -->
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- blog-details-section end -->

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
</body>

</html>