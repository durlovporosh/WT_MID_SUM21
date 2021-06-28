<?php
$uname="";
$err_uname=""; 
$id="";
$err_id="";
$rd="";
$err_rd="";
$shift="";
$err_shift="";
$reason="";
$err_reason="";
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
		if(empty($_POST["rd"]))
		{
			$err_rd="*Requested date Required";
			$err=true;
		}
		else
		{
			$rd=$_POST["rd"];
		}
		if(!isset($_POST["shift"]))
		{
			$err_shift="* Request shift Required";
			$err=true;
		}
		else
		{
			$shift=$_POST["shift"];
		}
		if(empty($_POST["reason"])){
			$err_reason="*Reason Required";
			$err = true;
		}
		else
		{
			$reason = $_POST["reason"];
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
			echo $_POST["rd"]."<br>";
			echo $_POST["shift"]."<br>";
			echo $_POST["reason"]."<br>";
			echo $_POST["password"]."<br>";
		}
		

	}		
?>
<html>
	<body>
	<fieldset>
	<form action="" method="post">
		<table align="center">
			<tr>
				<th colspan = 3>Give these information to for leave request</th>
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
				<td><b>Enter your Requested date</b></td>
				<td>:</td>
				<td><input type="date" name="rd" value = "<?php echo $rd; ?>" placeholder="Your Requested date here"></td>
				<td><span><?php echo $err_rd;?></span></td>
			</tr>
			<tr>
				<td><b>Given shift </b></td>
				<td>:</td>
				<td><input type="radio" value = "Day shift" <?php if ($shift == "Day shift") echo "checked"; ?> name="shift" >Day shift<input type="radio" value = "Night shift"<?php if ($shift == "Night shift") echo "checked"; ?> name="shift">Night shift</td>
				<td><span><?php echo $err_shift;?></span></td>
			</tr>
			<tr>
				<td><b>Enter your reason for leave </b></td>
				<td>:</td>
				<td><textarea name="reason" placeholder ="Your reason here"><?php echo $reason; ?></textarea></td>
				<td><span><?php echo $err_reason;?></span></td>
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
		</table>
	</form>
	</fieldset>
	</body>
</html>