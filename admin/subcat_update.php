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
	
	if(!isset($_REQUEST['id']))
	{
		header("location:subcat.php");
	}
	else
	{
		$update=mysql_query("Select * from tbl_sub_cat where sub_cat_id=$cid");
		$rows=mysql_fetch_array($update);
?>
<br />
<center><h1><font color="#FFFFFF"> Update Sub Category </font></h1>
<br />
<br />
<form action="" method="post">
<table width="582" border="0">
  <tr>
    <td><h4><font color="#FFFFFF">Sub Cat Name:</font></h4></td>
	<td><input type="text" name="sub_cat_name" size="30px" value="<?php echo $rows['sub_cat_name']?>"/></td>
  </tr>
    <tr>
    <td><h4><font color="#FFFFFF">Sub Cat Description:</font></h4></td>
    <td><input type="text" name="sub_cat_desc" size="30px" value= "<?php echo $rows['sub_cat_desc']?>"/></td>
  </tr>
  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="update" value="Update" /></td>
  </tr>
</table>
</form>
<?Php
}	if(isset($_REQUEST['update']))
	{
    
	$scname=$_POST['sub_cat_name'];
	$scdes=$_POST['sub_cat_desc'];
	echo"$scname ,$scdes";
	$update=$_POST['update'];
	if($update)
	{	
		$sqls="update tbl_sub_cat set sub_cat_name= '$scname' ,sub_cat_desc='$scdes'  where sub_cat_id=$cid";
		mysql_query($sqls);
		header("location:viewsubcat.php");
	}
	
	}
?>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
