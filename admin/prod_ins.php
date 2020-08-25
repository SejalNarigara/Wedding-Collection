<?php
	include('connection.php');
	
	if (isset($_POST['submit']))
	{
		//$pid = $_POST['Prod_id']; 
		$pname=$_POST['prod_name'];
		$desc = $_POST['description']; 
		$priz = $_POST['price']; 
		$colr = $_POST['color']; 
		$size=$_POST['size']; 
		$brnd=$_POST['brand']; 
		$qunt=$_POST['quantity'];
		$collection=$_POST['collectiontype'];
//		$img=$_POST['Image']; 
		$cid=$_POST['cat_id']; 
		
		$scid=$_POST['sub_cat_id']; 
		$img = $_FILES['imagefile']['name']; 
//    echo	"Hello". $simage;
	
	$extension = substr(strrchr($img, '.'), 1);
	echo $extension;
	if (strtoupper(($extension != "jpg")) && strtoupper(($extension != "jpeg"))&& strtoupper(($extension != "png")) && strtoupper(($extension != "gif")) && strtoupper(($extension != "bmp"))) 
	{
		die('Unknown extension');
	}
	include('connection.php');
	$sql = mysql_query("SELECT MAX(prod_id) FROM tbl_product");
	$result = mysql_fetch_array($sql);
	$cur_auto_id = $result['MAX(prod_id)'] + 1;
	$new_image = $cur_auto_id.".".$extension;
	//echo "$new_image";	
	//include('connection.php');
	
	
	
			
		

		$sql = "insert into tbl_product(prod_name,description,price,color,size,brand,quantity,image,cat_id,sub_cat_id,collection_type)values('$pname','$desc','$priz','$colr','$size','$brnd','$qunt','$new_image','$cid','$scid','$collection')";
		//echo $sql;
		mysql_query($sql);
		
		$uploaddir = 'upload_img/';
		$file = $uploaddir . $new_image;
		move_uploaded_file($_FILES['imagefile']['tmp_name'], $file);
		header("location:adminproduct.php");
		
		
	}
	
?>
