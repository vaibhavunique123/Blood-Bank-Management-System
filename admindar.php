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
		<li class="active"><a href="adminhome.php">Home</a></li>
		<li><a href="admindonar.php">Donar Request</a></li>
		<li><a href="adminbloodrequest.php">Blood Request</a></li>
		<li><a href="registertable.php">User Registration</a></li>
		<li><a href="admindar.php">Donar A/R</a></li>
		<li><a href="adminbrar.php">Blood A/R</a></li>
		<li><a href="adminlog.php">Logout</a></li>
		
  </ul>
</div>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">  
</head>
<body>
<div class="main-div" style="width: 1535px;height: 622px;background-color: silver;"> 
	<h1 style="text-align: center; background-color: white;"> Donar Registration</h1>
      	<table bgcolor="wheat" height="10%" width="100%"border="2"> 
      		<tr>
                <th >Id</th>
                <th>Name</th>
                <th>email</th>
                <th>Address</th>
                <th>Sex</th>
                <th>Age</th>
                <th>City</th>
                <th>Date</th>
                <th>Status</th>
      		</tr>
      		<tbody>
<?php
session_start();
include 'config12.php';
$selectquery="select * from donartbl";
$query=mysqli_query($conn,$selectquery);
$nums=mysqli_num_rows($query);
while($res=mysqli_fetch_array($query))
{
?>    
                <tr style="border-width: 20px;color:green;">
      				<td width="2%" align="center"><?php echo $res['id'];?></td>
      				<td width="18%" align="center"><?php echo $res['name'];?></td>
      				<td align="center" width="15%"><?php echo $res['email'];?></td>
      				<td width="18%" align="center"><?php echo $res['address'];?></td>
      				<td  width="3%"align="center"><?php echo $res['sex'];?></td>
      				<td width="3%"align="center"><?php echo $res['age'];?></td>
      				<td width="16%"align="center"><?php echo $res['city'];?></td>
      				<td width="11%"align="center"><?php echo $res['date'];?></td>
      				<td width="11%"align="center"><?php echo $res['status'];?></td>
                    
      			</tr>
<?php
}
?>

      			
      		</tbody>
      	</table>
      </div>
</body>
</html>

<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1536px;display: inline-flex;margin-top: px;height:50px;">
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

