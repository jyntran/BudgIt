<?php

// Code to submit insert data into respective
$sql="INSERT INTO householditems (HouseholdName, NumberOfPeople, NameOfBuyer, NameOfItem, ItemPrice, QuantityOfItem, Date)
VALUES ('".$_POST['HouseName']."','".$_POST['NumPeople']."','".$_POST['NameOfBuyer']."','".$_POST['NameOfItem']."','".$_POST['ItemPrice']."','".$_POST['QuantityItem']."','".$_POST['Date']."')";

mysql_query($con, $sql);


?>