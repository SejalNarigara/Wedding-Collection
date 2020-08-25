<?php
	session_start();
	if(!isset($_SESSION['cust_id']))
	{
		header("location:clientlogin.php");
	}
	if(isset($_SESSION['cust_id']))
	{
		
		$cust_id=$_SESSION['cust_id'];

	}
?>


<?php
include "connection.php";

$prod_id=$_REQUEST['prod_id'];
$qty=$_REQUEST['qty'];
$cust_id=$_REQUEST['cust_id'];

$query="select Quantity from tbl_product where Prod_id=$prod_id";
$res=mysql_query($query);
$row=mysql_fetch_array($res);
$cnt=$row['Quantity'];

//echo "Stock :".$cnt;
//echo "Order :".$qty;

//return;


if($cnt < $qty)
{
	header("Location:cart.php?update=fail&prod_id=".$prod_id);		
}
else
{

$query="update tbl_temp set qty=$qty where prod_id=$prod_id && cust_id=$cust_id";
mysql_query($query);

	header("Location:cart.php?prod_id=$prod_id");		
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>