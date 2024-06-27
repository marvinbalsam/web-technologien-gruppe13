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
</head>
<body>

<h1>Webshop</h1>

<div>
        <form action="loginsubmit.php" onsubmit = "return validation()" method = "POST" class="zentriert">
            <div>
            <label>Mail</label><br>
            <input type="text" name="mail" required="mail" />
                
            </div>
            <div>
            <label>Password</label><br>
            <input type="password" name="password" required="password" /><br><br>
            </div>
            <div>
                <input type =  "submit" id = "button" value = "Login" />
        </form>
    </div>


</body>
</html>