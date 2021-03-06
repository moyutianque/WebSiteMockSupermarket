<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Supermarket</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Custom Fonts -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"  type="text/css">
	<link rel="stylesheet" href="fonts/font-slider.css" type="text/css">

	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>

	<!-- Core JavaScript Files -->
	<script src="js/bootstrap.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
		function MyReason(name){
			var num = prompt("Number of items",0);
			document.getElementById("name").value = name;
			document.getElementById("num").value = num;
			document.getElementById("form").submit();
		}

	</script>

</head>

<body>
<!-- TOP -->
<nav id="top">
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<select class="language">
					<option value="English" selected>English</option>
					<option value="Chinese">Chinese</option>
				</select>
				<select class="currency">
					<option value="MOP" selected>MOP</option>
					<option value="CNY">CNY</option>
				</select>
			</div>
			<div class="col-xs-6">
				<ul class="top-link">
					<li><?php echo "Welcome, " . $_SESSION['username']." !";?></li>
					<li><a href="http://127.0.0.1/authentication/logout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
					<li><a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
<!--Header-->
<header class="container">
	<div class="row">
		<div class="col-md-4">
			<div id="logo">Famer's Supermarket</div>
		</div>
		<div class="col-md-4">
			<form class="form-search" method="post">
				<input placeholder="Orange" type="text" class="input-medium search-query" name="searchContent">
				<!--<input class="btn" type="submit" name="login_btn" value="ADD">-->
				<button type="submit" class="btn" name="search_btn"><span class="glyphicon glyphicon-search"></span></button>
			</form>
		</div>
		<div class="col-md-4">
			<div id="cart"><a class="btn btn-1" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>
					<?php if(isset($_SESSION['num']))
						echo "CART : ".$_SESSION['num'] ." ITEM";
					else echo "CART : 0 ITEM";?></a></div>
		</div>
	</div>
</header>
<!--Navigation-->
<nav id="menu" class="navbar">
	<div class="container">
		<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
			<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Fruits</a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php
									$var="orange";
									echo "http://127.0.0.1/welcome/customer/category.php?category=" . $var ;
									?>">Orange</a></li>
								<li><a href="category.php">Apple</a></li>
								<li><a href="category.php">Pineapple</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Drinks</a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="category.php">Beer</a></li>
								<li><a href="category.php">Wine</a></li>
								<li><a href="category.php">Mineral water</a></li>
								<li><a href="<?php
									$var="soda";
									echo "http://127.0.0.1/welcome/customer/category.php?category=" . $var ;
									?>">Soda</a></li>
								<li><a href="category.php">Milk</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Snacks</a>
					<div class="dropdown-menu" style="margin-left: -203.625px;">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php
									$var="chips";
									echo "http://127.0.0.1/welcome/customer/category.php?category=" . $var ;
									?>">Chips</a></li>
								<li><a href="<?php
									$var="biscuit";
									echo "http://127.0.0.1/welcome/customer/category.php?category=" . $var ;
									?>">Biscuit</a></li>
								<li><a href="category.php">Pudding</a></li>
								<li><a href="category.php">Popcorn</a></li>
								<li><a href="category.php">Nuts</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="category.php">Pretzels</a></li>
								<li><a href="category.php">Beef jerky</a></li>
								<li><a href="category.php">Bun</a></li>
								<li><a href="category.php">French fries</a></li>
								<li><a href="category.php">Ice cream</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Electronic Products</a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="category.php">Mobile phone</a></li>
								<li><a href="category.php">Headset</a></li>
								<li><a href="category.php">Notebook</a></li>
								<li><a href="category.php">Television</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
	<!--//////////////////////////////////////////////////-->
	<!--///////////////////Contact Page///////////////////-->
	<!--//////////////////////////////////////////////////-->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="heading"><h1>CONTACT US</h1></div>
				</div>
				<div class="col-md-6" style="margin-bottom: 30px;">
					<form name="form1" id="ff" method="post" action="contact.php">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required data-validation-required-message="Please enter your name.">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required data-validation-required-message="Please enter your email address.">
						</div>
						<div class="form-group">
							<input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
						</div>
						<div class="form-group">
							<textarea class="form-control" placeholder="Your Message *" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
						</div>
						<button type="submit" class="btn btn-1">Send Message</button>
					</form>
				</div>
				<div class="col-md-6">
					<p><span class="glyphicon glyphicon-home"></span> Macau SAR, China</p>
					<p><span class="glyphicon glyphicon-earphone"></span> +853 62879264 , +853 62879264</p>
					<p><span class="glyphicon glyphicon-envelope"></span> moyutianque@outlook.com</p>
					<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDoDbYCT_T0ybyd3dNu0hHaVeP9Bas0BaQ
    &q=University+of+Macau" width="95%" height="230" frameborder="0" style="border:0"></iframe>
				</div>
			</div>
		</div>
	</div>
<footer>
	<div class="container">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-md-3 col-footer footer-1">
					<h3>Famer's Supermarket</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
				<div class="col-md-3 col-footer footer-2">
					<div class="heading"><h4>Customer Service</h4></div>
					<ul>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Delivery Information</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-footer footer-3">
					<div class="heading"><h4>My Account</h4></div>
					<ul>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Brands</a></li>
						<li><a href="#">Gift Vouchers</a></li>
						<li><a href="#">Specials</a></li>
						<li><a href="#">Site Map</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-footer footer-4">
					<div class="heading"><h4>Contact Us</h4></div>
					<ul>
						<li><span class="glyphicon glyphicon-home"></span>Macau SAR, China</li>
						<li><span class="glyphicon glyphicon-earphone"></span>+853 62879264</li>
						<li><span class="glyphicon glyphicon-envelope"></span>moyutianque@outlook.com</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					Copyright &copy; 2015.Company name All rights reserved.
				</div>
				<div class="col-md-6">
					<div class="pull-right">
						<ul>
							<li><img src="images/visa-curved-32px.png" /></li>
							<li><img src="images/paypal-curved-32px.png" /></li>
							<li><img src="images/discover-curved-32px.png" /></li>
							<li><img src="images/maestro-curved-32px.png" /></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
