<?php
error_reporting(0);
require("fpdf/fpdf.php");

$conn=mysqli_connect("localhost","root","","abc_study_center");
if($conn)
{
	$s="Connected";
}
else
{
	$s="Not Connected";
}






$pdf=new FPDF();
// It will Add a Page
$pdf->AddPage();

if(isset($_GET['id']))
	
{

	$id=$_GET['id'];
	$sel="SELECT * FROM `inquiry_personal_info` WHERE mobile=$id";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		echo "No Data Found";
	}
	else
	{
		$personal_info=mysqli_fetch_assoc($exe);
		$name=$personal_info['name'];
		$mobile=$personal_info['mobile'];
		$email=$personal_info['email'];
		$address=$personal_info['address'];
	}
	
	/*FETCHING STUDY INFO*/

	$sel="SELECT * FROM `inquiry_study_info` WHERE mobile=$id";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		echo "No Data Found";
		
		
		
	}
	else
	{
		$study_info=mysqli_fetch_assoc($exe);
		
		$institute=$study_info['institute'];
		$course=$study_info['course'];
		$subject=$study_info['subject'];
		$batch=$study_info['batch'];
		$institute_time=$study_info['institute_time'];
		
		
		
	}
	
	
	/* FETCHING DATA FROM FEES*/

	$sel="SELECT * FROM `inquiry_about_fees` WHERE mobile=$id";

	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		echo "No Data Found";
		
		
	}
	else
	{
		$fees_info=mysqli_fetch_assoc($exe);
		$fixed_fees=$fees_info['course_fees'];
		
		
		
	}
	
	/*FETCHING DATA FROM ADVERTISE*/

	$sel="SELECT * FROM `inquiry_advertisement` WHERE mobile=$id";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		echo "No Data Found";
		
		
	}
	else
	{
		$advertise_info=mysqli_fetch_assoc($exe);
		
		$ad=$advertise_info['advertise'];
		
		
		
		
	}
}


$pdf->Image("fpdf/logo.png",10,6,30);
$pdf->Cell(0,20,"",0,1,"C");

$pdf->SetFont("Arial","B",25);
$pdf->SetTextColor(220,50,50);
$pdf->Cell(0,5,"ABC STUDY CENTRE",0,1,"C");
$pdf->Cell(140,5,"",0,1,"L");

$pdf->SetTextColor(00,00,00);
$pdf->SetFont("Arial","",12);
$pdf->Cell(0,5,"Website: http://www.abcstudycentre.com",0,1,"C");

$pdf->Cell(0,10,"PH: 080-23603344/41132380,9916193501,9880883504",0,1,"C");

//SetFont(font-family,font-style(bold etc),font-size)
$pdf->SetFont("Arial","B",16);
//Cell(width,height,content should be displayed,border,same/new line, align)
$pdf->Cell(0,10,"ADMISSION ENQUIRY FORM",1,1,"L");

$pdf->SetFont("Arial","U",16);

$pdf->Cell(0,10,"PERSONAL INFORMATION",0,1,"C");

$pdf->SetFont("Arial","","12");
$pdf->Cell(100,8,"Name: ",1,0,"L");
$pdf->Cell(90,8,$name,1,1,"L");


$pdf->Cell(100,8,"MobileNumber: ",1,0,"L");
$pdf->Cell(90,8,$mobile,1,1,"L");


$pdf->Cell(100,10,"Email: ",1,0,"L");
$pdf->Cell(90,10,$email,1,1,"L");



$pdf->Cell(50,10,"Address: ",1,0,"L");
$pdf->Cell(140,10,$address,1,1,"L");

$pdf->SetFont("Arial","U",16);
$pdf->Cell(0,10,"STUDY INFORMATION",0,1,"C");

$pdf->SetFont("Arial","","12");
$pdf->Cell(50,10,"Institute: ",1,0,"L");
$pdf->Cell(140,10,$institute,1,1,"L");




$pdf->Cell(100,10,"Course: ",1,0,"L");
$pdf->Cell(90,10,$course,1,1,"L");


$pdf->Cell(50,10,"Subject: ",1,0,"L");
$pdf->Cell(140,10,$subject,1,1,"L");



$pdf->Cell(100,10,"Batch: ",1,0,"L");
$pdf->Cell(90,10,$batch,1,1,"L");


$pdf->Cell(100,10,"Institute Timing: ",1,0,"L");
$pdf->Cell(90,10,$institute_time,1,1,"L");




$pdf->SetFont("Arial","U",16);
$pdf->Cell(0,10,"FEES INFORMATION",0,1,"C");


$pdf->SetFont("Arial","",12);
$pdf->Cell(100,10,"Fixed Fees: ",1,0,"L");
$pdf->Cell(90,10,"Rs. {$fixed_fees}",1,1,"L");




$pdf->SetFont("Arial","U",16);
$pdf->Cell(0,10,"HOW DO YOU KNOW ABOUT US",0,1,"C");


$pdf->SetFont("Arial","",12);


$pdf->Cell(0,10,$ad,1,1,"L");


$pdf->Cell(0,10,"",0,1,"L");
$pdf->Cell(70,10,"Date",0,0,"L");

$pdf->Cell(90,10,"Signature",0,0,"R");

$pdf->Cell(0,10,"",0,1,"L");

$pdf->SetFont("Arial","",8);
$pdf->Cell(0,10,"Design & Developed By htttp://www.wedigitizeu.com",0,1,"L");





// outputs the pdf page to browser
$pdf->output();

?>