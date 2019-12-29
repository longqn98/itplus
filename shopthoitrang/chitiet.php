
<head>
	<meta charset="utf-8">
<title>THỜI TRANG NAM </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<style type="text/css">
	#ok {
		width: 100%;
		padding-left: 60px;
	}
</style>
</head>
<body> 
	  <!-- header -->
		<div class="header">
		<div class="header-top">
			<div class="container">
				
				<div class="header-grid-right">
					<a href="#" class="sign-in">Đăng nhập</a>
					<form>
						<input type="text" value="Tên Đăng Nhập" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="text" value="Mật khẩu" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input  type="submit" value="ok" >
					</form>					
					<a href="signup.php" class="sign-up">Đăng ký</a>
					<a class="cart" href="giohang.php"><img src="images/cart.png"></a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="container">
		<div class="header-bottom">			
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=" " ></a>			
			</div>	
			<div class="header-bottom-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li ><a href="index.php">TRANG CHỦ</a></li>
						<li><a href="quanau.php" >QUẦN ÂU</a></li>
						<li><a href="suit.php" >ÁO VEST</a></li>						
						<li><a href="kaki.php" >QUẦN KAKI</a></li>
						<li><a href="somi.php" >ÁO SƠMI</a></li>
						
					</ul>	
				
					<div class="clearfix"> </div>					
				</div>
				<div class="search">   <!-- search  bên phải màn hình-->
					<form>
						<input type="text" value="Nhập tên sản phẩm cần tìm" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<a  href="timkiem.php"><img src="images/timkiem.png"></a>
					</form>
				</div>				
				</div>
		</div>
	</div>
<!-- danh mục !-->
<div id="ok">
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 {
  font-family: "Lato", sans-serif;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 300px) {
  .sidenav {padding-top: 10px;}
  .sidenav a {font-size: 12px;}
}
</style>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Quần âu</a>
  <a href="#">áo vest</a>
  <a href="#">Quần kaki</a>
  <a href="#">Áo somi</a>
</div>
<span style="font-size:18px;cursor:pointer" onclick="openNav()">&#9776; Danh Mục</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<div style="clear: both;"></div>
<!--conten-->
<div id="content">
	<div id="content-main">
		<div style="background-color: #fff;">
			<h2>Thông tin chi tiết sản phẩm</h2>
			<div >Trang chủ > Quần áo>Áo khoác gió  </div>

			<div id="detail">
				<h3 style="color: blue">Áo khoác gió</h3>
				<div id="detail-left">
						<a href="index.php"></a><img src="images/p2.jpg" width="60%">
					</div>
					<div id="detail-price">
						<div>200.000$</div>
						 <div>Sale - Số lượng có hạn</div>
					</div>
					<div id="detail-size">
						<div>Kích thước</div>
						<div style="color: green">
							<input type="checkbox" name="chkFav[]" > S
							<input type="checkbox" name="chkFav[]" > M
							<input type="checkbox" name="chkFav[]"> L
						</div>
					</div>
					<div id="detail-sl">
						<div>Số lượng</div>
						<div>
							<input type="text" name="txtsl">
						</div>
					</div>
					<div id="detail-move">
						<div style="color:gray">Chi phí vận chuyển</div>
						<div>Nội thành:30.000đ</div>
						<div>Tỉnh lẻ 50.000đ ( chuyển phát nhanh)</div>
						
					</div>
					
				
					<div class="buy">
						<input type="button" name="btnBuy" value="MUA NGAY" id="inpBuy" >
					</div>
					<div class="buy">
						<input type="button" name="btnAddCart" value="THÊM VÀO GIỎ"  id="inpAdd">
					</div>
				</div>
			</div>
			<div style="clear:both; border-bottom: 1px solid gray;"></div>
			<div id="description">
				<h2><ul>Mô tả chi tiết</h2>
					<li>Chất liệu Da thái</li>
					<li>Lớp da cao cấp </li>
					<li>Dễ dàng phối cùng trang phục phụ kiện khác</li>
					<li>Thiết kế thời trang</li>
					<li>Đường may tỉ mỉ tinh tế</li>
					<li>Hàng chuẩn XK, SP hoàn toàn giống mô tả</li>
				</ul>
				<div id="description-content">
				
				</div>
			</div>
		</div>
	</div>
	
</div>
<div style="clear: both;"></div>
</div>

<!--footer -->

		<link href="style.css" rel="stylesheet" type="text/css" media="all" />	
	<!--//theme-style-->

	<div class="container">
	  <div class="pagination">
	    <a href="#">&laquo;</a>
	    <a href="#">1</a>
	    <a href="#">2</a>
	    <a href="#">3</a>
	    <a href="#">4</a>
	    <a href="#">5</a>
	    <a href="#">6</a>
	    <a href="#">7</a>
	    <a href="#">8</a>
	    <a href="#">&raquo;</a>
	  </div>
	</div>
	
	<div class="footer">
		<div class="container">				
				<div class="class-footer">
					<ul>
						<li ><a href="index.php" class="scroll">TRANG CHỦ </a><label>|</label></li>
						<li><a href="quanau.php" class="scroll">QUẦN ÂU</a><label>|</label></li>
						<li><a href="suit.php" class="scroll">ÁO VEST</a><label>|</label></li>
						<li><a href="kaki.php" class="scroll">QUẦN KAKI</a><label>|</label></li>
						<li><a href="somi.php" class="scroll">ÁO SƠ MI</a><label>|</label></li>
						<li><a href="chitiet.php" class="scroll">CHI TIẾT</a></li>
					</ul>
					 <p class="footer-grid">&copy; 2019 HÀ NỘI <a href="http://thoitrangnam.com/" target="_blank">thoitrangnam</a> </p>					 				 								
			 		<div class="footer-diachi">
			 		<ul>
			 			<li>CÔNG TY TNHH MAN</li><br>
			 			<li> Địa chỉ: số 85 Phố Viên, Phường Đức Thắng, Hà Nội </li><br>
			 			<li>Mã số doanh nghiệp: 0108901419 do Sở kế hoạch và đầu tư thành phố Hà nội </li><br>
			 			<li>Điện Thoại:09876767321</li><br>
			 			<li>Email:thoitrangnam@gmail.com
			 			</li><br>
			 		</ul>
			 		</div>
		 		</div>
		 		<div class="class-footer-right">
		 			<p>ĐĂNG KÝ NHẬN SẢN PHẨM TỪ CHÚNG TÔI</p>
		 			<ul>
		 				<li>Đăng ý Email của bạn để trở thành<br> khách hàng đầu tiên được nhận thông tin<br> ưu đãi mới nhất từ Tony4men</li>
		 				<li><input class="email" type="" name=""><button>Gửi email</button></li>
		 			</ul>		 			
		 		</div>
		 		<div class="footer-left">
					<a href="index.php"><img src="images/logo1.png" alt=" " ></a>
				</div> 
				<div class="clearfix"> </div>
			 	</div>
		</div>
	</div>
</body>