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
	//echo $uid;
	if(!isset($_REQUEST['id']))
	{
		header("location:city_index.php");
	}
	else
	{
		$update=mysql_query("Select * from city where city_id=$city_id");
		$rows=mysql_fetch_array($update);
	}
?>
<?Php
{
if(isset($_POST['btnupdate']))
    $name=$_POST['txtname'];
	$country_id=$_POST['txtcountry_id'];
	$state_id=$_POST['txtstate_id'];
	$update=$_POST['btnupdate'];
	if($update)
	{	
		$sqls="update city set name= '$name' ,country_id='$country_id',state_id='$state_id' where city_id=$city_id";
		//echo $sqls;
		mysql_query($sqls);
		header("location:city_index.php");
	}
	include("header.php");
}
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
    <td>State_id:</td>
    <td><input type="text" name="txtstate_id" size="30px" value="<?php  echo $rows['state_id']?>"/></td>
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