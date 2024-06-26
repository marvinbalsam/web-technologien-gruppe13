<?php

if(!isset($_SESSION)){
    session_start();
}

   
if(isset($_SESSION['username'])){

    $loggedInUser = $_SESSION['username'];

}else{
    $loggedInUser = "Öffentlicher Benutzer";
}


?>