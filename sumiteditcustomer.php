<?php
	include_once 'config.php';
?>

<?php
   	$cun = $_POST["f1"];
    $fn = $_POST["f2"];
    $ln = $_POST["f3"];
    $un = $_POST["f4"];
    $Db = $_POST["f5"];
    $EM = $_POST["f6"];
    $PW = $_POST["f7"];
    $CPW = $_POST["f8"];
    $cun = $_POST["f9"];


    $sql="UPDATE register SET 	First_Name='$fn',Last_Name='$ln',User_Name='$un',B_Day='$Db',Email='$EM' where User_name='$userc'";
if(mysqli_query($conn, $sql))
{
    header("Location:help.php");
}
else
{
    echo"<script>(ERROR:'could not able to execute $sql. ')</script>";
}
    mysqli_query($conn);
    var_dump($result);
?>