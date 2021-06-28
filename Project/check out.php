<?php
$uname="";
$err_uname=""; 
$date="";
$err_date="";
$time="";
$err_time="";
$payment="";
$err_payment="";
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
		if(empty($_POST["date"]))
		{
			$err_date="*Requested date Required";
			$err=true;
		}
		else
		{
			$date=$_POST["date"];
		}
		
		if(empty($_POST["time"]))
		{
			$err_time="*Requested Time Required";
			$err=true;
		}
		else
		{
			$date=$_POST["time"];
		}
		if(!isset($_POST["payment"]))
		{
			$err_payment="* Request payment Required";
			$err=true;
		}
		else
		{
			$payment=$_POST["payment"];
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
			echo $_POST["date"]."<br>";
			echo $_POST["time"]."<br>";
			echo $_POST["payment"]."<br>";
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
				<th colspan = 3>Give these information to Checkout</th>
			</tr>
			<tr>
				<td><b>User Name </b></td>
				<td>:</td>
				<td><input type="text" name="uname" value = "<?php echo $uname; ?>" placeholder="Your User name here "></td>
				<td><span><?php echo $err_uname;?></span></td>
			</tr>
			<tr>
				<td><b>Enter your checkout date</b></td>
				<td>:</td>
				<td><input type="date" name="date" value = "<?php echo $date; ?>"</td>
				<td><span><?php echo $err_date;?></span></td>
			</tr><tr>
				<td><b>Enter your checkout time</b></td>
				<td>:</td>
				<td><input type="time" name="time" value = "<?php echo $time; ?>"</td>
				<td><span><?php echo $err_time;?></span></td>
			</tr>
			<tr>
				<td><b>Payment clearance</b></td>
				<td>:</td>
				<td><input type="radio" value = "Alrady cleard" <?php if ($payment == "Alrady cleard") echo "checked"; ?> name="payment" >My payment is Alrady cleard<br><input type="radio" value = "Payment Due"<?php if ($payment == "Payment Due") echo "checked"; ?> name="payment">I have due payment</td>
				<td><span><?php echo $err_payment;?></span></td>
			</tr>
			<tr>
				<td><b>Enter a password </b></td>
				<td>:</td>
				<td><input type="password" name="password" value="<?php echo $password;?>" placeholder="Your password here"></td>
				<td><span><?php echo $err_password;?></span></td>
			</tr>
			<tr>
				<td align="center" colspan="3"><input type="submit" name="submit"value="Check out"></td>
			</tr>
		</table>
	</form>
	</fieldset>
	</body>
</html>