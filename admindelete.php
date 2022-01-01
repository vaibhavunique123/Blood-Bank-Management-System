<?php
include('config12.php');
$id=$_GET['id'];
$deletequery="DELETE FROM `signup` WHERE id=$id";
$query=mysqli_query($conn,$deletequery);
if($query)
{
	echo '<script>alert("Deleted successfully")</script>';  
    echo '<script>window.location="registertable.php"</script>';
}
else
{
	echo '<script>alert("Not Deleted successfully")</script>';  
    echo '<script>window.location="registertable.php"</script>';
}
?>