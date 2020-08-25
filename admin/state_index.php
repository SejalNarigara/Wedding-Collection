<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>

<?php
session_start();
if(!isset($_SESSION['username']))
{
header("Location:index.php");
}
include("header.php");

require("connection.php");
?>
<link href="css2/style.css" rel="stylesheet" type="text/css">

<form action="state_insert.php" method="post">
<center>
<table width="1000" border="0" class="border_cell">
	<tr align="center">
		<td class="table_header"><font size="5"><b>STATE</b></font></td>
	</tr>
	<tr><td><br>
	<center>
<table width="582" border="1" class="border_cell">
 
 
  <tr>
    <td class="text_bold">Country:</td>
    <td>
	<!--input type="text" name="txtcountry_id" size="30px"/-->
	
	<select name="txtcountry_id">
	<option value="-1"> --select country-- </option>
		<?php
		$query="select * from country";
		$res=mysql_query($query);
		while($row=mysql_fetch_array($res))
		{
				echo "<option value=".$row['country_id'].">". $row['name']."</option>";
		}
		
		?>
		
	</select>
	</td>
  </tr>
  
  
  <tr>
    <td class="text_bold">Name:</td>
    <td><input type="text" name="txtname" size="30px" required/></td>
  </tr>
 
  <tr>
    <td><input type="submit" name="btnsave" value="Save" /></td>
    <td><input type="reset" name="btnReset" value="Reset" /></td>
  </tr>
</table>
</center>
</td>
</tr>
</table>
</center>
</form>
<center>
<table border="1" width="700px">
<tr>
	<th>State_Id</th>
	<th>Name</th>
	<th>Country_Id</th>

	<th>Update</th>
	<th>Delete</th>
</tr>
<?php
$result=mysql_query("select * from state");
while($rows=mysql_fetch_array($result))
{
	echo '<tr align="center">';
	echo '<td width="100px">'.$rows['state_id'].'</td>';
	echo '<td width="100px">'.$rows['name'].'</td>';
	echo '<td width="100px">'.$rows['country_id'].'</td>';

	echo '<td><a href="state_update.php?id='.$rows['state_id'].'"><input type="Button" Value="Update"></a></td>';
	echo '<td><a href="state_delete.php?id='.$rows['state_id'].'"><input type="Button" Value="Delete"></a></td>';
	echo '</tr>';
}
?>
</table>
</center>
<?php 
include("footer.php");
?>
