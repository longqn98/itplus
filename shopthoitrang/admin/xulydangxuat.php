<?php
session_start();
if (isset($_SESSION["logged_admin"]) && ($_SESSION["logged_admin"] == true)){
	
	unset($_SESSION['logged_name']);
	unset($_SESSION['logged_admin']);
	header("location:dangnhap_admin.php");
}else{
	header("location:dangnhap_admin.php");
}
?>