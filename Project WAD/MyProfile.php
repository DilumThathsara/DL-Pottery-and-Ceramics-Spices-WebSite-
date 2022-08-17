<?php session_start(); 
if(!isset($_SESSION["userName"]))
{
   header('Location:Login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="CSS/NormalStyle.css" />
	<style type="text/css">
	body
	{
		background: url("photo/itemBg.png");
		background-repeat: no-repeat;
		background-attachment: fixed
	}
	</style>
<meta charset="utf-8">
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
	
<table>
	    <tr>
        <td colspan="2"><h1 align="center">My Profile</h1></td>
       </tr>
	   <tr align="center">
	     <td colspan="2"> <img src="photo/userpic.png" width="236" height="254" ></td>
	   </tr>
          <td width="146">Full Name</td>
          <td width="227"><input type="text" name="txtFullName" id="txtFullName"  value="<?php echo $row["fullname"]; ?>"  readonly /></td>
	   </tr>
	   <tr>
          <td width="146">Email</td>
          <td width="227"><input type="text" name="txtEmail" id="txtEmail"   value="<?php echo $row["email"]; ?>" readonly /></td>
	   </tr>
	   <tr>
          <td width="146">Contact Number</td>
          <td width="227"><input type="text" name="txtContact" id="txtContact" 
		value="<?php echo $row["contact"]; ?>" readonly /></td>
	   </tr>
		<tr>
         <td width="146"><a href="Category.php"><input type="button" class="button" value="Return"/></a>
		</td>
	   </tr>
     </table>
	<?php
	 }
	mysqli_close($con);
	?>
</body>
</html> 
