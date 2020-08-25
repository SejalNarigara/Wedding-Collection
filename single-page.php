<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<style type="text/css">
.magnify{position:relative;cursor:none}.magnify-large{position:absolute;display:none;width:175px;height:175px;-webkit-box-shadow:0 0 0 7px rgba(255,255,255,0.85),0 0 7px 7px rgba(0,0,0,0.25),inset 0 0 40px 2px rgba(0,0,0,0.25);-moz-box-shadow:0 0 0 7px rgba(255,255,255,0.85),0 0 7px 7px rgba(0,0,0,0.25),inset 0 0 40px 2px rgba(0,0,0,0.25);box-shadow:0 0 0 7px rgba(255,255,255,0.85),0 0 7px 7px rgba(0,0,0,0.25),inset 0 0 40px 2px rgba(0,0,0,0.25);-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%}

</style>
 


<?php
	session_start();
	
	if(isset($_SESSION['cust_id']))
	{
		
		$cust_id=$_SESSION['cust_id'];

	}
	
include "connection.php";


$prod_id=$_REQUEST['prod_id']; 
$query="select * from tbl_product where prod_id=$prod_id";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>wedding collection | Single-page </title>
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
<script src="js/okzoom.js" type="text/javascript"></script>
</head>
<body>
<script>
 
$( document ).ready(function() {
 //alert ('hy');
    $('#example').okzoom({
    width: 250,
    height: 250,
    round:true,
    background: "#fff",
  
    shadow: "0 0 5px #000",
    border: "1px solid #540000"
});
});

  </script>

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
          
					
			
			
		</ul>
		</nav>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="grid_12 " >
       <img src="images/color_stripe.jpg" class="img-responsive" class="c_stripe">
    </div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left"><?php echo $row['prod_name'] ?></h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Single</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
		
		<div class="details">
					
			<?php
				$path='admin/upload_img/'.$row['image'];
			?>
			
			<img id="example" src="<?php echo $path; ?>"  height="500" width="400" alt="" class="img-responsive"/>
			<h6>Hover The Cursor on Image For Zoom...</h6><br> 
			
			<img src="cart.jpg"><a href="temp_insert.php?prod_id=<?php echo $prod_id ?>"> Add To Cart </a>
			<?php
			
			
			?>	
			<p class="para"><?php echo $row['description']; ?></p>
			

			<ul class="comment-list">
			<h2>More Details</h2>
			Price : <?php echo $row['price'];?>
			<br>Size :<?php echo $row['size'];?>
			<br>Color :<?php echo $row['color'];?>
			<br>
			
			 
		  		    	<h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
		  		         <li><img src="images/avatar.png" class="img-responsive" alt="">
		  		           <div class="desc">
		  		        	<p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
		  		           </div>
		  		           <div class="clearfix"></div>
		  		         </li>
		   </ul>
		</div>
</div>
</div>
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>		
			<p class="f_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p>
			<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>company</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">Lorem ipsum dolor</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur pell</a></li>
				<li><a href="#">Mauris dictum</a></li>
				<li><a href="#">Lorem ipsum dolor</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris</a></li>
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>community</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">Lorem ipsum dolor</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur pell</a></li>
				<li><a href="#">Mauris dictum</a></li>
				<li><a href="#">Lorem ipsum dolor</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris</a></li>
			</ul>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4>from the <span>blog</span></h4>
			<div class="blog_list">
				<div class="col-xs-3 f_pic">
					<a href="blog.php"><img src="images/blog_pic1.jpg" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-xs-9 f_text">
					<a href="blog.php"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>26, may 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-xs-3 f_pic">
					<a href="blog.php"><img src="images/blog_pic2.jpg" alt="" class="img-responsive"/></a>
				</div>
				<div class="col-xs-9 f_text">
					<a href="blog.php"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>17, June 2014</span>
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