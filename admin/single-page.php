<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>wedding collection | change password</title>
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
			<h1><a href="index.php">wedding collection</a></h1>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="404.php">services</a></li>
			<li><a href="portfolio.php">PORTFOLIO</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="portfolio.php">Portfolio1</a></li>
				<li><a href="portfolio.php">Portfolio2</a></li>
				<li><a href="portfolio.php">Portfolio3</a></li>
			</ul>
			</li>
			<li class="activate"><a href="blog.php">BLOG</a></li>
			<li><a href="contact.php">CONTACT</a></li>
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
		<h3 class="style pull-left">change password</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">change password </li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="details">
			<h2> 
			
<?php
session_start();
include("connection.php");

	if(isset($_POST['btnSubmit']))
	{
		$currentpass=$_POST['txtcurrentpass'];
		$newpass=$_POST['txtnewpass'];
		$confirmpass=$_POST['txtconfirmpass'];		
		
	    
		if(empty($currentpass) || empty($newpass) || empty($confirmpass))
		{
			echo "<h2 style='color:red'>";
			echo"filed must be required....!!!!!";
		}
		elseif($newpass==$confirmpass)
		{
			echo "<h2 style='color:red'>";
			echo "new password and confirm password match!";
			
			$sql="update admin set password='$newpass' where password='$currentpass'";
			//echo $sql;
			mysql_query($sql);
			header("location: admin_home.php?res=1&no=1");
		}
		else
		{
			echo "<h2 style='color:red'>";
			echo "do not match password....!!!";
		}

	}
?>
<form action="" method="post">
<table>
	<tr>
		<td>Current Password :</td>
		<td><input type="text" name="txtcurrentpass" ></td>
	</tr>
	
	<tr>
		<td>New Password :</td>
        <td><input type="password" name="txtnewpass" ></td>
	</tr>
	
	<tr>
		<td>Confirm Password:</td>
		<td><input type="password" name="txtconfirmpass" ></td>
	</tr>
	
 	<tr>
		<td colspan="2" align="center"><input type="submit" name="btnSubmit" value="update"></td>
	</tr>
</table>
</form>
			
			&nbsp;</h2>
		</div>
</div>
</div>
<div class="footer_bg"><!-- start footer -->
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