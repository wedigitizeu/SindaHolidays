<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id'];

	/*Deleting Photos*/


	$sel="SELECT * FROM `package_tours` WHERE id=$id;";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		echo "Error While Deleting Photos";
		exit();
	}
	else
	{
		$data=mysqli_fetch_assoc($exe);
		unlink("../assets/images/tour-packages/".$data['image']);
		unlink("../assets/images/view-more-image/".$data['view-more-image']);

	}



	$query="DELETE FROM `package_tours` WHERE id='$id'";
	if($obj->InsertQuery($query))
	{
		echo "<script>alert('Deleted');</script>";
	}
	else
	{
		echo "<script>alert('Error while Deleting');</script>";
	}

}

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
          <h1><i class="fa fa-pencil"></i> Edit or Delete Tour Packages </h1>
          <p></p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
					<div class="container-fluid">
 
<?php
$current_date=date('d-m-Y');
$sel="SELECT * FROM `package_tours`";
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
						<th>Id</th>
						<th>Date</th>
						<th>Title</th>
						<th>Package</th>
						<th>Edit</th>
						<th>Delete</th>
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
						<td><?php echo $data['date'];?></td>
						<td><?php echo $data['title'];?></td>
						<td><?php echo $data['package'];?></td>
						<td><a href="edit-tour-package.php?id=<?php echo $data['id']?>">Edit</a></td>
						<td><a href="all-tour-packages.php?id=<?php echo $data['id']?>">Delete</a></td>
					
						
						

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