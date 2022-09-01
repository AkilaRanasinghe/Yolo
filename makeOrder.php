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

$recordId = $_GET["id"];
$pr = $_GET["pr"];
$date = date('Y-m-d H:i:s');

$sql = "SELECT * FROM cart WHERE Cart_ID = '".$recordId."'";
$result = $conn->query($sql);
				  
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$item = $row["Item_ID"];
		$size = $row["Size"];
		$qty = $row["Quantity"];
		
		$sqli = "INSERT INTO orderitem (OrderID,User_Name,Item_ID,Size,Quantity,Date,Price) 
				VALUES('','$uname','$item','$size','$qty','$date','$pr')";
	
		if(mysqli_query($conn,$sqli))
		{
			$sqlii = "DELETE FROM cart WHERE Cart_ID =  '".$recordId."'";
			if(mysqli_query($conn,$sqlii))
			{
				echo "<script type='text/javascript'>alert('Order Made!'); window.location.href=' http://localhost/YOLO/cart.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Order could not be made!'); window.location.href=' http://localhost/YOLO/cart.php';</script>";
		}		
	}
}

mysqli_close($conn);
?>

<?php

$_SESSION['uname'] = $uname;

?>