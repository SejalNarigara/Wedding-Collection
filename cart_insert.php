<?php
include "connection.php";

$query="select * from tbl_temp where Cust_id=$cust_id";
$res=mysql_query($query);

while($row=mysql_fetch_array($res))
{
	$prod_id=$row['Prod_id'];
	//$prod_name=$row['prod_name'];
	$price=$row['Price'];
	$qty=$row['Quantity'];

	$query="insert into tbl_add_to_cart(prod_id,cust_id,price,quantity_cart) values ($prod_id,$cust_id,$price,$qty)";
	//echo $query;
	///return;
	mysql_query($query);
	
	
}

//$query="delete from tbl_temp where cust_id=$cust_id";
//mysql_query($query);

//header("location:order.php");

?>

