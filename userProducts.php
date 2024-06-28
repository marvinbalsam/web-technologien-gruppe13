<?php
include 'navigation.php';
include 'dbconnect.php';
require 'session.php';



$sql = "SELECT product_id, name, description, price, image FROM products WHERE user_id = $loggedInUser";
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

    <h1>Meine Produkte:</h1>

    <div>
        </header>
        <section class="container" id="products">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>

                    <div class="col">
                        <?php
                        include 'card.php';
                        ?>

                        <a class="btn btn-success" id="change_product"
                            href="product_change.php?product_id=<?= $row['product_id'] ?>">Bearbeiten</a>
                        <a class="btn btn-success" id="delete_product"
                            href="product_delete.php?product_id=<?= $row['product_id'] ?>">Löschen </a>
                    </div>
                <?php endwhile; ?>
            </div>
    </div>

</body>

</html>