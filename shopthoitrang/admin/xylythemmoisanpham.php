<?php
session_start();
if (isset($_SESSION["logged_admin"]) && ($_SESSION["logged_admin"] == true)){
	if(isset($_POST['btnSave'])){
		$ma = $_POST['productID'];
		$ten = $_POST['productName'];
		$gia = $_POST['unitPrice'];
		$hinhanh = $_POST['image'];
		$mota = $_POST['description'];
		$maNCC = "Samsung";
		$maDM = "DTDD";

		include("../database.php");
		$sql = "INSERT INTO products SET productID=?, productName=?, unitPrice=?, description=?, categoryID=?, supplierID=?";
		$stmt =$conn -> prepare($sql);
		$stmt -> bindValue(1,$ma);
		$stmt -> bindValue(2,$ten);
		$stmt -> bindValue(3,$gia);
		$stmt -> bindValue(4,$mota);
		$stmt -> bindValue(5,$maDM);
		$stmt -> bindValue(6,$maNCC);

		if($stmt -> execute() == true){
			header("location:quanlysanpham.php");
		}
}else{
	header("location:dangnhap_admin.php");
}
}else{}
?>