<?php
session_start();
echo '<script>alert("Logout successful")</script>';  
echo '<script>window.location="login.php"</script>';
session_unset();
?>