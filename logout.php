<?php
include 'navigation.php';
require 'session.php';


if(isset($_SESSION)){

    session_unset();
    session_destroy();
    sleep(5);
    header("Location: ./products.php");
}

?>

