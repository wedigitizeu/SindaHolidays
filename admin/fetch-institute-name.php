<?php
//error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

	


<?php 
	
$sel="SELECT * FROM `school_college_lists` WHERE status='1'";
$exe=mysqli_query($conn,$sel);
if(mysqli_num_rows($exe)==0)
	{

?>
		<option>No Data Found pa prakash</option>
	
<?php


	}
		
	else
		{
		

			while($data=mysqli_fetch_assoc($exe))
				{
							
					?>
							<option>
							
							<?php echo $data['name'];?>
							
							</option>
													
<?php		
				}

		
		}

 ?>
