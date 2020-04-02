<?php include_once('../db/db.php');?>
<?php


/*Updating Tour Package Starts*/
if(isset($_POST['up']))
{
	echo $id=$_POST['id'];

	/*Deleting Old images Starts*/

		$sel="SELECT * FROM `package_tours` WHERE id=$id";
		$exe=mysqli_query($conn,$sel);
		if(mysqli_num_rows($exe)==0)
		{
			echo "Error while fetching Short Desc. Image";
		}
		else
		{
			$data=mysqli_fetch_assoc($exe);
			

		}

/*Deleting old Images Ends*/







	//echo $_POST['photo'];
	
	
	
	$date=Date('Y-m-d');
 	$packageCategory=$_POST['package'];
 	$title=$_POST['title'];
 	
	$days=$_POST['days'];
 	$short_desc=$_POST['short_desc'];
 	$long_desc=$_POST['editor1'];
 	$status=1;
 	$alt1=$_POST['alt1'];
	$alt2=$_POST['alt2'];

 	$query="UPDATE `package_tours` SET `date`='$date',`package`='$packageCategory',`title`='$title',`days`='$days',`short_desc`='$short_desc',`long_desc`='$long_desc',`status`='$status',alt1='$alt1',alt2='$alt2' WHERE id=$id";

	if($obj->insertQuery($query))
 	{
 		echo "<center>
 				<h2>$title Updated Successfully</h2>
 		</center>";
 		
 	}
 	else
 	{
 		echo "<center>
 				<h2>$title Error While Updating</h2>
 		</center>";
 		
 	}

	$size=$_FILES["photo"]["size"];
	$error=$_FILES["photo"]["error"];
	$file_name=$_FILES["photo"]["name"];
	$temp_name=$_FILES["photo"]["tmp_name"];
	$folder="../assets/images/tour-packages/".$file_name;
	move_uploaded_file($temp_name, $folder);

	if($file_name!="")
	{
		
		unlink("../assets/images/tour-packages/".$data['image']);
		$query="UPDATE `package_tours` SET `image`='$file_name' WHERE id=$id";

		if($obj->insertQuery($query))
	 	{
	 		echo "<center>
	 				<h2>$title Updated Successfully</h2>
	 		</center>";
	 		
	 	}
	 	else
	 	{
	 		echo "<center>
	 				<h2>Error In Uploading Short Image</h2>
	 		</center>";
	 		
	 	}
	}


	$size=$_FILES["image2"]["size"];
	$error=$_FILES["image2"]["error"];
	$viewmoreimage=$_FILES["image2"]["name"];
	$temp_name=$_FILES["image2"]["tmp_name"];
	$folder="../assets/images/view-more-image/".$viewmoreimage;
	move_uploaded_file($temp_name, $folder);

	if($viewmoreimage!="")
	{
		unlink("../assets/images/view-more-image/".$data['view-more-image']);
		$query="UPDATE `package_tours` SET `view-more-image`='$viewmoreimage' WHERE id=$id";

		if($obj->insertQuery($query))
	 	{
	 		echo "<center>
	 				<h2>$title Updated Successfully</h2>
	 		</center>";
	 		
	 	}
	 	else
	 	{
	 		echo "<center>
	 				<h2>Error In Uploading Lonng Description Image</h2>
	 		</center>";
	 		
	 	}
	}

	///

	

	


	
}
else
{
	
}



/*Updating Tour Package ends*/

?>