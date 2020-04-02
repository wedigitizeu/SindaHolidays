<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>
<?php
if(isset($_POST['sub']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$conv=$_POST['conv'];
	$note=$_POST['note'];
	
	
	$query="INSERT INTO `reminder`(`name`, `mobile`, `email`, `date`, `time`,`conv`,`note`, `status`) VALUES 
	('$name','$mobile','$email','$date','$time','$conv','$note','0')";
	if($obj->insertQuery($query))
	{
		$_SESSION['msg']="Successfully added as reminder";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
	}
	else
	{
		$_SESSION['msg']="Please contact to service provider";
			
			echo "<script>
					window.location.href = 'page-error.php';
				</script>";
	}
	
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	
    
    <!----------HEADER STARST--------->
  
		<?php include_once('header.php');?>
  
	<!------------HEADER ENDS----------->
	
	<!--------Jquery------------>
	<!---Jquery--------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
	
	<script>
		$(document).ready(function (){
			
			$("#sub").click(function (){
				
				var mobile=$("#mobile").val();
				
				
				$.post("review-booster-ajax.php",{mobile:mobile},function(data){
					
					$("#result").html(data);
				});
				
			});
			
		});
	
	</script>
	</head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <?php include_once('menu.php')?>
    <main class="app-content">
      
        <div class="app-title">
        <div>
          <h1><i class="fa fa-superpowers"></i> Review Booster</h1>
          <p>If you are not emotionally involved, your client is not getting your best effort.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <!--<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">UI</li>
          <li class="breadcrumb-item"><a href="#">Cards</a></li>-->
        </ul>
      </div>
        
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                
                  
				<div class="form-group">
                    <label for="exampleInputEmail1">Client Mobile Number</label>
                    <input class="form-control" id="mobile" type="text" name="mobile"/>
					<p id="result"></p>
				</div>
				 
				<button class="btn btn-primary" type="submit" id="sub" name="sub">Send</button>
                  
                 
                
              </div>
              
            </div>
            <div class="tile-footer">
              
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>