<?php

	include("../database.php");
	include("templates/tieude.php");
	$sql = "SELECT*FROM products";
	$stmt = $conn -> prepare ($sql);
	$stmt->execute();
?>	
<div>
	<a href="themmoisanpham.php">Thêm mới sản phẩm</a>
</div>
<h2>DANH SÁCH CÁC SẢN PHẨM CỦA CỬA HÀNG</h2>
<table width="100%" border="1">
	<tr>
		<th>Hình Ảnh</th>
		<th>Mã SP</th>
		<th>Tên SP</th>
		<th>Giá SP</th>
		<th>Số lượng SP</th>
		<th>Giảm giá</th>
		<th colspan="2"> Chức năng</th>
	</tr>	
	<?php
	while($p= $stmt -> fetch(PDO::FETCH_ASSOC)){
	?>
	<tr>
		<td><img src="../assets/images/products/<?php echo $p['thumbnail'];?>" width="150px"></td>
		<td><?php echo $p['productID'];?></td>
		<td><?php echo $p['productName'];?></td>
		<td><?php echo $p['unitPrice'];?></td>
		<td><?php echo $p['quantity'];?></td>
		<td><?php echo $p['discount'];?></td>
		<td>
			<a href="capnhatsanpham.php?id=">Xóa</a> <!-- tao form co tac dung -->
		</td>
	</tr>
	<?php	
	}	
	?>
</table>


<?php

include("templates/hamuc.php");

?>