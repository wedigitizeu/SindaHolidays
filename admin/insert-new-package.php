<?php include_once('../db/db.php');?>
<?php

 
 
 if(isset($_POST['sub']))
 {
 	$date=Date('Y-m-d');
 	$packageCategory=$_POST['package'];
 	$title=$_POST['title'];
 	
	$days=$_POST['days'];
 	$short_desc=$_POST['short_desc'];
 	$long_desc=$_POST['editor1'];
 	$status=1;
 	$alt1=$_POST['alt1'];
 	$alt2=$_POST['alt2'];
 	

	$size=$_FILES["photo"]["size"];
	$error=$_FILES["photo"]["error"];
	$file_name=$_FILES["photo"]["name"];
	$temp_name=$_FILES["photo"]["tmp_name"];
	$folder="../assets/images/tour-packages/".$file_name;
	move_uploaded_file($temp_name, $folder);


	$size=$_FILES["image2"]["size"];
	$error=$_FILES["image2"]["error"];
	$viewmoreimage=$_FILES["image2"]["name"];
	$temp_name=$_FILES["image2"]["tmp_name"];
	$folder="../assets/images/view-more-image/".$viewmoreimage;
	move_uploaded_file($temp_name, $folder);
 

 	$query="INSERT INTO `package_tours`(`date`, `package`, `title`, `image`,`view-more-image`, `days`, `short_desc`, `long_desc`, `status`,`alt1`,`alt2`) VALUES('$date','$packageCategory','$title','$file_name','$viewmoreimage','$days','$short_desc','$long_desc','$status','$alt1','$alt2')";
 		

 	if($obj->insertQuery($query))
 	{
 		echo "<center>
 				<h2>$title Package Addedd</h2>
 		</center>";
 	}
 	else
 	{
 		echo "<center>
 				<h2>Error in Adding New Package</h2>
 		</center>";
 	}
 }
 


?>