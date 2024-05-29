<?php
include 'navigation.php';
include 'dbconnect.php';
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

<form>
  <label for="username">Benutzername:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Passwort:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>


</body>
</html>