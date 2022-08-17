<?php session_start(); 
if(!isset($_SESSION["userName"]))
{
   header('Location:Login.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
					<li><a href="Login.php"> Login </a></li>
					<li><a href="Register.php"> Register </a></li>
				</ul>
			</div>
		</div>
	<div align="center" class="contact">
	<h1> Contact us</h1>
	<h3> +94 77 578 66 50</h3>
	
	<p>&nbsp;</p>
	<h1> Email</h1>
	<h3> dilumthathsara64@gmail.com</h3>
	</div>
</body>
</html>