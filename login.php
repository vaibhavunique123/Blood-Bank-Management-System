<?php
session_start();
include('config12.php');
error_reporting(0);
?>
<html>
<head>
<title>
Login Account
</title>
<link rel="stylesheet" type="text/css" href="project.css">
</head>
<body bgcolor="silver"style="background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<div class="menubar"style="background-image: url('image/bbms.jpg');">
<ul>
<img src="image/bbms5.webp" style="width: 300px;height: 80px;margin-right:1000px ;">
</ul>
</div>
<legend style="text-align:center;display: block;
padding-left: 620px;
margin-top: 100px;
padding-right: 10px;
background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;
color: black;"><h1>Login</h1></legend>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
<div class="donar" style="margin-left:880px;background-color: grey;margin-right: 280px;background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<div class="email" style="margin-top: px;margin-left: 65px;padding-top:20px ;">
<input type="email" name="email" placeholder="Email"style="width:250px;height: 40px;font-size:20px;"required>
</div><br>
<div class="password"style="margin-top: 10px;margin-left: 65px;">
<input type="password" name="password" placeholder="password" style="width:250px;height: 40px;font-size:20px;"required>
</div><br>
<div  class="su" style="display: inline-flex;margin-left: 90px;">
<div class="submit"style="margin-top: 10px;margin-right: 10px;padding-bottom: 10px;">
<input type="submit" value="Submit" name="submit" style="width: 90px;background-color: yellow;font-size: 20px;">
</div>
<div class="submit"style="margin-top: 10px;padding-bottom: 10px;margin-left: 6px;">
<input type="reset" value="Reset" style="background-color:yellow;width: 90px;font-size: 20px;">
</div><br>
</div> 
<div class="register"style="margin-top: 10px;padding-bottom: px;margin-left: 90px;display: inline-flex;">
<a href="register1.php"><button  type= "button" value="Register" style="background-color:yellow;width:90px;font-size: 20px;">Sign Up</button></a>
<a href="#"><button  type= "button"  onclick="showAlert()"style="background-color:yellow;width:90px;font-size: 11px;color: black;margin-left: 15px;">Forget Password</button></a>
</div>
</div>
</form>
<script>
function showAlert() 
{
alert ("Check your registered email, if you registered in Online Blood Bank Mangement System then we sent your password with proper details.");
}
</script>
<?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$query="SELECT * FROM signup WHERE email='$email' && password='$password'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total==1)
{
$_SESSION["email"]=$email;
echo '<script>alert("Login successful")</script>'; 
echo '<script>window.location="home.php"</script>';
}
else
{
echo '<script>alert("Email or password is incorrect")</script>';
}  
}
?>
<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1536px;display: inline-flex;margin-top: 258px;height:42px;background-color: green;">
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