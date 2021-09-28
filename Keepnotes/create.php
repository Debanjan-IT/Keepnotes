<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepnotes";

$user = $_POST['user'];
$heading = $_POST['heading'];
$text = $_POST['text'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO notes (username, heading, text) VALUES ('".$user."', '".$heading."', '".$text."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>