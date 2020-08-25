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
include("connection.php");

	session_start();
	if(isset($_SESSION['cust_id']))
	{
		
		$cust_id=$_SESSION['cust_id'];

	}
?>


<?php
include("connection.php");


if(isset($_REQUEST['submit']))
{

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$add=$_POST['address'];
$c=$_POST['contry'];
$c_state=$_POST['state'];
$cty=$_POST['city'];

$cont=$_POST['contact'];
$e_mail=$_POST['email'];
$password=$_POST['pass'];


$sql="insert into registation(fname,lname,address,contry,state,city,contact,email,pass) values ('$firstname','$lastname','$add','$c','$c_state','$cty','$cont','$e_mail','$password')";
//echo $sql;
mysql_query($sql);


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
<title>Wedding Collection| Registration</title>
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
<script src="js/csc.js"></script>
<!--<script src="regisration.js"></script> -->
</head>

<body onLoad="document.regitration.fname.focus();">
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
			</li>
 -->			</li>
<!--			<li><a href="blog.php">BLOG</a></li>
 -->			<!--<li><a href="contact.php">CONTACT</a></li>
			<li  class="activate"><a href="registration.php">REGISTRATION</a></li>
			<li><a href="feedback.php">feedback</a></li>
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
	<div class="grid_12">
       <img src="images/color_stripe.jpg" class="img-responsive" class="c_stripe">
    </div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">Registration</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">contact</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="contact">
	  <div class="contact_main">
	    <div class="col-md-4 company_ad">
				    <h2>find Address :</h2>
      				<address>
						 <p>500 Lorem Ipsum Dolor Sit,</p>
						 <p>22-56-2-9 Sit Amet, Lorem,</p>
						 <p>USA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 000 00 00 0</p>
						
				 	 	<p>Email: <a href="mailto:info@mycompany.com">info(at)mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   	</address>
		</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  
				  	<h2>Registration</h2>
			<script type="text/javascript">
			
				function formValidation()
				{
					var fname=document.registration.fname;
					var lname=document.registration.lname;
					var address=document.registration.address;
					var country=document.registration.country;
					var state=document.registration.state;
					var city=document.registration.city;
					var contact=document.registration.contact;	
					var email=document.registration.email;	
					var pass=document.registration.pass;				
					if(allLetter(fname))
					{
						if(allLetter1(lname))
						{
							if(allLetter2(address))
							{
									if(allLetter3(country))
									{
										if(allLetter4(state))
										{
											//alert(hhhh);
											if(allLetter5(city))
											{
												if(allLetter6(contact))
												{
													if(allLetter7(email))
													{
														if(allLetter8(pass))
														{
															return true;
														}
													}
												}
											}
										}
									}
								}
							}
						}
					return false;
				}
				function allLetter(fname)
					{ 
						var letters = /^[A-Za-z ]+$/;
						if(fname.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Fname must have alphabet characters only');
							fname.focus();
							return false;
						}
					}
					
					function allLetter1(lname)
					{ 
						var letters = /^[A-Za-z ]+$/;
						if(lname.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Lname must have alphabet characters only');
							lname.focus();
							return false;
						}
					}
					
					function allLetter2(address)
					{ 
						var letters = /^[A-Za-z ]+$/;
						if(address.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Address must have alphabet characters only');
							address.focus();
							return false;
						}
					}
					
					function allLetter3(country)
						{
							if(country.value == "Default")
							{
						
								alert('Select your country from the list');
								country.focus();
								return false;
							}
							else
							{
								return true;
							}
						}
					
					
					function allLetter4(state)
						{
							if(state.value == "Default")
							{
								//alert("hiii");
								alert('Select your state from the list');
								state.focus();
								return false;
							}
							else
							{
								return true;
							}
						}
					
					function allLetter5(city)
						{
							if(city.value == "Default")
							{
								alert('Select your city from the list');
								city.focus();
								return false;
							}
							else
							{
								return true;
							}
						}
					
					function allLetter6(contact)
					{ 
						var letters = /^[0-9]+$/;
						if(contact.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Contact must have digits only');
							contact.focus();
							return false;
						}
					}
					
					function allLetter7(email)
					{ 
						var letters =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
						if(email.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Email id insert properly');
							email.focus();
							return false;
						}
					}
					
					function allLetter8(pass)
					{ 
						var letters = /^[0-9]+$/;
						if(pass.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Password must have Digits only');
							pass.focus();
							return false;
						}
					}
	

	
			 </script>

			
					
						<form method="post" action="#" name="registration" onSubmit="return formValidation(); " >
						

						    <input type="text" name="fname" value="First Name (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'fname';}">
							<input type="text" name="lname" value="Last Name (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'lname';}">
							<input type="text" name="address" value="Address (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'address';}">
							<select name="contry" onChange="getState(this.value,'statediv');" style="">
							<option value="Default">--select country----</option>
							<?php
							$query="select * from contry";
							$res=mysql_query($query);
							while($r=mysql_fetch_array($res))
							{
							?>
								<option value="<?php echo $r[1]?>"><?php echo $r[1]?></option>
							<?php
							}
							?>					   
						   </select>
						   
						   <select name="state" onChange="getState(this.value,'statediv');">
							<option value="Default">--select State----</option>
							<?php
							$query="select * from state";
							$res=mysql_query($query);
							while($r1=mysql_fetch_array($res))
							{
							?>
								<option value="<?php echo $r1['sname']?>"><?php echo $r1['sname']?></option>
							<?php
							}
							?>					   
						   </select>
						   <!--<div id="statediv">
						   <select name="state">
						   	<option value="Default"> Select State</option>
						   </select>
						   </div> -->

							<select name="city" onChange="getState(this.value,'statediv');">
							<option value="Default">--select city----</option>
							<?php
							$query="select * from city";
							$res=mysql_query($query);
							while($row=mysql_fetch_array($res))
							{
							?>
								<option value="<?php echo $row['cityname']?>"><?php echo $row['cityname']?></option>
							<?php
							}
							?>					   
						   </select>
							<!--<div id="citydiv">
						   <select name="city">
						   	<option value="Default"> Select city</option>
						   </select>
						   </div> -->
						   
						    <!--input type="text" name="city" value="City (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'city';}"-->
						   
						   
						    <!--input type="text" name="state" value="State (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'state';}"-->
						   
						   
						    <input type="text" name="contact" maxlength="10" value="Contact (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'contact';}">
							<input type="text" name="email"   value="Email (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'email';}">
							<input type="text" name="pass"   value="Password (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'pass';}">
							
							<span><input type="submit" name="submit" value="submit us"></span>
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

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$add=$_POST['address'];
$cntry=$_POST['contry'];

$c_state=$_POST['state'];
$cty=$_POST['city'];
$cont=$_POST['contact'];
$e_mail=$_POST['email'];
$password=$_POST['pass'];


$sql="insert into tbl_customer(fname,lname,address,contry,state,city,contact,email,pass) value ('$firstname','$lastname','$add','$cntry','$c_state','$cty','$cont','$e_mail','$password')";


mysql_query($sql);
header("location:registration.php");

}
?>

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
					
					<li><a href="Registration.php">Registration</a> </li>								   
					
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