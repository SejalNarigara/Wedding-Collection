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
			<h1><a href="adminhome.php"><img src="banner_1.jpeg" width="200"></a></h1>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
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
 -->			<!--<li><a href="contact.php">CONTACT</a></li>
			<li><a href="viewregistration.php">REGISTRATION</a></li>
			<li><a href="viewfeedback.php">feedback</a></li> -->
			<li class="activate"><a href="password.php">change password</a></li>
			<li><a href="logout.php">logout</a></li>
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
<style>
.hii{
background:#ddd;
color:black;
width:500px;
border-radius:5px;
}
.hii tr td{
padding:10px;
}

.hii tr td input[type=submit]{
padding:10px;
border:none;
background:black;
color:white;
border-radius:5px;
}
.hii tr td input[type=submit]:hover{

background:white;
color:black;
}

.hii tr td input[type=text],.hii tr td input[type=password]{
padding:3px;
border-radius:5px;
}
.hii tr td input[type=text]:hover,.hii tr td input[type=password]:hover{
border:2px solid black;
}
</style>
<form action="" method="post">
<center>
<h2 style="background:black;color:white; padding:10px; text-align:center; width:500px;">Change your password here...</h2>
<table class="hii">
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
		<td colspan="2" align="right"><input type="submit" name="btnSubmit" value="update"></td>
	</tr>
</table>
</center>
</form>
			</h2>
	</div>
</div>
<p>&nbsp;</p>
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