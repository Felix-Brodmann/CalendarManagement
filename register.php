<?php

$servername = "localhost";
$username = "id19639611_database_user";
$password = "I42Lvs#jRLT!BI+y";
$dbname = "id19639611_database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$forname = $name = $userpassword = "";
    $forname = $_POST["forname"];
    $name = $_POST["name"];
    $userpassword = $_POST["password"];
    $hashedpassword = password_hash($userpassword, PASSWORD_DEFAULT);

$sql = "INSERT INTO accounts (Forname, Name, Password)
VALUES ('$forname','$name','$hashedpassword');";

if (mysqli_query($conn, $sql)) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
header('Location: https://volkmarschneider.000webhostapp.com/index.html');
?>