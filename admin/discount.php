<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 include("connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - Contact</title>
<meta name="keywords" content="web store, contact page, form, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme, Contact Form, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
  <!-- END of header --><!-- end of templatemo_menu -->
  <div id="templatemo_main">
    <!-- END of sidebar -->
<div id="content">
        	<h2>Discount</h2>
			
            <div class="col col_13">
            <br />
            <div id="contact_form">
			<?php
				$id=$_GET['id'];
				if(!isset($id))
				{
				?>               
					<form method="post" name="contact" action="insert_dis.php">
                    
                    <label for="author">Discount :</label> <input type="text" id="author" name="discount" class="required input_field" />
                    <div class="cleaner h10"></div>
						
                    <label for="email">Minimum Amount :</label> 
                    <input type="text" id="email" name="min_amt" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>
                        
                    <label for="subject">Maximum Amount :</label> 
                    <input type="text" name="max_amt" id="subject" class="input_field" />
                    <div class="cleaner h10"></div>
					<input type="submit" value="Send" id="submit" name="btnsave" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
              </form>        
                   
             
			  <?php
				}
				else
				{	
				$update1=mysql_query("Select * from discount where dis_id =$id");
				$rows=mysql_fetch_array($update1);
				?>
			  
				<form method="post" name="contact" action="">
                    
                    <label for="author">Discount :</label> <input type="text" id="author" name="discount"  value= "<?php echo $rows['discount']?>" class="required input_field" />
                    <div class="cleaner h10"></div>
						
                    <label for="email">Minimum Amount :</label> 
                    <input type="text" id="email" name="min_amt" value= "<?php echo $rows['min_amount']?>" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>
                        
                    <label for="subject">Maximum Amount :</label> 
                    <input type="text" name="max_amt" id="subject" value= "<?php echo $rows['max_amount']?>" class="input_field" />
                    <div class="cleaner h10"></div>
                    <div class="cleaner h10"></div>
 					
					<input type="submit" value="Send" id="submit" name="btnupdate" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
			  </form>
					<?Php
						}
						$dis=$_REQUEST['dis_id'];
						$discount=$_POST['discount'];
						$min_amount=$_POST['min_amt'];
						$max_amount=$_POST['max_amt'];
							
						$update1=$_POST['btnupdate'];
						if($update1)
						{	
							$sqls="update discount set discount='$discount',min_amount='$min_amount',max_amount='$max_amount' where dis_id=$id";
							//echo $sqls;
							//return;
							mysql_query($sqls);
							//header("location:discount.php");
						}
					?>
					

            </div>
		</div>
            <div class="cleaner h30"></div>
        
        <table border="1" width="700px">
<tr>
	<th>Disc_id</th>
	<th>Discount</th>
	<th>Maximum Amount</th>
	<th>Minimum Amount 	</th>
	<th>Delete</th>
	<th>Update</th>
</tr>
<?php
$result=mysql_query("select * from  discount");
//echo $result;
//return;
while($rows=mysql_fetch_array($result))
{
	echo '<tr align="center">';
	echo '<td width="100px">'.$rows['dis_id'].'</td>';
	echo '<td width="100px">'.$rows['discount'].'</td>';
	echo '<td width="100px">'.$rows['min_amount'].'</td>';
	echo '<td width="100px">'.$rows['max_amount'].'</td>';
	
	
		
	echo '<td><a href="delete_dis.php? dis_id='.$rows['dis_id'].'"><input type="Button" Value="Delete"></a></td>';
	echo '<td><a href="discount.php?id='.$rows['dis_id'].'"><input type="Button" Value="Update"></a></td>';
	echo '</tr>';
}
?>
</table>

            
    </div> <!-- END of content -->
        <div class="cleaner"></div>
  </div> <!-- END of main -->
  <!-- END of footer -->
</div>

</body>
</html>