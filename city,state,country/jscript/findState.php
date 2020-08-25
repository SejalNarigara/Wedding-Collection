<?php 

include "connection.php";

$country=$_GET['country'];

$query="SELECT state_id,state_name FROM statemaster WHERE country_id='$country'";
$result=mysql_query($query);

?>
<select name="state" onchange="getCity(<?php echo $country; ?>,this.value,'citydiv')">
<option>Select State</option>
<?php while($row=mysql_fetch_array($result)) 
{ 
	echo "<option value=".$row['state_id'].">".$row['state_name']."</option>";
 
}
?>
</select>
