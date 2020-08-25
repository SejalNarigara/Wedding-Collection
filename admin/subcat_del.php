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
		$sqls="delete from tbl_sub_cat where sub_cat_id=$cid";
		mysql_query($sqls);
		header("location:viewsubcat.php");
	}
	else
	{
		header("location:viewsubcat.php");
	}

?>
