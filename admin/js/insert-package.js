function gotoInsert()
{
	/*https://www.cloudways.com/blog/the-basics-of-file-upload-in-php/*/
	var num=1;
	var packageCategory=$("#package").val();
	var title=$("#title").val();
	/*Number of trip days*/
	var days=$("#days").val();
	var short_desc=$("#short_desc").val();
	var long_desc=$("#editor1").val();
	alert(long_desc);


	$.post("insert-new-package.php",
		{

				num:num,
				packageCategory:packageCategory,
				title:title,
				days:days,
				long_desc:long_desc,
				short_desc:short_desc
			
				

		},
		function(data)
		{

			$("#result").html(data);

		});

	
}
/*Counting Character in short description and slicing it*/
function countCharacter()
{
	var content=$("#short_desc").val();
	var contentLength=content.length;
	$("#characterLeft").html(200-contentLength);
	if(contentLength>=200)
	{
		var slicedContent=content.slice(0,200);
		$("#short_desc").val(slicedContent);
		$("#characterLeft").html(0);
	}
}
$(document).ready(function ()
	{


		$("#insert_package").click(gotoInsert);

		$("#short_desc").keyup(countCharacter);

		$("#characterLeft").html(200 );

		
	});

