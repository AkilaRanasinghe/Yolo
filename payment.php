<?php

session_start();
$uname = $_SESSION['uname'];
$oid = $_SESSION['oid'];

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

$loc = "";
$ccnum = "";
$eyr = "";
$cvv = "";

if(isset($_POST['location']))
	{
		$loc = $_POST["location"];
	}
	if(isset($_POST['cardnumber']))
	{
		$ccnum = $_POST["cardnumber"];
	}
	if(isset($_POST['expyear']))
	{
		$eyr = $_POST["expyear"];
	}
	if(isset($_POST['cvv']))
	{
		$cvv = $_POST["cvv"];
	}
	
$date = date('Y-m-d H:i:s');

$sql = "SELECT * FROM orderitem WHERE OrderID = '".$oid."'";
$result = $conn->query($sql);
				  
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$item = $row["Item_ID"];
		$size = $row["Size"];
		$qty = $row["Quantity"];
		$price = $row["Price"];
		
		$sqli =  "INSERT INTO payment(Pay_ID,User_Name,Item_ID,Size,Quantity,Price,Address,CC_Num,Ex_yr,CVV,Date)
				VALUES('','$uname','$item','$size','$qty','$price','$loc','$ccnum','$eyr','$cvv','$date')";
	
		if(mysqli_query($conn,$sqli))
		{
			$sqlii = "DELETE FROM orderitem WHERE OrderID =  '".$oid."'";
			if(mysqli_query($conn,$sqlii))
			{
				echo "<script type='text/javascript'>alert('Payment Success!Your Products will be handed over to you in near future!'); window.location.href=' http://localhost/YOLO/cart.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Payment could not be made!'); window.location.href=' http://localhost/finalProject/order.php';</script>";
		}		
	}
}	
	
mysqli_close($conn);
?>