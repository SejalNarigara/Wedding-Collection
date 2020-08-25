<?php
include("connection.php");
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
			<h1><a href="adminhome.php"><img src="banner_1.jpeg" width="200"></a></h1>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
			<!--<li><a href="about.php">ABOUT</a></li> -->
			<li><a href="404.php">services</a></li>
			
			<li ><a href="#">Master</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="admincategory.php">Category</a></li>
				<li><a href="sub_category_index.php">subCategory</a></li>
				<li><a href="adminproduct.php">product</a></li>
			</ul>
			</li>
			</li>
			
			<li ><a href="#">Reports</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="adminreview_order.php">view orders</a></li>
				<li><a href="viewcontactus.php">view contacts</a></li>
				<li><a href="viewregistration.php">view registration</a></li>
				<li><a href="viewfeedback.php">view feedback</a></li>

			</ul>
			</li>
			
			
			<!--<li><a href="blog.php">BLOG</a></li> -->
			<!--<li><a href="viewcontactus.php">CONTACT</a></li>
			<li class="activate"><a href="viewregistration.php">REGISTRATION</a></li>
			<li><a href="viewfeedback.php">feedback</a></li> -->
			<li><a href="password.php">change password</a></li>
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
		<h3 class="style pull-left">registration</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">registration</li>
	  </ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="contact">
		
		
<body>
<?php
include("connection.php");
?>

<table border="1" style="border:3px solid black;" align="center" class="prod">
<tr>
	<th>customer_id</th>
	<th>fname</th>
	<th>lname</th>
	<th>address</th>
	<th>country</th>
	<th>state</th>
	<th>city</th>
	<th>contact</th>
	<th>email</th>
	<th>pass</th>
	<th>Update</th>
	<th>Delete</th>
</tr>
<?php
$result=mysql_query("select * from registation");
while($rows=mysql_fetch_array($result))
{
	echo '<tr align="center">';
	echo '<td width="100px">'.$rows['cust_id'].'</td>';
	echo '<td width="100px">'.$rows['fname'].'</td>';
	echo '<td width="100px">'.$rows['lname'].'</td>';
	echo '<td width="100px">'.$rows['address'].'</td>';
	echo '<td width="100px">'.$rows['contry'].'</td>';
	echo '<td width="100px">'.$rows['state'].'</td>';

	echo '<td width="100px">'.$rows['city'].'</td>';
	//$q="select sname from state where sid =".$rows['state'];

	//$r2=mysql_query($q);
							
	//echo '<td width="100px">'.$r2[0].'</td>';
	echo '<td width="100px">'.$rows['contact'].'</td>';
	echo '<td width="100px">'.$rows['email'].'</td>';
	echo '<td width="100px">'.$rows['pass'].'</td>';
	echo '<td><a href="registation_update.php?id='.$rows['customer_id'].'"><input type="Button" Value="Update"></a></td>';
	echo '<td><a href="registation_delete.php?id='.$rows['customer_id'].'"><input type="Button" Value="Delete"></a></td>';
	echo '</tr>';
}
?>
</table>
</body></br>
</body>







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
				<li><a href="sub_category_index.php">sub-Category</a></li>
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