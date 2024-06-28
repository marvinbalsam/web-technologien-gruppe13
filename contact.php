<?php
include 'navigation.php';
$mail_recipient="info@gabriel-haardt.de";
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
<?php

if(isset($_GET['senden'])){
  echo "Vielen Dank!";
  $error = false;
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
  $mail_recipient="info@gabriel-haardt.de";
  $mail_subject="Neue Nachricht ueber Kontaktformular";
  $mail_message= "von " . $name . " mit E-Mail: " . $mail . " Nachricht: ". $message;
  include 'sendmail.php';
}
?>
<header>
        <h1>Kontaktieren Sie uns</h1>
    </header>
    <div class="login-container">
        <form action="contact.php?senden=1" method="post" class="login-form">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="mail">E-Mail:</label><br>
            <input type="email" id="mail" name="mail" required>
            <br>
            <label for="message">Nachricht:</label><br>
            <textarea id="message" name="message" rows="5" required></textarea>
            <br><br>
            <input type="submit" value="Absenden">
        </form>
    </div>


</body>
</html>