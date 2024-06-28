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

    <a class="btn btn-success" id="delete_product">Löschen<?php
    mysqli_query($link, "DELETE FROM products WHERE product_id=$product_id");
    sleep(1);
    header("Location: ./userProducts.php");
    ?></a>


</body>

</html>