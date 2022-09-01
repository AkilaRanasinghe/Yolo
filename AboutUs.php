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
	<link rel="stylesheet" type="text/css" href="styles/style1.css">
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
		<li class='menu' ><a href='home.php'>Home</a></li>
		<li class='menu' ><a href='products.php'>Store</a></li>
		<li class='menu' ><a href='#'>About us</a></li>
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
<center>
<div class="AboutUS">
<div class="h1">
<h1>About US</h1>
<p> <b>With the busy life style, people do not have enough time to spend making their out looks better. 
Therefore, they need a solution to choose what they want through online and get them to their door steps. 
YOLO is the south Asia's premier online shopping market place which was launched in 2010.
People can save their time, the time they waste to fit-on several clothes is avoided from this system.
 customer just have to select a product, enter the size and color of the item they want and without any waste of time they can get them to their door steps.
 The items are delivered within a maximum time of 3 to 4 days.
And from our store customer can shop with worldwide shopping stores.Then the customer can reach to a vivid variety of items though our shopping store.
 By visiting our page people can have a clear understanding about the products that are available .And people can get aware of the new arrivals as well.
 When people switch on the notifications of the website, they can get the price details and they can search items which they can buy according to their budget.
 Also online shopping stores offer many more privileges for their customers such as offers, giveaways, discounts for online payments .
 Customer can money as well as save their precious time because they do not have to travel for shopping.
YOLO has become the best choice of eveywomen in Asian countries as a leading shopping store in a small time period.
we introduces the latest styles of woman wear in every year . we deliever the goods in free of charge .</b></p>
<div class="master">
<h1>Our Value</h1>
<h3 class="header1"><u>Embrance Change</u></h3>
<p class="para1">We embrace and anticipate change.
change is growth ,and growth is whatdrives us everyday.</p>

<h3 class="header1"><u>Team Work</u></h3>
<p class="para1">We think as a team,work as a team , growth as a team.
The power of our team allows ordinary people to achieve extra-ordinary things.</p>

<h3 class="header1"><u>Customer Commitment</u></h3>
<p class="para1">We believe in giving the best to our customers, 
sellers and society.</p>

<h3 class="header1"><u>Intergrity</u></h3>
<p class="para1">We treat our partners and eachother. </p>

<h3 class="header1"><u>Ownership</u></h3>
<p class="para1">We know our priorities,and when we do something,we do it with forcus and perseverence.</p>
</div>
</center>
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