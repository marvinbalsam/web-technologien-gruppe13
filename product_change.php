<?php
include 'navigation.php';
include 'dbconnect.php';
require 'session.php';

if (isset($_REQUEST['product_id'])) {

    $product_id = $_REQUEST['product_id'];

    $sql = "SELECT product_id, name, description, price, image FROM products WHERE product_id = $product_id";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['selected_product'] = $row;

}

$product = $_SESSION['selected_product'];
$product_id = $product['product_id'];
$product_name = $product['name'];
$product_description = $product['description'];
$product_price = $product['price'];

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

        $statement = mysqli_query($link, "UPDATE products SET name = '$name', description='$description', price='$price' WHERE user_id=$loggedInUser AND product_id = $product_id");
        sleep(1);
        header("Location: ./userProducts.php");
    }
    ?>

    <form action="?product_change=1" method="post">

        <label for="name">Produktname</label><br>
        <input type="text" id="name" name="name" value="<?= $product_name ?>"><br>
        <label for="description">Beschreibung</label><br>
        <input type="text" id="description" name="description" value="<?= $product_description ?>"><br>
        <label for="price">Preis</label><br>
        <input type="text" id="price" name="price" value="<?= $product_price ?>"><br>
        <input type="submit" value="Ändern">

    </form>

    <a class="btn btn-success" id="dont_change_product" href="products.php">Zurück zur Produktübersicht!</a>

</body>

</html>