<?php
include_once('../db/db.php');
error_reporting(0);

?>
<?php include_once('session.php');?>
<?php




/// Today's Visitors count


$date=Date('d-m-Y');
$sel="SELECT * FROM `visitors` WHERE date='$date'";
$exe=mysqli_query($con,$sel);
if(mysqli_num_rows($exe)==0)
{
	 $_SESSION['todays_visitors']='0';
}
else
{
	
		 $x=0;
		
	while($data=mysqli_fetch_assoc($exe))
	{
		
		
			$x=$x+1;
			echo $_SESSION['todays_visitors']=$x;

		
			
	}
	
}


//Total Visitors count


$date=Date('d-m-Y');
$sel="SELECT * FROM `visitors`";
$exe=mysqli_query($con,$sel);
if(mysqli_num_rows($exe)==0)
{
	$_SESSION['total_visitors']='0';
}
else
{
	$y=0;
	while($today=mysqli_fetch_assoc($exe))
	{
		$y=$y+1;
		echo $_SESSION['total_visitors']=$y;
	
	}
	
	
	 
	    
	
		 
		
	
}



//header("Refresh: 3;url='index.php'");

?>	






