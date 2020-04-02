<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>
<?php

	
	$date=Date('Y-m-d');
	$name=$_POST['name'];
	$status='1';
	$query="INSERT INTO `packages`(`date`,`name`,`status`) 
	VALUES ('$date','$name','$status')";

	if($obj->insertQuery($query))
	{
		
		echo "<center>
 				<h2>New Package Added</h2>
 		</center>";
		
      

   
	}
	else
	{
		
		echo "<center>
 				<h2>Error in Adding New Package</h2>
 		</center>";
		
	}


?>
	


	   
                
				  
	
                
		
		
                
                
                
             
    