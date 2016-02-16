<?php

require('Connecter.php');


?>


<!DOCTYPE html>
<html>
    <head>
        <title>
             <?php  ?>Items in your cart
        </title>
        <link href="realStyleSheet.css" rel="stylesheet">
        <link href="Cart.css" rel="stylesheet">
        <script type="javascript" src="Script.js">
            // in the works
        </script>
        <?php
            if($_SESSION["userName"] & $_SESSION["password"] == null){
                header("Location: Index.php");
            }
        ?>
    </head>
    <body>
        <div id="midsection">
            <header id="head">
                <h1>New Devices Of Endangerment!</h1>
            </header>

        </div>
        <div id="headsection">
            <nav id="navigation">
                <a class="button" href="HomePage.html" id="hB" >Home</a>
                <a class="button" id="kiB" >Products</a>
                <a class="button" href="LogoutPage.html" id="niB" >Logout</a>
                <a class="button" href="CartPage.html" id="cB" >Cart</a>
                <a class="button" href="ProfilePage.html" id="pB" >Profile</a>
                <a class="button" href="Blog.html" id="blog" >Blog</a>
            </nav>
        </div>

        <div id="almost">

        </div>
        <div id="bottom">

        </div>
    </body>
</html>