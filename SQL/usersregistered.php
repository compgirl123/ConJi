<?php
import '../php/register.php';
echo $_POST;
$patientInfo = [];

$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
	echo "HDD";
}

$sql = 
"CREATE TABLE `users`.`registered` 
(
userID BIGINT(12) PRIMARY KEY auto_increment,
firstName VARCHAR(30),
lastName VARCHAR(30),
password VARCHAR(30),
city VARCHAR(30),
province VARCHAR(30),
country VARCHAR(30)
)";




$result = $conn->query($sql);

$conn->close();
?>
