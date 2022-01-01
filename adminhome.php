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
header('location:adminlogin.php');
}
?>
<html>
<head>
	<title>
		home
	</title>
	<link rel="stylesheet" href="project.css">
</head>
<body bgcolor="silver">
 <div class="menubar"style="background-image: url('image/bbms.jpg');">
	<ul>
		<img src="image/bbms5.webp" style="width: 100px;height: 80px;margin-right:px ;padding-right: 30px;">
		<li class="active"><a href="#">Home</a></li>
		<li><a href="admindonar.php">Donar Request</a></li>
		<li><a href="adminbloodrequest.php">Blood Request</a></li>
		<li><a href="registertable.php">Registration</a></li>
		<li><a href="admindar.php">Donar A/R</a></li>
		<li><a href="adminbrar.php">Blood A/R</a></li>
		<li><a href="adminlog.php">Logout</a></li>
    </ul>
</div>

<img src="image/wa.png" width="100%"height="83.5%">
<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1535px;display: inline-flex;margin-top: px;height:42px;">
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

