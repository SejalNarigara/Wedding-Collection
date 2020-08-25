<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<body>
<?php
	include('connection.php');
?>
<br />
<center><h1><font color="#FFFFFF"> Insert Sub Category </font></h1>
<br />
<br />
<form method="post" action="">
<table align="center">
	
	<tr>
	<td><h4><font color="#FFFFFF"> Cat name:</font></h4></td>
	<?php 
		$sql = "select cat_id,cat_name from tbl_sub_cat";
		$result = mysql_query($sql,$con);
	 ?>
	 
	<td><select name ="catid">
	<option value="">Select Catagory</option>
	<?php
		while ($row=mysql_fetch_array($result)) 
		{
			echo "<option value='$row[cat_id]'> $row[cat_name] </option>";
		}
	?>
	</select></td>
	</tr>
	
	<tr>
	<td><h4><font color="#FFFFFF">Sub Cat name:</font></h4></td>
	<td><input type="textbox" name="sub_cat_name"></td>
	</tr>
	
	<tr>
	<td><h4><font color="#FFFFFF">Sub Cat Description:</font></h4></td>
	<td><input type="textbox" name="sub_cat_desc"></td>
	</tr>
	
	<tr>
	<td colspan="2"><center><input type="submit" name="submit" value="submit"></center></td>
	</tr>
</table>
</form>
</body>
</html>
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<?php
include("connection.php");
if(isset($_REQUEST['submit']))
{
$catid=$_POST['catid'];
$name=$_POST['sub_cat_name'];
$des=$_POST['sub_cat_desc'];
$sql="insert into tbl_sub_cat(cat_id,sub_cat_name,sub_cat_desc) value ('$catid','$name','$des')";
mysql_query($sql);
header("location:subcat.php");
}
?>
