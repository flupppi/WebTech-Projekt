<?php
    session_start();
?>

<!-- META HTML -->
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Webshop - Header</title>
<link rel="shortcut icon" type="image/x-icon" href="img/31714.png">

<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .focus-ring-overlay {
        background: rgba(0, 0, 255, 0.25);
        transition: top 0.25s, left 0.25s, width 0.25s, height 0.25s, opacity 0.125s;
    }
    .focus-ring {
        outline: none;
        border:solid!important;
        border-color:aqua;
        border-width: 2px;
        border-radius: 5px;


    }

    :focus:not(.focus-ring) {
        outline: none;
    }
</style>



<!-- HEADER HTML -->
<section id="header" class="w3-hide-small">
    <!--Top Bar - Language Switch-->
    <header id="top" class="w3-top">
        <nav role="menubar" class="w3-bar w3-white w3-center"> Webshop


            <nav role="button" class="w3-right">
                <nav role="button" tabindex="0" class="w3-button">Deutsch</nav>
                <nav role="button" tabindex="0" class="w3-button">English</nav>
            </nav>
        </nav>

        <!--Static Icon Bar-->

        <nav role="menubar" class="w3-bar w3-white">

            <form role="searchbox" action="/action_page.php"
                  class="w3-hover-white w3-border-light-grey w3-left w3-margin-left">
                <label>
                    <input class="w3-input w3-bar-item" type="text" placeholder="Search.." name="search" id="search">
                </label>
                <button class="w3-button w3-green" type="submit"><i class="fa fa-search"></i></button>

            </form>
            <nav role="button" class="w3-right">
                <a onclick="showSignup('signup')" role="button" tabindex="0" class=" w3-button"> <i class="fa fa-user"></i>
                    ACCOUNT
                    ERSTELLEN
                </a>




                <button onclick="window.location = '../public_html/Warenkorb.php'" role="button" tabindex="0" class=" w3-button "><i
                        class="fa fa-shopping-basket"></i>
                    WARENKORB     <?php

                    if (isset($_SESSION['cart'])){
                        $count = count($_SESSION['cart']);
                        //print_r($_SESSION);
                        echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                    }
                    ?></button>

                <?php if(ISSET($_SESSION['userId'])){
                    echo '<form action="../includes/logout.inc.php"><button type="submit"  role="button" tabindex="0" class=" w3-button"><i
                        class="fa fa-sign-out"></i>
                    LOGOUT</button></form>';}else{
                    echo '<button onclick="showLogin(\'login\')" role="button" tabindex="0" class=" w3-button"><i
                        class="fa fa-sign-in"></i>
                    LOGIN</button>';
                }?>
            </nav>
        </nav>

    </header>
    <!--Site Logo-->
    <figure class="w3-center w3-big-margin-top w3-white w3-hide-small w3-padding-32">
        <img src="img/nature.png" alt="webshop logo image" style="width:180px">
        <figcaption class="w3-text-gray">Shop for sustainable Clothing</figcaption>
    </figure>
    <!--Navigation Bar-->
    <header class="w3-light-gray w3-padding w3-hide-small">
        <nav class="w3-bar w3-light-gray w3-center w3-medium w3-content-margin">
            <a class="w3-bar-item w3-col m2 w3-button " href="index.php">HOME</a>
            <a class="w3-bar-item w3-col m2 w3-button" href="Kategorien.php">KATEGORIEN</a>
            <a class="w3-bar-item w3-col m2 w3-button" href="Blogübersicht.php">BLOG</a>
            <a class="w3-bar-item w3-col m2 w3-button" href="About.php">ABOUT</a>
            <a class="w3-bar-item w3-col m2 w3-button" href="Infoseite.php">INFOSEITE</a>
            <a class="w3-bar-item w3-col m2 w3-button" href="FAQ.php">FAQ</a>
        </nav>
    </header>
</section>



<!--MOBILE HEADER HTML-->
<section id="header" class="w3-hide-medium w3-hide-large">
    <!--Top Bar - Language Switch-->
    <header class="w3-top">
        <nav class="w3-bar w3-white w3-center"> Webshop</nav>

        <!--Static Icon Bar-->

        <nav class="w3-bar w3-white w3-center">

            <button class="w3-button" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </button>
            <nav  id="demo" class="w3-dropdown-content w3-bar-block w3-card-4">
                <form  role="search" action="#" class="w3-bar  w3-hover-white w3-border-light-grey  ">
                    <label>
                        <input class="w3-input w3-bar-item" type="text" placeholder="Search.." name="search" id="search">
                    </label>
                    <button class="w3-bar-item w3-button w3-green" type="submit"><i class="fa fa-search"></i></button>

                </form>
                <a class="w3-bar-item   w3-button" href="index.php">HOME</a>
                <a class="w3-bar-item   w3-button" href="Kategorien.php">KATEGORIEN</a>
                <a class="w3-bar-item   w3-button" href="Blogübersicht.php">BLOG</a>
                <a class="w3-bar-item   w3-button" href="About.php">ABOUT</a>
                <a class="w3-bar-item   w3-button" href="Infoseite.php">INFOSEITE</a>
                <a class="w3-bar-item   w3-button" href="FAQ.php">FAQ</a>
                <nav role="navigation">
                    <a role="link" href="" tabindex="0" class="w3-button">Deutsch</a>
                    <a role="link" href="" tabindex="0" class="w3-button">English</a>
                </nav>
            </nav>


            <button onclick="showSignup('signup')" role="button" tabindex="0" class=" w3-button "><i class="fa fa-user"></i>
            </button>
            <button onclick="showCart('cart')" role="button" tabindex="0" class=" w3-button  "><i
                    class="fa fa-shopping-basket"></i>
            </button>
          <?php if(!ISSET($_SESSION['userId'])){
              echo '<button    onclick="window.location = \'../public_html/Warenkorb.php\'" role="button" tabindex="0" class=" w3-button ">
                        <i class="fa fa-sign-in"></i>
                    </button>';
          }else {
              echo '<form action="../includes/logout.inc.php">
                    <button  type="submit" role="button" tabindex="0" class=" w3-button "><i
                    class="fa fa-sign-out"></i>
            </button></form>';
          }
            ?>
        </nav>

    </header>

    <!--Site Logo-->
    <figure class="w3-center w3-big-margin-top w3-white w3-padding-48">
        <figcaption class="w3-text-gray">Shop for sustainable Clothing</figcaption>
    </figure>



</section>


<?php include "../includes/signup.php";
include "../includes/login.php";
include "../includes/cart.inc.php";
include "component.php"?>