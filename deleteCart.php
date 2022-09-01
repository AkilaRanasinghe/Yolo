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

	$recordId = $_GET["id"];
	
	$sql = "DELETE FROM cart WHERE Cart_ID =  '".$recordId."'";
	        
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script type='text/javascript'>alert('Cart Deleted!'); window.location.href=' http://localhost/YOLO/cart.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Cart could not be deleted!'); window.location.href=' http://localhost/YOLO/products.php';</script>";
	}
	
	mysqli_close($conn);
?>

<?php

$_SESSION['uname'] = $uname;

?>