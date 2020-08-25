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
	
	if(isset($_SESSION['cust_id']))
	{
		
		$cust_id=$_SESSION['cust_id'];

	}
	
	//$cust_id=1;
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include ("connection.php");
//$cust_id=1;

if(isset($_REQUEST['update']))
{
	$prod_id=$_REQUEST['prod_id'];
?>
<script language="javascript1.5">
		alert('Not sufficient stock.Please order less quantity.');
		window.location.href='cart.php?prod_id='+<?php echo $prod_id ?>;
</script>

<?php		

}
else if(isset($_REQUEST['action']))
{
		$prod_id=$_REQUEST['prod_id'];
		$query="delete from tbl_temp where prod_id=$prod_id and cust_id=$cust_id";
	//echo $query;
		mysql_query($query);
		
//		return;
		
//		header("location:cart.php");		
}


if(isset($_REQUEST['prod_id']))
{
$prod_id=$_REQUEST['prod_id'];

//echo "prod_id=".$prod_id;



$query="select image,prod_name,price,quantity from tbl_product where prod_id=".$prod_id;
//echo $query;
$res=mysql_query($query);
$row=mysql_fetch_array($res); 

$name=$row['prod_name'];
$price=$row['price'];
$img=$row['image'];
$qtystock=$row['quantity'];
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Wedding Collection | Blog </title>
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


<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="cart_css/cart.css" />


<script type="text/javascript">
function gettotal(val,name,qty,cust_id)
{

	
	var qty=document.getElementById(name).value;
//	alert(qty);

	//var v=document.getElementById(divid).innerHTML;
	//alert(v);
	total=qty*val;	
	
	document.getElementById('div'+name).innerHTML=total;
	var temp=document.getElementById('maintotal').innerHTML;
	
	//alert(window.location.href);
	window.location.href='temp_update.php?prod_id='+name+'&qty='+qty+'&cust_id='+cust_id;
//alert(window.location.href);
	//document.submit();
	
	//var maintotal=parseInt(temp);
	
	//alert(maintotal);
	
}
</script>


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
			</li>
			 --></li>
<!--			<li><a href="blog.php">BLOG</a></li>
 --><!--			<li><a href="contact.php">CONTACT</a></li>
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
		<h3 class="style pull-left">my cart </h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">my cart </li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="blog"><!-- start blog -->
			<div class="blog_main col-md-9">
				<div class="blog_list">
					<div class="col-md-2 blog_date">
						<span class="date"><?php echo date("d/m/y");?>
 <p><?php //echo date("l"); ?><p></p></span>
						<span class="icon_date"><i class="fa fa-laptop"></i> </span>
					</div>
					<div class="col-md-10 blog_left">
						<!--<a href="single-page.php"> -->
						
						<table style="width:800px;" border="2" align="center" class="cart_table">
			
            	<tr class="cart_title">
                	<td width="170">Picture</td>
                	<td width="200">Product Name</td>
                    <td width="100">Price</td>
                    <td width="210">Qty</td>
                    <td width="100">Total</td>
                    <td width="100">Remove</td>               
                </tr>
				
                <?php
					
					$query="select * from tbl_temp where cust_id=".$cust_id;
					$tempres=mysql_query($query);
					
					
					//echo $query;
					$maintotal=0;
//					$allcombodiv="";
					$item_cnt=0;
	
				while($temprow=mysql_fetch_array($tempres))
				{
					$item_cnt++;
					
						$tempname=$temprow['prod_name'];
						$tempprice=$temprow['price'];
						$tempqty=$temprow['qty'];
						$tempprod_id=$temprow['prod_id'];
						
						$total=$tempprice*$tempqty;
						$maintotal=$maintotal+$total;
						
						$query="select Image from tbl_product where Prod_id=".$tempprod_id;
						
						//echo $query;
						//return;
						
						$imgres=mysql_query($query);
						$imgrow=mysql_fetch_array($imgres);
						$img=$imgrow['Image'];
						$path='admin/upload_img/'.$img;

				//echo $path;
				
					//	$allcombodiv .= "div".$tempprod_id.":";

				?>
				
            	<tr>
                	<td><a href=""><img src="<?php echo $path; ?>" alt="" title="" width="100" height="100" border="0" class="cart_thumb" /></a></td>
                	<td><?php echo $tempname; ?></td>
                    <td><?php echo $tempprice; ?></td>
                    <td>
					
						<select style=" width:200px;"  id="<?php echo $tempprod_id; ?>" name="<?php echo $tempprod_id; ?>" onChange="gettotal(<?php echo $tempprice;?>, <?php echo $tempprod_id;?>,this.value,<?php echo $cust_id; ?>);">
                        
						<?php
							for($i=1;$i<=10;$i++)
							{
									if($i == $tempqty)
									{
										?>
                                        <option value="<?php echo $i ?>" selected="selected"><?php echo $i ?></option>
                                        <?php
									}
									else
									{
						?>
										<option value="<?php echo $i ?>"><?php echo $i ?></option>
						
						<?php
									}
							}
						?>
						</select>			
								</td>
                       <td><div id="div<?php echo $tempprod_id; ?>"><?php echo $total; ?></div></td>
                       <td><a href="cart.php?prod_id=<?php echo $tempprod_id; ?>&action=delete" >Remove</a>
           	  </div></td>               
                </tr>          
				
				<?php
				}
				
				if($item_cnt > 0)
				{
				?>

                <tr>
                <td colspan="4" class="cart_total"><span class="red">TOTAL SHIPPING:</span></td>
                <td colspan="2" align="center"><strong> <div id="maintotal"><?php  echo $maintotal; ?></div></strong></td>                
                </tr>  
                
                <!--<tr>
                <td colspan="4" class="cart_total" ><span class="red">TOTAL:</span></td>
                <td colspan="2">&nbsp; </td>                
                </tr>  -->                 
            	<tr>
                <td colspan="3"><a class="btn btn1" href="portfolio.php">Continue Shopping</a></td>
                <td colspan="3"> <?php
							if($item_cnt > 0)
							{
							?>
							<a class="btn btn1" href="order_detail.php">Checkout</a>
							
							<?php
							}
							?>	</td>                
                </tr>                  
                <?php
				}
				else
				{
					//echo '<center>';
					echo '<tr><td colspan="4" style="color:red" ><h3>Cart Is Empty</h3></td></tr>';
					//echo '</center>';
				}
				?>
				
            </table>
			</center>
            
           		
						<!--<img src="images/slider1.jpg" alt="" class="img-responsive"/> </a>-->
						<!--<h4><a href="single-page.php">Lorem Ipsum is simply dummy text of the printing and typesetting industry </a></h4>
						<span>posted by <a href="#">Admin</a> in <a href="#">Wordpress</a> <a class="left" href="#"><i class="fa fa-comment"></i>Comments</a> <a class="left" href="#"><i class="fa fa-eye"></i>124 views</a></span>
						<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p> -->
					    
	          </div>
					 <div class="clearfix"></div>
				</div>
				<div class="blog_list">
				  <div class="clearfix"></div>
			  </div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 blog_right">
				<!--<h4>Ads 125 x 125</h4>
				<ul class="ads_nav list-unstyled">
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<div class="clearfix"></div>
				</ul>
				<ul class="tag_nav list-unstyled">
					<h4>tags</h4>
						<li class="active"><a href="#">awesome</a></li>
						<li><a href="#">art</a></li>
						<li><a href="#">classic</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">wordpress</a></li>
						<li><a href="#">videos</a></li>
						<li><a href="#">standard</a></li>
						<li><a href="#">gaming</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">music</a></li>
						<li><a href="#">data</a></li>
						<div class="clearfix"></div>
				<!--</ul> -->
				<!--<div class="news_letter">
					<h4>news letter</h4>
						<form>
							<input type="text" placeholder="Your email address">
							<input type="submit" value="subscribe">
						</form>
				</div> -->
			</div>
			<div class="clearfix"></div>
	</div><!-- end blog -->
</div>
</div>
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
				<li><a href="terms&condition.php"><em><strong>TERMS &amp; CONDITION </strong></em></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>