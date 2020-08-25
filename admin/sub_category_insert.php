<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<?php 
include("connection.php");
if(isset($_POST['btnsave']))
{   
    $category_id=$_POST['txtcategory_id'];
	$sub_category_name=$_POST['txtsub_category_name'];
	$sub_category_desc=$_POST['txtsub_category_desc'];

		$sqls= "insert into tbl_sub_cat(cat_id,sub_cat_name,sub_cat_desc) values ('$category_id','$sub_category_name','$sub_category_desc')";
	echo $sqls;
	mysql_query($sqls);
	header("location: sub_category_index.php");
}
else
{
	header("location: sub_category_index.php");
}
	
?>