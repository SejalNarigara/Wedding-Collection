<?php
	
	session_start();
	
	$email=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	
	include('connection.php');
	$sql = "select * from admin where username='".$email."' and password='".$password."'";
	
	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	
	$username=$row['username'];
	$pwd=$row['password'];
	
	if($email== $username && $password == $pwd)
	{
		$_SESSION['id']=$row['username'];
		//echo $_SESSION['email'];
		//echo $row['username'];
	
		header("location: adminhome.php");		
	}
	else
	{
		header("location: index.php?res=1");
	}
?>





