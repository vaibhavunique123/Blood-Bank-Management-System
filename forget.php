<?php
error_reporting(0);
session_start();
?>
<html>
<head>
	<title>
     Create Password
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
		<li><a href="login.php">Login</a></li>		
	</ul>
</div>

<legend style="text-align:center;display: block;
    padding-left: 611px;
    margin-top: 125px;
    padding-right: 10px;
    background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;
    color: black;"><h1>Create Password</h1></legend>
<form action="forget.php" method="POST">
<div class="donar" style="margin-left:880px;margin-top: 10px;background-color: grey;margin-right: 280px;background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
    <div class="name" style="margin-top: px;margin-left: 65px;padding-top:20px ;">
    <input type="email" name="email" placeholder="Email"style="width:250px;height: 40px;font-size:20px;"required>
   </div><br>
    <div class="name" style="margin-top: px;margin-left: 65px;padding-top:16px ;">
    <input type="password" name="password" placeholder="Password"style="width:250px;height: 40px;font-size:20px;"required>
   </div><br>
   <div class="name" style="margin-top: px;margin-left: 65px;padding-top:10px ;">
    <input type="password" name="cnpassword" placeholder="Confirm Password"style="width:250px;height: 40px;font-size:20px;"required>
   </div><br>
   <div  class="su" style="display: inline-flex;margin-left: 90px;">
<div class="submit"style="margin-top: 7px;margin-right: 10px;padding-bottom: 10px;">
		<input type="submit" value="Submit" name="sb" style="width: 90px;background-color: yellow;font-size: 20px;">
</div>
<div class="submit"style="margin-top: 7px;padding-bottom: 10px;">
		<a href="#"><input type="reset" value="Reset" name="re"style="background-color:yellow;width: 90px;font-size: 20px;"></a>
</div> 
</div>   
</div> 
</form>
<?php
include('config12.php');
if(isset($_POST['submit']))
{      
	       $email   = $_POST['email'];
        $password   = $_POST['password'];
     	$cnpassword = $_POST['cnpassword'];
     	if($password==$cnpassword)
     	{
      $insertquery="UPDATE signup Set password ='$cnpassword' WHERE  email=$email";
      $query=mysqli_query($conn,$insertquery);
      $total=mysqli_num_rows($query);
      if($total==1)
      { 
      	   $_SESSION["email"]=$email;
     	   echo '<script>alert("Password change successfully")</script>';  
     	   echo '<script>window.location="login.php"</script>';
      }
  }
      else
      {
         echo '<script>alert("Password and Confirm password not match")</script>';
      }
}
?>
 <div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1536px;display: inline-flex;margin-top: 191px;height:42px;background-color: green;">
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
