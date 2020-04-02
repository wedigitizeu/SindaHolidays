$(document).ready(function(){

	
	
	$("#meeting_date").css("display", "none");
	
/*-------------------------------------------*/
	$("#status").change(function(){

		var status=$("#status").val();
		if(status=='contact_later')
		{
			$("#meeting_date").css("display", "block");
		}
	});





});