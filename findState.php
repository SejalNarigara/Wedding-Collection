<?php 

include "connection.php";

$country=$_GET['country'];


$query="SELECT sid,sname FROM state WHERE cid='$country'";
$result=mysql_query($query);

?>
<select name="state" onchange="getCity(<?php echo $country; ?>,this.value,'citydiv')">
<option value="-1">Select State</option>
<?php while($row=mysql_fetch_array($result)) 
{ 
	echo "<option value=".$row['sid'].">".$row['sname']."</option>";
}
?>
</select>
