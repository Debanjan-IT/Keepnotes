<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepnotes";
$name = $_POST['user'];
$heading = $_POST['heading'];
$text = $_POST['text'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE notes SET text=? WHERE username=? AND heading =?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("sss", $text, $name, $heading);

if ($stmt->execute() === TRUE) {
    echo '<script>alert("Record Updated..")</script>';
    header("Location: login.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>