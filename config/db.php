<?php
$servername = "localhost";
$username = "skolnieks";
$password = "pQcM10ClEn3lSWy";
$database = "ArnisIP19";

$conn = new mysqli($servername, $username, $password,$database);


if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
?>
