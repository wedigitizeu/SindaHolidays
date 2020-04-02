<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
     
    <!----------HEADER STARST--------->
  
		<?php include_once('header.php');?>
  
<!------------HEADER ENDS----------->
	 
	 <style>
		.scroll_on
		{
			overflow:scroll;
			width:100%;
		}

	</style>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
		<?php include_once('menu.php');?>
		
    <main class="app-content">
	
		  
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> ABOUT INQUIRY</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
					<div class="container-fluid">
 
<?php
$sel="SELECT * FROM `inquiry_personal_info`";
$exe=mysqli_query($conn,$sel);
if(mysqli_num_rows($exe)==0)
{
	echo "No data to show";
}
else
{
?>
  <div class="row">
	
    <div class="col-sm-1"></div>
    <div class="col-sm-10" >
	
		<div class="col-sm-12 scroll_on " >
			
			<br/><br/>
			<table class="table display nowrap" id="example" style="width:100%">
				<thead>
					  <tr>
						<th>Sl.No</th>
						<th>Date</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>View More</th>
						
						 
						 
					  </tr>
				</thead>
				<tbody>
				<?php
				
				$i=0;	
			while($data=mysqli_fetch_assoc($exe))
			{
		
			
			

?>
					 
					 <tr>
						<td><?php echo $i=$i+1;?></td>
						
						<td><?php echo $data['id'];?></td>
						<td><?php echo $data['name'];?></td>
						<td><?php echo $data['mobile'];?></td>
						<td><?php echo $data['email'];?></td>
						<td><a href="inquiry-details.php?id=<?php echo $data['mobile']?>">More</a></td>
						
						

				    </tr>
			<?php
			
			}
			}
			?>
			
					  
					
		</tbody>
			</table>
</div>
</div>
</div>
				</div>
			
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
			<?php include_once('../export_data/export_data_scripts.php') ?>
			
		
</html>