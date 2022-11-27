<?php
session_start();
unset($_SESSION['email']);
header("location:../pages/Home-Umar.php");
?>