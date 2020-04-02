<?php
if(isset($_POST['sub']))
{
	
	
	 $_FILES["image"];
	$filename=$_FILES["image"]["name"];
	echo $temp_name= $_FILES["image"]["tmp_name"];
	echo $folder ="blog-images/".$filename;
	move_uploaded_file($temp_name,$folder);
	
}


?>

<html>
<head>
<title></title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">

	<input type="file" name="image"/>
	<input type="submit" name="sub" />
	
</form>
</body>
</html>
