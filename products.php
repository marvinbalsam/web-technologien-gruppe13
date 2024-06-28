<?php
include 'navigation.php';
include 'dbconnect.php';
require 'session.php';

$sql1 = "SELECT product_id, name, description, price, image FROM products";
$result = mysqli_query($link, $sql1);

$cartResult = mysqli_query($link, "SELECT COUNT(*) AS total FROM cart WHERE user_id = $loggedInUser");
$data = mysqli_fetch_assoc($cartResult);
$_SESSION['cartItemsTotal'] = $data['total'];



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
    <header class="jumbotron">
        <div class="container">
            <h1>Webshop</h1>
            <h2>Hier finden Sie unsere Produkte</h2>

            <?php if ($loggedInUser == 0) {

                echo '<a class="btn btn-primary btn-lg disabled" disabled>Produkt hinzufügen</a>';

                echo '<a class="btn btn-primary btn-lg disabled" ">Meine Produkte</a>';

                echo '<a class = "btn btn-primary btn-lg" id="login_to_add_product" href="login.php">Anmelden um eigene Produkte zu verwalten</a>';

            } else {
                echo '<a class="btn btn-primary btn-lg" id="add_product" href="product_add.php">Produkt hinzufügen</a>';

                echo '<a class="btn btn-primary btn-lg" id="my_products" href="userProducts.php">Meine Produkte</a>';
            }



            ?>
            <br />
            <br />



            <div>
    </header>
    <section class="container" id="products">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col">
                    <?php include 'card.php' ?>
                    <div class="card-footer">
                        <a href="?addToCart=<?= $row['product_id'] ?>" class="btn btn-success">In den Warenkorb</a>

                    </div>
                </div>
            <?php endwhile; ?>
            <?php if (isset($_GET['addToCart'])) {
                $product_id = $_GET['addToCart'];

                mysqli_query($link, "INSERT into cart(user_id, product_id, amount) VALUES ($loggedInUser, $product_id, 1)");

            } ?>
        </div>
        </div>

        </div>
    </section>
    </div>

</body>

</html>