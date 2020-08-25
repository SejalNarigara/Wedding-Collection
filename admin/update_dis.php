<?php
	include("connection.php");
//	require("connection.php");
	$id=$_GET['id'];
	//echo $uid;
	if(!isset($_GET['id']))
	{
		header("location:index.php");
	}
	else
	{
		$update1=mysql_query("Select * from discount where dis_id =$id");

		$rows=mysql_fetch_array($update1);
	}
?>
<form action="" method="post">
<table width="582" border="0" align="center">
    <tr>
    <td>Discount :</td>
    <td><input type="text" name="discount" size="30px" value= "<?php echo $rows['discount']?>"/></td>
  </tr>
  <tr>
    <td>Minimum Amount :</td>
    <td><input type="text" name="min_amt" size="30px" value= "<?php echo $rows['min_amount']?>"/></td>
  </tr>
  <tr>
    <td>Maximum Amount :</td>
    <td><input type="text" name="max_amt" size="30px" value= "<?php echo $rows['max_amount']?>"/></td>
  </tr>  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="btnupdate" value="Update" /></td>
  </tr>
</table>
</form>
<?Php

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
		header("location:discount.php");
	}
?>