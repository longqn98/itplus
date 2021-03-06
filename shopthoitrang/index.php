
<head>
<title>THỜI TRANG NAM </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<!-- owlcarosel -->
<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
</head>
<body>

	<script type="text/javascript">
		$(document).ready(function(){
		  $('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:2
			        },
			        1000:{
			            items:3
			        }
			    }
			})
		});
	</script>
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
						<a class="cart" href="timkiem.php"><img src="images/timkiem.png"></a>
					</form>
				</div>				
				</div>
		</div>
	</div>

<!--menu-->


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


	<!--content-->
	<div class="content">
		<div class="container">
		<div class="quanau">
			<div class="col-md-9 col-d">
				<div class="banner">
					<div class="banner-matter">
						<label>TRẺ KHỎE</label>
						<h2>KHỎE ĐẸP</h2>
						<p>HỢP THƠI TRANG</p>						
					</div>							
						<p class="para-in">Hàng việt nam chất lượng cao</p>
				</div>				
				<div class="in-line">
					<div class="para-an">
						<h3>MẪU MỚI NHẤT</h3>
						<p>Hàng việt nam chất lượng cao</p>
					</div>
					<div class="lady-in">
						<div id="wp-slider">
							<div class="owl-carousel owl-theme">
							    <div class="col-md-4 you-para">
								<a href="single.php"><img class="img-responsive pic-in" src="images/au11.jpg"  ></a>
								<div class="you-in">
									<span>15<label>%</label></span>
								<small>off</small>
								</div>
								<p> Quần âu nam Aristino ATR02508</p>
								<span>$500.000đ  | <label class="cat-in"> </label> <a href="#">Thêm vào giỏ hàng </a></span>
							</div>
							<div class="col-md-4 you-para">
								<a href="single.php"><img class="img-responsive pic-in" src="images/au77.jpg" alt=" " ></a>
								<div class="you-in">
									<span>15<label>%</label></span>
								<small>off</small>
								</div>
								<p>Quần âu Aristino ATR01108</p>
								<span>$600.000đ  | <label class="cat-in"> </label> <a href="#">thêm vào giỏ </a></span>
							</div>
							<div class="col-md-4 you-para para-grid">
								<a href="single.php"><img class="img-responsive pic-in" src="images/au33.jpg" alt=" " ></a>
								<div class="you-in">
									<span>15<label>%</label></span>
								<small>off</small>
								</div>
								<p>Quần âu Aristino ATR02808</p>
								<span>$500.000đ  | <label class="cat-in"> </label> <a href="#">Thêm vào giỏ </a></span>
							</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-3 col-m-left">				
				<div class="sp">					         
			     </div>
				
				<div class="discount">
					<a href="single.php"><img class="img-responsive pic-in" src="images/p2.jpg" alt=" " >	</a>		
											
					<a href="#" class="know-more">view</a>
				</div>
				<div class="discount">
					<a href="#"><img class="img-responsive pic-in" src="images/p3.jpg" alt=" " ></a>			
										
					<a href="#" class="know-more">view</a>
				</div>
				
			</div>
			<div class="clearfix"> </div>
			</div>
			<!---->
			<div class="lady-in-on">
			<div class="buy-an">
						<h3>SẢN PHẨM KHÁC</h3>
						<p>các sản phẩm trong tháng này</p>
						
		</div>
	</div>
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