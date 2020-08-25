
<?php
	require("connection.php");
	
	if(isset($_GET['id']))
	{
		$cid=$_GET['id'];
		$qry="Select * from registation where customer_id=$cid";
		$update=mysql_query($qry);
		$rows=mysql_fetch_array($update);
	}
	else
	{
		//header("location:registration.php");
	}
?>
<form action="registation_update.php" method="post">
<table width="582" border="0">
  <tr>
    <td>fname:</td>
	<td><input type="text" name="firstname" size="30px" value="<?php echo $rows['fname'];?>"/></td>
  </tr>
  
    <tr>
    <td>lname:</td>
    <td><input type="text" name="lastname" size="30px" value= "<?php echo $rows['lname'];?>"/></td>
  </tr>
  
    <tr>
    <td>address:</td>
    <td><input type="text" name="address" size="30px" value= "<?php echo $rows['address'];?>"/></td>
  </tr>
  
    <tr>
    <td>city:</td>
    <td><label>
    <select name="City">
      <option>mumbai</option>
      <option>vapi</option>
      <option>bardoli</option>
      <option>navsari</option>
      <option>baroda</option>
      <option>ahemdabad</option>
      <option>pune</option>
      <option>amrutsar</option>
      <option>surat</option>
        </select>
    </label></td>
    </tr>
  
    <tr>
    <td>state:</td>
    <td><label>
      <select name="State">
        <option>gujarat</option>
        <option>maharashtra</option>
        <option>punjab</option>
        <option>rajhsthan</option>
        <option>orrisa</option>
        <option>himachal</option>
        <option>tamilnadu</option>
        <option>bangal</option>
      </select>
    </label></td>
    </tr>
  
    <tr>
    <td>contact:</td>
    <td><input type="text" name="cont" size="30px" value= "<?php echo $rows['contact'];?>"/></td>
  </tr>
  
    <tr>
    <td>email:</td>
    <td><input type="text" name="e_mail" size="30px" value= "<?php echo $rows['email'];?>"/></td>
  </tr>
  
  
    <tr>
    <td>pass:</td>
    <td><input type="text" name="password" size="30px" value= "<?php echo $rows['pass'];?>"/></td>
  </tr>
  
  
  
  <tr>
    <td colspan="2" align="center"><input type="submit" name="update" value="Update" /></td>
  </tr>
</table>
	<input type="hidden" name="cid" value="<?php echo $cid;?>" />
</form>
<?php
	if(isset($_POST['update']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$cty=$_POST['City'];
		$c_state=$_POST['State'];
		$cont=$_POST['cont'];
		$e_mail=$_POST['e_mail'];
		$password=$_POST['password'];
		$cid=$_POST['cid'];
		
		//echo"$fname ,$lname,$address,$city,$state,$contact,$email,$pass,$confirm_pass";
		$update=$_POST['update'];
		if($update){	
			$sqls=	"update registation set fname='$firstname' ,lname='$lastname',address='$address',city='$cty',state='$c_state',contact='$cont',email='$e_mail',pass='$password'  where customer_id= $cid";
			//echo $sqls;
			mysql_query($sqls);
			header("location:viewregistration.php");
		}
	
	}
?>
