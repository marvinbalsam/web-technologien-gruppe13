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

    <h1>Produkt hinzufügen</h1>

    <?php
    if (isset($_GET['product_add'])) {

        $error = false;
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $userId = $loggedInUser;
        $statement = mysqli_query($link, "INSERT INTO products (name, description, price, user_id) VALUES ('$name', '$description', '$price', '$userId') ");
        echo("Produkt erfolgreich hinzugefügt");
    }
    ?>

<form action = "?product_add=1" method="post">

<label for= "name">Produktname</label><br>
<input type="text" id="name" name="name"><br>
<label for= "name">Beschreibung</label><br>
<input type="text" id="description" name="description"><br>
<label for= "name">Preis</label><br>
<input type="text" id="price" name="price"><br>
<h2>Ein Bild kann später hinzugefügt werden.</h2>
<input type="submit" value="Hinzufügen">

</form>


</body>

</html>