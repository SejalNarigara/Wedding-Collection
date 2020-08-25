<?php
session_start(); 
if(isset($_SESSION['cust_id']))

	//header("location:clientlogin.php");

$cust_id=$_SESSION['cust_id'];
?>
<?php
include "connection.php";
//$cust_id=1;
?>
<?php		
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
	

?><!--A Design by W3layouts
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
			<h1><a href="index.php"><img src="banner_1.jpeg" width="200"></a></h1>
	  </div>
	  <div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
					<!--<li><a href="clientlogin.php">login</a></li> -->

			<li class="activate"><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="404.php">services</a></li>
			<li><a href="portfolio.php">collection</a></li>
			<li><a href="view-order.php">view orders</a></li>
		

			<!--<li><a href="portfolio.php">Collection</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="portfolio.php">Bride</a></li>
				<li><a href="portfolio.php">Groom</a></li>
			</ul>
			</li>
			 --></li>
		<!--	<li><a href="blog.php">BLOG</a></li> --><!--<li><a href="contact.php">CONTACT</a></li>
			<li><a href="Registration.php">REGISTRATION</a></li>
			<li><a href="feedback.php">feedback</a></li>
			 --><li><a href="">users</a>
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
      <img src="images/color_stripe.jpg" class="img-responsive" class="c_stripe"></div>
</div>

</div>
 
     <div id="fwslider"><!-- start slider -->
       <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="img/s1.jpg">
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                       
                        <!-- /Text title -->
                        <!-- Text description -->
                       
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
			
            <!-- /Duplicate to create more slides -->
			
			<div class="slide">
                <img src="img/s2.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                    </div>
                </div>
            </div>
			
			
            <div class="slide">
                <img src="img/s3.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                    </div>
                </div>
            </div>
			
			<div class="slide">
                <img src="img/s4.jpg">
              <div class="slide_content">
                  <div class="slide_content_wrap"></div>
                </div>
            </div>
            </div>
			
			
            <div class="slide">
                <img src="img/s5.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                    </div>
                </div>
            </div>
			
			  <div class="slide">
                <img src="img/s6.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                    </div>
                </div>
            </div>
			
			 <div class="slide">
                <img src="img/s7.jpg">
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                    </div>
                </div>
            </div>
			
			
			
			
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div><!--/slider -->
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid">
		<div class="top_grid"><!-- start top_grid -->
				<div class="col-md-9 span1_of_1">
						<h2>some of our top services</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
				</div>
				<div class="col-md-3 span1_of_2">
					<a class="btn btn1" href="single-page.php">Read more</a>
				</div>
				<div class="clearfix"></div>
		</div>
		<div class="span_of_4"><!-- start span_of_4 -->
			<!--<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<div class="num">01</div>
					<h3>recent collection</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<div class="read_more">
						<a class="btn btn-2 active" href="single-page.php">Read more</a>
					</div>
				</div>
			</div> -->
			 <?php
					 include("connection.php");
					$result=mysql_query("select * from tbl_cat");
					while($rows=mysql_fetch_array($result))
					{
			 ?>
			<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<div class="num"><?php echo $rows['cat_id'];?></div>
					<h3><?php echo $rows['cat_name'];?></h3>
					<p><?php echo $rows['cat_desc'];?></p>
					<div class="read_more">
						<a class="btn  btn-2b" href="portfolio.php?colltype=<?php echo $rows['cat_name'];?>">Collection </a>
					</div>	
				</div>	
			</div>
			<?php }?>
			
			<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<div class="num">03</div>
					<h3>ALL</h3>
					<p>all products</p>
					<div class="read_more">
						<a class="btn btn-2b" href="single-page.php">read more</a>
					</div>		
				</div>
			</div> 
			<!--<div class="col-md-3 span1_of_4">
				<div class="span4_of_list">
					<div class="num">04</div>
					<h3> dummy text</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<div class="read_more">
						<a class="btn btn-2b" href="single-page.php">read more</a>
					</div>						
				</div>
			</div> -->
			<div class="clearfix"></div>
		</div><!-- end span_of_4 -->
	</div>
</div>
</div>
<div class="main1_bg"><!-- start main1 -->
<div class="container">
	<div class="main slider_text texxt-center">
		<h4>Our Collection</h4>
		<p>your fashion is our passion.</p>
    </div>
</div>
<!-- start banner -->
<div id="bannerBg">
<div id="containingDiv">
            <div id="allinone_carousel_charming">
            	<div class="myloader"></div>
                <!-- CONTENT -->
                <ul class="allinone_carousel_list">
               		<li><img src="img/s8.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="img/s9.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="img/s10.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="img/s11.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="img/s12.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="img/s13.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="img/s14.jpg" alt="" class="img-responsive"/></li>
                    <li><img src="img/s15.jpg" alt="" class="img-responsive"/></li>
                      
                </ul>    
          </div>
</div>
</div>
 <!-- end banner -->
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
	</div><!----//End-img-cursual---->
	</div>
</div>
</div>
<div class="footer_bg"><!-- start footer -->
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
	  <div class="col-md-4 footer1_of_3">
        <div class="f_logo"> <a href="index.php">
          <h2>Wedding Collection</h2>
          </a><br>
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
			
			<li><a href="contact.php">Contact</a></li>
			<li><a href="feedback.php">Feedback</a></li>
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
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved </span></p>
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