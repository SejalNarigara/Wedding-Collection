<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?><!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>wedding collection | admincategory</title>
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
			
			<li><a href="404.php">services</a></li>
			
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
		<h3 class="style pull-left">category</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">admincategory</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="details">
		<h2>&nbsp;</h2>
		
		<?php
  //include ("header.php");
  include("../connection.php");
	
	if(isset($_REQUEST['update']))
	{
    $cid=$_GET['id'];
	$cname=$_POST['cat_name'];
	$cdes=$_POST['cat_desc'];
	echo"$cname ,$cdes";
	$update=$_POST['update'];
	if($update)
	{	
		$sqls="update tbl_cat set cat_name= '$cname' ,cat_desc='$cdes'  where cat_id=$cid";
		mysql_query($sqls);
		header("location:adminCategory.php");
	}
	
	}
	
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Touch of Purple
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>wedding collection | single-page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<body id="top">
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">
	<div style=" padding-bottom:5px; width:500px; margin-bottom:10px;">
      <h2 style="text-align:center; padding:10px;background:black;color:white;">Edit Category </h2>
      <div id="respond">
	  
	  <script type="text/javascript">
			
				function formValidation()
				{
					//alert("Hello");
					var catname=document.category.cat_name;
					//alert(catname);
					var Description=document.category.cat_desc;
					if(allLetter(catname))
					{
						if(allLetter1(Description))
						{
							return true;
						}
						//return false;
					}
					return false;
				}
				function allLetter(uname)
					{ 
						var letters = /^[A-Za-z]+$/;
						if(uname.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Category name must have alphabet characters only');
							uname.focus();
							return false;
						}
					}
					
					function allLetter1(uname)
					{ 
						var letters = /^[A-Za-z]+$/;
						if(uname.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Description must have alphabet characters only');
							uname.focus();
							return false;
						}
					}

	
			 </script>

	  
	  
	  <?php
	  	if(!isset($_GET['id']))
		{
	  ?>
        <form action="cat.php" method="post" name="category" onSubmit="return formValidation();">
          <p>
            <input type="text" name="cat_name" id="name" value="" size="22" placeholder="Category Name"/>
            <label for="name"><small>(required)</small></label>
          </p>
          <p>
            <input type="text" name="cat_desc" id="catdesc" cols="100%" rows="10" placeholder= "Description">
            <label for="name"><small> (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" style="margin-left:90px;" />
          </p>
        </form>
		<?php
		}
		else
		{
		$cid=$_GET['id'];
		$update=mysql_query("Select * from tbl_cat where Cat_id=$cid");
		$rows=mysql_fetch_array($update);

		?>
		<form action="" method="post">
          <p>
            <input type="text" name="cat_name" id="name" value="<?php echo $rows['cat_name']?>" size="22" />
            <label for="name"><small>Category Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="cat_desc" id="catdesc" cols="100%" rows="10" value="<?php echo $rows['cat_desc']?>"></textarea>
            <label for="comment" style="display:none;"><small>Description (required)</small></label>
          
            <label for="label"><small>Description (required)</small></label>
</p>
          <p>
            <input name="update" type="submit" id="submit" value="Update" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
		<?php
		
		}
		
		?>
      </div>
	<div style="margin-top:20px;">
      <h2 style="text-align:center; padding:10px;background:black;color:white;">Category Details</h2> 
	  <style>
	  .tbl_rec{
	  width:480px;
	  }
	  .tbl_rec th{
	  background:#ddd;
	  text-align:center;
	  padding:5px;	
	  }
	  </style><br /><br />
      <table summary="Summary Here" cellpadding="0" cellspacing="0" border="1" class="prod">
        <thead>
          <tr>
            <th>Category Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Update</th>
			<th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
$result=mysql_query("select * from tbl_cat");
//echo $result;

	while($rows=mysql_fetch_array($result))
{
	echo '<tr align="center">';
	echo '<td width="100px">'.$rows['cat_id'].'</td>';
	echo '<td width="100px">'.$rows['cat_name'].'</td>';
	echo '<td width="100px">'.$rows['cat_desc'].'</td>';
	echo '<td><a href="adminCategory.php?id='.$rows['cat_id'].'"> <img src="updt.png"></a></td>';
	echo '<td><a href="cat_delete.php?id='.$rows['cat_id'].'"> <img src="images.jpg"></a></td>';
	echo '</tr>';
}
?>
        </tbody>
      </table>
	  </div>	
	  
	  </div>
	  <div style="clear:both;"></div>
    </div>
  </div>
</div>
<div class="wrapper col6"><div id="copyright"><br class="clear" />
  </div>
</div>
</body>
</html>
		
		
</div>
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
			<p class="link"><span>&#169; All rights reserved </a></span></p>
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
