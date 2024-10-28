<?php
session_start();

session_unset();
session_destroy();
header("location:login.php");
setcookie('email',$_POST['email'] , time() - (60*60*24));
?>