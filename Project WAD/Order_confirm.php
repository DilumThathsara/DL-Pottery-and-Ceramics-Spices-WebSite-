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
</head>
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

<body>
	<?php
	
	$con = mysqli_connect("localhost","root","","it20777722_wad");
		
					if(!$con)
					{
						die("Cannot Connect to DB Server");
					}	
	
	
	$sql = "SELECT * FROM `customer` WHERE `email` = '".$_SESSION["userName"]."'";
					
	$result = mysqli_query($con,$sql) ;
					
	 if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_assoc($result);
			
?>
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

<body>
	<table width="588" border="0" align="right">
	<img src="photo/3.png" width="650" height="550"  alt=""/>
  <tbody>
    <tr>
      <td colspan="2" align="left"><h1> Order Confirm </h1>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
	  <tr>
          <td width="146">Name</td>
          <td width="227"><input type="text" name="txtEmail" id="txtEmail"   value="<?php echo $row["fullname"]; ?>" readonly /></td>
	   </tr>
	  <tr>
          <td width="146">Contact</td>
          <td width="227"><input type="text" name="txtEmail" id="txtEmail"   value="<?php echo $row["contact"]; ?>" readonly /></td>
	   </tr>
	  <tr>
          <td width="146">Address</td>
          <td width="227"><input type="text" name="txtEmail" id="txtEmail"   value="<?php echo $row["Address"]; ?>" readonly /></td>
	   </tr>
	   </tbody>
</table>
	<?php
	 }
	mysqli_close($con);
	?>
</body>
</html>