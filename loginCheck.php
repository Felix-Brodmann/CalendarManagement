<?php

$servername = "localhost";
$username = "id19639611_database_user";
$password = "I42Lvs#jRLT!BI+y";
$dbname = "id19639611_database_name";

session_start();

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$email = $password = "";
    $email = $_POST["email"];
    $password = $_POST["password"];

$sql = "SELECT forname, name, password FROM user WHERE email='$email';".PHP_EOL;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $_SESSION['wrongEmail'] = "false";
    while($row = mysqli_fetch_assoc($result)) {
      if(password_verify($password, $row["password"])) {
        $_SESSION['wrongPassword'] = "false";
        header('Location: https://volkmarschneider.000webhostapp.com/register.html');
      } else {
        $_SESSION['wrongPassword'] = "true";
        header('Location: https://volkmarschneider.000webhostapp.com/login.php');
      }
    }
} else {
    $_SESSION['wrongEmail'] = "true";
    header('Location: https://volkmarschneider.000webhostapp.com/login.php');
}
mysqli_close($conn);
?>