<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<?php
require("connection.php");
$cid=$_GET['id'];
	if(isset($_REQUEST['id']))
	{
		$sqls="delete from tbl_product where prod_id=$cid";
		mysql_query($sqls);
		header("location:adminproduct.php");
	}
	else
	{
		header("location:prod_delete.php");
	}

?>