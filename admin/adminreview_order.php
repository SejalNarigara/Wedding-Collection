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
			<!--<li><a href="about.php">ABOUT</a></li>-->
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
			
			
<!--			<li><a href="blog.php">BLOG</a></li>
 -->			<!--<li  class="activate"><a href="viewcontactus.php">CONTACT</a></li>
			<li><a href="viewregistration.php">REGISTRATION</a></li>
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
		<h3 class="style pull-left">review order</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">review order </li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>


<?php
//session_start();

/*if(!isset($_SESSION['email']))	
{
	header("Location:index.php");
}*/
//session_start();
//$cust_id=$_SESSION['userid'];
//$cust_id=1;
if(isset($_REQUEST['action']))
{
	$action=$_REQUEST['action'];
}
else
	$action="";

if(isset($_REQUEST['status']))
{
	include "connection.php";
	
	$status=$_REQUEST['status'];
	$order_no=$_REQUEST['order_no'];
	$da=date("Y/m/d");
	
	//echo $da;
	//return;
	
	if($status == 'a')
	{
		$query="update shipping set order_status='accept',order_accept_date='$da' where order_no=$order_no";
		mysql_query($query);
		
		$query="select prod_id,quantity_order from tbl_order_detail where order_no=$order_no and cust_id=$cust_id";
		//echo $query;
		$res=mysql_query($query);
		while($row=mysql_fetch_array($res))
		{
			
			//$dis_id=$billrow['dis_id'];
			$prod_id=$row['prod_id'];
			$orderqty=$row['quantity_order'];
			
			$query="update tbl_product set quantity=quantity-$orderqty where prod_id=$prod_id";
			mysql_query($query);
			
		}
		
		header('location:adminreview_order.php');
	}
	else
	{
		$query="update shipping set order_status='reject',order_accept_date='$da' where order_no=$order_no";
		mysql_query($query);
		
	}
	
}
//include('header.php');

?>

<span class="red">
<center>
<div class="left_content">
        	
            <div class="title"><h2>View Orders</h2></div> 
              	
<table border="" width="716">
<tr align="center">
<?php


	if($action == 'pending' || $action=="") 
	{
		//echo "hello";
		echo "<td bgcolor=\"#99CC66\">";
	}
	else
		{
?>
	<td>
   <?php
	}
	?>
    	<a href="adminreview_order.php?action=pending">View Pending Orders</a>
    </td>
<?php
	if($action == 'accept') 
	{
				//echo "hello accepted";
		echo "<td bgcolor=\"#99CC66\">";
	}
	else
	{
?>
	<td>
   <?php
	}
	?>       	<a href="adminreview_order.php?action=accept">View Accepted Orders</a>
    </td>
    <?php
	if($action == 'reject') 
	{
		//echo "bye";
		echo "<td bgcolor=\"#99CC66\">";
	}
	else
	{
?>
	<td>
   <?php
	}
	?>
       	<a href="adminreview_order.php?action=reject" >View Rejected Orders</a>
    </td>
</tr>
<!--tr>
	<th width="103"><span class="red">SerialNO</th>
	<th width="89"><span class="red">order No.</th>
    	<th width="89"><span class="red">order Date.</th>
    <th width="89"><span class="red">Full Name</th>
	<th width="153"><span class="red">Address</th>
    <th width="89"><span class="red">City.</th>
	<th width="153"><span class="red">Email</th>
	<th width="153"><span class="red">Phno</th>
	<th width="153"><span class="red">pincode</th>
    <th width="153"><span class="red">Login Customer</th>
	<th width="66"><span class="red">Accept Order</th>
    <th width="66"><span class="red">Reject Order </th>
    
</tr-->
</div>



<?php
require("connection.php");



if(isset($_REQUEST['action']))
{
$action=$_REQUEST['action'];
$query="select * from shipping where order_status='".$action."'";

}
else
{
	$query="select * from shipping where order_status='pending'";
}

$res=mysql_query($query);

$i=0;
$totalorder=0;
while($row=mysql_fetch_array($res))
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
		
		//echo '<td width="100px">'.$row['cust_id'].'</td>';
		

		echo "<br><br>";
		
		
		echo "<table border=\"0\" width=\"716\">";
echo "<tr>";
	echo "<td width='40'>Sr No </td>";
    echo "<td align=\"right\">Order No:</td><td><u>$order_no</u></td>";
    echo "<td  align=\"right\"  width='70'>Order Date:</td><td><u>$order_date</u></td>";
	echo "<td  align=\"right\"  width='150'>Order Accept Date:</td><td><u>$order_accept_date</u></td>";
