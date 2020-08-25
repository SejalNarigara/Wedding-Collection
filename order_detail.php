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
<!--			<li><a href="blog.php">BLOG</a></li>
 -->			<!--<li><a href="contact.php">CONTACT</a></li>
			<li><a href="registration.php">REGISTRATION</a></li>
			<li ><a href="feedback.php">feedback</a></li>
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
		<h3 class="style pull-left">your order detail </h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
			<li  class="activate"><a href="feedback.php">your order detail </a></li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>


<?php

//$cust_id=$_SESSION['cust_id'];

//$cust_id=1;

include "connection.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Jewelry Shop</title>

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="cart_css/cart.css" />
<script src="order_detail.js"></script>



<script type="text/javascript">
function checkAddress(val,txtVal)
{

//alert(val);
//alert(txtVal);

	var ad=document.getElementById('txtaddress');
	if(val == 'new')
		ad.value="";
	else
		ad.value=txtVal;
	
	
}
</script>

</head>
<!--<body onload="document.order.name.focus();">
<div id="wrap">

       <div class="header">
       		<div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title="" border="0" /></a></div>            
        <div id="menu">
            
			<ul>                                                                       
            <li class="selected"><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="category.php">Jewels</a></li>
            <!--<li><a href="specials.php">Specials Jewels</a></li> -->
            <!--<li><a href="myaccount.php">My Account</a></li> -->
			<?php 
			 //if(!isset($_SESSION['userid']))
			 //{
			 ?>
			<!--<li><a href="myaccount.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
			 --><?php 
			//}
			//else
			//{
			?>
			<!--<li><a href="profile.php">Profile</a></li>
			<li><a href="logout.php">Logout</a></li>
			 --><?php
			//}
			?>
            <!--<li><a href="details.php">Prices</a></li> -->
			<!--<li><a href="view_order.php">View Order</a></li>
            <li><a href="contact.php">Contact</a></li>
			<li><a href="feed.php">Feedback</a></li>
            </ul>
        </div>          
       </div> --> 


 <table border="2" width="716" align="center">
		<tr><td colspan="6">Your Order Detail </td></tr>
        <tr class="cart_title">
        			<td>Sr.No</td>
                	<td>Item pic</td>
                	<td>Item name</td>
                    <td>Unit price</td>
                    <td>Qty</td>
                    <td>Total</td>
        </tr>
		
      	<?php
		include('connection.php');
		$query="select * from tbl_temp where cust_id=$cust_id";
		$res=mysql_query($query);
		$i=0;
		$cart_total=0;
		while($row=mysql_fetch_array($res))
		{
			$i++;
			$prod_id=$row['prod_id'];
			
			$query="select * from tbl_product where prod_id=$prod_id";
		
//echo $query;
		
			$nameres=mysql_query($query);
			$namerow=mysql_fetch_array($nameres);
			$item_name=$namerow['prod_name'];
	
			$img=$namerow['image'];
			$path='admin/upload_img/'.$img;
			//$cart_total=0;			
							
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>";
			
			echo "<img src=".$path." width=\"70\" height=\"70\" border=\"0\" class=\"cart_thumb\" />";
			
			echo "</td>";
			echo "<td>".$item_name."</td>";
			echo "<td>".$row['price']."</td>";
			echo "<td>".$row['qty']."</td>";
			echo "<td>".$row['qty']*$row['price']."</td>";
			echo "<tr>";
			
			$cart_total=$cart_total+($row['qty']*$row['price']);
		}
		
		?>
        <tr><td colspan="6" align="right">Total Order Value:<?php echo $cart_total; ?></td></tr>
</table> 


       <div class="center_content">
       	<div class="left_content">

        
        	<div class="feat_prod_box_details">
           
            
