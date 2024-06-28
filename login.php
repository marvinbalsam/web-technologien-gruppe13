<?php
include 'navigation.php';
include 'dbconnect.php';
require 'session.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Webshop</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <br><br>
    <div class="login-container">
        <form action="loginsubmit.php" onsubmit="return validation()" method="POST" class="login-form">
            <h2>Login</h2>
            <label>Mail</label><br>
            <input type="text" name="mail" required="mail" />
            <label>Password</label><br>
            <input type="password" name="password" required="password" /><br><br>
            <input type="submit" id="button" value="Login" />
        </form>
    </div>


</body>

</html>