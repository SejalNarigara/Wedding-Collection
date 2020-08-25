<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>
<style type="text/css">
.uptab{

}
.uptab tr td input{
border:1px solid black;
padding:10px;
border-radius:20px;
margin:5px;
width:400px;
}
.uptab tr td input:hover{
border:2px solid black;
}

.uptab tr td select:hover{
border:2px solid black;
}
.uptab tr td select{

border:1px solid black;
width:400px;
padding:10px;
border-radius:20px;
margin:5px;
}

</style>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	$pid=$_GET['id'];
	include "connection.php";
	
	$update=mysql_query("Select * from tbl_product where prod_id=$pid");
		$rows=mysql_fetch_array($update);
		$img=$rows['image'];
		
		
	
if(isset($_REQUEST['btnupdate']))
{
	$sid=$_POST['sub_cat_id'];
	$q=mysql_query("select cat_id from tbl_sub_cat where sub_cat_id=$sid");
	$res=mysql_fetch_array($q);
	
	$prod_name=$_POST['prod_name'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$color=$_POST['color'];
	$size=$_POST['size'];
	$brand=$_POST['brand'];
	$quantity=$_POST['quantity'];
	$collection_type=$_POST['collection_type'];
	
	$catid=$_POST['catid'];
	$sub_cat_id=$_POST['sub_cat_id'];
	$update=$_POST['btnupdate'];
		
		if(isset($_FILES['imagefile']['name']))
		{
			if(file_exists('upload_img/$img'))
				unlink('upload_img/$img');	
		
			$pimage = $_FILES['imagefile']['name']; 
			$extension = substr(strrchr($pimage, '.'), 1);
			$new_image = $img;
			$uploaddir = 'upload_img/';			
			$file = $uploaddir . $img; 
		
//echo "name of new image=".$file;
//return;
			move_uploaded_file($_FILES['imagefile']['tmp_name'], $file);
			
			$sql="update tbl_product set 					   	   prod_name='$prod_name',description='$description',price='$price',color='$color',size='$size',brand='$brand',quantity='$quantity',collection_type='$collection_type',Cat_id='$catid',sub_cat_id='$sub_cat_id' where prod_id=$pid";
			
			
			//echo $sql;
			//return;
			
		/*	mysql_query("update tbl_product set cat_id=$cat_id,sub_cat_id=$sid,pname='$pname',pdesc='$pdesc',image='$new_image',price=$price,quantity=$quan where prod_id='$id'");
			echo $sql;*/
			
			mysql_query($sql);
			
			header("location:adminproduct.php");
			
		}
		else
		{
			mysql_query("update tbl_product set prod_name='$prod_name',description='$description',price='$price',color='$color',size='$size',brand='$brand',collection_type='$collection_type',quantity=$quantity,Cat_id = '$cat_id',sub_cat_id = '$sub_cat_id' where prod_id=$cid");
		
			//mysql_query("update product set cat_id=$cid,sub_cat_id=$sid,pname='$pname',pdesc='$pdesc',image='$image',price=$price,quantity=$quan where pid=$id");
			header("location:produpdate.php");
		}
}
else
{
		$query="select * from tbl_product where prod_id = $pid";
		
		//echo $query;
		
		$q=mysql_query($query);
		
		$res=mysql_fetch_array($q);
		
		//$sub_cat_id=$_POST['sub_cat_id'];
		$rid=$res['sub_cat_id'];
		
		$a=mysql_query("select sub_cat_name from tbl_sub_cat where sub_cat_id =".$rid);
		
		$aa=mysql_fetch_array($a);
}
	
/*($update)
	{
		$sql="update tbl_product set prod_name='$prod_name',description='$description',price=$price,quantity=$quantity,image='$imag',cat_id = '$cat_id',sub_cat_id = '$sub_cat_id' where prod_id=$pid";
		mysql_query($sql);
		echo $sql;
		header("location:view_product.php");
	}*/

?>
<div id="respond">


<script type="text/javascript">
			   function formValidation()
			   {
			   		var catname=document.product.cat_id;
					var subname=document.product.sub_cat_id;
					var des=document.product.prod_name;
					var descr=document.product.description;
					var price=document.product.price;
					var color=document.product.color;
					var size=document.product.size;
					var brand=document.product.brand;
					var quantity=document.product.quantity;
					var collectiontype=document.product.collectiontype

					
					if(allLetter(catname))
					{
						
						if(allLetter1(subname))
						{
								
							if(allLetter2(des))
							{
								if(allLetter3(descr))
								{
									if(allLetter4(price))
									{
										if(allLetter5(color))
										{
											if(allLetter6(size))
											{
												if(allLetter7(brand))
												{
													if(allLetter8(quantity))
													{
														if(allLetter9(collectiontype))
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
				
				function allLetter1(subname)
				{
							if(subname.value == "Default")
							{
								alert('Select your sub Category from the list');
								subname.focus();
								return false;
							}
							else
							{
								return true;
							}
				}
				
				function allLetter2(des)
				{ 
						var letters = /^[A-Za-z ]+$/;
						if(des.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('Product name must have alphabet characters only');
							des.focus();
							return false;
						}
				}	
				
				function allLetter3(descr)
				{ 
						var letters = /^[A-Za-z ]+$/;
						if(descr.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('Description must have alphabet characters only');
							descr.focus();
							return false;
						}
				}	
				
				function allLetter4(price)
				{ 
						var letters = /^[0-9]+$/;
						if(price.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('price must have digits characters only');
							price.focus();
							return false;
						}
				}	
				
				
				function allLetter5(color)
				{ 
						var letters = /^[A-Za-z]+$/;
						if(color.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('color must have alphabet characters only');
							color.focus();
							return false;
						}
				}	
				
				function allLetter6(size)
				{ 
						var letters = /^[0-9]+$/;
						if(size.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('size must have digits characters only');
							size.focus();
							return false;
						}
				}	
				
				function allLetter7(brand)
				{ 
						var letters = /^[A-Za-z]+$/;
						if(brand.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('brand must have alphabets characters only');
							brand.focus();
							return false;
						}
				}	
				
				function allLetter8(quantity)
				{ 
						var letters = /^[0-9]+$/;
						if(quantity.value.match(letters))
						{
							return true;
						}
						else
						{  
							alert('quantity must have alphabets characters only');
							quantity.focus();
							return false;
						}
				}	
				
					function allLetter9(collectiontype)
				{
							if(collectiontype.value == "Default")
							{
								alert('Select your collectiontype from the list');
								collectiontype.focus();
								return false;
							}
							else
							{
								return true;
							}
				}
				
				
				
			
				
			
			</script>
	  
<!DOCTYPE HTML>
<html>
<head>
<title>wedding collection | product update</title>
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
<body style="background:#ddd;">
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
<!--			<li><a href="about.php">ABOUT</a></li>
 -->			<li><a href="404.php">services</a></li>
			
			<li ><a href="portfolio.php">Master</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="admincategory.php">Category</a></li>
				<li><a href="sub_category_index.php">subCategory</a></li>
				<li><a href="adminproduct.php">product</a></li>
			</ul>
			</li>
			
			
			<li ><a href="#">Reports</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="review_order.php">view orders</a></li>
				<li><a href="viewcontactus.php">view contacts</a></li>
				<li><a href="viewregistration.php">view registration</a></li>
				<li><a href="viewfeedback.php">view feedback</a></li>

			</ul>
			</li>
			
			
<!--<!--			<li><a href="blog.php">BLOG</a></li>
 --> -->			<!--<li><a href="viewcontactus.php">CONTACT</a></li>
			<li><a href="viewregistration.php">REGISTRATION</a></li>
			<li><a href="viewfeedback.php">feedback</a></li>
		 -->
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
		<h3 class="style pull-left">update </h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">product update </li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>


<?php
	//include("header.php");
?>

<?php
	require("connection.php");

	
//echo "ghfdgjfhdg:".$pid;

//return;


	
?>
<br />
<center>
<center><h1>Update Product</h1>
<br />
<br />
<form action="" method="post" enctype="multipart/form-data" onSubmit="return formValidation();">
<table class="uptab">

	<tr>
		<td style=""> <h4>Product Name</h4> </td>
		<td><input type="text" name="prod_name" value="<?php echo $rows['prod_name']?>" /></td>
	</tr>
	<tr>
		<td><h4>Description</h4></td>
		<td><input type="text" name="description" height="20" width="20" value="<?php echo $rows['description']?>"/></td>
	</tr>
	<tr>
		<td> <h4>Price</h4> </td>
		<td><input type="text" name="price" value="<?php echo $rows['price']?>" /></td>
	</tr>
	<tr>
		<td><h4>color</h4></td>
		<td><input type="text" name="color" value="<?php  echo $rows['color']?>"></td>
	</tr>
	<tr>
		<td><h4>Size</h4></td>
		<td><input type="text" name="size" value="<?php  echo $rows['size']?>"></td>
	</tr>
	<tr>
		<td><h4>Brand</h4></td>
		<td><input type="text" name="brand" value="<?php  echo $rows['brand']?>"></td>
	</tr>
	<tr>
		<td> <h4>Quantity</h4> </td>
		<td><input type="text" name="quantity" value="<?php echo $rows['quantity']?>"/></td>
		
	</tr>
	
	
	<tr>
		<td> <h4>collection type :</h4></td>
		<td>
		<select name="collection_type">
		 	  <option value="Bride">Bride</option>
			  <option value="Groom">Groom</option>
				 <option value="Couple">Couple</option>
				 <option value="Bride Assesories">Bride Assesories</option>
				 <option value="Groom Assesories">Groom Assesories</option>

		<!--<td><input type="text" name="collection type" value="<?php //echo $rows['collection_type']?>"/></td>
		 -->
		 </select>
		 </td>
	</tr>
	
	<tr>
		<td><h4>Image</h4></td>
		<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			<input type="file" name="imagefile" id="imagefile" size="34">
		</td>
		</td>
		</tr>
		<tr>
	<td> <h4>Category Name</h4></td>
	<?php 
		$sql = "select * from tbl_cat";
		$result = mysql_query($sql,$con);
	 ?>
	 
	<td><select name ="catid">
	<option value="-1">Select Catagory</option>
	<?php
		while ($row=mysql_fetch_array($result)) 
		{
			echo "<option value='$row[cat_id]'> $row[cat_name] </option>";
		}
	?>
	</select></td>
	</tr>
	
		<!--<td> Category </td>
		<td><select name="category" id="category" onFocus="doBlank_category('err_msg'); ">
				<option value="-1">- Select Category - </option>
			<?php
				//$sql="select Cat_id,Cat_name from tbl_category";
				//include('connection.php');
				//$result=mysql_query($sql,$con);
				//while($rows=mysql_fetch_array($result))
				//{
					//echo "<option value='$rows[Cat_id]'> $rows[Cat_name] </option>";
				//}
			?>
			</select></td>
	</tr>-->
	<tr>
	<td><h4>Sub Category Name</h4></td>
	<?php 
		$sql = "select sub_cat_id,sub_cat_name from tbl_sub_cat";
		$result = mysql_query($sql,$con);
	 ?>
	 
	<td><select name ="sub_cat_id">
	<option value="-1">Select Sub Catagory</option>
	<?php
		while ($row=mysql_fetch_array($result)) 
		{
			echo "<option value='$row[sub_cat_id]'> $row[sub_cat_name] </option>";
		}
	?>
	</select>
	</td>
	</tr>
	
	<tr>
		<br>
		<td colspan="3" align="center" ><input style="width:100px;" type="submit" name="btnupdate" value="update" onClick=""/> </td>
	</tr>
	</table>

</form>
</center>
<br />
<br />
<?php
//}
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