<div class="contact_form">
			
                <div class="form_subtitle">create order details</div>
				
			<script type="text/javascript">
			
				function formValidation()
				{
					
					var txtName=document.order.txtName;
					var txtaddress=document.order.txtaddress;
					var txtPhno=document.order.txtPhno;
					var txtEmail=document.order.txtEmail;
					var txtcity=document.order.txtcity;
					if(allLetter(txtName))
					{
						if(allLetter1(txtaddress))
						{
							if(allLetter2(txtPhno))
							{
								if(allLetter3(txtEmail))
								{
									if(allLetter4(txtcity))
									{
										return true;
									}
								}
							}
						}
						
					}
					return false;
				}
				function allLetter(txtName)
					{ 
						var letters = /^[A-Za-z]+$/;
						if(txtName.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Name must have alphabet characters only');
							txtName.focus();
							return false;
						}
					}
					
					function allLetter1(txtaddress)
					{ 
						var letters = /^[A-Za-z]+$/;
						if(txtaddress.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Shipping address must have alphabet characters only');
							txtaddress.focus();
							return false;
						}
					}
					
					function allLetter2(txtPhno)
					{ 
						var letters = /^[0-9]+$/;
						if(txtPhno.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('phone number must have digits only');
							txtPhno.focus();
							return false;
						}
					}
					
					
					function allLetter3(txtEmail)
					{ 
						var letters = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
						if(txtEmail.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('Insert proper email id');
							txtEmail.focus();
							return false;
						}
					}
					
					
					function allLetter4(txtcity)
					{ 
						var letters = /^[A-Za-z]+$/;
						if(txtcity.value.match(letters))
						{
							return true;
						}
						else
						{
							alert('City must have alphabet characters only');
							txtcity.focus();
							return false;
						}
					}



	
			 </script>

	  
	  
				
            <?php
			$query="select * from tbl_customer where cust_id=$cust_id";
			$res=mysql_query($query);
			$row=mysql_fetch_array($res);
			
			?>     
    <form name="order" method="post" action="order.php" onSubmit="return formValidation();">          
                 	<table border="5" class="ordertable">
						<tr>
							<td>
                    			<label class="contact"><strong>Name:</strong></label>
							</td>
							<td>
                    			<input type="text" name="txtName" value="<?php echo $row['cust_name'] ?>"/>
             				</td>
						</tr>
						<tr>
							<td>
								<label class="contact"><strong>Address:</strong></label>
							</td>
							<td>
								<input type="radio" name="rdoaddress" id="oldAdd" value="old" checked="checked" onClick="javascript: checkAddress(this.value,'                     			<?php echo $row['address']; ?>');"/>Existing Address                   
								<input type="radio" name="rdoaddress" id="newAdd" value="new" onClick="javascript: checkAddress(this.value,'');"/>New Address
							</td>
						</tr>
						<tr>
							<td>
								<label class="contact"><strong>Shipping Address:</strong></label>
                    		</td>
							<td>
								<textarea name="txtaddress" id="txtaddress"><?php echo $row['address'];?></textarea>
							</td>
						</tr>
						<tr>
							<td>
                 			   <label class="contact"><strong>Phno:</strong></label>
						  </td>
							<td>
                    			<input type="text" name="txtPhno" maxlength="10" value="<?php echo $row['contactno']?>"/>
							</td>
						</tr>
						<tr>
							<td> 
                    			<label class="contact"><strong>Email:</strong></label>
							</td>
							<td>
                    			<input type="text" name="txtEmail"  value="<?php  echo $row['email_id']; ?>"/>
							</td>
						</tr>
                   		
                    	<tr>
							<td>
                			    <label class="contact"><strong>City:</strong></label>
							</td>
							<td>
                    			<input type="text" name="txtcity" value="<?php echo $row['city']; ?>"/>
							</td>
						</tr>
                   
                   <!--div class="form_row">
                    <label class="contact"><strong>Pincode:</strong></label>
                    <input type="text" name="txtPin" <?php //echo $row['pincode']; ?>/>
                    </div><br /-->
                   <tr> 
           		        <td colspan="2" align="center">
                   			<input type="submit" class="register" name="btnSave" value="Save" />
          				</td>
					</tr>
				</table>
    </form>     
              
</div>
</div>
<div class="footer_bg"><!-- start footer -->
</div>
<div class="footer1_bg"><!-- start footer1 -->
</div>
</div>
</body>
</html>


