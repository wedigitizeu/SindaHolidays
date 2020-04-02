<?php 
session_start();
$uname=$_SESSION["uname"];
if($uname==true)
{
	
}
else
{
	header('Location:index.php');
}

?>