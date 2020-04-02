<?php
include_once('db/db.php');
//error_reporting(0);

?>
<?php

if(isset($_POST['ss']))
{
  echo $_POST['search'];
  exit();
}
?>
<?php
include_once('functions.php');
include_once('phonebook.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <?php include_once('head.php'); ?>


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
          <h2 class="page-title">Tour Packages</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->
  <select>
    <option>jjj</option>
    <option value="https://en.wikipedia.org/wiki/New_Delhi">
      <a href="https://en.wikipedia.org/wiki/New_Delhi">New Delhi</a>
    </option>
   
                          <option >
                               <a href="packages.php?category=<?php echo $data['name'];?>">
                                 </a>
                          </option>
                     
  </select>
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
                      <span class="caption">Sort by : </span>
                      <select>
                        <option>Select Package</option>
    <?php 
              $query="SELECT DISTINCT name FROM `packages` ORDER BY id DESC";

               $exe=mysqli_query($conn,$query);
               if(mysqli_num_rows($exe)==0)
                {
                   
                 ?>

                  <option>No Packages Found</option>
    
                <?php
              }
              else
                {
                
                      
                    
                    while($data=mysqli_fetch_assoc($exe))
                    {

                    ?>
                    
                        
             <option value="https://en.wikipedia.org/wiki/New_Delhi">New Delhi</option>
    ?>             <a href="packages.php?category=<?php echo $data['name'];?>">
                          <option ><?php echo $data['name'];?></option>
                      </a>
                      <?php
                    }
                  }
                      ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 d-flex">
                    <form method="GET" action="">
                    <input type="text" name="search" id="search" placeholder="Search what you want........">
                    <input class="search-submit-btn" type="submit">
                   
                  </form>
                  </div>
                </div>
              </form>
            </div>
            <div class="view-style-toggle-area">
              <button class="view-btn list-btn active"><i class="fa fa-bars"></i></button>
              <button class="view-btn grid-btn"><i class="fa fa-th-large"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-70">
        <div class="col-lg-8">
          <div class="car-search-result-area list--view row mb-none-30">
            

<?php
           
$limit=$_GET['page'];

if($limit=="" || $limit=="1")
{
   $limitFrom=0;
}
else
{
    $limitFrom=($limit*4)-4;
    
}
   




            

            
    $query="SELECT * FROM `package_tours` WHERE package='International' ORDER BY id DESC LIMIT $limitFrom,4 ";
        search($query);

             function search($sel)
             {

              global $conn;
              $date=Date('d-m-Y');
              
              $exe=mysqli_query($conn,$sel);
              if(mysqli_num_rows($exe)==0)
                {
                   echo "No Data Found";
    
                }
              else
                {
                
                    $x=0;
                    
                    while($data=mysqli_fetch_assoc($exe))
                    {
                    
                        
            ?>
            <div class="col-md-6 col-12">
              <div class="car-item car-item--style2">
                <div class="thumb bg_img" data-background="assets/images/tour-packages/<?php echo $data['image'] ?>"></div>
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
                         <a href="tel:<?php echo $mobile1; ?>">
                          <?php echo $mobile1?>
                           
                         </a> 
                        </li>
                      <li>
                        
                        <a style="text-decoration:none" href="whatsapp://send?text=<?php echo current_page_url() ?>" data-action="share/whatsapp/share">
                        <button style="background-color:#25D366;color:white">Share on Whatsapp
                        </button>
                      </a>
                        
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          
            <?php
              }
             }
           }
            ?>

            <!-- car-item end -->
           <?php
                  $sel1="SELECT * FROM `package_tours` WHERE package='International'";
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
                        <a class="page-link" href="international-tour-packages.php?page=<?php echo $i ?>"><?php echo $i?></a>
                      </li>
                      

         <?php     }

         ?>
              
              
            </ul>
          </nav>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-reservation">
              <h4 class="widget-title">reservation</h4>
              <div class="widget-body">
                <form class="car-search-form">
                  <div class="row">
                    <div class="col-lg-12 form-group">
                      <select>
                        <option value="1" selected>Choose Your Car Type</option>
                        <option value="2">Another option</option>
                        <option value="4">Potato</option>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-map-marker"></i>
                      <input class="form-control has-icon" type="text" placeholder="Pickup Location">
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-map-marker"></i>
                      <input class="form-control has-icon" type="text" placeholder="Drop Off Location">
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-calendar"></i>
                      <input type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date">
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-clock-o"></i>
                      <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Pickup Time">
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-calendar"></i>
                      <input type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Drop Off Date">
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-clock-o"></i>
                      <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Drop Off Time">
                    </div>
                  </div>
                  <button type="submit" class="cmn-btn">Reservation</button>
                </form>
              </div>
            </div><!-- widget end -->
           
            <div class="widget widget-testimonial">
              <h4 class="widget-title">testimonial</h4>
              <div class="widget-body">
                <div class="testimonial-slider owl-carousel">
                  <div class="testimonial-item">
                    <div class="testimonial-item--header">
                      <div class="thumb"><img src="assets/images/testimonial/1.jpg" alt="image"></div>
                      <div class="content">
                        <h6 class="name">martin hook</h6>
                        <span class="designation">business man</span>
                      </div>
                    </div>
                    <div class="testimonial-item--body">
                      <p>Tristique consequat, lorem sed vivamus donec eget, nulla pharetra lacinia wisi diamaliquam velit nec.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- widget end -->
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

  <script >
    
    function sortByPackage()
    {
      document.getElementByClass("sort-by-package")
    }
   
  </script>
</body>


</html>