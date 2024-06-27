<?php
require 'session.php';
?>

<div class="topnav">
  <a href="index.php">Startseite</a>
  <a href="products.php">Produkte</a>
  <a href="video.php">Produkttests</a>
  <a href="contact.php">Kontakt</a>

  <a id="cart" class="active left" href="#cart">Warenkorb (<?php $cartItemsCount ?>)</a>
  <a href=#userId><?php if ($loggedInUser > 0) {
                    echo $loggedInUser;
                  } else {
                    echo "Bitte melden sie sich an";
                  }

                  ?></a>
                 
  <?php if(empty($loggedInUser)){
                   echo '<a href="logout.php">Logout</a>';

                  }else{

                   echo '<a href="login.php">Login</a>';
                   echo  '<a href="register.php">Registrierung</a>';
                  } ?>

 

</div>