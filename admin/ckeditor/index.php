<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CKEditor</title>
		<script src="ckeditor/ckeditor.js"></script>
		
	</head>
	<body>
		<textarea style="margin:auto;border:10px solid red;" name="editor1"></textarea>
		
	</body>
	
	<script>
			CKEDITOR.replace( 'editor1' );
		</script>
		<script>
			CKEDITOR.on('dialogDefination',function(e)
			{
					dialogName=e.data.name;
					console.log(dialogName);
			}
		)
		</script>
	
</html>