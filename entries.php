<?php
$servername = "172.25.0.3:5432";
$username = "music";
$password = "music";

try {
  $conn = new PDO("mysql:host=$servername;dbname=music", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
