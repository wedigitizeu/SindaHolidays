<?php include_once('../db/db.php');?>
<?php

$searchpackage=$_POST['searchpackage'];

$sel="SELECT DISTINCT name FROM `packages` WHERE name LIKE '%$searchpackage%'";
$exe=mysqli_query($conn,$sel);
if(mysqli_num_rows($exe)==0)
	{

	?>
		<b><li>No Data Found</li></b>
<?php
		
	}
	else
	{
			while($data=mysqli_fetch_assoc($exe))
			{


			
			
		
		?>
				
				
				<b><li><?php echo $data['name'];?></li></b>
			
<?php			
			
		
		}

			

	}

?>