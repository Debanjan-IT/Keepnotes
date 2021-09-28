<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepnotes";

$user = $_POST['username'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($pass == $cpass){
    $sql = "INSERT INTO user (username, password) VALUES ('".$user."', '".$pass."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully. Now login to your account. ";
        ?><a href="login.php">Click Here..</a><?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else{

}

$conn->close();
?>