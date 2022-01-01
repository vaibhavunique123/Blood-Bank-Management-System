<?php
include('config12.php');
$id=$_GET['id'];
$insertquery="UPDATE bloodreq Set status ='Approve' WHERE  id=$id";
$query1=mysqli_query($conn,$insertquery);
$insert="select name,date,email,city,bloodgroup from bloodreq where  id=$id";
$query2=mysqli_query($conn,$insert);
$total=mysqli_num_rows($query2);
if($total==1)
{
     while($res=mysqli_fetch_array($query2))
     {
     $_SESSION["email"]=$res['email'];
     $_SESSION['name']=$res['name'];
     $_SESSION['date']=$res['date'];
     $_SESSION['city']=$res['city'];
     $_SESSION['bloodgroup']=$res['bloodgroup'];
     echo '<script>alert("Approved successfully")</script>';  
     echo '<script>window.location="adminbloodrequest.php"</script>';
     $email=$_SESSION['email'];
     $name=$_SESSION['name'];
     $date=$_SESSION['date'];
     $city=$_SESSION['city'];
     $bloodgroup=$_SESSION['bloodgroup'];
     $to_email = $email;
     $subject = "Blood Request Approved";
     $body = "Hello, $name \n We have a bloodgroup ( $bloodgroup ) that you have requested and your blood request has approved by Admin. \n May you come to our camp in $city on $date  between 11:00 am to 7:00 pm to take ( $bloodgroup ) bloodgroup that you have requested.";
     $headers = "From: bloodmanagementoo@gmail.com";
     if (mail($to_email, $subject, $body, $headers))
     echo "Email successfully sent to $to_email...";
     if($query1) 
     {
    echo '<script>alert("Approved successfully")</script>';  
    echo '<script>window.location="adminbloodrequest.php"</script>';
     }
    else
    {
    echo '<script>alert("Not Approved successfully")</script>';  
    echo '<script>window.location="adminbloodrequest.php"</script>'; 
    }
}
}
?>
