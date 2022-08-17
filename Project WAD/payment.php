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

	<form action="payment.php" method="post" enctype="multipart/form-data">
		<table width="435" border="1" align="center">
  <tbody>
    <tr>
      <td width="162">Card No</td>
      <td width="147"><input type="text" name="textCardNO" id="textCardNO" maxlength="16"></td>
    </tr>
    <tr>
      <td>Card Holder Name</td>
      <td><input type="text" name="textCardHoldName" id="textCardHoldName"></td>
    </tr>
    <tr>
      <td>Expair  Date</td>
      <td><input type="month" name="EXdate" id="EXdate"></td>
    </tr>
    <tr>
      <td>CVV</td>
      <td><input type="text" name="CVV" id="CVV" maxlength="3"></td>
    </tr>
	  <?php
	  if(isset($_POST["submit"]))
	  {
		  $CardNO = $_POST["textCardNO"];
		  $card_holder_name = $_POST["textCardHoldName"];
		  $EXDate = $_POST["EXdate"];
		  $CVV = $_POST["CVV"];
		  
		  $con = mysqli_connect("localhost","root","","it20777722_wad");
		
					if(!$con)
					{
						die("Cannot Connect to DB Server");
					}
		  
		  $sql = "INSERT INTO `payment` (`email`, `card_holder_name`, `EXDate`, `CVV`) VALUES ('".$_SESSION["userName"]."', '".$card_holder_name."', '".$EXDate."', '".$CVV."');";
		  
		  mysqli_query($con,$sql);
		  
		  header('Location:Order_confirm.php');
	  }
	  ?>
	  <tr>
      <td colspan="2" align="center">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><a href="Order_confirm.php">
          <input name="submit" type="submit" class="button" id="submit" value="Confirm"/></a>
          <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
        </p>
      </td>
    </tr>
	  
  </tbody>
</table>

		
</form>
</body>
</html>