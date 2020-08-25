<?php
	$con = mysql_connect("localhost","root","") or die("Couldnt connect with DB".mysql_errno().mysql_error());
	if($con){
		mysql_select_db("onlineweddingcollection",$con) or die (mysql_errno()." 
              Database couldnot found ".mysql_error());
	}else{
		die (mysql_errno()." Server localhost not found ".mysql_error());
		exit();
	}
?>	