<?php 
include("connection.php");
if(isset($_POST['btnsave']))
{   
    
	$name=$_POST['txtname'];
	$country_id=$_POST['txtcountry_id'];
	
	
	$sqls= "insert into state(name,country_id) values ('$name',$country_id)";
	echo $sqls;
	//return;
	
	mysql_query($sqls);
	header("location: state_index.php");
}
else
{
	header("location: state_index.php");
}
	
?>