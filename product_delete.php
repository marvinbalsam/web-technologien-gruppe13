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


   <a class="btn btn-success" id="delete_product" >Löschen<?php mysqli_query($link, "DELETE FROM products WHERE product_id= ") ?></a>

   <a class="btn btn-success" id="dont_delete_product" href="products.php" >Zurück zur Produktübersicht!</a>;
 

</body>

</html>