<?php
include 'navigation.php';
include 'dbconnect.php';
require 'session.php';

if ($loggedInUser == 0) {

    echo "Melden sie sich bitte an um den Warenkorb zu sehen";
    exit;

}

$cartResult = mysqli_query($link, "SELECT * FROM cart WHERE user_id =$loggedInUser");
$cartProducts = mysqli_fetch_assoc($cartResult);
$product_id = $cartProducts['product_id'];

$sql = "SELECT product_id, name, description, price, image FROM products";
$result = mysqli_query($link, $sql);



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



    <h1>Mein Warenkorb:</h1>

    <div>
        </header>
        <section class="container" id="products">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>

                    <div class="col">
                        <?php
                        include 'card.php';
                        echo 'Menge:' . 0;
                        ?>

                        <a class="btn btn-success" id="delete_product" href="">Aus dem Warenkorb entfernen</a>

                    </div>
                <?php endwhile; ?>
            </div>
    </div>

</body>

</html>