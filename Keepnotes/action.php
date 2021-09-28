<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "keepnotes";
    $name = $_POST['user'];
    $heading = $_POST['heading'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM notes WHERE username = '".$name."' AND heading='".$heading."'";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
?>