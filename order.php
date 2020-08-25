<?php
session_start();
if(!isset($_SESSION['cust_id']))
{
	header("location:clientlogin.php");
}
$cust_id=$_SESSION['cust_id'];
//$cust_id=1;
?>
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
if(!isset($_SESSION['cust_id']))
{
	header("location:clientlogin.php");
}
$cust_id=$_SESSION['cust_id'];
//$cust_id=1;
require("connection.php");	

//include "cart_insert.php";

if(isset($_REQUEST['btnSave']))
{
	$name=$_REQUEST['txtName'];
	$address=$_REQUEST['txtaddress'];
	$mobile=$_REQUEST['txtPhno'];
	$email=$_REQUEST['txtEmail'];
	$city=$_REQUEST['txtcity'];
	$pin=$_REQUEST['txtPin'];
$da=date("Y/m/d");

//echo date("Y/m/d");

//return;
	$query="insert into shipping (fullname,address,city,email,mobile,pincode,cust_id,order_date) values('$name','$address','$city','$email','$mobile','$pin',$cust_id,'$da')";
	
	
	$res=mysql_query($query);
	
	//echo "total:".$res;
	
	
	if($res > 0)
	{
		
		$query="select max(order_no) as ord from shipping where cust_id=$cust_id";
		
		//echo "<BR>".$query;
		
		$ordres=mysql_query($query);
		
		$ordrow=mysql_fetch_array($ordres);
		$order_no=$ordrow['ord'];
		
		$query="select * from tbl_temp where cust_id=$cust_id";
		
			//	echo "<BR>".$query;
				
				
		$res123=mysql_query($query);
		
		
		while($row=mysql_fetch_array($res123))
		{
			$prod_id=$row['prod_id'];
			$qty=$row['qty'];
			$price=$row['price'];
			
			$query="insert into tbl_order_detail(cust_id,prod_id,quantity_order,order_price,order_no)";
			$query.="values($cust_id,$prod_id,$qty,$price,$order_no)";
			
			//echo $query;
			
			mysql_query($query);
			
		}
		
		$delquery="delete from tbl_add_to_cart where cust_id=$cust_id";
		mysql_query($delquery);
		
		$delquery="delete from tbl_temp where cust_id=$cust_id";
		mysql_query($delquery);
		
		header("location:order.php");
		//echo "inserted.....";
	}

	
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
			<li class="activate"><a href="portfolio.php">collection</a>
									<li><a href="view-order.php">view orders</a></li>

			<!--<li><a href="portfolio.php">Collection</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="portfolio.php">Bride</a></li>
				<li><a href="portfolio.php">Groom</a></li>
			</ul>
			</li> -->
			</li>
			<!--<li><a href="blog.php">BLOG</a></li> -->
			<!--<li><a href="contact.php">CONTACT</a></li>
			<li><a href="registration.php">REGISTRATION</a></li>
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
		<h3 class="style pull-left">order</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
			<li  class="activate"><a href="feedback.php">order</a></li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><body>
<div id="wrap">
		<div class="header">
       		<div class="logo"><a href="index.php"></a></div>            
        <div id="menu"></div>  
            
            
       </div> 
       
       
       <div class="center_content">
       	<div class="left_content">
		
            <div class="title"></div>
        
        	<div class="feat_prod_box_details">
            
</div> 
<table border="1" width="716">
	<tr>
    	<td>
        	<center><h4><font color="#0066FF">Your Order is submitted successfully.You will receive Order confirmation within short period of time.</font></h4></center>
        </td>
        
    </tr>
</table>


<br /><br />
<br /><br />

<table border="1" width="716">
	<tr>
    	<td>
        	<center><font color="#0066FF">
Your Order details
</font></center>
        </td>
        
    </tr>
</table>


<?php
require("connection.php");
$cust_id=$_SESSION['cust_id'];
$query="select * from shipping where cust_id=".$cust_id. " and order_status='pending' order by order_no desc ";
//echo $query;
//return;
$res1=mysql_query($query);

$i=0;
$totalorder=0;

while($row=mysql_fetch_array($res1))
{
		$i++;
		$order_no=$row['order_no'];
		$order_date=$row['order_date'];
		$fullname=$row['fullname'];
		$address=$row['address'];
		$city=$row['city'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$pincode=$row['pincode'];
		$order_accept_date=$row['order_accept_date'];
		$status=$row['order_status'];
	
		echo "<br><br>";
		
		
		echo "<table border=\"1\" width=\"716\">";
echo "<tr>";
	echo "<tr><td width='40'>Sr No </td></tr>";
    echo "<tr><td align=\"center\">Order No:</td><td>$order_no</td></tr>";
    echo "<tr><td  align=\"center\"  width='70'>Order Date:</td><td>$order_date</td></tr>";

	
	echo "<tr><td  align=\"center\"  width='150'>Order Accept Date:</td><td>$order_accept_date</td></tr>";


echo "</tr>";

echo "<tr>";
	//echo "<td>$i</td>";
	echo "<tr><td align=\"center\" width='70'>id:</td><td>$i</td></tr>";
    echo "<tr><td align=\"center\" width='70'>Full Name :</td><td>$fullname</td></tr>";
	echo "<tr><td  align=\"center\"  width='70'>Mobile No:</td><td>$mobile</td></tr>";
echo "</tr>";
    
echo "<tr>";
    	echo "<tr><td>&nbsp;</td></tr>";
    echo "<tr><td  align=\"center\">Address :</td><td align=\"Left\">$address</td></tr>";
	echo "<tr><td  align=\"center\">Email :</td><td> $email</td></tr>";
echo "</tr>";

echo "<tr>   ";
	echo "<tr><td>&nbsp;</td></tr>";
    echo "<tr><td  align=\"center\">City :</td><td  colspan=\"3\">$city</td></tr>";
    
echo "</tr>";
echo "<tr>";
	echo "<tr><td>&nbsp;</td></tr>";
    echo "<tr><td  align=\"center\">Pincode :</td><td  colspan=\"3\">$pincode</td></tr>";
echo "</tr>";

		
		echo "</table>";
		echo "<br></br>";
	//accept reject order table start

	echo "<table width=\"717\"><tr><td>Current Status of Order :&nbsp;&nbsp;&nbsp;<b>".strtoupper($status)."</b></td><td colspan='4' align='right'>";
		
		
	echo "</td></tr></table>";

	//accept reject order table end

	echo "<table   border=\"1\" width=\"717\">";
	echo "<tr><td colspan='6'>Order Details For Order No : $order_no</td></tr>"	;
	echo "<tr bgcolor=\"#D3D3D3\">";
	
	echo "<td>Sr.No</td>";
	echo "<td>Item Name</td>";
	echo "<td>Available Quantity </td>";
	echo "<td>Order Quantity</td>";
	echo "<td>Order Price</td>";
	echo "<td>Total Amount</td>";

	
	echo "</tr>";
	
	
	$detailquery="select * from tbl_order_detail where order_no=$order_no";
	$detailres=mysql_query($detailquery);	

	
	
while($detailrow=mysql_fetch_array($detailres))
{
	$prod_id=$detailrow['prod_id'];
	$orderqty=$detailrow['quantity_order'];
	$orderprice=$detailrow['order_price'];
	$total=$orderprice*$orderqty;
	$totalorder=$totalorder+$total;
	
	
	$q="select prod_name,quantity from tbl_product where prod_id=$prod_id";
	$prodres=mysql_query($q);
	$prodrow=mysql_fetch_array($prodres);
	$prod_name=$prodrow['prod_name'];
	$availqty=$prodrow['quantity'];
	
	
	
	//$item_id=$rows['item_id'];
	echo '<tr align="center">';
	echo '<td width="100px">'.$prod_id.'</td>';
	echo '<td width="100px">'.$prod_name.'</td>';
	echo '<td width="100px">'.$availqty.'</td>';
	echo '<td width="100px">'.$orderqty.'</td>';
	echo '<td width="100px">'.$orderprice.'</td>';
	echo '<td width="100px">'.$total.'</td>';
	echo '</tr>';
	
	
	
}
?>

<?php	
	echo "<tr><td  colspan='5' align=\"right\">Grand Total:</td><td>$totalorder</td></tr>";
	echo "</table>";
	$totalorder=0;
}
?>

<?php

if($i==0)
{
		echo "<tr><td colspan='3' align='center'><h3>Record Not Found</h3></td></tr>";
		echo "<tr><td  colspan='3' align='center'><input type=\"button\" name=\"btnBack\" value=\"Back\" onclick=\"javascript:document.location='review_order.php' \"></td></tr>";
}


?>
<tr><td align="center" colspan=""><input type="button" name="Back" value="Back" onClick="javascript: document.location='index.php'" /></td></tr>
</table>


        </div>  
    </div>	               	
        <div class="clear"></div>
  </div><!--end of left content-->
 
</div><!--end of right content-->
        
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
       <div class="footer">
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
			
			<li><a href="contact.php">Contact</a></li>
			<li><a href="feedback.php">Feedback</a></li>
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
			<p class="link"><span>&#169; All rights reserved </span></p>
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
