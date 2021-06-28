<?php
	$uname="";
	$err_uname="";
	$id="";
	$err_id="";
	$month="";
	$err_month="";
	$reason="";
	$err_reason="";
	$pass="";
	$err_pass="";
	
	$err=false;
	
	$month = array("January", "February", "March", "April", "May", "June", "July", "August","September", "October", "November", "December");

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["uname"]))
		{
			$err_uname="Username Required";
			$err = true;
		}
		else if(strlen($_POST["uname"]) <=3)
		{
			$err_uname="Username Must be greater than 2";
			$err = true;
		}
		else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["id"]))
		{
			$err_id="*Id Required";
			$err = true;
		}
		else
		{
			$id = $_POST["id"];
		}
		if(!isset($_POST["month"]))
		{
			$err_month = "Month Required";
			$err = true;
		}
		else{
			$month = $_POST["month"];
		}
		if(empty($_POST["reason"])){
			$err_reason="reason Required";
			$err = true;
		}
		else{
			$reason = $_POST["reason"];
		}
		if(empty($_POST["pass"]))
		{
			$err_pass="*Password Required";
			$err = true;
		}
		else if (strlen($_POST["pass"])<=8)
		{
			$err_pass="Password must be greater then or equal 8";
			$err=true;
		}
		else
		{
			$pass = $_POST["pass"];
		}
		if(!$err)
		{
			echo $_POST["uname"]."<br>";
			echo $_POST["id"]."<br>";
			echo $_POST["month"]."<br>";
			echo $_POST["reason"]."<br>";
			echo $_POST["pass"]."<br>";
		}
		
		
	}
?>
<html>
	<head></head>
		<body>
		<fieldset>
			<form action="" method="post">
				<table align="center" >
					<tr>
						<th colspan = 3>Give these information for resign request</th>
					</tr>
					<tr>
						<td><b>Username</b></td>
						<td><b>:</b></td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td><b>Enter your ID </b></td>
						<td><b>:</b></td>
						<td><input type="id" name="id" value = "<?php echo $id; ?>"placeholder="Your id here"></td>
						<td><span><?php echo $err_id;?></span></td>
					</tr>
					<tr>
						<td><b>month</b></td>
						<td><b>:</b></td>
						<td>
							<select name="month">
								<option selected disabled>--Select--</option>
								<?php
									foreach($month as $mn){
										if($month == $mn)
											echo "<option selected>$mn</option>";
										else
											echo "<option>$mn</option>";
									}
								?>
							</select> 
						</td>
						<td><span><?php echo $err_month;?></span></td>
					</tr>
					<tr>
						<td><b>reason</b></td>
						<td><b>:</b></td>
						<td>
							<textarea name="reason" placeholder="Reason"><?php echo $reason;?></textarea>
						</td>
						<td><span><?php echo $err_reason;?></span></td>
					</tr>
					<tr>
						<td><b>Password</b></td>
						<td><b>:</b></td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="3"><input type="submit" value="Confirm"></td>
					</tr>
					
				</table>
			</form>
			</fieldset>
		</body>
</html>