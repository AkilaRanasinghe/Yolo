<?php
	include_once 'config_admin.php';
?>

<?php
	$recordId = $_GET['Country'];
	$sql = "SELECT * FROM register where User_Name='$user";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{			
			$cun=$row['Country']; 
			$fn=$row ['First_Name'];
			$ln=$row ['Last_Name'];
			$un=$row ['User_Name'];
			$Db=$row ['B_Day'];
			$EM=$row ['Email'];
			$PW=$row ['Password'];
			$CPW=$row ['C_Password'];
		}
	}
	else
	{
		echo "0 results";
    }    
?>
    <form method = "post" action = "submiteditemp.php">
	<input type = 'hidden' name = "f9" value =<?php echo $cun ?> />
		<input type = 'text' name = "f1" placeholder = 'Country' value =<?php echo $fname ?> />
		<input type = 'text' name = "f2" placeholder = 'First Name' value =<?php echo $lname ?> />
		<input type = 'text' name = "f3" placeholder = 'Last Name' value =<?php echo $email ?> />
		<input type = 'text' name = "f4" placeholder = 'User Name' value =<?php echo $add ?> />
		<input type = 'text' name = "f5" placeholder = 'BDay' value =<?php echo $add ?> />
		<input type = 'text' name = "f6" placeholder = 'Email' value =<?php echo $add ?> />
		<input type = 'text' name = "f7" placeholder = 'Password' value =<?php echo $pwd ?> />
		<input type = 'text' name = "f8" placeholder = 'C_Password' value =<?php echo $uname ?> />

		<input type = submit value = "edit"/>
	</form>