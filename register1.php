<?php
error_reporting(0);
session_start();
?>
<html>
<head>
<title>
Sign Up
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
margin-top: 12px;
padding-right: 10px;
background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;
color: black;"><h1>Sign Up</h1></legend>
<form action="register1.php" method="POST">
<div class="donar" style="margin-left:880px;background-color: grey;margin-right: 280px;background-image: url('gif/b7.gif'); background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<div class="name" style="margin-top: px;margin-left: 65px;padding-top:20px ;">
<input type="text" name="name" placeholder="Name"style="width:250px;height: 40px;font-size:20px;"required>
</div><br>
<div class="phone"style="margin-top: 7px;margin-left: 65px;">
<input type="tel" name="phone" placeholder="Enter Mobile number (0-9){10}" pattern="[0-9]{10}" style="width:250px;height: 40px;font-size:20px;"required >
</div><br>
<div class="email"style="margin-top: 7px;margin-left: 65px;">
<input type="email" name="email" placeholder="Email Address" style="width:250px;height: 40px;font-size:20px;"required>
</div><br>
<div class="password"style="margin-top: 7px;margin-left: 65px;">
<input type="password" name="password" placeholder="Password" style="width:250px;height: 40px;font-size:20px;"required>
</div><br>
<div class="address"style="margin-top: 7px;margin-left: 65px;">
<input type="text" name="address" placeholder="Address" style="width:250px;height: 40px;font-size:20px;"required>
</div><br>
<div class="sex" style="margin-top: 7px;margin-left: 65px;height:30px; width=100px;">
<input type="radio" name="sex" value="M">Male
<input type="radio" value="Fe" name="sex"style="margin-left: 20px;">Female
<input type="radio" value="T" name="sex"style="margin-left: 20px;">Transgender<br>
</div><br>
<div class="bg" style="display:inline-flex;">
<div class="age"style="margin-left: 65px;height:30px;margin-right:20px;">
<input type="number"  name="age"  min="18" max="60" placeholder="Age"style="font-size:20px;width:70px;height: 30px"; required> 
</div> 
<div class="camp"style="margin-right:40px;width: 100px;ba">
<select name="bloodgroup"style="width:160px;height: 30px;margin-right:20px;">	
<option selected="hidden" value="">Blood Group</option>
<option value="A+">A+</option>
<option value="O+">O+</option>
<option value="B+">B+</option>
<option value="AB+">AB+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="AB-">AB-</option>
</select>
</div>
</div><br>
<div class="camp"style="margin-top: 36px;margin-left: 65px;width: 100px;">
<select name="city"style="width:200px;height: 30px;">	
<option selected="hidden" value="">City</option>
<option value="Allahabad">Allahabad </option>
<option value="varanasi">Varanasi </option>
<option value="kanpur">Kanpur </option>
<option value="lucknow">Lucknow </option>
<option value="gorakhpur">Gorakhpur </option>
<option value="pratapgarh">Pratapgarh </option>
</select>
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
<div class="foot" style="background-image: url('image/bbms.jpg');background-color:green;width: 1530px;display: inline-flex;margin-top: 25px;height:42px;background-color: green;">
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
<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$bloodgroup=$_POST['bloodgroup'];
$city=$_POST['city'];
if(!empty($name)||!empty($phone)||!empty($email)||!empty($password)||!empty($address)||!empty($sex)||!empty($age)||!empty($bloodgroup)||!empty($city))
{
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="blood";
//create connection 
$conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}  
else
{
$SELECT = "SELECT email FROM signup WHERE email = ? LIMIT 1";
$INSERT = "INSERT Into signup(name,phone,email,password,address,sex,age,bloodgroup,city)values(?,?,?,?,?,?,?,?,?)";
//prepare statement
$stmt=$conn->prepare($SELECT);
$stmt->bind_param("s",$email);                                  	
$stmt->execute();
$stmt->bind_result($email);
$stmt->store_result();
$rnum=$stmt->num_rows;
if($rnum==0)
{
$stmt->close();
$_SESSION["email"]=$email;
$_SESSION['name']=$name;
$_SESSION['phone']=$phone;
$_SESSION['password']=$password;
$_SESSION['address']=$address;
$_SESSION['sex']=$sex;
$_SESSION['age']=$age;
$_SESSION['bloodgroup']=$bloodgroup;
$_SESSION['city']=$city;
$stmt=$conn->prepare($INSERT);
$stmt->bind_param("ssssssiss",$name,$phone,$email,$password,$address,$sex,$age,$bloodgroup,$city);
$stmt->execute();
echo '<script>alert("Successful registration Login please!")</script>';
$_SESSION['email'];
$_SESSION['name'];
$_SESSION['phone'];
$_SESSION['password'];
$_SESSION['address'];
$_SESSION['sex'];
$_SESSION['age'];
$_SESSION['bloodgroup'];
$_SESSION['city'];
$email=$_SESSION['email'];
$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$password=$_SESSION['password'];
$address=$_SESSION['address'];
$sex=$_SESSION['sex'];
$age=$_SESSION['age'];
$bloodgroup=$_SESSION['bloodgroup'];
$city=$_SESSION['city'];
$query="SELECT * FROM signup WHERE email='$email'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
$to_email = $email;
$subject = "Registration in Online Blood Bank Management System";
$body = "Hi, $name thankyou for Registration in Online Blood Bank Management System\n Your details  \n Name = $name  \n Phone = $phone \n Password = $password \n Address =$address\n Sex= $sex \n Age = $age \n Blood group = $bloodgroup \n City= $city";
$headers = "From: bloodmanagementoo@gmail.com";
if (mail($to_email, $subject, $body, $headers))
echo "Email successfully sent to $to_email...";
echo '<script>window.location="login.php"</script>';
}
else
{
echo nl2br('<script>alert("Someone already register using this email \n Please try other email")</script>');
}
$stmt->close();
$conn->close();  
} 
}
else
{
die();
}
?>