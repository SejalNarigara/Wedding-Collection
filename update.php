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
		<h3 class="style pull-left">update profile</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">update</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>

<form name="frmInsert" action="procupdate.php" method="post">
<!--<h1 style="color:#ee4699" align="center">Update Record</h1> -->
<table width="380" align="center" style="font-size:20px;">

<?php
	include("connection.php");
		$id = $_SESSION['cust_id'];
		$data = mysql_query("SELECT * FROM registation WHERE email='$id'"); 
		while($row = mysql_fetch_array($data))
		{ ?>
		
	<tr>
		<td width="133"> First Name<font color="#FF0000">*</font></td>
		<td width="40">:</td>
		<td width="191"><input type="text" name="txtName" value="<?php if(isset($_GET['fname'])){echo $_GET['fname'];}else{echo $row['fname'];}?>"/></td>
	</tr>

	<tr>
		<td width="133"> Last Name<font color="#FF0000">*</font></td>
		<td width="40">:</td>
		<td width="191"><input type="text" name="txtLname" value="<?php if(isset($_GET['lname'])){echo $_GET['lname'];}else{echo $row['lname'];}?>"/></td>
	</tr>

	<tr>
		<td>Address</td>
		<td>:</td>
		<td><textarea name="txtAddr" cols="18" rows="3"><?php if(isset($_GET['address'])){echo $_GET['address'];}else{echo $row['address'];}?></textarea></td>
	</tr>

	<tr>
		<td>Country<font color="#FF0000">*</font></td>
		<td>:</td>
		<td><input type="text" name="country" value="<?php if(isset($_GET['country'])){echo $_GET['country'];}else{echo $row['country'];}?>"/></td>
	</tr> 
	

	<tr>
		<td>State<font color="#FF0000">*</font></td>
		<td>:</td>
		<td><input type="text" name="state" value="<?php if(isset($_GET['state'])){echo $_GET['state'];}else{echo $row['state'];}?>"/></td>
	</tr> 
	

	<tr>
		<td>City<font color="#FF0000">*</font></td>
		<td>:</td>
		<td><input type="text" name="city" value="<?php if(isset($_GET['city'])){echo $_GET['city'];}else{echo $row['city'];}?>"/></td>
	</tr> 
	
	
	<tr>
		<td>Contact No.</td>
		<td>:</td>
		<td><input type="text" name="txtPhno" size="20" maxlength="10" value="<?php if(isset($_GET['contact'])){echo $_GET['contact'];}else{echo $row['contact'];}?>"/></td>
	</tr>
	
	<tr>
		<td>Email Id<font color="#FF0000">*</font></td>
		<td>:</td>
		<td><input type="text" name="txtEmail" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}else{echo $row['email'];}?>"/></td>
	</tr>

	
	<?php } ?>
	<tr>
		
		<td colspan="2" align="left" style="padding-top:20px;"><!--<input type="submit" name="btnUpdate" value="Update" /> -->
	    <center><input type="submit" class="register" name="btnUpdate" value="Update" /></center></td>
		<td></td>
	</tr>
</table>
</form>
</center>


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
