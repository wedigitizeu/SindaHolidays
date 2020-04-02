<?php

include_once('db/db.php');
$sel="";
if(isset($_GET['btn']))

{
	
	echo $key=$_GET['btn'];
	$sel="SELECT * FROM `package_tours` WHERE package='$key' ORDER BY id DESC";
	
	
}



else 
{
	$sel="SELECT * FROM `package_tours`";
	
}


			  echo $sel."<br>";
              $exe=mysqli_query($conn,$sel);
               if(mysqli_num_rows($exe)==0)
                {
                	echo "No data Found";
                }
                else
                {

                    while($data=mysqli_fetch_assoc($exe))
                    {
                    	echo $data['package']."<br>";
                    }
                }



?>





<form method="get" action="">
	<input type="submit" name="btn" value="India">

	<input type="submit" name="btn" value="International">
</form>