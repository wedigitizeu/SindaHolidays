<?php
include_once('session.php');
?>
<?php 
error_reporting(0);

$msg=$_SESSION['msg'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
			
    <!----------HEADER STARST--------->
  
		<?php include_once('header.php');?>
  
<!------------HEADER ENDS----------->
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
      <?php include_once('menu.php')?>
    <main class="app-content">
      <div class="page-error tile">
        <h3>
		<?php 
		echo $msg;
		 
		
		?>
		</h3>
        <br/>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Go Back</a></p>
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