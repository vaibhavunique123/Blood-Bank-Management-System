<?php
include('config12.php');
?>
<html>
<head>
	<title>
     Donar
	</title>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
	<body bgcolor="silver"style="background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
	<div class="menubar"style="background-image: url('image/bbms.jpg');">

	<ul>
		<img src="image/bbms5.webp" style="width: 300px;height: 80px;margin-right:90px ;">
		<li class="active"><a href="home.php">Home</a></li>
		<li><a href="#">Donar Request</a></li>
		<li><a href="bloodreq.php">Blood Request</a></li>
		<li><a href="gallery.html">Gallery</a></li>
		<li><a href="log.php">Logout</a></li>
		
	</ul>
</div>

<legend style="text-align:center;display: block;
    padding-left: 620px;
    margin-top: 15px;
    padding-right: 10px;
    background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;
    color: black;"><h1>Donar Register</h1></legend>
<form action="donar.php" method="POST">
<div class="donar" style="margin-left:880px;background-color: grey;margin-right: 280px;background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
   <div class="name" style="margin-top: px;margin-left: 65px;padding-top:20px ;">
    <input type="text" name="name" placeholder="Name"style="width:250px;height: 40px;font-size:20px;"required>
   </div><br>
<div class="phone"style="margin-top: 10px;margin-left: 65px;">
<input type="email" name="email" placeholder="Email Address" style="width:250px;height: 40px;font-size:20px;"required >
</div><br>
<div class="address"style="margin-top: 10px;margin-left: 65px;">
<input type="text" name="address" placeholder="Address" style="width:250px;height: 40px;font-size:20px;"required>
</div><br>
<div class="sex" style="margin-top: 10px;margin-left: 65px;height:30px; width=100px;">
<input type="radio" name="sex" value="M">Male
<input type="radio" name="sex" value="Fe"style="margin-left: 20px;">Female
<input type="radio" name="sex" value="T"style="margin-left: 20px;">Transgender<br>
</div><br>
<div class="age"style="margin-top: 10px;margin-left: 65px;height:30px;margin-right:241px;">
<input type="number" name="age" min="18" max="60" placeholder="Age"style="font-size:20px;width:70px;height: 30px"; required>  
</div><br>
<div class="camp"style="margin-top: 10px;margin-left: 65px;width: 100px;">
<select name="city"style="width:200px;height: 30px;">	
<option selected="hidden" value="">City</option>
<option value="Allahabad">Allahabad Camp</option>
<option value="varanasi">Varanasi Camp</option>
<option value="kanpur">Kanpur Camp</option>
<option value="lucknow">Lucknow Camp</option>
<option value="gorakpur">Gorakhpur Camp</option>
<option value="pratapgarh">Pratapgarh Camp</option>
</select>
</div><br>
<div class="date" style="margin-top: 10px;margin-left: 65px;width: 100px;">
<input type="date" name="date" style="width:200px;height: 30px;" required>
</div><br>
<div  class="su" style="display: inline-flex;margin-left: 90px;">
<div class="submit"style="margin-top: 10px;margin-right: 10px;padding-bottom: 10px;">
		<input type="submit"  value="submit" name="sub" style="width: 90px;background-color: yellow;font-size: 20px;">
</div>
<div class="submit"style="margin-top: 10px;padding-bottom: 10px;">
	<input type="reset" value="Reset" name="r" style="background-color:yellow;width: 90px;font-size: 20px;">
</div> 
</div> 
</div></form>
<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1536px;display: inline-flex;margin-top: 80px;height:42px;background-color: green;">
	<div class="about" style="margin-top: 10px;font-size:18px;margin-left: 10px;">
   <a href="about.php" style="text-decoration: none;color: white;">About us</a>
	</div>
	<div class="contact.php" style="margin-top: 10px;font-size:18px;margin-left: 10px;">
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
<?php
include 'config12.php';
if(isset($_POST['sub']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$city=$_POST['city'];
$date=$_POST['date'];
$insertquery="INSERT INTO `donartbl` (`name`, `email`, `address`, `sex`, `age`, `city`, `date`) VALUES ('$name', '$email', '$address', '$sex','$age', '$city', '$date')";
$result=mysqli_query($conn,$insertquery);
if($result)
{
	?> 
	      echo '<script>alert("Registered successfully Thankyou  to  Donating of blood")</script>';
     		echo'<script>window.location="home.php"</script>';
	<?php
}
else
{
?>
	<script >
		alert("data not inserted ");
	</script>
<?php
}
}
?>