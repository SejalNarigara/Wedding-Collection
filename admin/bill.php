<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>The Fooseshoes Website Template | Contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--- start-mmmenu-script---->
<script src="js/jquery.min.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script language="javascript" type="text/javascript" src="contactval.js">
</script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body onLoad="document.contact.name.focus();">
<!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>
		 <div class="log_reg">
				<ul>
					<li><a href="login.php"><font color="#33CC99">Login</font></a> </li>
					<span class="log"> or </span>
					<li><a href="Registration.php"><font color="#33CC99">Register</font></a> </li>								   
					<div class="clear"></div>
				</ul>
		</div>	
		<div class="web_search">
		 	<form>
				<input type="text" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}">
				<input type="submit" value=" " />
			</form>
	    </div>						
		<div class="clear"></div>
	</div>	
</div>
</div>
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
		<div id="smart_nav">
			<a class="navicon" href="#menu-left"> </a>
		</div>
		<nav id="menu-left">
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
		</nav>
	<div class="header_right">
		<ul>
			<li><a href="#"><i  class="art"></i><span class="color1">30</span></a></li>
			<li><a href="#"><i  class="cart"></i><span>0</span></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
</div>
<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style"><font color="#33CC99">Contact Us </font></h2>
</div>
</div>
</div>
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

		<div id="header">INVOICE</div>
		
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
              <img src="banner_1.jpeg" alt="logo" width="200" height="50"   id="image" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <div id="customer-title"><?php echo $fullname ?></div>

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
		      <td class="item-name"><div class="delete-wpr"><?php echo $prod_name ?></div></td>
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
		      <td class="total-value"><div id="total">Rs. <?php //echo $discount ?></div></td>
		  </tr>
		  <!--tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>

		      <td class="total-value balance"><div class="due">Rs<?php //echo $total-$discount ?></textarea></td>
		  </tr-->
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Total </td>
		      <td class="total-value balance"><div class="due">Rs.<?php //echo $total-$discount ?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
          
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
	  </div>
	
	</div>
	
</body>

</html>