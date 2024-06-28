<?php
include 'navigation.php';
require 'session.php';


if(isset($_SESSION)){

    session_unset();
    session_destroy();
    sleep(1);
    header("Location: ./index.php");
}

?>

