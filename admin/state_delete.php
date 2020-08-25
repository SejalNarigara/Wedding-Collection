<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<?php
require("connection.php");
$state_id=$_GET['id'];
	if(isset($_REQUEST['id']))
	{
		$sqls="delete from state where state_id=$state_id";
		mysql_query($sqls);
		echo $sqls;
		header("location:state_index.php");
	}
	else
	{
		echo "hi";
		header("location:state_index.php");
	}

?>