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
<title>wedding collection | product</title>
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
		<h3 class="style pull-left">Product Details</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">product</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">


<?php
  //include ("header.php");
  include("connection.php");
  /*session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} */
	
	if(isset($_REQUEST['update']))
	{
	$cid=$_GET['id'];
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
	$collectiontype=$_POST['collectiontype'];
	$catid=$_POST['catid'];
	$sub_cat_id=$_POST['sub_cat_id'];
	
	
	//echo"$sid,$q,$res,$prod_name,$description,$price,$color,$size,$brand,$quantity,$collectiontype,$catid,$sub_cat_id";
	$update=$_POST['update'];
	if($update)
	{	
		
			$sql="update tbl_product set 					   	   prod_name='$prod_name',description='$description',price='$price',color='$color',size='$size',brand='$brand',quantity='$quantity',image='$new_image',
			cat_id='$cat_id',sub_cat_id='$sub_cat_id' where prod_id=$pid";
			
		mysql_query($sqls);
		header("location:adminproduct.php");
	}
	
	}
	
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
						var letters = /^[A-Za-z ]+$/;
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
	  
	  
	  
        <?php
	  	if(!isset($_GET['id']))
		{
	  ?>
<h2 style="background:black;color:white;padding:5px;text-align:center;width:660px;"> Add Product </h2>	 
	  <form method="post" name="product" action="prod_ins.php" enctype="multipart/form-data" onSubmit="return formValidation();">
<style>
.tableproduct 
{
	text-align:center;
	font-weight:900;
	background:#ddd;
}
.tableproduct tr td select
{
	width:300px;
	height:45px;
	font-weight:500;
	margin:20px 0px 0px 50px;
	border-radius:30px;
	border:1px solid black;
	text-indent:10px;
}
.tableproduct tr td input[type=text]
{
	width:300px;
	height:45px;
	font-weight:500;
	margin:20px 0px 0px 50px;
	border-radius:30px;
	border:1px solid black;
	text-indent:10px;
}
.tableproduct tr td input["type=text"]:hover{
border:2px solid black;
}
.tableproduct tr td select:hover{
border:2px solid black;
}

</style>
<table width="" class="tableproduct">
<tr>
<td>select category :
		</td>
	<td>
	
	<select name ="cat_id">
	<option value="Default">Select Catagory</option>
	<?php
		$query="select *from tbl_cat";
		$res=mysql_query($query);
		while ($row=mysql_fetch_array($res)) 
		{
			echo "<option value='$row[cat_id]'> $row[cat_name] </option>";
		}
	?>
	</select>

	</td>
	</tr>
	<tr>
	<td style="width:160px;">
	select subcatagory : 
</td>
<td style="width:300px;">
	  <select name ="sub_cat_id">
	    <option value="Default">Select Sub Catagory</option>
	    <?php
		$query="select *from tbl_sub_cat";
		$res=mysql_query($query);
		while ($row=mysql_fetch_array($res)) 
	 
		{
			echo "<option value='$row[sub_cat_id]'> $row[sub_cat_name] </option>";
		}
	?>
	    </select>
	
</td>
</tr>
  
	       
 <tr>     
            <td>productname: </td>
            <td><input type="text" name="prod_name"  size="30" /></td>
            </tr>
          <tr>
          <td>Description:</td>
            <td><input type="text" name="description"  size="30" /></td>
            </tr>
 <tr>         
            <td>Price:</td>
            <td><input type="text" name="price"  size="30" /></td>
     </tr>
	 <tr>
	         <td>Color:</td>
            <td><input type="text" name="color"  size="30" /></td>
         </tr>
		 <tr>   
            <td>Size:</td>
            <td><input type="text" name="size"  size="30" /></td>
             </tr>
			 <tr>
			            <td>Brand:</td>
            <td><input type="text" name="brand"  size="30" /></td>
           
          </tr>
		  <tr>
          <td>Quantity:</td>
          <td>  <input type="text" name="quantity"  size="30" /></td>
 </tr>
 <tr>
          <td>collection type:</td>
          <td> 
			<select  name="collectiontype">
              <option value="Bride">Bride</option>
			  <option value="Groom">Groom</option>
			  <option value="Couple">Couple</option>
			  <option value="Couple">Bride Accesorices </option>
			  <option value="Couple">Groom Accesorices</option>
			  </select>
			   </td>			  
         
    
          </tr>
 <tr>
<td> Image :</td>
<td>
          
	       <input type="file" name="imagefile" id="imagefile" size="34" required>
	

	</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
         </td>
 
                </tr>
</table>  </form>
        
		<p>
          <?php
		
		}
		
		?>
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		
      </div>
 
 
 <div class="wrapper col4">
  <div id="container">
    <div id="content">
		<center>
      
      <table summary="Summary Here"  cellpadding="10px" cellspacing="0" border="5" class="prod">
        <thead>
          <tr>
            <th>prod_id</th>
            <th>prod_name</th>
            <th>description</th>
			<th>price</th>
			<th>color</th>
			<th>size</th>
			<th>brand</th>
			<th>quantity</th>
			<th>collection type</th>
			<th>image</th>
			<th>Main Category</th>
			<th>Sub Category</th>
            <th>Update</th>
			<th>Delete</th>
          </tr>
        </thead>
        <body>
 		<?php
$result=mysql_query("select * from tbl_product");
//echo $result;

	while($rows=mysql_fetch_array($result))
{
	echo '<tr align="center">';
	echo '<td width="100px">'.$rows['prod_id'].'</td>';
	echo '<td width="100px">'.$rows['prod_name'].'</td>';
	echo '<td width="100px">'.$rows['description'].'</td>';
	echo '<td width="100px">'.$rows['price'].'</td>';
	echo '<td width="100px">'.$rows['color'].'</td>';
	echo '<td width="100px">'.$rows['size'].'</td>';
	echo '<td width="100px">'.$rows['brand'].'</td>';
	echo '<td width="100px">'.$rows['quantity'].'</td>';
	echo '<td width="100px">'.$rows['collection_type'].'</td>';
	echo "<td align='justify' class='textarea' valign='top'>";
				//echo $row['image'];
				simage($rows['image']);
			echo "</td>";
$type=mysql_query("select cat_name from tbl_cat where cat_id=".$rows['cat_id']);
			$ttp=mysql_fetch_array($type);
			
	echo '<td width="100px">'.$ttp[0].'</td>';
$sub=mysql_query("select sub_cat_name from tbl_sub_cat where sub_cat_id=".$rows['sub_cat_id']);
			$subname=mysql_fetch_array($sub);

	echo '<td width="100px">'.$subname[0].'</td>';
	
	
	echo '<td><a href="produpdate.php?id='.$rows['prod_id'].'"><img src="updt.png"></a></td>';
	echo '<td><a href="prod_delete.php?id='.$rows['prod_id'].'"><img src="images.jpg"></a></td>';
	echo '</tr>';
}

function simage($image1)
	{
	//	echo $image1."<br>";
		
		$file_folder = 'upload_img/';
		$image=$file_folder.$image1;
		if(file_exists($image))
		{
			$fpath=$image;
		}
		else
		{
			$fpath="upload_img/no_preview.jpg";
		}
		
		//echo $fpath;
		
		echo "<img src='$fpath' height='100' width='100'>";
	}

?>
        </tbody>
      </table>   
	  </center>   <div id="comments">
        <h2>&nbsp;</h2>
      </div>
    
      
    </div>
    <br class="clear" />
  </div>
</div>





  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
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