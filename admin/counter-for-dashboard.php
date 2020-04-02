<?php
error_reporting(0);
session_start();
include_once('../db/db.php');
?>
<?php include_once('session.php');?>

<?php

$admission_completed=0;
$pending_admission=0;
$contact_later=0;
$not_interested=0;
$meeting=0;
/*Todays Meetings*/
$date=Date('Y-m-d');
$branch=$_SESSION['uname'];
$sel="SELECT * FROM `inquiry_personal_info`";
	
	$exe=mysqli_query($conn,$sel);
	
	
		
	
	if(mysqli_num_rows($exe)>0)
	{
		
		while($data=mysqli_fetch_assoc($exe))
			{
				
		
				if($_SESSION['uname']==$data['branch'] && $date==$data['next_meeting_date'] && $data['status']=='contact_later')
					{
						
						$meeting+=1;
						
					}
					
			}

					
		}

	
	else
	{
		$_SESSION['meeting']=0;
	}

	$_SESSION['meeting']=$meeting;
			
/*Todays Meetings*/
/*Total Admsision Completed*/
$sel="SELECT * FROM `inquiry_personal_info` WHERE status='admitted'";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		$_SESSION['admission_completed']=0;
	}
	else
	{
		
		while($data=mysqli_fetch_assoc($exe))
			{
				
		
				if($_SESSION['uname']==$data['branch'])
				{
					
					 $admission_completed+=1;

				}	
			}

			
	}

	  	$_SESSION['admission_completed']=$admission_completed;

/*Total Admsision Completed*/




/*Total pending admission  */

$sel="SELECT * FROM `inquiry_personal_info` WHERE status='admission_list'";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		
		$_SESSION['pending_admission']=0;
	}
	else
	{
		
		while($data=mysqli_fetch_assoc($exe))
			{
				
		
				if($_SESSION['uname']==$data['branch'])
				{
					
					 $pending_admission+=1;

				}	
			}

			
	}

	 $_SESSION['pending_admission']=$pending_admission;



/*Total pending admission   */


/*Contact Later*/

$sel="SELECT * FROM `inquiry_personal_info` WHERE status='contact_later'";
	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		 $_SESSION['contact_later']=0;
	}
	else
	{
		
		while($data=mysqli_fetch_assoc($exe))
			{
				
		
				if($_SESSION['uname']==$data['branch'])
				{
					
					$contact_later+=1;

				}	
			}

			
	}

	$_SESSION['contact_later']=$contact_later;


/*Contact Later*/



/*Not Interested*/

$sel="SELECT * FROM `inquiry_personal_info` WHERE status='not_interested'";

	$exe=mysqli_query($conn,$sel);
	if(mysqli_num_rows($exe)==0)
	{
		 $_SESSION['not_interested']=0;
	}
	else
	{
		
		while($data=mysqli_fetch_assoc($exe))
			{
				
		
				if($_SESSION['uname']==$data['branch'])
				{
					
					$not_interested+=1;

				}	
			}

			
	}

	$_SESSION['not_interested']=$not_interested;


/*Not Interested*/





?>