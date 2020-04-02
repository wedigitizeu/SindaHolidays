///////New admission form  
$(document).ready(function(){

	
	$("#cheque_field").css("display","none");
	$("#upi_field").css("display","none");

	$("#initial_payment").keyup(function(){

		var course_fees=$("#course_fees").val();
		if(course_fees=="")
		{
			alert("Please Enter Course Fee");
			$("#initial_payment").val(0);
		}
		else
		{
			var initial_payment=$("#initial_payment").val();;
			var balance=(course_fees-initial_payment);
			$("#balance").val(balance);
			if(balance==0)
			{
				$("#installment").css("display","none");

			}
			else
			{
				$("#installment").css("display","block");
			}
			
		}
		
	});

	//About Payment Method

	$("#payment_mode").change(function(){

			payment=$("#payment_mode").val();
			if(payment=='cheque')
			{
				$("#cheque_field").css("display","block");
			}
			else if(payment=='upi')
			{
				$("#upi_field").css("display","block");
				$("#cheque_field").css("display","none");
			}
			else
			{
				$("#cheque_field").css("display","none");
				$("#upi_field").css("display","none");
			}
	});

});