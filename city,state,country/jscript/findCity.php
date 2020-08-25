<?php 

include "connection.php";

$cId=$_GET['country'];
$sId=$_GET['state'];

$query="SELECT city_id,city_name FROM city WHERE city_id='$cId' AND state_id='$sId'";
$result=mysql_query($query);

?>
<select name="city">

<option>Select City</option>

<?php while($row=mysql_fetch_array($result)) 
{ 
	echo "<option value=".$row['city_id'].">".$row['city_name']."</option>";
}
?>
</select>
