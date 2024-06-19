<?php
include 'navigation.php';
include 'dbconnect.php';

$sql1 = "SELECT product_id, name, description, price, image FROM products";
$result = mysqli_query($link, $sql1);

$userId = 123;
$cartItemsCount = 0;


$sql2 = "SELECT COUNT(product_id) FROM cart WHERE user_id = ".$userId;
$cartResult = mysqli_query($link, $sql2);
$cartItemsCount = mysqli_fetch_column($cartResult);


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
<header class ="jumbotron">
    <div class ="container">
    <h1>Webshop</h1>
    <h2>Hier finden Sie unsere Produkte</h2>

    <div>
        </header>
        <section class="container" id="products">
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($result)):?> 
                <div class="col">
                  <?php include 'card.php'?>
                </div>
                <?php endwhile;?>
            </div>
    </div>

    </div>
    </section>
    </div>

</body>

</html>