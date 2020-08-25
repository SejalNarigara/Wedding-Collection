
<?php
require("connection.php");
$cid=$_GET['id'];
	if(isset($_REQUEST['id']))
	{
		$sqls="delete from registation where customer_id=$cid";
		mysql_query($sqls);
		header("location:viewregistration.php");
	}
	else
	{
		header("location:registration.php");
	}

?>
