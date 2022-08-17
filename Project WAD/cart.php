<?php session_start(); 
if(!isset($_SESSION["userName"]))
{
   header('Location:Login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Cart  </title>
  <link rel='stylesheet' href="CSS/Item.css" />
	<style type="text/css">
	body
	{
		background: url("photo/Background.png");
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
				<li><a href="View_Product.php"> Viwe Products </a></li>
				<li><a href="cart.php"> Cart </a></li>
			</ul>
		</div>
	</div>
  	
	<form id="forml" name="forml" method="POST" action="">
	<div>
	<table width="786" border="1" align="right">
	  <tbody>
		<tr>
			<th width="153"> Pname </th>
			<th width="102"> Price </th>
			<th width="102"> Size </th>
			<th width="136"> quantity </th>
			<th width="137"> Total </th>
			<th> </th>
		</tr>
		  <?php
		  
		  $con = mysqli_connect("localhost","root","","it20777722_wad");
				$total=0;
				if(!$con)
					{
						die("Cannot Connect to DB Server");
					}
		  
		  $sql = "SELECT * FROM `cart` WHERE `email` = '".$_SESSION["userName"]."'";
		  $result = mysqli_query($con,$sql);
		  
		  if(mysqli_num_rows($result)>0)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							$sum= $row["Price"]*$row["quantity"];
							$total=$total+$sum;
				echo "
		  <tr>
			<td width='153'> ".$row["Pname"]." </td>
			<td width='102'> Rs. ".$row["Price"]." </td>
			<td width='102'> ".$row["size"]." </td>
			<td width='136'> ".$row["quantity"]."  </td>
			<td width='137'> Rs. ".$sum." </td>
			<td width='137'><a class='' href='delete.php?id=".$row["cartID"]."'>Remove</a></td>
		</tr>";
						}
			  echo"
			  <tr>
			    <td width='153' colspan='5' align='right'>Total 
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Rs. $total</td></tr>";
					}
		  ?>
	  </tbody>
	</table>	  
	</div>
	</form>
</body>
</html>