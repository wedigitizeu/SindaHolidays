<?php 
include_once('../db/db.php');
session_start();
?>

<?php include_once('session.php');?>
<?php
$ip=$_SERVER['REMOTE_ADDR'];

$sel="SELECT * FROM `visitors` WHERE ip='$ip'";
$exe=mysqli_query($conn,$sel);
if(mysqli_num_rows($exe)==0)
	
{

	$date=Date('d-m-Y');
	$status=0;
	$query="insert into visitors (date,ip,status) values('$date','$ip','$status')";
	$exe=mysqli_query($con,$query);
	if($exe)
	{
		$_SESSION['msg']="Oops..<br/> Added";
			
			
	}
	else
	{
		
		
	}
	
}
else
	{
			
	}

?>