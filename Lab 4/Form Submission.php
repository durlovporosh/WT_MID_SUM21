<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$cpassword="";
	$err_cpassword="";
	$email="";
	$err_email="";
	$code="";
	$err_code="";
	$num="";
	$err_num="";
	$gender="";
	$err_gender="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$bio="";
	$err_bio="";
	$sources="";
	$err_sources="";
	
	
	
	if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["name"]))
			{
				$err_name="**Name Required";
			}
			else
			{
				$name=$_POST["name"];
			}
			
			if (strlen($_POST["username"])<6)
			{
				$err_username="Username length should be 6 or longer";
			}
			elseif(strpos($_POST["username"]," "))
			{
				$err_username=" White space is not allowed in Username";
			}
			else
			{
				$username=$_POST["username"];
			}
			if(strlen($_POST["password"])>8)
			{
				$password=$_POST["password"];
			if ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$err_password="Password should have minimum 1 character '?'or'#'";
				}
				for ($l=0;$l<strlen($_POST["password"]);$l++)
				{
					if (ctype_lower($_POST["password"][$l]))
					{
						break;
					}
					else
					{
						$err_password="Password should have minimum 1 lower case letter";
					}
				}
				for ($m=0;$m<strlen($_POST["password"]);$m++)
				{
					if (ctype_upper($_POST["password"][$m]))
					{
						break;
					}
					else
					{
						$err_password="password should have minimum 1 upper case letter";
					}
				}
				for($n=0;$n<strlen($_POST["password"]);$n++)
				{
					if(is_numeric($_POST["password"][$n]))
					{
						break;
					}
					else
					{
						$err_password="Password have minimum 1 numeric chara";
					}
				}
			}
			else	
			$err_password="Password length must be 8 or longer";
			
			if($_POST["cpassword"]!=$_POST["password"])
			{
				$err_cpassword="password not matched";
			}
			else{$cpassword=$_POST["cpassword"];}
			
			if(strpos($_POST["email"],"@"))
			{if(strpos($_POST["email"],"."))
			$email=$_POST["email"];
			}
			else $err_email="Email should be contain '@' and '.' sequentially";
			
			if(!is_numeric($_POST["code"]))
			{
				$err_code=" numeric value";
			}
			else $num=$_POST["num"];
			
			if(!is_numeric($_POST["num"]))
			{
				$err_num="Number should be numeric";
			}
			else $num=$_POST["num"];
			
			
			if (!isset($_POST["day"]))
			{
				$err_day="Day must be selected";
			}
			else
			{
				$day=$_POST["day"];
			}
			if (!isset($_POST["month"]))
			{
				$err_month="Month must be selected";
			}
			else
			{
				$month=$_POST["month"];
			}
			if (!isset($_POST["year"]))
			{
				$err_year="Year must be selected";
			}
			else
			{
				$year=$_POST["year"];
			}
			
			if (empty($_POST["bio"]))
			{
				$err_bio="blank bio is not applicable";
			}
			else
			{
				$bio=$_POST["bio"];
			}
			
			
			
			if(!isset($_POST["gender"]))
			{
				$err_gender="Please select a gender";
			}
			else
			{
				$gender=$_POST["gender"];
			}
			
			if(!isset($_POST["sources"]))
			{
				$err_sources="Least 1 source have to be ticked";
			}
			else
			{
				$sources=$_POST["sources"];
			}
		echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
		echo "passwor: ".htmlspecialchars($_POST["password"])."<br>";
		
		}
?>

<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center">Club Member Registration</legend>
			<table>
				<tr>
					<td><span >Name</span></td>
					<td>:<input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td><span >Username</span></td>
					<td>:<input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:<input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td><span>Confirm Password</span></td>
					<td>:<input type="password" name="cpassword" value="<?php echo $cpassword;?>"> </td><td><span><?php echo $err_cpassword;?></span></td>
				</tr>
				<tr>
					<td><span>Email</span></td>
					<td>:<input type="text" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:<input type="text" name="code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="num" value="<?php echo $num;?>" placeholder = "Number" size="10"> </td><td><span><?php echo $err_code;?></span><span><?php echo $err_num;?></span></td>
				</tr>
				<tr>
					<td><span>Address</span></td>
					<td>:<input type="text" name="sa" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" size="6">-<input type="text" name="state" placeholder = "State" size="8"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name="Pocode" placeholder = "Postal/Zip Code"></td>
				</tr>
				
				<tr>
				<td><span>Birth Date</span></td>
				<td>
				:<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
				<select name="month">
				<option disabled selected>Month</option>
				<?php
					$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
					for($j=0;$j<count($mon);$j++)
					{
						echo "<option>$mon[$j]</option>";
					}
				?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1990;$k<=2070;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>
				<tr>
				<td><span>Gender</span></td>
				<td>:<input type="radio" name="gender" value="Male"><span>Male</span>
				<input type="radio" name="gender" value="Female"><span>Female</span> </td><td><span> <?php echo $err_gender;?></span></td><br>
				</tr>
				<tr>
				<td><span>Where did you hear about us ?</span></td>
					<td>:<input type="checkbox" value="friend" name ="sources[]">A Friend or Colleague<br>
					<input type="checkbox"value="google" name ="sources[]">Google<br>
					<input type="checkbox"value="blog" name ="sources[]">Blog Post<br>
					<input type="checkbox"value="news" name ="sources[]">News Article</td><td> <span><?php echo $err_sources;?></span></td></br>
				</tr>			
				<tr>
				<td><span>Bio</span></td>
				<td>:<textarea name="bio" ></textarea></td>
				<td><span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
				<td><br></td>
				</tr>
				<tr>
				<td colspan="3" align="left">
				<input type="Submit" name="submit" value="Register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>