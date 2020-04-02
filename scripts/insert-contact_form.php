<?php
include_once('../db/db.php');
include_once('../phonebook.php');


?>

<?php

 $name=$_POST['name'];
 $email="";
 $mobile=$_POST['mobile'];
 $msg=$_POST['message'];
 $date=Date('d-m-Y');
$query="INSERT INTO `enquiry`(`date`, `name`, `email`, `mobile`, `msg`) 
VALUES ('$date','$name','$email','$mobile','$msg')";
		if($obj->insertQuery($query))
		{


		$email='prakashk827@gmail.com';
		$message ='';
		$message .='<p>Name : '.$_POST['name'].'</p>';
		$message .='<p>Mobile Number : '.$_POST['mobile'].'</p>';
		$message .='<p>Message : '.$_POST['message'].'</p>';
	 	$subject='New Inquiry : '.$_POST['name'];
	 	$to="prakashk827@gmail.com";
	 	$headers =  'From: '.$to. "\r\n" .
				 'Content-Type: text/html; charset="iso-8859-1"\r\n'.
				 'Reply-To: '.$email . "\r\n" .
				 'X-Mailer: PHP/' . phpversion();
		//echo $message;
	 	@mail($to, $subject, $message, $headers);
	 	
		?>
			<script >
				$("document").ready(function(){

					$("#tq").show(2000);
					$("#msg").show(3000);
					$("#tq").hide(80000);
					$("#msg").hide(80000);

						

				});
			</script>

			<h3 id="tq" style="display:none;">Thank you for getting in touch!</h3>
			<h6 id="msg" style="display:none;">
				We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the mobile number listed below to talk to one of our staff members. Otherwise, we will reply by call as soon as possible.<br>
				<br><b><?php echo title_name();?><br><?php echo mobile();?></b>

			</h6>

		<?php		
		}
		else
		{
			echo "<h1>Error</h1>";
		}

?>
