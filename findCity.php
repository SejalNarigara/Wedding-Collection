<?php 

include "connection.php";

$cId=$_GET['country'];
$sId=$_GET['state'];

$query="SELECT cityid,cityname FROM city WHERE cid='$cId' AND sid='$sId'";
$result=mysql_query($query);

?>
<select name="city">
<option>Select City</option>

<?php while($row=mysql_fetch_array($result)) 
{ 
	echo "<option value=".$row['cityid'].">".$row['cityname']."</option>";
}
?>
</select>
