<?php
$uname="";
$err_uname=""; 
$id="";
$err_id="";
$password="";
$err_password="";
$err=false;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		if(empty($_POST["uname"]))
		{
			$err_uname="*User name Required";
			$err=true;
		}
		else if (strlen($_POST["uname"])<=3)
		{
			$err_uname="User name must be greater then 3";
			$err=true;
		}
		else
		{  
			$uname=$_POST["uname"];
		}
		if(empty($_POST["id"]))
		{
			$err_id="*id Required";
			$err = true;
		}
		else
		{
			$id = $_POST["id"];
		}
		if(empty($_POST["password"]))
		{
			$err_password="*Password Required";
			$err = true;
		}
		else if (strlen($_POST["password"])<=8)
		{
			$err_password="Password must be greater then or equal 8";
			$err=true;
		}
		else
		{
			$password = $_POST["password"];
		}
		if(!$err)
		{
			echo $_POST["uname"]."<br>";
			echo $_POST["id"]."<br>";
			echo $_POST["password"]."<br>";
		}
	}		
?>
<html>
<head></head>
<body>
<fieldset>
<form action="" method="post">
<table align="center">
	<tr>
		<th colspan = 3>Give these information to Login</th>
	</tr>
	<tr>
		<td><b>User Name </b></td>
		<td>:</td>
		<td><input type="text" name="uname" value = "<?php echo $uname; ?>" placeholder="Your User name here "></td>
		<td><span><?php echo $err_uname;?></span></td>
	</tr>
	<tr>
		<td><b>Enter your ID </b></td>
		<td>:</td>
		<td><input type="id" name="id" value = "<?php echo $id; ?>"placeholder="Your id here"></td>
		<td><span><?php echo $err_id;?></span></td>
	</tr>
	<tr>
		<td><b>Enter a password </b></td>
		<td>:</td>
		<td><input type="password" name="password" value="<?php echo $password;?>" placeholder="Your password here"></td>
		<td><span><?php echo $err_password;?></span></td>
	</tr>
	<tr>
		<td align="center" colspan="3"><input type="submit" name="submit"value="Confirm"></td>
	</tr>
	<tr>
		<td colspan = 3><p style="text-align:right"><a target="_blank" href="Forget password.php">Forget password</a></p></td>
	</tr>
</table>
</fieldset>
</body>
</html>