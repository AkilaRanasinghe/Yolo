<?php
	include_once 'config_admin.php';
?>

<?php
	//escapae user inputs for security	
	$fname = $_POST["e1"];
	$lname = $_POST["e2"];
	$email = $_POST["e3"];
	$add = $_POST["e4"];
    $phe = $_POST["e5"];
    $sal = $_POST["e6"];
	
	
	//attempt insert query execution
	
	$sql = "INSERT INTO employee(Employee_ID, First_Name, Last_Name, Email, Address, Phone, Salary) VALUES('', '$fname', '$lname', '$email', '$add', '$phe', '$sal')";
	if(mysqli_query($conn, $sql))
	{
		//echo
		header("Location:employee.php");
	}
	else
	{
		echo"<script>alert('ERROR:could not able to execute $sql. ')</script>";
	}
	//close connection
	mysqli_close($conn);
?>
