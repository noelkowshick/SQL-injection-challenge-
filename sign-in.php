<?php
include 'log-in.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>sign-in</title>
</head>
<body>
<header>
        <img src="log.jpg " alt="logo" height="60"width="150">

    <div class="button">
    
    <button class="Home"><a href="index.php">Home</a></button>
    <!--<button class="Account"><a href="">Account</a></button>-->
    </div>

</header>
<hr>
<div class="sign-box">
    <h2>Sign In</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="un" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="pw" required>
        <br><br><br>
        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" > Remember me
        </label>
       <center>
        <input class="submit" type="submit" name="lbtn" value="Sign In">
    </center>
    </form>
</div>
</body>
</html>