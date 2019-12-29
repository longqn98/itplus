<?php
	
session_start();
if (isset($_SESSION["logged_admin"]) && ($_SESSION["logged_admin"] == true)){
	include("templates/tieude.php");
?>

	<h2>Chức năng thâm mới sản phầm</h2>
	<hr>

	<form action="xylythemmoisanpham.php" method="post" enctype="mutipart/form-data">
		<table width="100%" border="1px" align="center">
			<tr>
				<td width="30%"> Mã sản phẩm</td>
				<td width="69%"><input type="text" name="productID"></td>				
			</tr>
			<tr>
				<td width="30%"> Tên sản phẩm</td>
				<td width="69%"><input type="text" name="productName"></td>				
			</tr>
			<tr>
				<td width="30%"> Giá sản phẩm</td>
				<td width="69%"><input type="text" name="unitPrice"></td>				
			</tr>
			<tr>
				<td width="30%">Hình ảnh</td>
				<td width="69%"><input type="file" name="image[]" multiple></td>				
			</tr>
			<tr>
				<td width="30%"> Mô tả chi tiết</td>
				<td width="69%">		
					<textarea name="description"></textarea>
					<script type="text/javascript" >
						CKEDITOR.replace("description");
					</script>
				</td>
			</tr>
			<tr>
				<td width="30%"></td>
				<td width="69%"><input type="submit" name="btnSave" value="Lưu"></td>				
			</tr>
		</table>
	</form>

<?php
require_once("templates/hamuc.php");
}else{
	header("location:dangnhap_admin.php");
}
?>