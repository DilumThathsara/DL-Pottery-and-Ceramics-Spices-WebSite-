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

	<form action="AddProducts.php" method="post" enctype="multipart/form-data">
<table width="588" border="2" align="right">
	<img src="photo/2.jpg" width="650" height="550"  alt=""/>
  <tbody>
    <tr>
      <td colspan="2" align="center"><h1> ADD Products </h1></td>
    </tr>
    <tr>
      <td width="165">Product Image</td>
      <td width="169"><input type="file" name="fileImage" id="fileImage" required></td>
    </tr>
    <tr>
      <td width="165">Product Name</td>
      <td width="169"><input type="text" name="textProduct" id="textProduct" required></td>
    </tr>
    <tr>
      <td>Size</td>
      <td><input type="text" name="textSize" id="textSize" required></td>
    </tr>
    <tr>
      <td>Price </td>
      <td><input type="text" name="textPrice" id="textPrice" required></td>
    </tr>
    <tr>
      <td colspan="2"><label for="chkBooks">
        <input type="checkbox" name="chkPublish" id="chkPublish"/>
        Publish This <br>
        <br>
        <br>
        <?php
				
				if(isset($_POST["submit"]))
				{
					$image = "photo/".basename($_FILES["fileImage"]["name"]);
					move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
					$title = $_POST["textProduct"];
					$size = $_POST["textSize"];
					$price = $_POST["textPrice"];
					
					if(isset($_POST["chkPublish"]))
					{
						$status = 1;
					}else{
						$status = 0;
					}
					
					$con = mysqli_connect("localhost","root","","it20777722_wad");
		
					if(!$con)
					{
						die("Cannot Connect to DB Server");
					}	
					
					$sql = "INSERT INTO `product` (`productID`, `Pname`, `size`, `price`, `published`,`email`,`Image`) VALUES (NULL, '".$title."', '".$size."', '".$price."','".$status."','".$_SESSION["userName"]."','".$image."');";
					
					if(mysqli_query($con,$sql))
					{
						echo "File is uploaded";
					}else
					{
						echo "Something went to wrong, Try again ";
					}
				}
				
				
				?>
      </label></td>
    </tr>
    <tr>
      <td colspan="2"><blockquote> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="submit" type="submit" class="button" id="submit" value="Add Now"   />
        <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
      </blockquote></td>
    </tr>
  </tbody>
</table>
	
</form>
	
</body>
</html>