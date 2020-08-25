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
			<h1><a href="index.php"><img src="banner_1.jpeg" width="200"</a></h1>
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
		  <img src="cart.jpg" alt="cart.php" width="30" height="30" style="float:right">
<?php
		  include "connection.php";
		  
		  $query="select count(*) as cnt from tbl_temp where cust_id=$cust_id";
		  $res=mysql_query($query);
		  $row=mysql_fetch_array($res);
		  $cart_cnt=$row['cnt'];
		  ?>
          <li style="float:right"><a href="cart.php">Items(<?php echo  $cart_cnt; ?>)</a></li>
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
		<h3 class="style pull-left" style="padding-bottom:10">bill</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Bill</li>		</ol>
		<div class="clearfix"></div>
	</div>
</div>




<!--?php
include ("connection.php");

session_start();
if(!isset($_session['cust_id']))
{
	header("location:index.php");
}

$cust_id=$_SESSION['cust_id'];

?>
 -->
<!DOCTYPE HTML><!-- start header -->
<!-- start header_btm -->
<div class="wrap">
<div class="header_btm">
		<div class="menu">
			<ul>
				<li ><a href="index.php" style="font-weight:bold"><b>HOME</b></a></li>
				<li><a href="products.php" style="font-weight:bold">PRODUCTS</a></li>
				<li><a href="about.php" style="font-weight:bold">ABOUT</a></li>
				<li><a href="blog.php" style="font-weight:bold">BLOG</a></li>
				<li class="active"><a href="contact.php" style="font-weight:bold">CONTACT</a></li>
				<!--li><a href="Registration.php" style="font-weight:bold">REGISTRATION</a></li-->
				<li><a href="feedback.php" style="font-weight:bold">FEEDBACK</a></li>
				<div class="clear"></div>
			</ul>

		</div>
	<nav id="menu-left"></nav>
	<div class="header_right"></div>
	<div class="clear"></div>
</div>
</div>
<!-- start top_bg -->
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
<div class="contact">
<?php
include "connection.php";
$order_no=$_REQUEST['order_no'];
$query="select * from shipping where order_no=$order_no";
$res=mysql_query($query);

while ($row=mysql_fetch_array($res))
{
//$rows=mysql_fetch_array($res);

	//	city						order_status	order_accept_date
$fullname=$row['fullname'];
$address=$row['address'];
$city=$row['city'];
$email=$row['email'];
$mobile=$row['mobile'];
$pincode=$row['pincode'];
$order_date=$row['order_date'];
//$city=$row['city'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Invoice</title>
	
	<link rel='stylesheet' type='text/css' href="css/style2.css" />
	<link rel='stylesheet' type='text/css' href="css/print2.css" />
	
</head>

<body>

	<div id="page-wrap">

		<div id="header" style="padding-bottom:25px">INVOICE</div>
		
		<div id="identity">
			
            <div id="address">Name:<?php echo $fullname ?><br />Address:&nbsp;<?php echo $address ?><br />
Phone: <?php echo $mobile?> </div>

            <div id="logo">

              <div id="logoctr">
                <div id="change-logo" title="Change logo"></div>
                <div id="save-logo" title="Save changes"></div>
                
                <div id="delete-logo" title="Delete logo"></div>
                <div id="cancel-logo" title="Cancel changes"></div>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img src="banner_1.jpeg" alt="logo" width="300" height="100"   id="image" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <div id="customer-title"><?php echo $fullname ?>
			</div>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice No:</td>
                    <td><div><?php echo $order_no ?></div></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><div id="date"><?php echo $order_date ?></div></td>
                </tr>
  
  <?php

  $query="select sum(quantity_order*order_price) as total from tbl_order_detail where order_no=$order_no";
  $res=mysql_query($query);
  $row=mysql_fetch_array($res);

  $total=$row['total'];
  
  ?>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">Rs.<?php echo $total ?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Sr.No</th>
		      <th>Item Name</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		 
         <?php
		 $query="select * from tbl_order_detail where order_no=$order_no";
		 $res=mysql_query($query);
		$totalrecord=mysql_num_rows($res);
			
		 $i=0;
		 while($row=mysql_fetch_array($res))
		 {
			 	$prod_id=$row['prod_id'];
				$query="select prod_name from tbl_product where prod_id=$prod_id";
				//echo $query;
		//return
				$prodres=mysql_query($query);
				$prodrow=mysql_fetch_array($prodres);
				$prod_name=$prodrow['prod_name'];
				$i++;
				
		 ?> 
		  <tr class="item-row">
          		<td><?php echo $i++; ?></td>
		      <td class="item-name"><div class="delete-wpr"><?php echo $prod_name; ?>
			  </div></td>
		      <!--td class="description"><textarea>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</textarea></td-->
		      <td><div class="cost">Rs.<?php echo $row['order_price'];?></div></td>
		      <td><div class="qty"><?php echo $row['quantity_order'] ?></div></td>
              <?php
			  
			  $value=$row['order_price'] * $row['quantity_order'];
			  
			  ?>
		      <td><span class="price">Rs.<?php echo $value  ?></span></td>
		  </tr>
          <?php
		  }
		  
		  $printExtraline=10-$totalrecord;
		  for($j=1;$j<$printExtraline;$j++)
		  {
			  echo "<tr  class=\"item-row\"><td colspan='5'>&nbsp;</td></tr>";
//echo "<td class=\"item-name\"><div class=\"delete-wpr\"></div></td>";
		  }
		  ?>
		    <?php
				$q="SELECT * FROM discount WHERE min_amount <= $total AND max_amount > $total";
				//echo $q;
				//return;
				$res=mysql_query($q);
				$row=mysql_fetch_array($res);
				$dis=$row['discount'];
				//echo $dis;
				//return;
				//$total=$tempprice*$tempqty;
				
				if($dis != 0)
					$discount=$total/$dis;
					//echo $discount;
					//return;
					
				
				else
				
				$discount=0;
				$maintotal=$total-$discount;
				//echo $maindiscount;
				
         ?>
        
          
          
		  <!--tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
		      <td><textarea class="cost">$75.00</textarea></td>
		      <td><textarea class="qty">3</textarea></td>
		      <td><span class="price">$225.00</span></td>
		  </tr-->
		  
		  <tr id="hiderow">
		    <td colspan="5"></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">Rs.<?php echo $total ?></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Discount</td>
		      <td class="total-value"><div id="total">Rs. <?php echo $discount ?></div></td>
		  </tr>
		  <!--tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>

		      <td class="total-value balance"><div class="due">Rs<?php //echo $total-$discount ?></textarea></td>
		  </tr-->
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Total </td>
		      <td class="total-value balance"><div class="due">Rs.<?php echo $maintotal ?></div></td>
		  </tr>
		<tr><td colspan="5" align="center">
		<input type="button" name="btn" value="&nbsp;&nbsp;print&nbsp;&nbsp; " onClick="window.print()"/>
		</td></tr>
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
          
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
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
</div>	
</body>

</html>