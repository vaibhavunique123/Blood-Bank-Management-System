<?php
include('config12.php');
$id=$_GET['id'];
$deletequery="DELETE FROM `bloodreq` WHERE id=$id";
$query=mysqli_query($conn,$deletequery);
if($query)
{
	?>
	<script>
		alert('Record Deleted Successfully');
	</script>
	<?php
}
else
{
	?>
	<script>
		alert('Record Not Deleted Successfully');
	</script>
	<?php
}
header('location:adminbloodrequest.php');
?>