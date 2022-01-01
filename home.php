<?php
session_start();
error_reporting(0);
include("connection.php");
$_SESSION['email'];
$userprofile=$_SESSION['email'];
if($userprofile==true)
{
}
else
{
header('location:login.php');
}
?>
<html>
<head>
<title>
Home
</title>
<link rel="stylesheet" href="project.css">
</head>
<body bgcolor="silver"style="background-image: url('gif/b3.gif'); background-repeat: no-repeat;background-attachment: fixed;
background-size: cover;">
<div class="menubar" style="background-image: url('image/bbms.jpg');">
<ul>
<img src="image/bbms5.webp" style="width: 200px;height: 80px;margin-right:90px ;padding-right: 20px;">
<li class="active"><a href="#">Home</a></li>
<li><a href="donar.php">Donar Request</a></li>
<li><a href="bloodreq.php">Blood Request</a></li>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="log.php">Logout</a></li>	
</ul>
</div>
<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1536px;display: inline-flex;margin-top: 630px;height:42px;">
<div class="about" style="margin-top: 10px;font-size:18px;margin-left: 10px;">
<a href="about.php" style="text-decoration: none;color: white;">About us</a>
</div>
<div class="contact" style="margin-top: 10px;font-size:18px;margin-left: 10px;">
<a href="contact.php"style="text-decoration: none;color: white;">Contact us</a>
</div>
<div class="contact" style="margin-top: 10px;font-size:18px;margin-left: 500px;">
<a href="https://vaibhavsrivastava1.blogspot.com/"style="text-decoration: none;color: white;">vaibhavsrivastava1.blogspot.com</a>
</div>
<div class="contact" style="margin-top: 8px;margin-left: 500px;">
<a href="https://www.facebook.com/IndianBloodDonors/"><img src="image/fb.png" style="width: 30px;"></a>
</div>
<div class="contact" style="margin-top: 8px;font-size:18px;margin-left: 10px;">
<a href="https://www.instagram.com/indiablooddonation/?hl=en"><img src="image/insta.png"style="width: 30px;"></a>
</div>
<div class="contact" style="margin-top: 8px;font-size:18px;margin-left: 10px;">
<a href="https://www.aimsindia.com/blog/be-a-blood-donor/"><img src="image/blog.png"style="width: 30px;"></a>
</div>
</div>
</body>
</html>

