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
    <form class="form" action="home.php" method="post">
        <input class="input" type="text" name="username" id="username" placeholder="Enter Username" require>
        <input class="input" type="password" name="password" id="password" placeholder="Enter Password" require><br>
        <input class="button" type="submit" value="LOGIN">
        <p>Not Registered? <a href="register.php">Click Here..</a></p>
    </form>
</body>
</html>