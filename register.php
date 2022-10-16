<?php

$servername = "localhost";
$username = "id19639611_database_user";
$password = "I42Lvs#jRLT!BI+y";
$dbname = "id19639611_database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $forname = $name = $userpassword = "";
  $email = $_POST["email"];
  $forname = $_POST["forname"];
  $name = $_POST["name"];
  $userpassword = $_POST["password"];
  $hashedpassword = password_hash($userpassword, PASSWORD_DEFAULT);

date_default_timezone_set('Europe/Berlin');
$date = date('Y-m-d H:i:s', time());

$sql = "INSERT INTO user (email, password, forname, name, created_at, updated_at) 
VALUES ('$email','$hashedpassword','$forname','$name','$date','$date');".PHP_EOL;

if (mysqli_query($conn, $sql)) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('Location: https://volkmarschneider.000webhostapp.com/login.html');
?>