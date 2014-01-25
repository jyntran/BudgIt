<?php

$con=mysqli_connect("localhost","appuser","haxx","Testing");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Form Elements to Variables
$Nickname = $_POST['Nickname'];
$Age = $_POST['Age'];
//etc

//Variables to Table Columns
//Insert into householditems table
$sql="INSERT INTO Testing (Nickname, Age)
VALUES
('$_POST[Nickname]','$_POST[Age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Item entered successfully";
  //Location of redirect page

  }
else
  {
  echo "Error entering item: " . mysqli_error($con);
  }

mysqli_close($con);
?>
