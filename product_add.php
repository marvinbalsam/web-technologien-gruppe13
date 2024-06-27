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

    <h1>Produkt hinzufügen</h1>

    <?php
    if (isset($_GET['product_add'])) {
        if(getimagesize($_FILES['imageToUpload']['tmp_name']) == false){

            echo "Bitte ein Bild auswählen";
        }else{
          
        $error = false;
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        $imageName = $_FILES['imageToUpload']['tmp_name'];
        $image = base64_encode(file_get_contents(addslashes($imageName)));

       // $target_dir = "images/";
       //  $target_file = $target_dir.basename($_FILES["imageToUpload"]["name"]);
       // move_uploaded_file($_FILES["imageToUpload"]['tmp_name'], $target_file);
        

      
        $userId = $loggedInUser;
        $statement = mysqli_query($link, "INSERT INTO products (name, description, price, user_id, image) VALUES ('$name', '$description', '$price', '$userId', '$image') ");
        echo("Produkt erfolgreich hinzugefügt");
    }
    }
    ?>

<form action = "?product_add=1" method="post" enctype="multipart/form-data">

<label for= "name">Produktname</label><br>
<input type="text" id="name" name="name"><br>
<label for= "description">Beschreibung</label><br>
<input type="text" id="description" name="description"><br>
<label for= "price">Preis</label><br>
<input type="text" id="price" name="price"><br>
<label for= "imageToUpload" >Bild auswählen</label><br> 
<input type="file" id="imageToUpload" name="imageToUpload"><br>
<input type="submit" value="Hinzufügen">

</form>


</body>

</html>