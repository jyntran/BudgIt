<?php

$con=mysqli_connect("localhost","appuser","haxx","app");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Form Elements to Variables
$HouseholdName = $_POST['HouseholdName'];
$NumberOfPeople = $_POST['NumberOfPeople'];
$NameOfBuyer = $_POST['NameOfBuyer'];
$NameOfItem= $_POST['NameOfItem'];
$ItemPrice = $_POST['ItemPrice'];
$QuantityOfItem = $_POST['QuantityOfItem'];
$Date= $_POST['Date'];
//etc

//Variables to Table Columns
//Insert into householditems table
$sql="INSERT INTO householditems(HouseholdName, NumberOfPeople, NameOfBuyer, NameOfItem, ItemPrice, QuantityOfItem, Date)
VALUES ('".$_POST['HouseholdName']."','".$_POST['NumberOfPeople']."','".$_POST['NameOfBuyer']."','".$_POST['NameOfItem']."','".$_POST['ItemPrice']."','".$_POST['QuantityOfItem']."','".$_POST['Date']."')";

$res = mysqli_query($con,$sql);

if (!$res)
  {
  die('Error: ' . mysqli_error($con));
  }
 
// Execute query
else
  {
  echo "Item entered successfully";
  //Location of redirect page
header('Location: view.php');

  }
  mysqli_close($con);
?>
