<?php
  session_start();
	if(!isset($_SESSION['id']))
	{
		header("location:index.php");
	} 
 
?>
<?php
	include('connection.php');
?>
<br />
<center><h1><a href="subcat.php" ><font color="#FFFFFF"> Add Sub Category </font></a></h1>
<br />
<br />
<table border="1" align="center">
<tr>
	<th><h4><font color="#FFFFFF">Sub_Cat_id</font></h4></th>
	<th><h4><font color="#FFFFFF">Cat_id</font></h4></th>
	<th><h4><font color="#FFFFFF">Sub_cat_name</font></h4></th>
	<th><h4><font color="#FFFFFF">Sub_cat_desc</font></h4></th>
	<th><h4><font color="#FFFFFF">Update</font></h4></th>
	<th><h4><font color="#FFFFFF">Delete</font></h4></th>
</tr>
<?php
$result=mysql_query("select * from tbl_sub_cat");
while($rows=mysql_fetch_array($result))
{
	echo '<tr align="center">';
	echo '<td width="100px">'.$rows['sub_cat_id'].'</td>';
echo "<td align='justify' class='textarea' valign='top'>";
				category_name($rows['cat_id']);
				//echo $row['cat_id'];
			echo "</td>";
	echo '<td width="100px">'.$rows['sub_cat_name'].'</td>';
	echo '<td width="100px">'.$rows['sub_cat_desc'].'</td>';
	echo '<td><a href="subcat_update.php?id='.$rows['sub_cat_id'].'"><input type="Button" Value="Update"></a></td>';
	echo '<td><a href="subcat_del.php?id='.$rows['sub_cat_id'].'"><input type="Button" Value="Delete"></a></td>';
	echo '</tr>';
}
?>

</table>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php
function category_name($catid)
	{	
		include('connection.php');
		$sql="select * from tbl_cat where cat_id=$catid";
		$result=mysql_query($sql,$con);
		$rows=mysql_fetch_array($result);
		echo $rows['cat_name'];
	}
?>



