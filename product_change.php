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

    <h1>Produkt ändern</h1>

    <?php
    if (isset($_GET['product_change'])) {

        $error = false;
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $userId = $loggedInUser;
        $statement = mysqli_query($link, "UPDATE products SET name = '$name', description='$description', price='$price'");
        echo("Produkt erfolgreich geändert");
    }
    ?> 

<form action = "?product_change=1" method="post">

<label for= "name">Produktname</label><br>
<input type="text" id="name" name="name"><br>
<label for= "name">Beschreibung</label><br>
<input type="text" id="description" name="description"><br>
<label for= "name">Preis</label><br>
<input type="text" id="price" name="price"><br>
<input type="submit" value="Hinzufügen">

</form>


</body>

</html>