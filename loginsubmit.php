<?php
include 'navigation.php';
include 'dbconnect.php';
$mail = $_POST['mail'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
      
        $mail = stripcslashes($mail);  
        $password = stripcslashes($password);  
        $mail = mysqli_real_escape_string($link, $mail);  
        $password = mysqli_real_escape_string($link, $password);  
      
        $sql = "select * from user where mail = '$mail' and password = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

       
        
          
        if($count == 1){  
            session_start();
            $_SESSION['username'] = $row['user_id'];
            echo "<h1><center> Login erfolgreich. Sie werden auf das Dashboard weitergeleitet</center></h1>";
            sleep(5);
            header("Location: ./products.php");
        }  
        else{  
            echo "<h1> Login fehlgeschlagen. Bitte versuchen Sie es erneut.</h1>";  

        }     
?>
<!DOCTYPE html>
<html>
<head>
    <title>Webshop</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<h1>Webshop</h1>
<p>Sie werden automatisch in Kürze weitergeleitet. Falls Sie nicht weitergeleitet werden klicken Sie bitte <a href="./index.php">hier</a>


</body>
</html>