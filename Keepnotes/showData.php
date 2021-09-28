<?php
    if($_REQUEST['btn_submit']=="CREATE NOTES"){
        $name = $_POST['user'];
        ?>
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
                <form action="create.php" method="post">
                    <input class="input2" type="text" name="user" style="visibility: hidden" value="<?php echo $name;?>"><br>
                    <input type="text" name="heading" placeholder="Heading" class="input">
                    <input type="text" name="text" placeholder="Text" class="input"><br>
                    <input class="button" type="submit" value="SAVE">
                </form>
            </body>
            </html>
        
        <?php
    }
    if($_REQUEST['btn_submit']=="VIEW NOTES") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "keepnotes";
        $name = $_POST['user'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT heading,text FROM notes where username = '".$name."'";
        $result = $conn->query($sql);
        ?>
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
            <div class="container">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                    <form class="data" action="action.php" method="post">
                        <input class="input2" type="text" name="user" style="visibility: hidden" value="<?php echo $name;?>"><br>
                        <input class="input2" type="text" name="heading" value="<?php echo $row['heading'];?>"><br>
                        <input class="input2" type="text" name="text" value="<?php echo $row['text'];?>"><br>
                        <input class="button" name="btn_submit" type="submit" value="DELETE">
                    </form>
                <?php
            }
        } else {
            echo "<h1>0 Results..</h1>";
        }
        $conn->close();
    }
?>
