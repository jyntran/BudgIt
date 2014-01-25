<?php

$con=mysqli_connect("localhost","appuser","haxx","app");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//Form Elements to Variables
$householdname = $_POST['householdname'];
$password = $_POST['password'];
$numberofpeople = $_POST['numberofpeople'];

$insert_sql = "INSERT into HOUSEHOLDS(householdname, password,numberofpeople) VALUES($householdname, SHA1($password), $numberofpeople)";

//$sql="INSERT INTO households (HOUSEHOLDNAME, NUMBEROFPEOPLE, PASSWORD)
//VALUES ('$_POST['housename']','$_POST['numpeople']',SHA1('$_POST['password']'))";

$select_sql = "SELECT * FROM HOUSEHOLDS WHERE householdname=$householdname AND password=SHA1($password))";

echo 'Your username is your house name: ' . $householdname . ' <br/>';

$lcusername = strtolower($householdname);
$esclcusername = mysql_real_escape_string($lcusername);
$escpassword = mysql_real_escape_string($password);
echo 'test';
mysql_connect("localhost", "appuser", "haxx") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("app") or die(mysql_error());
echo "Connected to Database <br />";
$result = mysql_query("SELECT * FROM households WHERE householdname='$esclcusername' AND     password='$escpassword'") or die(mysql_error());
echo 'test2';
$row = mysql_fetch_array( $result );
echo 'test3';
$validateUser = $row['householdname'];
$validatePass = $row['password'];

//header('Location: view.php');
//header('Location: thankyou.html');

?>
