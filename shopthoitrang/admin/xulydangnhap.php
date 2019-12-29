<?php
session_start();
if(isset($_POST['btnLogin'])){
	$email = $_POST['txtEmail'];
	$pass = $_POST['txtPassword'];

	include("../database.php");
	$sql = "SELECT * FROM employees WHERE email =? AND password =?";
	$stmt = $conn-> prepare($sql);
	$stmt -> bindValue(1, $email);
	$stmt -> bindValue(2,$pass);

	$stmt -> execute();

	$item = $stmt -> fetch(PDO::FETCH_ASSOC);
	if($stmt->rowCount()>0){
		$_SESSION['logged_admin'] = true;
		$_SESSION['logged_name'] = $item['employeeName'];
		header("location:trangchu_admin.php");
	}else{
		$_SESSION['logged_admin'] = false;
		header("location:dangnhap_admin.php");
	}
}
?>