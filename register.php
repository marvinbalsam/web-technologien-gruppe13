<?php
include 'navigation.php';
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Registrierung - Webshop</title>
  <link rel="icon" href="./favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>

  <h1>Webshop</h1>
  <h2 class="zentriert">Bitte registrieren Sie sich mit Ihren persönlichen Daten.</h2>
  <?php
  if (isset($_GET['register'])) {
    $error = false;
    $firstname = $_POST['firstname'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    // $passwordhash = password_hash($password, PASSWORD_DEFAULT);
    $statement = mysqli_query($link, "INSERT INTO user (firstname, name, mail, password) VALUES ('$firstname', '$name', '$mail', '$password')");
    echo ("erfolgreich!  ");
    $mail_recipient = $mail;
    $mail_subject = "Ihre Registrierung";
    $mail_message = "Vielen Dank fuer Ihre Registrierung. Ihre Daten wurden erfolgreich gespeichert.";
    include 'sendmail.php';
  }
  ?>
  <div class="login-container">
    <form action="?register=1" method="post" class="login-form">

      <label for="firstname">Vorname:</label><br>
      <input type="text" id="firstname" name="firstname"><br>
      <label for="name">Name:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="name">E-Mail:</label><br>
      <input type="email" id="mail" name="mail"><br>
      <label for="password">Passwort:</label><br>
      <input type="password" id="password" name="password"><br><br>
      <input type="submit" value="Registrieren">
    </form>
  </div>

</body>

</html>