<?php
session_start();
unset($_SESSION["usernamme"]); 
header("location:index.php");
?>