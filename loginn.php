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

$uname = "";
$password = "";

if(isset($_POST['uname']))
	{
		$uname = $_POST["uname"];
	}
if(isset($_POST['psw']))
	{
		$password = $_POST["psw"];
	}

$sql="SELECT * FROM register WHERE register.Email ='". $uname. "' AND register.Password='". $password. "'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())	
	{
	$uname = $row["Cus_ID"];
	echo "<script type='text/javascript'>alert('You are logged in!'); window.location.href=' http://localhost/YOLO/Userp.php';</script>";
	}
}
else 
{
	echo "<script type='text/javascript'>alert('UserID or Password do not match.Please try again!'); window.location.href=' http://localhost/YOLO/login.php';</script>";
}

$conn->close();
?>

<?php

$_SESSION['uname'] = $uname;

?>