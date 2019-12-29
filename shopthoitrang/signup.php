
<head>
<title>THỜI TRANG NAM </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}


.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}


.clearfix::after {
  content: "";
  clear: both;
  display: table;
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
						<a class="timkiem" href="timkiem.php"><img src="images/timkiem.png"></a>
					</form>
				</div>				
				</div>
		</div>
	</div>

<!-- main -->
	<div>
		<form action="" style="border:1px solid #ccc">
		  <div class="container">
		    <h1>Đăng ký</h1>
		    <p>Vui lòng điền vào mẫu này để tạo một tài khoản.</p>
		    <hr>

		    <label for="email"><b>Email</b></label>
		    <input type="text" placeholder="Nhập Email của bạn" name="email" required>

		    <label for="psw"><b>Mật khẩu</b></label>
		    <input type="password" placeholder="Nhập mật khẩu" name="psw" required>

		    <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
		    <input type="password" placeholder="Nhập lại mật khẩu" name="psw-repeat" required>
		    
		    <label>
		      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ghi nhớ
		    </label>
		    
		   

		    <div class="clearfix">
		      <button type="button" class="cancelbtn">Thoát</button>
		      <button type="submit" class="signupbtn">Đăng ký</button>
		    </div>
		  </div>
		</form>

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