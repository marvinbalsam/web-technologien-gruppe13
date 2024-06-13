<?php
include 'navigation.php';
include 'dbconnect.php';

$username = "root";
$password = "";
$dsn = "mysql:host=127.0.0.1;dbname=db_webshop;charset=utf8";
$db = new PDO($dsn, $username, $password);

$sql = "SELECT product_id, name, description, price, image FROM products";
$result = $db->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Webshop</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
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
                <?php while($row = $result->fetch()):?> 
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