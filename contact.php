<?php
include 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webshop</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<header>
        <h1>Kontaktieren Sie uns</h1>
    </header>
    <div class="container">
        <form action="submit_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Nachricht:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <br>
            <input type="submit" value="Absenden">
        </form>
    </div>


</body>
</html>