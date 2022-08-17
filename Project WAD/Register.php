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
	
<script type="text/javascript">
	
function validateFullName()
{
	var fname = document.getElementById("txtFullName").value ;
	
	if((fname == "") ||(fname == null))
		{
			alert("Please enter full name");
			return false;
		}
	return true;
}
	
	
function validateEmail()
{
	var email = document.getElementById("txtEmail").value;
	var at=email.indexOf("@");
	var dt = email.lastIndexOf(".");
	var len = email.length;
	
	if((at<2) || (dt - at < 2) || (len - dt < 2))
		{
			alert("Please enter valid email address");
			return false;
		}
	
	return true;
}
	
	
function validateContact()
	{
		var contact = document.getElementById("textCNo").value;
		
		if((isNaN(contact)) || (contact.length !=10))
		   {
		   		alert("Please enter the valid Contact NO" );
				return false;
		   }
		return true;
	}
	
	
function validatePassword()
	{
		var password = document.getElementById("password").value;
		var Cpassworsd= document.getElementById("password2").value;
		
		if((password.length<5) || (password != Cpassworsd))
			{
				aleat("please enter the correct password");
				return false;
			}
		return true;
	}
	
	
function validateAll()
	{
		if(validateFullName() && validateEmail() && validateContact() && validatePassword() )
			{
				alert("Register  !!!!! ");
			}
		else
			{
				event.preventDefault();
			}
	}
	
	
</script>
</head>
	
<body>
<div class="Wrapper">
		<div class="Icon">
			<img src="photo/Logo.png" class="logo">			
			<ul>
				<li><a href="Home.html"> Home </a></li>
				<li><a href="Category.php"> Shop </a></li>
				<li><a href="Login.php"> Login </a></li>
				<li><a href="#"> Register </a></li>
			</ul>
		</div>
	</div>

<form id="forml" name="forml" method="post" action="Register.php">
  <img src="photo/1.jpg" width="650" height="550"  alt=""/>
  <table width="588" align="right" height="585" border="0" colspan = "2">
	  <tbody>
	    <tr>
	      <td width="294" height="37">Full Name</td>
	      <td width="284"><input type="text" name="txtFullName" id="txtFullName" required></td>
        </tr>
	    <tr>
	      <td height="37">Email Address</td>
	      <td><input type="text" name="txtEmail" id="txtEmail" autocomplete="off"></td>
        </tr>
	    <tr>
	      <td height="43">Contact Number</td>
	      <td><input type="text" name="textCNo" id="textCNo" maxlength="10"></td>
        </tr>
	    <tr>
	      <td height="51">Address</td>
	      <td><textarea name="textAddress" id="textAddress" placeholder="Type your Address"></textarea></td>
        </tr>
		<tr>
	      <td height="40">Postal Code</td>
		  <td><input type="text" name="textPCode" id="textPcode"></td>
        </tr>
	    <tr>
	      <td height="38">Password</td>
	      <td><input type="password" name="password" id="password"></td>
        </tr>
		 <tr>
	      <td height="48">Confrim Password</td>
	      <td><input type="password" name="password2" id="password2"></td>
        </tr>
	    <tr>
	      <td height="90" colspan="2"><input type="reset" name="reset" id="reset" value="Reset">  <input type="submit" name="submit" id="submit" value="Submit" onClick="validateAll()"></td>
        </tr>
    </tbody>
  </table>
</body>
	<?php
	if(isset($_POST["submit"]))
	{
		$email = $_POST["txtEmail"];
		$fullname = $_POST["txtFullName"];
		$contact = $_POST["textCNo"];
		$Address = $_POST["textAddress"];
		$postalcode = $_POST["textPcode"];
		$password = $_POST["password"];
		
		$con = mysqli_connect("localhost","root","","it20777722_wad");
		
		if(!$con)
		{
			die("Cannot Connect to DB Server");
		}
		
		$sql = "INSERT INTO `customer`(`email`, `fullname`, `contact`, `Address`, `postalcode`, `password`) VALUES ('".$email."','".$fullname."','".$contact."','".$Address."','".$postalcode."','".$password."');";
		
		mysqli_query($con,$sql);
		
		
	}
	
	?>
</html>