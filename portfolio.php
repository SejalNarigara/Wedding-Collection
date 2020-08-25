<?php
include("connection.php");

//session_start(); 
		
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

<?php
require("connection.php");
function simage($id)
	{
		$file_folder = 'admin/upload_img/';
		$image=$file_folder.$id;
		if(file_exists($image))
			{
				$fpath=$image;
			}
		else
			{
				$fpath="admin/upload_img/no_preview.jpg";
			}
		echo "<img class='img-responsive' src='$fpath' >";
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
<title>Wedding Collection | Portfolio </title>
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
<script src="js/menu.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>
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
			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="404.php">services</a></li>
			<li><a href="portfolio.php">collection</a>
									<li><a href="view-order.php">view orders</a></li>

			<!--<li><a href="portfolio.php">Collection</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="portfolio.php">Bride</a></li>
				<li><a href="portfolio.php">Groom</a></li>
			</ul>
			</li> -->
			</li>
<!--			<li><a href="blog.php">BLOG</a></li>
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
          
		
		
			
			
		</nav>
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
		<h3 class="style pull-left">our collection </h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">collection</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="portfolio_main">
						<ul id="filters" class="clearfix">
						<?php 
							if(isset($_GET['id']))
								{
									$id=$_GET['id'];
								?>
									<li>
									<a href="portfolio.php"><button class="btn btn-danger" type="button">Back to Category</button></a></li>
									<li><a href="portfolio.php?id=<?php echo $id;?>"><span class="filter active" data-filter="app card icon web">All</span></a></li>
								
								 <?php
								}
								else
								{
							
							?>
							<li>
								<a href="portfolio.php"><span class="filter active" data-filter="app card icon web">All</span></a>
							</li>
							<?php 
							}
								if(!isset($_GET['id']))
								{
									$sql="select * from tbl_cat";
									$result=mysql_query($sql);
									while($rows=mysql_fetch_array($result))
									{
									?>
							<li>
								<span class="filter" data-filter="<?php echo $rows['cat_name'];?>"><?php echo $rows['cat_name'];?></span>
							</li>
							 <?php 
									 }
								}
								else
								{
								$scid=$_GET['id'];
								$sql="select * from tbl_product where sub_cat_id=$scid";
								$result=mysql_query($sql);
								while($rows=mysql_fetch_array($result))
								{
							 ?>
								<li>
								<span class="filter" data-filter="<?php echo $rows['prod_name'];?>"><?php echo $rows['prod_name'];?></span>
								</li>
								<?php 
								}
								}
								
								?>
							<!--<li>
								<span class="filter" data-filter="card ">Card</span>
							</li>
							<li>
								<span class="filter" data-filter="icon app card ">Icon</span>
							</li>
							<li>
								<span class="filter" data-filter="web card icon">Web</span>
							</li> -->
						</ul>
						<div id="portfoliolist">
							<!--<div class="portfolio logo1" data-cat="logo">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s1.jpg"><img src="images/s1.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Logo</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio app" data-cat="app">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s2.jpg"><img src="images/s2.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">APP</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio web" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s3.jpg"><img src="images/s3.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Web design</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s4.jpg"><img src="images/s4.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio app" data-cat="app">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s5.jpg"><img src="images/s5.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">APP</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s6.jpg"><img src="images/s6.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s7.jpg"><img src="images/s7.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio logo1" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s8.jpg"><img src="images/s8.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Logo</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio app" data-cat="app">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s2.jpg"><img src="images/s2.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">APP</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<!--<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s5.jpg"><img src="images/s5.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Business card</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							
							
	<?php 
		if(!isset($_GET['id']))						
			{									

				$sqlsubcatid="select * from tbl_sub_cat";
				$resultsubcatid=mysql_query($sqlsubcatid);
				while($rowsubcat=mysql_fetch_array($resultsubcatid))
				{
					$subcatid=$rowsubcat['sub_cat_id'];			
					$sqlproduct="select * from tbl_product where sub_cat_id=$subcatid limit 1";
					//echo $sqlproduct;
					//return;
					$resultproduct=mysql_query($sqlproduct);
					$rows2=mysql_fetch_array($resultproduct);
					$cid=$rows2['cat_id'];
					//echo $cid;
					//return;
					if($cid != "")
					{
					$sqlcat="select * from tbl_cat where cat_id=$cid";
					//echo $sqlcat;
					//return;
					$result=mysql_query($sqlcat);
					
					$rowcat=mysql_fetch_array($result);	
						
				    }						
								
	?>
							<div class="portfolio <?php echo $rowcat['cat_name']?>" data-cat="icon">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
											<a rel="group" title="" href="admin/upload_img/<?php echo $rows2['image'];?>"><img src="admin/upload_img/<?php echo $rows2['image'];?>" height="300" width="300"><?php //simage($rows2['image']);?></a>
											<!--<img src="images/s1.jpg" alt=""class="img-responsive"/> -->
									</div>
									<div class="label">
										<div class="label-text">
											<!--<span class="text-category"><?php echo $rowcat['cat_name']?></span> -->
											<span class="text-category"><a href="portfolio.php?id=<?php echo $rowsubcat['sub_cat_id'] ?>"><?php echo $rowsubcat['sub_cat_name']?></a></span>
										</div>
										<div class="label-bg"></div>
									</div>
									
								</div>
								
							</div>
							<?php 
					}
							
				}

							
							else
							{
								$catid=$_GET['id'];
								$sqlproduct="select  * from tbl_product where sub_cat_id=$catid";
								//echo $sqlsubcat;
								//return;
								$resultproduct=mysql_query($sqlproduct);
								while($rowproduct=mysql_fetch_array($resultproduct))
									{
									
							?>
							<div class="portfolio <?php echo $rowproduct['prod_name']?>" data-cat="icon">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
											<a rel="group" title="" href="admin/upload_img/<?php echo $rowproduct['image'];?>"><img src="admin/upload_img/<?php echo $rowproduct['image'];?>" height="300" width="300"><?php //simage($rowproduct['image']);?></a>
											<!--<img src="images/s1.jpg" alt=""class="img-responsive"/> -->
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category"><?php echo $rowproduct['prod_name']?> <a href="single-page.php?prod_id=<?php echo $rowproduct['prod_id']; ?>">Details</a></span>
										</div>
										<div class="label-bg"></div>
									</div>
									
								</div>
								<h5 align="center">
								<a href="portfolio.php?id=<?php echo $rowproduct['sub_cat_id']; ?>"><?php echo $rowsubcat['sub_cat_name'];?></a>
								</h5>
							</div>
							<?php
					
									}
							} 
							
				
							?>
							<!--<div class="portfolio logo1" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s5.jpg"><img src="images/s5.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">App</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div> -->
							<div class="clearfix"></div>
						</div>
			<!--<ul class="pagination">
			  <li><a href="#">Prev</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li class="cau_hide"><a href="#">4</a></li>
			  <li class="cau_hide"><a href="#">5</a></li>
			  <li class="cau_hide"><a href="#">6</a></li>
			  <li class="cau_hide"><a href="#">7</a></li>
			  <li><a href="#">Next</a></li>
			</ul> -->
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
