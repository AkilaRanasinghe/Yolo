<?php
	include_once 'config.php';
?>

<?php

	
	//attempt insert query execution
	$recordId = $_GET['ID'];
	$sql = "DELETE FROM register where User_Name='$user'";
	if(mysqli_query($conn, $sql))
	{
		//echo
		header("Location:help.php");
	}
	else
	{
		echo"<script>alert('ERROR:could not able to execute $sql. ')</script>";
	}
	//close connection
	mysqli_close($conn);
?>