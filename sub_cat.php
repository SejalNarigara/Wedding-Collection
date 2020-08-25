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
			<h1><a href="index.php"><img src="banner_1.jpeg"</a></h1>
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
		<h3 class="style pull-left">Your Order Detail</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
			<li  class="activate"><a href="feedback.php">Your Order Detail</a></li>
		</ol>
		<div class="clearfix"></div>
  </div>
</div>
<?php
session_start();
if(!isset($_SESSION['id']))
{
	header("location:index.php");
	exit();
	
}	
require "connection.php";
if (isset($_POST['btnsubmit']))
{
		$name=$_POST['txtname'];
		$cname=$_POST['txtscatname'];
		$desc=$_POST['txtdesc'];
		
		
		$res="insert into tbl_sub_cat(catid,scatname,scatdesc) value ('$name','$cname','$desc')";

		//echo $res;
		mysql_query($res,$con);
		header("Location:sub_cat.php");
}

	if (isset($_POST['btnupdate']))
	{
	$cid=$_GET['id'];
	$name=$_POST['txtname'];
	$cname=$_POST['txtscatname'];
	$cdesc=$_POST['txtdesc'];
	$update=$_POST['btnupdate'];
	if($update)
	{	
		$sqls="update tbl_sub_cat set catid='$name', scatname='$cname', scatdesc='$cdesc' where scatid='$cid'";

		mysql_query($sqls,$con);
		header("location:sub_cat.php");
	}
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
<title>Online Book Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel='stylesheet' href='js-form-validation.css' type='text/css' />
<script src="subcat_validation.js"></script>

</head>
<body onLoad="document.subcategory.scatname.focus();">
<div class="wrap">
<?php
    require_once 'logo.php';
   ?>
<div class="main">
<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<h1><a href="contact.php"><img src="images/book.jpg" alt=""/></a></h1>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<?php
					require_once 'myinfo.php';
				?>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  
				  <?php
						require "connection.php";	
						if(!isset($_GET['id']))
						{
					?>	

				  				  	<h3>Sub category </h3>
									

					      <form method="post" action="#" name="subcategory" onSubmit="return formValidation();">
						  <div>
						    	<span><label>CATGORY NAME</label></span>
						    	<span> <select name="txtname" id="select">
         								 <option value="">-Select Category-</option>
       									   <?php
												include('connection.php');
												$sql="select * from tbl_cat";
												$result=mysql_query($sql,$con);
												while($row=mysql_fetch_array($result))
												{
													echo "<option value='$row[catid]'> $row[catname] </option>";
												}
											?>
     								   </select></span>
						    </div>
					    	<div>
						    	<span><label>SUB CATGORY NAME</label></span>
						    	<span><input name="txtscatname" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>DESCRIPTION</label></span>
						    	<span><input name="txtdesc" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span class="button-wrap"><input type="submit" name="btnsubmit" value="Submit"></span>
								<br>
								<br>
								
						  </div>
						 
						  		
 


						  
					    </form>
						
<?php
}
  else
  {
	require "connection.php";
	$cid=$_GET['id'];
	//echo $cid;
	if(!isset($_REQUEST['id']))
	{
		header("location:sub_cat.php");
	}
	else
	{
		$update=mysql_query("Select * from tbl_sub_cat where scatid=$cid");
		$rows=mysql_fetch_array($update);
	}
?>
<form id="form1" name="subcategory" method="post" action="" onSubmit="return formValidation();">
  <label></label>
  <table width="331" border="0">
  	<tr>
      <td> Catagory Nmae : </td>
      <td><label>
        <select name="txtname" id="select">
         								 <option value="">-Select Category-</option>
       									   <?php
												include('connection.php');
												$sql="select * from tbl_cat";
												$result=mysql_query($sql,$con);
												while($row=mysql_fetch_array($result))
												{
													echo "<option value='$row[catid]'> $row[catname] </option>";
												}
											?>
     								   </select> 
     </label></td>
    </tr>
    
    <tr>
      <td> Sub Catagory Nmae : </td>
      <td><label>
        <input type="text" name="txtscatname" value=" <?php echo $rows['scatname']?>" />
     </label></td>
    </tr>
    <tr>
      <td>Catagory Discription: </td>
      <td><input type="text" name="txtdesc" value="<?php echo $rows['scatdesc']?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="btnupdate" value="Update" />
		<br>
		<br>
        
      </label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
	
						
<?php
}
?>

<table border="1" style="border:groove; ">
<tr>
	<th style="border:groove; ">Sub Category Id</th>
	<th style="border:groove; ">CategoryName</th>
	<th style="border:groove; ">Sub Category Name</th>
	<th style="border:groove; ">Category Description</th>
	<th style="border:groove; ">Update</th>
	<th style="border:groove; ">Delete</th>
</tr>
<?php
require "connection.php";
$result=mysql_query("select * from tbl_sub_cat");
while($row=mysql_fetch_array($result))
{
	
	echo '<tr align="center">';
	echo '<td width="100px" style="border:groove; ">'.$row['scatid'].'</td>';
	echo '<td width="100px" style="border:groove; ">'.$row['catid'].'</td>';
	echo '<td width="100px" style="border:groove; ">'.$row['scatname'].'</td>';
	echo '<td width="100px" style="border:groove; ">'.$row['scatdesc'].'</td>';
	echo '<td style="border:groove; "><a href="sub_cat.php?id='.$row['scatid'].'">';
	echo "<img src='images/update.png'  style='width:20px;height:20px;text-align:center;'>"."<br>";
	echo '</a>';
	echo '</td>';
	echo '<td style="border:groove; "><a href="delete.php?id='.$row['scatid'].'">';
	echo "<img src='images/del.png'  style='width:20px;height:20px;text-align:center;'>"."<br>";
	echo '</a>';
	echo '</td>';
	echo '</tr style="border:groove; ">';
}
?>


</table>

						  
						
				    </div>
  				</div>				
		  </div>
		  
		  

	<div class="clear"></div>
</div>
<?php
		require_once 'footer.php';
?>

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