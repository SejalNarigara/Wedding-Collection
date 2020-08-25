<?php
require("connection.php");
$dis_id=$_REQUEST['dis_id'];

//echo "id=".$Catid;

//return;


	if(isset($_REQUEST['dis_id']))
	{
		$sqls="delete from  discount where dis_id=$dis_id";
		//echo $sqls;
		//return;
		mysql_query($sqls);
		header("location:discount.php");
	}
	else
	{
		header("location:discount.php");
	}

?>