<?php
	include_once 'config_admin.php';
?>
<?php
	$severname = "localhost";
	$username = "root";
    $password = "";
    $dbname = "register";
// Create connection
$conn = new mysqli($severname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>