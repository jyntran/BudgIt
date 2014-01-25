<?php

$con=mysqli_connect("localhost","appuser","haxx","app");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Form Elements to Variables
$householdname = $_POST['householdname'];

$sql="SELECT * FROM HOUSEHOLDS WHERE HOUSEHOLDNAME='$householdname'";
$result=mysql_query($sql);

if (!$householdname) {
	echo "Error: house name not entered.";
} else{

	//Variables to Table Columns
	$sql="DELETE FROM households WHERE HouseholdName= 
	'$householdname'";
	
	$req = mysqli_query($con,$sql);
	
	if (!$req)
	  {
	  die('Error: ' . mysqli_error($con));
	  } else
	// Execute query
	  {
	  echo "Household has been deleted";
	  }
}

mysqli_close($con);
?>