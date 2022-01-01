<?php
include('config12.php');
$id=$_GET['id'];
$insertquery="UPDATE donartbl Set status ='Reject' WHERE  id=$id";
$query=mysqli_query($conn,$insertquery);
if($query)
{
	echo '<script>alert("Reject successful")</script>';  
    echo '<script>window.location="admindonar.php"</script>';
}
else
{

 echo '<script>alert("Not Reject successful")</script>';  
 echo '<script>window.location="admindonar.php"</script>'; 

}
?>
