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
<h2>Bitte registrieren Sie sich mit Ihren persönlichen Daten.</h2>

<form>

  <label for="firstname">Vorname:</label><br>
  <input type="text" id="firstname" name="firstname"><br>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="name">E-Mail:</label><br>
  <input type="text" id="mail" name="mail"><br>
  <label for="password">Passwort:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Registrieren">
</form>


</body>
</html>