<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<?php
require("connection.php");
$sub_category_id=$_GET['id'];
	if(isset($_REQUEST['id']))
	{
		$sqls="delete from tbl_sub_cat where sub_cat_id=$sub_category_id";
		mysql_query($sqls);
		echo $sqls;
		header("location:sub_category_index.php");
	}
	else
	{
		echo "hi";
		header("location:sub_category_index.php");
	}

?>