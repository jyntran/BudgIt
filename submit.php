<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title> Submit Page </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php header('Location: view.php');
?>
<p> Welcome Housemate! Here you can view items you and your fellow housemates have bought for you lovely home. Enjoy!</p>
  <form action ="view.php" method="post">
  <input type="text" placeholder="Household Name" name="HouseName">
  <input type="text" placeholder="Number of Housemates" name="NumPeople">
  <input type="text" placeholder="Your name" name="NameOfBuyer">
  <input type="text" placeholder="Item name" name="NameOfItem">
  <input type="number" placeholder="Item Price" name="ItemPrice">
  <input type="number" placeholder="Number of items" name="QuantityItem">
  <input type="date" placeholder="Date purchased" name="Date">
  <input type="submit">
</form>

<!--<form action="view.php" method="post">
Household Name: <input type="text" name="housename">
<br />
Household ID: <input type="text" name="houseid">
<br />
Number of People: <input type="text" name="numpeople">
<br />
Password: <input type="text" name="password">
<br />
<input type="submit">
</form>-->

<?php
// Code to submit insert data into respective
$sql="INSERT INTO householditems (HouseholdName, NumberOfPeople, NameOfBuyer, NameOfItem, ItemPrice, QuantityOfItem, Date)
VALUES ('".$_POST['HouseName']."','".$_POST['NumPeople']."','".$_POST['NameOfBuyer']."','".$_POST['NameOfItem']."','".$_POST['ItemPrice']."','".$_POST['QuantityItem']."','".$_POST['Date']."')";

mysqli_query($con, $sql);

$result = mysqli_query($con,"SELECT * FROM householditems");
?>
</body>
</html>
