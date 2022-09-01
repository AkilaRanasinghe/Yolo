<?php
	include_once 'config.php';
?>

<?php
	$recordId = $_GET['ID'];
	$sql = "SELECT * FROM register where User_Name='$recordId'";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
    {
		
			$cun=$row['Country']; 
			$fn=$row ['First_Name'];
			$ln=$row ['Last_Name'];
			$un=$row ['User_Name'];
			$Db=$row ['B_Day'];
			$EM=$row ['Email'];
			$PW=$row ['Password'];
			$CPW=$row ['C_Password'];
			?>
			<form method = "post" action = "sumiteditcustomer.php">
			<input type = 'hidden' name = "f9" value =<?php echo $cun ?> />
			<input type = 'text' name = "f1" placeholder = 'Country' value =<?php echo $row["Country"] ?> />
			<input type = 'text' name = "f2" placeholder = 'First Name' value =<?php echo $row["First_Name"] ?> />
			<input type = 'text' name = "f3" placeholder = 'Last Name' value =<?php echo $row["Last_Name"] ?> />
			<input type = 'text' name = "f4" placeholder = 'User Name' value =<?php echo $row["User_Name"] ?> />
			<input type = 'text' name = "f5" placeholder = 'BDay' value =<?php echo $row["B_Day"] ?> />
			<input type = 'text' name = "f6" placeholder = 'Email' value =<?php echo $row["Email"] ?> />
			<input type = 'text' name = "f7" placeholder = 'Password' value =<?php echo $row["Password"] ?> />
			<input type = 'text' name = "f8" placeholder = 'C_Password' value =<?php echo $row["C_Password"] ?> />
	
		<?php
	}
?>
   
		<input type = submit value = "edit"/>
	</form>