<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wedding Collection | Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Skate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="js/allinone_carousel.js" type="text/javascript"></script>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->
	<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->

<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<h1><a href="adminhome.php"><img src="banner_1.jpeg" width="200"></a></h1>
	  </div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
		
			<li class="activate"><a href="index.php">HOME</a></li>
<!--			<li><a href="about.php">ABOUT</a></li>
 -->			<li><a href="404.php">services</a></li>
			
			
			<li ><a href="#">Master</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="admincategory.php">Category</a></li>
				<li><a href="sub_category_index.php">subCategory</a></li>
				<li><a href="adminproduct.php">product</a></li>
			</ul>
			</li>
			
			
			
			<li ><a href="#">Reports</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="adminreview_order.php">view orders</a></li>
				<li><a href="viewcontactus.php">view contacts</a></li>
				<li><a href="viewregistration.php">view registration</a></li>
				<li><a href="viewfeedback.php">view feedback</a></li>

			</ul>
			</li>
			
			
<!--			<li><a href="blog.php">BLOG</a></li>
 -->			<!--<li><a href="viewcontactus.php">CONTACT</a></li>
			<li><a href="viewregistration.php">REGISTRATION</a></li>
			<li><a href="viewfeedback.php">feedback</a></li> -->
			<li><a href="password.php">change password</a></li>
			<li><a href="logout.php">logout</a></li>

		

		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="grid_12">
      <img src="images/color_stripe.jpg" class="img-responsive" class="c_stripe">
    </div>
</div>
</div>
    
<div class="main_bg"><!-- start main --><br><br><br>
<center><h1>Welcome To Administration</h1></center>
<div class="container">
	<div class="main_grid">
		<div class="top_grid"><!-- start top_grid -->
		
				<div class="col-md-9 span1_of_1">
						<h2>some of our top services</h2>
						<p>Our site offering a wide range in premium menswear & ladieswear from chaniya choli, gown , indowestern , for menswere servani , suit , indowestern,...& also couple were to ethnic wear..</p>
				</div>
				<div class="col-md-3 span1_of_2">
					<a class="btn btn1" href="404.php">Read more</a>
				</div>
				<div class="clearfix"></div>
		</div>
		<!-- end span_of_4 -->
    </div>
</div>
</div>
<div class="main_btm"><!-- start main_btm -->
<div class="container">
  <div class="cau_hide">
	<div class="cursual"><!--  start cursual  -->
		<h4>our happy clients<span class="line"></span></h4>
	</div>
	<div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l1.jpg" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l2.jpg" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l3.jpg" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l4.jpg" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l1.jpg" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l2.jpg" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l3.jpg" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l4.jpg" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l1.jpg" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="img/l2.jpg" alt="Lazy Owl Image">
			</div>
		</div>
	</div>
	</div>
</div>
</div>
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.php"><h2>Wedding Collection</h2></a><br>
			</div>		
			<p class="f_para">Our site offering a wide range in premium menswear & ladieswear from chaniya choli, gown , indowestern , for menswere  servani , suit , indowestern,...& also couple were to ethnic wear..</p>
			<!--<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span> -->
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>admin site </h4>
			<ul class="list-unstyled f_list">
				<li><a href="adminhome.php">Home</a></li>
				<li><a href="404.php">Services</a></li>
				<li><a href="password">Change password </a></li>
				<li><a href="logout.php">Log Out </a></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>Master</h4>
			<ul class="list-unstyled f_list">
				<li><a href="admincategory.php">Category</a></li>
				<li><a href="sub_category_index.php">Sub-Category</a></li>
				<li><a href="adminproduct.php">Product</a></li>
				<li></li>
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>Reports</h4>
			<ul class="list-unstyled f_list">
				<li><a href="adminreview_order.php">View-Orders</a></li>
				<li><a href="viewcontactus.php">View-contacts</a></li>
				<li><a href="viewregistration.php">View-registration</a></li>
				<li><a href="viewfeedback.php">View-feedback</a></li>
				<li></li>
			</ul>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved </span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>