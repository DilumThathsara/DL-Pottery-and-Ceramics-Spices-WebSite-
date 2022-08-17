<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<link rel="stylesheet" href="CSS/NormalStyle.css">
	<style type="text/css">
	body
	{
		background: url("photo/itemBg.png");
		background-repeat: no-repeat;
		background-attachment: fixed
	}
	</style>
</head>

<body>
	<div class="Wrapper">
		<div class="Icon">
			<img src="photo/Logo.png" class="logo">			
			<ul>
			  <li><a href="Home.html"> Home </a></li>
			  <li><a href="Category.php"> Shop </a></li>
			  <li><a href="#"> Login </a></li>
			  <li><a href="Register.php"> Register </a></li>
			</ul>
		</div>
	</div>
<form name="Login" method="post" action="Login.php">
<p align="center">
        <label for="uname"><b>Email </b></label>
		  </p>
		  <p align="center">
		    <input type="text" placeholder="Enter Username" name="txtuname" required>
	      </p>
<p align="center">&nbsp;</p>
		  <p align="center"><br>
		    <label for="psw"><b>Password<br>
	        </b></label>
		    <input type="password" placeholder="Enter Password" name="txtpassword" required>
		  </p>
	<p>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			$username = $_POST["txtuname"];
			$password = $_POST["txtpassword"];
			$valid = false;
			
			$con = mysqli_connect("localhost","root","","it20777722_wad");
			
			if(!$con)
			{
				die("Cannot connect to DB Server");
			}
			
			$sql = "SELECT * FROM `customer` WHERE `email` = '".$username."' and `password` = '".$password."'";
			
			$result = mysqli_query($con,$sql);
			if(mysqli_num_rows($result) > 0)
			{
				$valid = true;
			}
			else
			{
				$valid = false;
			}
			
			if($valid)
			{
				$_SESSION["userName"] = $username;
				header('Location:Category.php');
			}
			else
			{
				echo "Please enter correct User name & Password";
			}
		}
		
		?>
	</p>
		  <p align="center">&nbsp; </p>
	
	<label>
        <input type="checkbox" checked="checked" name="cnkremember"> Remember me<br>
	</label>
	
<div class="container" align="center">
	  <button type="submit" name="btnsubmit">Login</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  <p class="psw">&nbsp;</p>
  <p class="psw">Forgot <a href="#">password?</a></p>
  </div>&nbsp;</td>
</form>
</body>
</html>