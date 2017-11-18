<?php

echo $_POST['form-email'];
echo "<br><br>";
echo $_POST['form-password'];
echo "<br><br>";
print_r($_POST);

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
    // echo "works";
}

/*$sql = "SELECT email
        FROM users.registered 
        WHERE email =".$_POST['form-email'].".";*/
echo $sql;

?>
