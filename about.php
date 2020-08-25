<?php
session_start(); 
		
			if (isset($_POST['find']))
			{
				$k=$_POST['k'];
				if(empty($k) || trim($k)=="")
				{
					echo "<font> please enter keyword</font>";
				}
				else
				{
				
				header("location:search.php?k=".$k);
				}
			}
	

?>


<?php
	session_start();
	if(isset($_SESSION['cust_id']))
	{
		
		$cust_id=$_SESSION['cust_id'];

	}
?>


<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include ("connection.php");

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Wedding Collection | About </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Skate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
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
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="banner_1.jpeg" width="200"</a></h1>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
			<li class="activate"><a href="about.php">ABOUT</a></li>
			<li><a href="404.php">services</a></li>
			<li><a href="portfolio.php">collection</a>
									<li><a href="view-order.php">view orders</a></li>

			<!--<li><a href="portfolio.php">Collection</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="portfolio.php">Bride</a></li>
				<li><a href="portfolio.php">Groom</a></li>
			</ul>
			</li>
<!--			 --><!--<li><a href="blog.php">BLOG</a></li> -->
 -->			<!--<li><a href="contact.php">CONTACT</a></li>
			<li><a href="Registration.php">REGISTRATION</a></li>
			<li><a href="feedback.php">feedback</a></li>
 -->
			
			<li><a href="">users</a>
		    <ul class="sub-menu list-unstyled">
				<?php
				if(!isset($_SESSION['cust_id']))
				{
				?>
					<li><a href="clientlogin.php">Login</a> </li>
					
					<li><a href="Registration.php">Registration</a> </li>								   
					
				<?php
				}
				else
				{
				?>	
					
					<li><a href="logout.php">logout</a> </li>								   
					
				<?php
				}
				?>	
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="feedback.php">feedback</a></li>
			</ul>
			</li>
			
			<form action="" method="post">
        <fieldset>
	<br>
          <input type="text" value="Search Our Website&hellip;" name="k" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="find" />
		  
		 		<?php 
			if (isset($_SESSION['cust_id']))
			{
			
				$cid=$_SESSION['cust_id'];
				$sql="select * from tbl_temp where cust_id=$cid";
				$r=mysql_query($sql);
				$cnt=mysql_num_rows($r);
					//echo $cnt;	
			}
			else
			{
				echo 0;
			}
			
			?>

			<img src="cart.jpg" alt="cart.php" width="30" height="30" style="float:right" title="">
			
			
	</a></li><li style="float:right"><a href="cart.php">Items(<?php echo  $cnt; ?>)</a></li>
        </fieldset>
      </form>
          
		

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
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">about us</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">about us</li>
		</ol>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="about">
		<div class="about-desc">
			   <h3>About our wedding collection...</h3>
			   <p>“Bridal” purely a female showroom is backed by true passion of serving the creative world of Indian female costumes.<br>
 the family on demand of our loyal customers explored the women world and fashion. The young generation added a venomous 

passion into it and dreamt of an international standard showroom providing an exclusive range of indowestern, Chaniya 

Choli,designer gown,…….<br>
Bridal has made it’s recognition of introducing the latest trends and fashion in the industry. It has become a tradition to 

visit BRIDAL first for the shopping of Wedding outfits for all the females of the family especially the Brides.<br>

As far as NRI’s are concerned, almost all females who visit South Gujarat make it a point that they visit “Bridal” atleast 

once. The fabulous collection of Bridal fascinates all those who visit the showroom.<br> 

The major business of “Bridal” is due to the strong recommendations of our satisfied buyers and valued customers. We thank 

them all and expect the same in the future.<br>

With this end note, We at “Bridal” take an opportunity to invite you all at our showroom during your visit to your hometown 

in India for your wedding plans. Our customers can also visit our website www.weddingcollection and place their orders 

online. <br>
</p>
			   <p>Our site offering a wide range in premium menswear from servani , suit , indowestern,... to ethnic wear.<br>

Dulha collection works as a one-stop offering a variety of products from designer kurtas and suave sherwanies to the elegant accessories which will make you stand out.<br>

.<br></p>
			   <a class="btn btn1 btn3" href="single-page.php">read more</a>		    
		</div>
		<div class="about_bottom">
		  <div class="col-md-8">
		   	 <h3 class="m_3">Testimonials</h3>
		   	 	<ul class="about_right">
		   	 		<li class="test_img">
		   	 			<img src="img/s16.jpg" class="img-responsive" alt="">		   	 		</li>
		   	 		<li class="test_desc">
		   	 			<h4><a href="#">About our wedding collection...</a></h4>
		   	 			<p>
“Bridal” purely a female showroom is backed by true passion of serving the creative world of Indian female costumes.<br>
Dulha collection works as a one-stop offering a variety of products from designer kurtas and suave sherwanies to the elegant accessories which will make you stand out.

.<br>&nbsp;</p>
		   	 		</li>
		   	 		<div class="clearfix"> </div>
		   	 	</ul>
	      </div>
		   <div class="clearfix"> </div>
      </div>
	</div><br><br>
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
	</div><!----//End-img-cursual---->
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
			<h4>our site </h4>
			<ul class="list-unstyled f_list">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="404.php">Services</a></li>
				<li><a href="portfolio.php">Collection</a></li>
				<li><a href="view-order.php">View Orders </a></li>
				
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>Our Users Site </h4>
			<ul class="list-unstyled f_list">
				<?php
				if(!isset($_SESSION['cust_id']))
				{
				?>
					<li><a href="clientlogin.php">Login</a> </li>
					
					<li><a href="Registration.php">Registeration</a> </li>								   
					
				<?php
				}
				else
				{
				?>	
				<li><a href="profile.php">Profile</a> </li>
					
					<li><a href="logout.php">logout</a> </li>								   
					
				<?php
				}
				?>	
			
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="feedback.php">feedback</a></li>
			</ul>
			</li>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4>from the <span>blog</span></h4>
			<div class="blog_list">
				<div class="col-xs-3 f_pic">
					<a href="portfolio.php"><img src="img/s17.png" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-xs-9 f_text">
				<p>We have also a huge collection of bridal jewellery.</p>
					<span>8, April 2015</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-xs-3 f_pic"><a href="portfolio.php"><img src="img/s18.jpg" alt="" class="img-responsive"/></a></div>
				<div class="col-xs-9 f_text">
				<p>We have also a huge collection of Grooms Accesories.</p>
					<span>1, April 2015</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | Design by<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
			
			<li><a href="terms&condition.php"><em><strong>TERMS &amp; CONDITION </strong></em></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>