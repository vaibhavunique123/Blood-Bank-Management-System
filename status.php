<?php
session_start();
include('config12.php');
?>
<html>
<head>
	<title>
		home
	</title>
	<link rel="stylesheet" href="project.css">
</head>
<body bgcolor="silver"style=" background-repeat: no-repeat;background-attachment: fixed;
  background-size: cover;">
  
	<div class="menubar" style="background-image: url('image/bbms.jpg');">
	<ul>
		<img src="image/bbms5.webp" style="width: 200px;height: 80px;margin-right:90px ;padding-right: 20px;">
		<li class="active"><a href="#">Home</a></li>
		<li><a href="donar.php">Donar Request</a></li>
		<li><a href="bloodreq.php">Blood Request</a></li>
		<li><a href="gallery.html">Gallery</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="#">Status</a></li>
</ul>
</div>
<?php
include('config12.php');
$phone=$_GET['phone'];
$result="SELECT * FROM bloodreq WHERE $phone=$phone";
$query=mysqli_query($conn,$result);
while($res=mysqli_fetch_array($query))
{
?>    
              <table>
              	<tr>
      				<td width="3%" align="center"><?php echo $res['status'];?></td>
                </tr>
              </table>
<?php
}
?>

<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1536px;display: inline-flex;margin-top: px;height:42px;">
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

