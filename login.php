<?php

$servername = "localhost";
$username = "id19639611_database_user";
$password = "I42Lvs#jRLT!BI+y";
$dbname = "id19639611_database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$forname = $name = $password = $note = "";
    $forname = $_POST["forname"];
    $name = $_POST["name"];
    $password = $_POST["password"];

$sql = "SELECT Forname, Name, Password FROM accounts WHERE Forname=$forname AND Name=$name;".PHP_EOL;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if(password_verify($password, $row["Password"])) {
        echo "Vorname: " . $row["Forname"]. " - Nachname: " . $row["Name"]"<br>";
      } else {
        echo "Passwort falsch!";
      }
    }
} else {
    header('Location: https://volkmarschneider.000webhostapp.com/login.html');
}
mysqli_close($conn);
header('Location: https://volkmarschneider.000webhostapp.com/index.html');
?>