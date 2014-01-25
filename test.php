<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
</head>

<body>

<!--
Welcome <?php print $_POST["name"]; ?><br />
Household name <?php print $_POST["h-name"]; ?><br />
Number of People <?php print $_POST["num-people"]; ?><br />
Name of Buyer <?php print $_POST["name-buyer"]; ?><br />
Name of Item <?php print $_POST["name-item"]; ?><br />
Item Price <?php print $_POST["item-price"]; ?><br />
Quantity of Item <?php print $_POST["quant-item"]; ?><br />
Date <?php print $_POST["date"]; "<p> hello </p>" ?><br />
-->
<?php 
// Create Connection
$con=mysqli_connect("localhost","appuser","haxx","testbase"); 

// check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MyMQL: " . mysqli_connect_error();
}

// create database
/*$sql = "CREATE DATABASE testbase";
if (mysqli_query($con,$sql))
{
	echo "Database testbase created successfully";
}
else
{
	echo "Error creating database: " . mysqli_error($con);	
}*/

// Create table
/*$sql="CREATE TABLE Persons(FirstName CHAR(30), LastName CHAR(30), Age INT)";

// Execute query
if (mysqli_query($con,$sql))
{
	echo "Table persons created successfully";
}
else
{
	echo "Error creating table: " . mysqli_error($con);
}*/

/*mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin', 35)");

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Glenn', 'Quagmire', 33)");*/


$sql="INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

if(!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}

$result = mysqli_query($con,"SELECT * FROM Persons");

/*
while($row = mysqli_fetch_array($result))
{
	echo $row['FirstName'] . " " . $row['LastName'];
	echo "<br>";
}
*/

print "<br /> <br />";

// Display result in an HTML Table
echo "<table border='1'>
<tr>
<th> FirstName </th>
<th> LastName </th>
</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['FirstName'] . "</td>";
	echo "<td>" . $row['LastName'] . "</td>";
	echo "</tr>";
}

echo "</table>";


mysqli_close($con);

?>

<form action="test.php" method="post">
Name: <input type="text" name="name"><br />
Household Name: <input type="text" name="h-name"><br />
Number of People: <input type="text" name="num-people"><br />
Name of Buyer: <input type="text" name="name-buyer"><br />
Name of Item: <input type="text" name="name-item"><br />
Item Price: <input type="text" name="item-price"><br />
Quantity of Item: <input type="text" name="quant-item"><br />
Date: <input type="text" name="date"><br />
<br />

<!-- name submission -->
FirstName: <input type="text" name="firstname">
Lastname: <input type="text" name="lastname">
Age: <input type="text" name="age">
<input type="submit">


<div><?php print $_POST["h-name"] ?></div>


<input type="submit">
</form>

<!--
House hold name
Number of people  
Name of buyer
Name of item
Item price
Quantity of Item
Date -->

</body>
</html>
