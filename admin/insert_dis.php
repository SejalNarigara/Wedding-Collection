<?php 
require("connection.php");

if(isset($_POST['btnsave']))
{   
  
	$discount=$_POST['discount'];
	$min_amount=$_POST['min_amt'];
	$max_amount=$_POST['max_amt'];
	$sqls= "insert into discount(discount,min_amount,max_amount)values ('$discount','$min_amount','$max_amount')";
	//echo $sqls;
	//return;
	mysql_query($sqls);
	header("location:discount.php");
}
	
?>