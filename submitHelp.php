<?php
	include_once 'config_admin.php';
?>

<?php
	//escapae user inputs for security	
	$cun = $_POST["f1"];
    $fn = $_POST["f2"];
    $ln = $_POST["f3"];
    $un = $_POST["f4"];
    $Db = $_POST["f5"];
    $EM = $_POST["f6"];
    $PW = $_POST["f7"];
    $CPW = $_POST["f8"];
    $cun = $_POST["f9"];
	
	
	//attempt insert query execution
	
    $sql ="insert into register(Country,First_Name,Last_Name,User_Name,B_Day,Email,Password,C_Password) values('$cun','$fn','$ln','$un','$Db','$EM','$PW','$CPW')";
    if(mysqli_query($conn,$sql)
	//var_dump($result);
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
	//var_dump($result);
?>
