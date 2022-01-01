<?php

session_start();
?>
<html>
<head>
	<title>
     Recover Account
	</title>
	<link rel="stylesheet" type="text/css" href="project.css">
</head>
	<body bgcolor="silver"style="background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
	<div class="menubar"style="background-image: url('image/bbms.jpg');">

	<ul>
		<img src="image/bbms5.webp" style="width: 300px;height: 80px;margin-right:1000px ;";
	</ul>
</div>

<legend style="text-align:center;display: block;
    padding-left: 620px;
    margin-top: 150px;
    padding-right: 10px;
    margin-bottom: 30px;
    background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;
    color: black;"><h1>Recover Your Account</h1></legend>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
<div class="donar" style="margin-left:880px;background-color: grey;margin-right: 280px;background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<div class="email"style="margin-top: 7px;margin-left: 40px;">
<input type="email" name="email" placeholder="Email Address" style="width:300px;height: 40px;font-size:20px;"required>
</div><br>

<div  class="su" style="display: inline-flex;margin-left: 40px;">
<div class="submit"style="margin-top: 7px;margin-right: 10px;padding-bottom: 10px;">
		<input type="submit"  name="submit" style="width: 150px;background-color: yellow;font-size: 20px;height: 30px;">
</div>
<div class="submit"style="margin-top: 7px;padding-bottom: 10px;">
		<a href="#"><input type="reset" value="Reset" name="re"style="background-color:yellow;width: 140px;font-size: 20px;"></a>
</div> 
</div> 
<div  class="su" style="display: inline-flex;margin-left: 40px;">
<div class="submit"style="margin-top: 7px;margin-right: 10px;padding-bottom: 10px;">
		<button type="button" value="s" onclick="openWin()" name="sb" style="width: 150px;background-color: yellow;font-size: 20px;height: 30px;">
Sign Up</button></div>
<div class="submit"style="margin-top: 7px;padding-bottom: 10px;">
		<a href="login.php"><button type="button" value="Login" name="re"style="background-color:yellow;width: 140px;font-size: 20px;height: 30px;">Login</button></a>
</div> 
</div> 
</div>
</form>
<script>
function openWin() {
  window.open("register1.php");
}
</script>

<?php
include('config12.php');
if(isset($_POST['submit']))
{ echo("hello");
	    $email= $_POST['email'];
     	$query="SELECT * FROM signup WHERE email='$email'";
     	$data=mysqli_query($conn,$query);
     	$total=mysqli_num_rows($data);
     	if($total==1)
     	{  
     	   echo '<script>alert("Email is correct")</script>';  
     		echo '<script>window.location="forget.php"</script>';
     	}
        else
        {
        	echo '<script>alert("email is incorrect")</script>';
        }  
     }
?>

<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1530px;display: inline-flex;margin-top: 261px;height:42px;background-color: green;">
	<div class="about" style="margin-top: 10px;font-size:18px;margin-left: 10px;">
   <a href="abo.php" style="text-decoration: none;color: white;">About us</a>
	</div>
	<div class="contact" style="margin-top: 10px;font-size:18px;margin-left: 10px;">
		<a href="cont.php"style="text-decoration: none;color: white;">Contact us</a>
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

