<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$review="";
	$err_review="";
	$email="";
	$err_email="";
	$feedback="";
	$err_feedback="";
	$password="";
	$err_password="";
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=3){
			$err_name="Name Must be greater than 2";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else if (strlen($_POST["username"])<=3)
		{
			$err_uname="User name must be greater then 2";
			$hasError=true;
		}
		else{
			$uname=$_POST["username"];
		}
		if(!isset($_POST["review"])){
			$err_review="Review Required";
			$hasError = true;
		}
		else{
			$review = $_POST["review"];
		}
		if(empty($_POST["feedback"])){
			$err_feedback="Feedback Required";
			$hasError = true;
		}
		else{
			$feedback = $_POST["feedback"];
		}
		if(empty($_POST["password"]))
		{
			$err_password="*Password Required";
			$hasError = true;
		}
		else if (strlen($_POST["password"])<=8)
		{
			$err_password="Password must be greater then or equal 8";
			$hasError=true;
		}
		else
		{
			$pass = $_POST["password"];
		}
		
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["review"]."<br>";
			echo $_POST["feedback"]."<br>";
			echo $_POST["password"]."<br>";
			
			}
		}

?>
<html>
	<head><center><b>Give Review<b><center></head>
	<body>
		<fieldset>
			<form action="" method="post">
				<table align="center">
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>

					<tr>
						<td>Review: </td>
						<td><input type="radio" value="Male" <?php if($review == "Male") echo "checked";?> name="review"> Male <input <?php if($review == "Female") echo "checked";?> name="review"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_review;?></span></td>
					</tr>
					<tr>
						<td>Feedback:  </td>
						<td>
							<textarea name="feedback" placeholder="Feedback"><?php echo $feedback;?></textarea>
						</td>
						<td><span><?php echo $err_feedback;?></span></td>
					</tr>
					
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" placeholder="Password"></td>
						<td><span><?php echo $err_password;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Done"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>