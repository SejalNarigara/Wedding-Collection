<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>
<style>
.hi tr td{
padding-left:10px;
}
</style>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>wedding collection | sub category</title>
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
 -->			<!--<li><a href="viewcontactus.php">CONTACT</a></li>
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
		<h3 class="style pull-left">Sub Category  </h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">sub category </li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">

<script type="text/javascript">
			   function formValidation()
			   {
			   		var catname=document.subcat.txtcategory_id;
					var subname=document.subcat.txtsub_category_name;
					var des=document.subcat.txtsub_category_desc;
					//var catname=document.contact.Description;
					if(allLetter(catname))
					{
						
						if(Letter(subname))
						{
							
							if(allLetter1(des))
							{
								return true;
							}
							
						}
						
						
			   		}
					return false;
				}
			  	function allLetter(catname)
				{
							if(catname.value == "Default")
							{
								alert('Select your Category from the list');
								catname.focus();
								return false;
							}
							else
							{
								return true;
							}
				}
				function Letter(subname)
				{ 
						var letters = /^[A-Za-z]+$/;
						if(subname.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('Subcategory name must have alphabet characters only');
							subname.focus();
							return false;
						}
				}	
				function allLetter1(des)
				{ 
						var letters = /^[A-Za-z]+$/;
						if(des.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('Description must have alphabet characters only');
							des.focus();
							return false;
						}
				}	
			
			</script>


<?php
require("connection.php");

?>

<form action="sub_category_insert.php" name="subcat" method="post" onSubmit="return formValidation();" >
<center >
<h2 style="background:black;color:white;padding:5px;width:582">INSERT SUB CATEGORY</h2>
<table class="subcc hi" width="582" border="0" style="background:#ddd;">

  <tr>
    <td>Category id:</td>
    <td>		
		<select name="txtcategory_id">
			<option value="Default"> --select Category-- </option>
		<?php
		require("connection.php");

		$query="select * from tbl_cat";
		$res=mysql_query($query);
		while($row=mysql_fetch_array($res))
		{
				echo "<option value=".$row['cat_id'].">". $row['cat_name']."</option>";
		}
		
		?>
		
	</select>
	</td>
  </tr>
  <tr>
    <td>Sub category name:</td>
    <td><input type="text" name="txtsub_category_name" size="30px"/></td>
  </tr>
  <tr>
    <td>Sub category desc:</td>
    <td><input type="text" name="txtsub_category_desc" size="30px"/></td>
  </tr>

    <tr>
    <td style="padding-bottom:10px; text-align:right"><input type="submit" name="btnsave" value="Save" /></td>
    <td style="padding-bottom:10px;"><input type="reset" name="btnReset" value="Reset" /></td>
  </tr>

</table>
<p>&nbsp;</p>
</center>
</form>




<center>
<table border="5" width="700px" class="prod">
<tr>
	<th align="center">Sr.No.</th>
	<th align="center">Category Name</th>
	<th align="center">Sub Category Name</th>
	<th align="center">Decsription</th>
	

	
	<th>Update</th>
	<th>Delete</th>
</tr>
<?php

$result=mysql_query("select * from tbl_sub_cat");
while($rows=mysql_fetch_array($result))
{
	echo '<tr align="center">';
	echo '<td width="100px">'.$rows['sub_cat_id'].'</td>';
	
	$query="select * from sub_cat_id where sub_cat_id=".$rows['cat_id'];
	$conres=mysql_query($query);
	//$conrow=mysql_fetch_array($conres);
	
	//echo '<td width="100px">'.$conrow['cat_name'].'</td>';
	echo '<td width="100px">';
	
	catname($rows['cat_id']);
	echo '</td>';
	echo '<td width="100px">'.$rows['sub_cat_name'].'</td>';
	echo '<td width="100px">'.$rows['sub_cat_desc'].'</td>';
	echo '<td><a href="sub_category_update.php?id='.$rows['sub_cat_id'].'"> <img src="updt.png"></a></td>';
	echo '<td><a href="sub_category_delete.php?id='.$rows['sub_cat_id'].'"> <img src="images.jpg"></a></td>';
	echo '</tr>';
}
function catname($id)
{	
	//echo $id;
	$sqls="select cat_name from tbl_cat where cat_id=$id";
	//echo $sqls;
	$result=mysql_query($sqls);
	//echo $result;
	//return;
	$rows1=mysql_fetch_array($result);
	echo $rows1['cat_name'];
}
?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</center>

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

