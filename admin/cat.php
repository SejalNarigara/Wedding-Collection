<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>
<?php
include("connection.php");
if(isset($_REQUEST['submit']))
{
$name=$_POST['cat_name'];
$des=$_POST['cat_desc'];
$sql="insert into tbl_cat(cat_name,cat_desc) value ('$name','$des')";
mysql_query($sql);
header("location:adminCategory.php");
}
?>
