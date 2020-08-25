<?php
include "connection.php";
session_start();
$cust_id=$_SESSION['cust_id'];
$prod_id=$_REQUEST['prod_id'];
//$dqty=$_REQUEST['default_qty'];

$query="select qty from tbl_temp where prod_id=$prod_id && cust_id=$cust_id";

//echo $query;
$res=mysql_query($query);
$cnt=mysql_num_rows($res);

if($cnt > 0 )
{
	$row=mysql_fetch_array($res);
	$qty=$row['qty'];

$query="update tbl_temp set qty=qty+1 where prod_id=$prod_id && cust_id=$cust_id";
mysql_query($query);
	
	//echo $query;
	
	//echo "temp value :".$qty;
}
else
{
	//echo "else part ";
	
	
	$query="select * from tbl_product where prod_id=".$prod_id;

	$res=mysql_query($query);
	$row=mysql_fetch_array($res);
	$name=$row['prod_name'];
	$price=$row['price'];
//$qty=$row['quantity'];

	$query="insert into tbl_temp(prod_id,prod_name,price,qty,cust_id) values ($prod_id,'$name',$price,1,$_SESSION['cust_id'])";
	
	//echo $query;
	//return;
	
	mysql_query($query);

}

header("location:cart.php?prod_id=$prod_id");

?>