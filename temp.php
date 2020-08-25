<?php
	session_start();
	if(!isset($_SESSION['cust_id']))
	{
		header("location:clientlogin.php");
	}
	if(isset($_SESSION['cust_id']))
	{
		
		$cust_id=$_SESSION['cust_id'];

	}
?>


<?php
include "connection.php";

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
<title>Wedding Collection | Contact </title>
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
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="banner_1.jpeg"</a></h1>
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
			<li><a href="registration.php">REGISTRATION</a></li>
			<li  class="activate"><a href="feedback.php">feedback</a></li>
			 -->
			 
			 <li><a href="">users</a>
		    <ul class="sub-menu list-unstyled">
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
			
			 
			 
		</ul>
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
		<h3 class="style pull-left">Your Order Detail</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
			<li  class="activate"><a href="feedback.php">Your Order Detail</a></li>
		</ol>
		<div class="clearfix"></div>
  </div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="contact">
	  <div class="contact_main">
	    <div class="col-md-8">
		<table border="1" width="716" align="center">
		
        <tr class="cart_title">
        			<td align="center">Sr.No</td>
                	<td align="center">Product Look</td>
                	<td align="center">Product Name</td>
                    <td align="center">Unit price</td>
                    <td align="center">Qty</td>
                    <td align="center">Total</td>
        </tr>
		
      	<?php
		$query="select * from tbl_temp where cust_id=$cust_id";
		$res=mysql_query($query);
		$i=0;
		$cart_total=0;
		while($row=mysql_fetch_array($res))
		{
			$i++;
			$prod_id=$row['prod_id'];
			
			$query="select * from tbl_product where prod_id=$prod_id";
			$nameres=mysql_query($query);
			$namerow=mysql_fetch_array($nameres);
			$prod_name=$namerow['prod_name'];
	
			$img=$namerow['image'];
			$path='admin/upload_img/'.$img;
			//$cart_total=0;			
							
			echo "<tr>";
			echo "<td align='center'>".$i."</td>";
			echo "<td>";
			
			echo "<img src=".$path." width=\"70\" height=\"70\" border=\"0\" class=\"cart_thumb\" />";
			
			echo "</td>";
			echo "<td>".$prod_name."</td>";
			echo "<td align='center'>".$row['price']."</td>";
			echo "<td align='center'>".$row['qty']."</td>";
			echo "<td align='center'>".$row['qty']*$row['price']."</td>";
			echo "<tr>";
			
			$cart_total=$cart_total+($row['qty']*$row['price']);
		}
		
		?>
        <tr><td colspan="6" align="right">Total Order Value:<?php echo $cart_total; ?></td></tr>
</table> <br><br>
          <div class="contact-form">
            <h2>Shipping Address</h2>
            <form method="post" action="">
              <input type="text" name="name" value="Name (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'name';}">
              <input type="text" name="email" value="Email (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'email';}">
              <input type="text" name="mobile" value="Mobile (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'mobile';}">
              <input type="text" name="message" value="Message (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'message';}">
              <span>
            <input type="submit" name="submit" value="submit us"></span>              
            </form>
          </div>
        </div>
	    <div class="clearfix"></div>		
	  </div>
	</div>
</div>
</div>

<?php
include("connection.php");
if(isset($_REQUEST['submit']))
{
$nm=$_POST['name'];
$e_mail=$_POST['email'];
$mo=$_POST['mobile'];
$msg=$_POST['message'];
$sql="insert into tbl_feedback(name,email,mobile,message) values ('$nm','$e_mail',$mo,'$msg')";
mysql_query($sql);
header("location:feedback.php");
}
?>
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