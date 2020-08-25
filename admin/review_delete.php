<?php
require("connection.php");
$uid=$_GET['order_no'];
	if(isset($_REQUEST['order_no']))
	{
		$sqls="delete from shipping_detail where order_no=$uid";
		mysql_query($sqls);
		//echo $sqls;
		header("location:adminreview_order.php");
	}
	else
	{
		//echo "hi";
		header("location:adminreview_order.php");
	}

?>