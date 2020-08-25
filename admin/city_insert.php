<?php 
session_start();
if(!isset($_SESSION['username']))
{
header("Location:index.php");
}


include("connection.php");
if(isset($_POST['btnsave']))
{   
    
	$name=$_POST['txtname'];
	$country_id=$_POST['txtcountry_id'];
	$state_id=$_POST['txtstate_id'];
	
	$sqls= "insert into city(name,country_id,state_id) values ('$name','$country_id','$state_id')";
	echo $sqls;
	mysql_query($sqls);
	header("location: city_index.php");
}
else
{
	header("location: city_index.php");
}
	
?>