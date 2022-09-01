<?php
include_once"config.php";
session_start();
$uname = $_SESSION['uname'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>YOLO</title>
	<link rel="stylesheet" type="text/css" href="styles/headfoot.css">
	<link rel="stylesheet" type="text/css" href="styles/home.css">
	<script src="js/home.js"></script>
		<script>
		function delete_data(id)
		{
			if(confirm("Are you sure to remove item from cart?"))
			{
				window.location.href="deleteCart.php?id="+id;
			}
		}
		</script>
</head>
<body background="images\back.jpg">
<!--header starts here-->
<div class="header">
<div class="row">
<div class="column1">
<img class="logo" src="images/yolo.png" width="100" height="100" alt="yolo">
</div>
<?php
if($uname == "")
{
	echo " <div class='column2'>
	<ul class='menu' >
		<li class='menu' ><a href='home.php'>Home</a></li>
		<li class='menu' ><a href='products.php'>Store</a></li>
		<li class='menu' ><a href='AboutUs.php'>About us</a></li>
		<li class='menu' ><a href='FAQ.php'>Help</a></li>
	</ul>
	</div>";
}
else
{
	echo " <div class='column2'>
	<ul class='menu' >
		<li class='menu' ><a href='home.php'>Home</a></li>
		<li class='menu' ><a href='products.php'>Store</a></li>
		<li class='menu' ><a href='#'>My Cart</a></li>
		<li class='menu' ><a href='Userp.php'>My Profile</a></li>
		<li class='menu' ><a href='FAQ.php'>Help</a></li>
	</ul>
	</div>";	
}
?>
<div class="column3">
<form method="POST" action="search.php">
<input id="element_2" type="text" placeholder="Search..." name="search"/><br><br>
<button type="submit" class="srch">SEARCH</button>
</form>
</div>
<div class="column4"></div>
<div class="column5" align="center">
<img class="logo" src="images/profile.png" width="50" height="50" alt="profile">
</br><br>
<?php
if($uname == "")
{
	echo "<a href='login.php' style='color: #51cbf0'>SIGN IN</a>";
}
else
{
$sql="SELECT * FROM register WHERE register.Cus_ID ='". $uname. "'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())	
	{
		$fname = $row["First_Name"];
		$lname = $row["Last_Name"];
		echo "<label style='color:white;'>$fname $lname</label><br><br>";
		echo "<a href='logout.php' style='color: #51cbf0'>LOGOUT</a>";
	}
}
}
?>
</div>
</div>
</div>
<!--header ends here-->
<hr>
</br>
<!--add(copy) your body parts here-->
<center>
<button class = "srch" onclick="location.href = 'order.php';"><b>ORDERS</b></button>
</center>
<br><br><br>
<div class="productData">
<center>
<table rules="all" width="100%" >
<tr >
<th>Item Name</th>
<th>Size</th>
<th>Quantity</th>
<th>Price</th>
<th>Delete</th>
<th>Make Order</th>
</tr>
<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbName = "YOLO";
$conn = new mysqli($servername, $username, $password, $dbName); 
if ($conn->connect_error) 
{ 
	die("Connection failed: " . $conn->connect_error); 
} 

$sql = "SELECT * FROM item I,cart C WHERE I.Item_ID = C.Item_ID AND C.User_Name = '".$uname."'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$pr = $row["Price"] * $row["Quantity"];
		$id = $row["Cart_ID"];
		echo "<tr>
		<td>".$row["Item_Name"]."</td>
		<td>".$row["Size"]."</td>
		<td>".$row["Quantity"]."</td>
		<td>".$pr."</td>
		<td><center><button type='submit' onclick='delete_data($id)'>Delete</button></center></td>
		<td><center><button type='submit'><a href='makeOrder.php?id=$id&pr=$pr'>Make Order</a></button></center></td>
		</tr>";
	}
}	
?>
</table>
</center>
</div>
</br>
<hr>
<!--footer starts here-->
<div class="footer" align="center">
<div class="row">
<div class="column" align="center">
<div class="colfot">
</div>
<div class="colfot1">
<img class="logo" src="images/phone.png" width="50" height="50" alt="phone">
</div>
<div class="colfot2">
HOTLINE
<br><br>
0115610123
</div>
</div>
<div class="column" style="color: white">
<br><br>
Copyright 2019 © YOLO. All rights reserved.
</div>
<div class="column" align="center">
<div class="colfot">
</div>
<div class="colfot1">
<img class="logo" src="images/mail.png" width="50" height="50" alt="mail">
</div>
<div class="colfot2">
EMAIL
<br><br>
<a href="mailto:yolo@gmail.com?Subject=Inquiry;">yolo@gmail.com</a>
</div>
</div>
</div>
<div class="row">
<div class="columnicon1">
<div class="colicon">
<img class="logo" src="images/card1.png" width="40" height="40" alt="visa">
</div>
<div class="colicon">
<img class="logo" src="images/card2.png" width="40" height="40" alt="master">
</div>
<div class="colicon">
<img class="logo" src="images/card3.png" width="40" height="40" alt="american">
</div>
<div class="colicon">
<img class="logo" src="images/card4.png" width="40" height="40" alt="discover">
</div>
</div>
<div class="column">
<a href="contactUs.php" >CONTACT US</a>
</div>
<div class="columnicon2">
<div class="colicon">
<a href="#"><img class="logo" src="images/insta.png" width="35" height="35" alt="insta"></a>
</div>
<div class="colicon">
<a href="#"><img class="logo" src="images/whats.png" width="35" height="35" alt="whats"></a>
</div>
<div class="colicon">
<a href="#"><img class="logo" src="images/face.png" width="35" height="35" alt="face"></a>
</div>
<div class="colicon">
<a href="#"><img class="logo" src="images/twitter.png" width="35" height="35" alt="twitter"></a>
</div>
</div>
</div>
</div>
<!--footer ends here-->
</body>
</html>

<?php

$_SESSION['uname'] = $uname;

?>






