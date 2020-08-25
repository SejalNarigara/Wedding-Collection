<html>
<head>
<title>Agent Master</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript" type="text/javascript" src="jscript/csc.js">
</script>
</head>
<body>

<?php
include "connection.php";
$query="select * from country";
$res=mysql_query($query);

?>
<form method="post" action="" name="form1">
<table  border="1" align="center">
  <tr>
  
    <td>Country</td>
    <td>
    
    
    <select name="country" onChange="getState(this.value,'statediv')">
	<option value="">Select Country</option>
	<?php
	while($row=mysql_fetch_array($res))
	{
		echo "<option value=".$row['country_id'].">".$row['country_name']."</option>";
	}
    
?>

        </select></td>
  </tr>
  <tr style="">
    <td>State</td>
    <td ><div id="statediv"><select name="state" >
	<option>Select Country First</option>
        </select></div></td>
  </tr>
  <tr style="">
    <td>City</td>
    <td ><div id="citydiv"><select name="city">
	<option>Select State First</option>
        </select></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
