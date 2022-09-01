<?php
include_once"config.php";
session_start();
$uname = $_SESSION['uname'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" type="text/css" href="styles/headfoot.css">
	<link rel="stylesheet" type="text/css" href="styles/FAQ.css">
	<script src="js/FAQ.js"></script>
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
		<li class='menu' ><a href='#'>Help</a></li>
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
		<li class='menu' ><a href='#'>Help</a></li>
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
    <center>
        <h1><font color= "black"> Frequently Asked Questions</font></h1>
        <img style="margin-left:25px;" src="images/faq0.gif" width="400" height="200">
        <dl class="faq">
            <dt>
                <button aria-expanded="false" aria-controls="faq1_desc">
                    Are there any discounts and offers for the products?
                </button>
            </dt>
            <dd>
                <p id="faq1_desc" class="desc">
                    Yes, We provide weekly offers for the best selling products of our site. Offers will be displayed in our homepage.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq2_desc">
                    Does this site sell used products as well?
                </button>
            </dt>
            <dd>
                <p id="faq2_desc" class="desc">
                    No, All the products that we sell in our store are brand new and comes with the sealed package.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq3_desc">
                    What are the payment methods available?
                </button>
            </dt>
            <dd>
                <p id="faq3_desc" class="desc">
                    At the moment, we only accept Credit/Debit cards and Paypal payments.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq4_desc">
                    Are there any delivery options availabe ?
                </button>
            </dt>
            <dd>
                <p id="faq4_desc" class="desc">
                    Yes, We do provide delivery facilities for the convenience of the customers.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq5_desc">
                    Can I return my products ?
                </button>
            </dt>
            <dd>
                <p id="faq5_desc" class="desc">
                    Products can be returned to the supplier only if there is any fault in the product. Change of mind is not applicable.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq6_desc">
                    Why must I make payment immediately at checkout?
                </button>
            </dt>
            <dd>
                <p id="faq6_desc" class="desc">
                    Product ordering is on ‘first-come-first-served’ basis. To ensure that you get your desired samples, it is recommended that you make your payment within 60 minutes of checking out.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq7_desc">
                    How can I change my shipping address?
                </button>
            </dt>
            <dd>
                <p id="faq7_desc" class="desc">
                    By default, the last used shipping address will be saved into to your account.It can be edited in the User profle page.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq8_desc">
                    How do I cancel my orders before I make a payment?
                </button>
            </dt>
            <dd>
                <p id="faq8_desc" class="desc">
                    After logging into your account, go to your Shopping Cart. Here, you will be able to make payment or cancel your order. Note: We cannot give refunds once payment is verified.
                </p>
            </dd>
            <dt>
                <button aria-expanded="false" aria-controls="faq9_desc">
                    How long will it take for my order to arrive after I make payment?
                </button>
            </dt>
            <dd>
                <p id="faq9_desc" class="desc">
                    Orders will be delivered If you experience delays in receiving your order, contact us immediately and we will help to confirm the status of your order.
                </p>
            </dd>
        </dl>
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