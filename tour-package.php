<?php
include_once('db/db.php');
error_reporting(0);
?>
<?php
include_once('functions.php');
include_once('phonebook.php');
?>


<?php
    $query="";
    $limit=$_GET['page'];

    if($limit=="" || $limit=="1")
    {
       $limitFrom=0;
    }
    else
    {
        $limitFrom=($limit*4)-4;
        
    }
?>
     

<?php


    if(isset($_GET['search']))
    {
       $data=$_GET['data'];

        $query="SELECT * FROM `package_tours` WHERE title LIKE '%$data%' OR short_desc LIKE '%$data%' OR package LIKE '%$data%' ORDER BY id DESC LIMIT $limitFrom,4";
      

    }
    if(isset($_GET['package']))
    {
      $package=$_GET['package'];
      $query="SELECT * FROM `package_tours` WHERE package='$package' ORDER BY id DESC LIMIT $limitFrom,4";
      
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <?php include_once('head.php'); ?>

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
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/banner.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title"><?php echo $package; ?> Tour Packages</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>Tour Packages</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->
 
  <!-- car-search-section start -->
  <section class="car-search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-filter-area">
            <div class="car-search-filter-form-area">
              <form class="car-search-filter-form">
                <div class="row justify-content-between">
                  <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="cart-sort-field">
                      <span class="caption"></span>

                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 d-flex">
                    <form method="get" action="">
                    <input type="text" name="data"  placeholder="Search what you want...">
                   <input style="background-color:#da1c36;color:white;" type="submit" name="search" value="Search">
                  </form>
                  </div>
                </div>
             
            </div>
            <div class="view-style-toggle-area">
              <button class="view-btn list-btn active"><i class="fa fa-bars"></i></button>
              <!---<button class="view-btn grid-btn tg-btn"><i class="fa fa-th-large"></i></button>--->
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-70">
        <div class="col-lg-8">
          <div class="car-search-result-area list--view row mb-none-30">
            

<?php


           

   




            

            

        

              
              $date=Date('d-m-Y');
              
              $exe=mysqli_query($conn,$query);
              if(mysqli_num_rows($exe)==0)
                {
                  
                  echo "<center>
                        <h2>Oops! sorry result not found</h2>
                        </center>";
                }
              else
                {
                
                    $x=0;
                    
                    while($data=mysqli_fetch_assoc($exe))
                    {
                    
                        
            ?>
            <div class="col-md-6 col-12">
              <div class="car-item car-item--style2">
                <div class="thumb bg_img" data-background="assets/images/tour-packages/<?php echo $data['image'] ?>" alt="<?php echo $data['alt1'];?>"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title"><?php echo $data['title']?></h4>
                    <span style="color:#da1c36" class="price"><?php echo $data['days'].' Days Trip'?></span>
                    <p style="text-align:justify;color:black;"><?php echo $data['short_desc']?></p>
                    <a href="view-more.php?id=<?php echo $data['id'];?>" class="cmn-btn">View More</a>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">

                      <li>
                    
                        <i class="fa fa-car"></i>
                        <?php echo $data['package'].' Package'?>
                      </li>
                      <li>
                        <i class="fa fa-phone"></i>
                         <a style="text-decoration:none" href="tel:<?php echo mobile(); ?>">
                          <?php echo mobile();?>
                           
                         </a> 
                        </li>
                      <li>


                         <span class="wa-icon">
                    
                    <a style="text-decoration:none" href="whatsapp://send?text=<?php echo current_page_url() ?>" data-action="share/whatsapp/share">
                      <i style="font-size:25px;color:#25D366;"class="fa fa-whatsapp" title="Share on Whatsapp"></i>
                      
                    </a>
                     
                    
                  </span>

                        <!---------->
                        
                        
                        
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          
            <?php
              }
             }
           
            ?>

            <!-- car-item end -->
           <?php
                  $sel1="SELECT * FROM `package_tours` WHERE package='$package'";
                  $exe=mysqli_query($conn,$sel1);
                  $count=mysqli_num_rows($exe);
                  $count=ceil($count/4);
            ?>
                  <br><br>
            
           
            
          </div>
       <nav class="d-pagination" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <?php

                     for($i=1;$i<=$count;$i++)
                  {
                     ?>
                    
                        
                     
                      
                      
                      <li class="page-item active">
                        <a class="page-link" href="tour-package.php?page=<?php echo $i?>&package=<?php echo $package?>"><?php echo $i?></a>
                      </li>
                      

         <?php     }

         ?>
              
              
            </ul>
          </nav>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
           <!------Enquiry Form Starts----------->

           <?php include_once('new-categories.php')?>
           <?php //include_once('inquiry.php')?>

           <!----Enquiry Form ends--------------->
           
              <?php include_once('offers.php');?>
            <!-- widget end -->
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- car-search-section end -->

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