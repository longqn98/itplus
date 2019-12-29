<?php
	
session_start();
if (isset($_SESSION["logged_admin"]) && ($_SESSION["logged_admin"] == true)){
	include("templates/tieude.php");
?>

Nội dung Bảng điều khiển
<?php
}else{
	header("location:dangnhap_admin.php");
}
include("templates/hamuc.php");
?>