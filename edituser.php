<?php
        session_start();
		include_once "config.php";		
		$uname = $_SESSION['uname'];
        $cun=$_POST ['country'];
        $fn=$_POST ['Fname'];
        $ln=$_POST ['Lname'];
        $Phn=$_POST ['Phone'];
        $Db=$_POST ['DOB'];
        $EM=$_POST ['Email'];
        $PW=$_POST ['pwd'];

$sqli="SELECT * FROM register WHERE register.Email ='". $EM."'";
$resultt = $conn->query($sqli);

if($resultt->num_rows > 0)
{
	while($row = $resultt->fetch_assoc())	
	{
		$eml = $row["Email"];
		if($EM == $eml)
		{
			$sql="UPDATE register SET Password='$PW',Country='$cun',First_Name='$fn',Last_Name='$ln',B_Day='$Db',Email='$EM',Phone='$Phn' where Cus_ID = '".$uname."'";
			if(mysqli_query($conn,$sql))
			{
				echo "<script type='text/javascript'>alert('Update Successfull!'); window.location.href=' http://localhost/YOLO/Userp.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert(Update Unsuccessfull!Please try again!'); window.location.href=' http://localhost/YOLO/edituser1.php';</script>";
			}	
		}
		else
		{
			echo "<script type='text/javascript'>alert('This username is already reserved!Please try again!'); window.location.href=' http://localhost/YOLO/edituser1.php';</script>";
		}
	}
}
else 
{
	$sql="UPDATE register SET Password='$PW',Country='$cun',First_Name='$fn',Last_Name='$ln',B_Day='$Db',Email='$EM',Phone='$Phn' where Cus_ID = '".$uname."'";
    if(mysqli_query($conn,$sql))
    {
        echo "<script type='text/javascript'>alert('Update Successfull!'); window.location.href=' http://localhost/YOLO/Userp.php';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert(Update Unsuccessfull!Please try again!'); window.location.href=' http://localhost/YOLO/edituser1.php';</script>";
    }	
}

mysqli_close($conn);
?>