<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "keepnotes";
$name = $_POST['username'];
$pass = $_POST['password'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    if($row['password'] == $pass and $row['username'] == $name){?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Keep Notes</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="title">
                <h1 class="title-text">KEEP NOTES WEB APPLICATION</h1>
            </div>
            <form action="showData.php" method="post">
                <h1>~ ~ ~ Welcome ~ ~ ~</h1>
                <input class="input2" type="text" name="user" value="<?php echo $name; ?>" readonly><br><br><br>
                <input class="button" type="submit" name="btn_submit" value="VIEW NOTES">
                <input class="button" type="submit" name="btn_submit" value="CREATE NOTES">
            </form>
        </body>
        </html><?php
    }
}
$conn->close();
?>