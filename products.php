<?php
include 'navigation.php';
include 'dbconnect.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title>Webshop</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
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
                <div class="col">
                    <?php include 'card.php' ?>
                </div>
                <div class="col">
                    <?php include 'card.php' ?>
                </div>
                <div class="col">
                    <?php include 'card.php' ?>
                </div>
                <div class="col">
                    <?php include 'card.php' ?>
                </div>
            </div>
    </div>

    </div>
    </section>
    </div>

</body>

</html>