echo "</tr>";

echo "<tr>";
	echo "<td>$i</td>";
    echo "<td align=\"right\" width='70'>Full Name :</td><td><u>$fullname</u></td>";
	echo "<td  align=\"right\"  width='70'>Mobile No:</td><td><u>$mobile</u></td>";
echo "</tr>";
    
echo "<tr>";
    	echo "<td>&nbsp;</td>";
    echo "<td  align=\"right\">Address :</td><td align=\"Left\"><u>$address</u></td>";
	echo "<td  align=\"right\">Email :</td><td> $email</td>";
echo "</tr>";

echo "<tr>   ";
	echo "<td>&nbsp;</td>";
    echo "<td  align=\"right\">City :</td><td  colspan=\"3\">$city</td>";
    
echo "</tr>";
echo "<tr>";
	echo "<td>&nbsp;</td>";
    echo "<td  align=\"right\">Pincode :</td><td  colspan=\"3\">$pincode</td>";
echo "</tr>";

		
		echo "</table>";
		echo "<br></br>";
	//accept reject order table start

	echo "<table width=\"717\"><tr><td>Current Status of Order :&nbsp;&nbsp;&nbsp;<b>".strtoupper($status)."</b></td><td colspan='4' align='right'>";
		
		if($action == 'accept' || $action == 'reject')
		{
			echo "<a>Accept Order</a> &nbsp;| &nbsp; <a>Reject Order</a> &nbsp;| &nbsp; <a href='review_delete.php?order_no=$order_no'>Delete Order</a>";	
		}
		else
		{
		echo "<a href='adminreview_order.php?status=a&order_no=$order_no'>Accept Order</a> &nbsp;| &nbsp; <a href='adminreview_order.php?status=r&order_no=$order_no'>Reject Order</a>&nbsp;| &nbsp; <a href='review_delete.php?order_no=$order_no'>Delete Order</a>";
		}
		
	echo "</td></tr></table>";

	//accept reject order table end

	echo "<table   border=\"1\" width=\"717\">";
	echo "<tr><td colspan='6'><strong>Order Details For Order No : $order_no</strong></td></tr>"	;
	echo "<tr bgcolor=\"#dfdfdf\">";
	
	echo "<td><strong>Product Id</strong></td>";
	echo "<td><strong>Product Name</strong></td>";
	echo "<td><strong>Available Quantity</strong> </td>";
	echo "<td><strong>Order Quantity</strong></td>";
	echo "<td><strong>Order Price</strong></td>";
	echo "<td><strong>Total Amount</strong></td>";

	
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
	
	/*$q="SELECT * FROM tbl_discount WHERE min_amount <=$totalorder AND max_amount >$totalorder";
				$res=mysql_query($q);
				$row=mysql_fetch_array($res);
				$dis=$row['discount'];
				//$total=$tempprice*$tempqty;
				//$maintotal=$maintotal+$total;
				if($dis != 0)
					$discount=$totalorder/$dis;
				else
				$discount=0;
				
				$maindiscount=$totalorder-$discount;*/
	
	//$prod_id=$rows['prod_id'];
	echo '<tr align="center">';
	echo '<td width="100px">'.$prod_id.'</td>';
	echo '<td width="100px">'.$prod_name.'</td>';
	echo '<td width="100px">'.$availqty.'</td>';
	echo '<td width="100px">'.$orderqty.'</td>';
	echo '<td width="100px">'.$orderprice.'</td>';
	echo '<td width="100px">'.$total.'</td>';
	echo '</tr>';
	
	
}


	echo "<tr><td  colspan='5' align=\"right\">Total:</td><td>$totalorder</td></tr>";
	//echo "<tr><td  colspan='5' align=\"right\">Discount:</td><td>$discount</td></tr>";
	//echo "<tr><td  colspan='5' align=\"right\">Grand Total:</td><td>$maindiscount</td></tr>";
	echo "</table>";
}
if($i==0)
{
		echo "<tr><td colspan='3' align='center'><h3>Record Not Found</h3></td></tr>";
		echo "<tr><td  colspan='3' align='center'><input type=\"button\" name=\"btnBack\" value=\"Back\" onclick=\"javascript:document.location='adminreview_order.php' \"></td></tr>";
}


?>
</table>
</center>


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
			<p class="link"><span>&#169; All rights reserved</span></p>
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


