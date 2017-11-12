<?php

//import '../php/register.php';
//echo $_POST['form-fname'];

  echo "<br><br>";
  print_r($_POST);

$patientInfo = [];

$servername = "us-cdbr-iron-east-05.cleardb.net";
$username = "b8248bea3978a9";
$password = "883cabc2";
$dbname = "heroku_3da280d67ae2e97";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	 echo "works";
}

$sql = 
"CREATE TABLE `heroku_3da280d67ae2e97`.`registered` 
(
userID BIGINT(12) PRIMARY KEY auto_increment,
firstName VARCHAR(30),
lastName VARCHAR(30),
password VARCHAR(30),
email VARCHAR(30),
city VARCHAR(30),
province VARCHAR(30),
country VARCHAR(30)
)";

echo $_POST['form-fname'];
echo $_POST['form-lname'];
echo $_POST['form-email'];
echo $_POST['form-password'];

$sql2 = "INSERT INTO heroku_3da280d67ae2e97.registered (userID, firstName, lastName, password,email,city,province,country) 
		 VALUES ("."4".",'".$_POST['form-fname']."','".$_POST['form-lname']."','".$_POST['form-password']."','".
		 $_POST['form-email']."','".$_POST['form-city']."','".$_POST['form-province']."','".$_POST['form-country']."')";

echo $sql2;
$result = $conn->query($sql);
$result = $conn->query($sql2);

$conn->close();


?>
