<?php
session_start();
session_destroy();
//echo ("<script>alert('You have logout success !')</script");
header('location:login.php');
?>