<?php
session_start();
include_once('../db/db.php');
?>

<?php

if(isset($_POST['sub']))
{
	echo $email=$_POST['email'];
	echo $pwd=$_POST['pwd'];
	
	$sel="SELECT * FROM `login` WHERE (email='$email') AND (password='$pwd')";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)>0)
	{
		$data=mysqli_fetch_assoc($exe);
		$name=$data['name'];
		$_SESSION["uname"]=$name;
		$obj->url("new-package.php");
	}
	else
	{
		$_SESSION["invalid"]='Invalid User';
		$obj->url("index.php");
	}
	
}


?>
