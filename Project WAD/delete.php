<?php session_start(); 
$itemid = $_GET["cartID"];

$con = mysqli_connect("localhost","root","","it20777722_wad");
		
if(!$con)
{
	die("Cannot Connect to DB Server");
}

$sql= "DELETE FROM `cart` WHERE `Pname` = '".$cartID."'";

 if(mysqli_query($con,$sql))
	{
		echo "File Deleted";
	}
 else
	{
		echo "Something went wrong , Please select the file again !!!!";
	}

  header('Location: cart.php');

?>