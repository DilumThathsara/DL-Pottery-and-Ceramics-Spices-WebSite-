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
	<link rel="stylesheet" href="CSS/Item.css">
	<style type="text/css">
	body
	{
		background: url("photo/itemBg.png");
		background-repeat: no-repeat;
		background-attachment: fixed
	}
	</style>
</head>
</head>

<body>
	<div class="Wrapper">
		<div class="Icon">
			<img src="photo/Logo.png" class="logo">			
			<ul>
				<li><a href="Home.html"> Home </a></li>
				<li><a href="MyProfile.php"> My Profile </a></li>
				<li><a href="Category.php"> Shop </a></li>
				<li><a href="Contact.php"> Contact Us </a></li>
			</ul>
		</div>
	</div>
	
	<form id="forml" name="forml" method="POST" action="">
	<div class="section">
			<div class="cards">
				<div class="new-arrival">
				<h1>New Arrival</h1>
				</div>
				
				<?php
				
				$con = mysqli_connect("localhost","root","","it20777722_wad");
				
				if(!$con)
					{
						die("Cannot Connect to DB Server");
					}
				
				$sql = "SELECT * FROM `product` WHERE `email` = 'dilumthathsara64@gmail.com' GROUP BY `productID` ASC";
				$result = mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)>0)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							echo"
				
				<div class='card'>
				<form action='Edit_Cart.php' method='post'>
				<div class='image-section'>
					<img src='".$row["Image"]."'>
					</div>
					<div class='description'>
					<h1 name='Pname'>'".$row["Pname"]."' </h1>
						<p><b name='size'>".$row["size"]."</b></p>
						<p><b name='price'>Rs.".$row["price"]."</b></p>
					</div>
					<div class='button-group'>
					<a href='payment.php' name='Add_Cart'  class='AddNow'>Buy Now</a>
					</div>
					</form>
				</div>";
					}
				}
				?>
		
				<?php
				
				if(isset($_POST["Add_Cart"]))
				{
					
					$Pname = $_POST["Pname"];
					$size = $_POST["size"];
					$quntity = $_POST["quntity"];
					$price = $_POST["price"];
						
						
					$con = mysqli_connect("localhost","root","","it20777722_wad");
		
					if(!$con)
					{
						die("Cannot Connect to DB Server");
					}	
					
					$sql2 = "INSERT INTO cart(email, cartID, Pname, Price, size, quantity, Total) VALUES (".$_SESSION["userName"].", NULL, ".$Pname.", ".$price.", ".$size.", ".$quntity.", NULL)";
					
					mysqli_query($con,$sql2);
			
				}
				?>
				</div>
		</div>
	</form>	
</body>
</html>