<?php
	include('connection.php');
	session_start();
	$email=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	
	
	
	$sql = "select * from registation where email='".$email."' and pass='".$password."'";
	//echo $sql;
//	return;
	
	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	
	$username=$row['email'];
	$pwd=$row['pass'];
	//echo $email;
	//echo $password;
	//echo $username;
	//echo $pwd;
	//return;
	
	if($email== $username && $password == $pwd)
	{
		$_SESSION['cust_id']=$row['cust_id'];
		
		//echo $email;
	//echo true;
		header("location:index.php");		
	}
	else
	{
	//echo false;
		header("location: clientlogin.php?res=1");
	}
?>