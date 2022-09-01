<?php

session_start();
$uname = $_SESSION['uname'];

?>
<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbName = "YOLO";

// Create connection 
$conn = new mysqli($servername, $username, $password, $dbName); 
// Check connection 
if ($conn->connect_error) 
{ 
	die("Connection failed: " . $conn->connect_error); 
}

	$name = "";
	$email = "";
	$message = "";

	if(isset($_POST['firstname']))
	{
		$name = $_POST["firstname"];
	}
	if(isset($_POST['email']))
	{
		$email = $_POST["email"];
	}
	if(isset($_POST['message']))
	{
		$message = $_POST["message"];
	}

	$sql = "INSERT INTO feedback (feedID,User_Name,Email,Message) 
	        VALUES('','$name','$email','$message')";
				
	if(mysqli_query($conn,$sql))
	{
		  echo "<script type='text/javascript'>alert('Thank You!!'); window.location.href=' http://localhost/YOLO/home.php';</script>";
	  }
	  else
	  {
		  echo "<script type='text/javascript'>alert('Feedback not added!'); window.location.href=' http://localhost/YOLO/contactUs.php';</script>";
	  }
	  
mysqli_close($conn);
?>



