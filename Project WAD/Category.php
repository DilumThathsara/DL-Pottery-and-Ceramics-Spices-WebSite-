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
	<link rel="stylesheet" href="CSS/Style.css">
	<style type="text/css">
	body
	{
		background: url(photo/4.jpg");
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
				<li><a href="MyProfile.php"> My Profile </a></li>
				<li><a href="AddProducts.php"> Add Products </a></li>
				<li><a href="View_Product.php"> View Products </a></li>
			</ul>
		</div>
	</div>
	<div class="down">
		<h1> Select Your Category </h1>
		<p>&nbsp;</p>
	</div>
</body>
</html>