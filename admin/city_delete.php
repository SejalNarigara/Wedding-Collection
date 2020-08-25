<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<?php
require("connection.php");
$city_id=$_GET['id'];
	if(isset($_REQUEST['id']))
	{
		$sqls="delete from city where city_id=$city_id";
		mysql_query($sqls);
		echo $sqls;
		header("location:city_index.php");
	}
	else
	{
		echo "hi";
		header("location:city_index.php");
	}

?>