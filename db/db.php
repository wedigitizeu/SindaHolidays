<?php
//$conn=mysqli_connect('localhost','root','','sinda');

$conn=mysqli_connect('localhost','u663901735_sinda','9620606548','u663901735_sinda');
if(!$conn)
{
	echo 'Database not Connected';
	
}
else
{
	//echo 'Database  Connected';
	
}

class database{
	
	/*public $host="localhost";
	public $userName="root";
	public $password="";
	public $databaseName="sinda";
	public $con;*/
	
	public $host="localhost";
	public $userName="u663901735_sinda";
	public $password="9620606548";
	public $databaseName="u663901735_sinda";
	public $con;



	
	
	public function __construct()
	{
		$this->con=new mysqli($this->host,$this->userName,$this->password,$this->databaseName);
		if(mysqli_connect_error())
		{
			echo "Database Not Connected";
		}
		
	}
	//Insert Query
	public function insertQuery($data)
	{
		if($this->con->query($data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	//Select Query
	public function selectQuery($data)
	{
		$log=$this->con->query($data);
		if($log->num_rows>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	
	}
	public function url($url)
	{
		header("Location:".$url);
	}
	
	public function textLocal($mobile,$msg)
	{
		// Authorisation details.
		$username = "prakashk827@gmail.com";
		$hash = "b1e5ba02d889b144ab91b8ef1e58d08eaa1acb0176febf58140ddf8734c8ccf3";

		
		// Config variables. Consult http://api.textlocal.in/docs for more info.
		$test = "0";

		
		// Data for text message. This is the text message data.
		$sender = "TXTLCL"; // This is who the message appears to be from.
		$numbers =$mobile; // A single number or a comma-seperated list of numbers
		$url = "https://api.textlocal.in";
		$message = $msg;
		// 612 chars or less
		// A single number or a comma-seperated list of numbers
		$message = urlencode($message);
		$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
		$ch = curl_init('http://api.textlocal.in/send/?');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch); // This is the result from the API
		curl_close($ch);
		
		return true;
	}
	
	
}

$obj=new database;

?>
