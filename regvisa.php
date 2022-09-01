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
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $cun=$_POST ["country"];
    $fn=$_POST ["Fname"];
    $ln=$_POST ["Lname"];
    $Db=$_POST ["DOB"];
    $EM=$_POST ["Email"];
    $PW=$_POST ["pwd"];
    $Phn=$_POST ["Phone"];	
	
/*$sqli="SELECT * FROM register WHERE register.Email ='".$EM."'";
$resultt = $conn->query($sqli);

if($resultt->num_rows > 0)
{
	echo "<script type='text/javascript'>alert('This username is already reserved!Please try again!'); window.location.href=' http://localhost/YOLO/reg.php';</script>";
}
else 
{*/
	$sql = "INSERT INTO register (Cus_ID,Image,Password,Country,First_Name,Last_Name,B_Day,Email,Phone)
		VALUES ('','$image','$PW','$cun','$fn','$ln','$Db','$EM','$Phn')";

	if(mysqli_query($conn,$sql))
	{
		echo "<script type='text/javascript'>alert('Registration Successfull!'); window.location.href=' http://localhost/YOLO/login.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Registration Unsuccessfull!'); window.location.href=' http://localhost/YOLO/reg.php';</script>";
	}/*		
}*/
mysqli_close($conn);
?>