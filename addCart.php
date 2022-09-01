<?php

session_start();
$uname = $_SESSION['uname'];
$recordId = $_SESSION['item'];

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

if($uname == "")
{
	echo "<script type='text/javascript'>alert('To add items to cart, You must Login first!'); window.location.href=' http://localhost/YOLO/login.php';</script>";
}
else
{
	$size = "";
	$quantity = "";
	$date = date('Y-m-d H:i:s');

	if(isset($_POST['size']))
	{
		$size = $_POST["size"];
	}
	if(isset($_POST['quantity']))
	{
		$quantity = $_POST["quantity"];
	}
	
	$sql = "INSERT INTO cart (Cart_ID,User_Name,Item_ID,Size,Quantity,Date) 
	        VALUES('','$uname','$recordId','$size','$quantity','$date')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script type='text/javascript'>alert('Item added to cart!'); window.location.href=' http://localhost/YOLO/products.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Could not add the item to cart!'); window.location.href=' http://localhost/YOLO/products.php';</script>";
	}
}
	
mysqli_close($conn);
?>