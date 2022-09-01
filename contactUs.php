<?php
include_once"config.php";
session_start();
$uname = $_SESSION['uname'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="styles/headfoot.css">
	<link rel="stylesheet" type="text/css" href="styles/contactus.css">
	<script src="js/contact us.js"></script>
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
 <div class="column" align="center">
    <div class="contactus">
      <img src="images/1.jpg" alt="perera" width="200" height="200">
      <div class="contact">
        <h2>Mr.Perera</h2>
        <p class="title">Customer Care</p>
        <p>0770540820</p>
        <p>shashenimendis@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column" align="center">  
    <div class="contactus">
      <img src="images/2.png" alt="fernando" width="200" height="200">
      <div class="contact">
        <h2>Mrs.Fernando</h2>
        <p class="title">CEO </p>
        <p>0766790788</p>
        <p>diliminim98@gmail.com"</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column" align="center">
    <div class="contactus">
      <img src="images/3.png" alt="ran" width="200" height="200">
      <div class="contact">
        <h2>Mr.Ranasinghe</h2>
        <p class="title">Designer</p>
        <p>0771942885</p>
        <p>akila56@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<div class="contact">
<form action="feed.php" method="POST">
<div class="row">
	<div class="col-1">
		<label for="fname">Name</label>
		<br><br>
	</div>
	<div class="col-2">
		<input type="text" class="put" id ="fname" name="firstname" placeholder="Your name..." required>
		<br><br>
	</div>
</div>
<div class="row">
	<div class="col-1">
		<label for="mail">Email</label>
		
		<br><br>
	</div>
	<div class="col-2">
		<input type="text" class="put" id ="mail" name="email" placeholder="Your email..." pattern="[a-zA-Z0-9%_+-]+@[a-zA-Z]+\.[a-z]{2,3}" required>
		<br><br>
	</div>
</div>
<div class="row">
	<div class="col-1">
		<label for="message">Message</label>
		<br><br>
	</div>
	<div class="col-2">
		<textarea id ="message" name="message" placeholder="Your message..." style="height:200px" required>
		</textarea>
		<br><br>
	</div>
</div>
<input type="checkbox" id="acept" onclick="subenable()">
Accept privacy policy and terms.
<br><br>
<center>
<input type="submit" id="sbt" value="submit" disabled>
</center>
</form>
</div>
</br>
<hr>
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
<a href="#" >CONTACT US</a>
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