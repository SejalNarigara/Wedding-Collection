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
	//echo $uid;
	if(!isset($_REQUEST['id']))
	{
		header("location:state_index.php");
	}
	else
	{
		$update=mysql_query("Select * from state where state_id=$state_id");
		$rows=mysql_fetch_array($update);
	}
?>
<?Php
{
if(isset($_POST['btnupdate']))
    $name=$_POST['txtname'];
	$country_id=$_POST['txtcountry_id'];
	$update=$_POST['btnupdate'];
	if($update)
	{	
		$sqls="update state set name= '$name' ,country_id='$country_id' where state_id=$state_id";
		//echo $sqls;
		mysql_query($sqls);
		header("location:state_index.php");
	}
}
	include("header.php");
?>

<form action="" method="post">
<center>
<table width="582" border="1">
  <tr>
    <td>Name:</td>
    <td><input type="text" name="txtname" size="30px" value="<?php  echo $rows['name']?>"/></td>
  </tr>
  <tr>
    <td>Country_id:</td>
    <td><input type="text" name="txtcountry_id" size="30px" value="<?php  echo $rows['country_id']?>"/></td>
  </tr>
  <tr>
    <td  colspan="2" align="center"><input type="submit" name="btnupdate" value="Update" /></td>
  </tr>

</table>
</center>
</form>
<?php	
	include("footer.php");
?>