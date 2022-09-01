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
		<li class='menu' ><a href='#'>Home</a></li>
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
		<li class='menu' ><a href='#'>Home</a></li>
		<li class='menu' ><a href='products.php'>Store</a></li>
		<li class='menu' ><a href='cart.php'>My Cart</a></li>
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
<div class="row">
<!--dropdown sidebar starts here-->
<div class="col1">
<div class="sidenav">
  <button class="dropdown-btn">> CLOTHING</button>
  <div class="dropdown-container">
    <a href="products.php#tops">TOPS</a>
    <a href="products.php#trousers">TROUSERS</a>
    <a href="products.php#shirts">T-SHIRTS</a>
	<a href="products.php#frocks">FROCKS</a>
  </div>
  <button class="dropdown-btn">> FOOTWARE</button>
  <div class="dropdown-container">
    <a href="products.php#sandles">SANDLES</a>
    <a href="products.php#flats">FLATS</a>
    <a href="products.php#heels">HEELS</a>
  </div>
  <button class="dropdown-btn">> BAGS</button>
  <div class="dropdown-container">
    <a href="products.php#back">BACKPACKS</a>
    <a href="products.php#clutches">CLUTCHES</a>
    <a href="products.php#shoulder">SHOULDER BAGS</a>
  </div>
  <button class="dropdown-btn">> ACCESSORIES</button>
  <div class="dropdown-container">
    <a href="products.php#jewelleries">JEWELLERIES</a>
    <a href="products.php#sunglasses">SUNGLASSES</a>
  </div>
</div>
</div>
<!--slider starts here-->
<div class="col2">
<div class="row">
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="images/deal1.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img src="images/deal2.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img src="images/deal3.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img src="images/deal4.jpg" style="width:100%">
  </div>
  <div class="mySlides fade">
    <img src="images/deal5.jpg" style="width:100%">
  </div>
</div>
<br>
</div>
<br><br>
<div class="row">
<div class="col1">
<br><br>
<button style="font-size: 20px;font-weight: bold;"><a class="clr" href="#">Gift Vouchers</a></button>
<br><br><br><br><br><br>
<button style="font-size: 20px;font-weight: bold;" ><a class="clr" href="#">Delivery Info</a></button>
</div>
<div class="col2">
<div class="slideshow-container">
  <div class="mySlides2 fade">
    <img src="images/add1.jpg" style="width:100%">
  </div>
  <div class="mySlides2 fade">
    <img src="images/add2.jpg" style="width:100%">
  </div>
  <div class="mySlides2 fade">
    <img src="images/add3.jpg" style="width:100%">
  </div>
  <div class="mySlides2 fade">
    <img src="images/add4.jpg" style="width:100%">
  </div>
  <div class="mySlides2 fade">
    <img src="images/add5.jpg" style="width:100%">
  </div>
</div>
<br>
<script>
showSlides();
showSlides2();
dropdown();
</script>
</div>
<div class="col3">
<br><br><br><br>
<button style="font-size: 20px;font-weight: bold;"><a class="clr" href="#">Sales</a></button>
<br><br><br><br><br>
<button style="font-size: 20px;font-weight: bold;" ><a class="clr" href="#">Offers</a></button>
</div>
</div>
</div>
<div class="col3" align="center">
<img class="logo" src="images/mark1.png" width="110" height="110" alt="levis">
<br><br>
<img class="logo" src="images/mark2.png" width="110" height="110" alt="channel">
<br><br>
<img class="logo" src="images/mark3.png" width="110" height="110" alt="gucci">
<br><br>
<img class="logo" src="images/mark4.png" width="110" height="110" alt="nike">
<br><br>
<img class="logo" src="images/mark5.png" width="110" height="110" alt="boss">
</div>
</div>
<div class="row">
<div class="catcol" align="center">
<a href="products.php#cloth"><img class="logo" id="categ" src="images/cat1.jpg" width="300" height="300" alt="clothing"></a>
</div>
<div class="catcol" align="center">
<a href="products.php#bags"><img class="logo" id="categ" src="images/cat2.jpg" width="300" height="300" alt="accessories"></a>
</div>
<div class="catcol" align="center">
<a href="products.php#foot"><img class="logo" id="categ" src="images/cat3.jpg" width="300" height="300" alt="footware"></a>
</div>
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