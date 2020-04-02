<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

<?php

$mobile=$_POST['mobile'];

$sel="SELECT * FROM `review_booster` WHERE mobile='$mobile'";
$exe=mysqli_query($con,$sel);
if(mysqli_num_rows($exe)>0)
{
	echo "<h3>Already invited to comment </h3>";
}
else
{
	$query="INSERT INTO `review_booster`(`mobile`, `status`, `sms_counter`) VALUES 
	('$mobile','1','1')";
	if($obj->insertQuery($query))
	{
		$msg="Your one review will boost us to work more.\n https://www.google.com/search?hl=en-IN&gl=in&q=Sangameshwara+Flower+Decorators,+%23+8/3,+Vasavi+Complex,+HMT+Main+Rd,+Gokula+1st+Stage,+Mathikere+Extension,+Mathikere,+Bengaluru,+Karnataka+560054&ludocid=10096349667132745354#lrd=0x3bae3d5e27dd4a31:0x8c1d70878d94a68a,3";
		
		if($obj->textLocal($mobile,$msg))
		{
			echo "<h3>Sent</h3>";
		}
		else
		{
			echo "<h3> Sent</h3>"; 
		}
		
	}
	else
	{
		echo "<h3>Please Contact Service Provider</h3>";
	}
		
}


?>