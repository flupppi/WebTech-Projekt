<?php

include "header.php";
?>
<main>
    <div class="w3-bar" style="max-width: 1280px; margin-left:auto;margin-right:auto; ">

        <div class="w3-col w3-padding-32" style="max-width:50%">

            <div class="w3-third w3-right-align">
                <div class="w3-padding">

                    <img class="w3-opacity w3-hover-opacity-off" src="img/img1.jpeg" alt="green dress"
                         style="width:50%;cursor:pointer;border-width:medium;" onclick="currentDiv(1)">
                </div>
                <div class="w3-padding">
                    <img class="w3-opacity w3-hover-opacity-off" src="img/img2.jpeg" alt="green dress"
                         style="width:50%;cursor:pointer;border-width:medium;" onclick="currentDiv(2)">
                </div>
                <div class="w3-padding">
                    <img class="w3-opacity w3-hover-opacity-off" src="img/img3.jpeg" alt="green dress"
                         style="width:50%;cursor:pointer;border-width:medium;" onclick="currentDiv(3)">
                </div>
            </div>

            <div class="w3-twothird w3-left-align">
                <div class="w3-content">
                    <img class=" mySlides" src="img/img1.jpeg" style="width:100%;display:none" alt="green dress">
                    <img class="mySlides" src="img/img2.jpeg" style="width:100%;display:block" alt="green dress">
                    <img class="mySlides" src="img/img3.jpeg" style="width:100%;display:none" alt="green dress">

                </div>
            </div>
        </div>
        <div class="w3-margin  w3-show-inline-block" style="max-width:600px;">
            <div class="w3-left-align w3-margin">
                <h1 style="font-size: x-large; font-weight:400">
            <span class="w3-text-dark-gray" style="text-transform: uppercase;">UO Billie Dark Floral Mesh Wrap Mini
              Dress</span>
                    <span class="w3-text-blue-gray" style="display:block">59.00 € now 35.00 € </span>
                </h1>
            </div>
            <div class="w3-left-align w3-margin w3-border-top">
                <h1 style="font-size: large; font-weight:400">
                    <span class="w3-text-dark-gray" style="text-transform: uppercase;">Details</span>
                    <span class="w3-text-blue-gray" style="display:block"> this one isn't a part of our "series". just that
              perfect shade of forest green with the bright white logo. classic classic.
            </span>
                    <span class="w3-text-blue-gray" style="display:block">simple forest green crewneck</span>
                    <span class="w3-text-blue-gray" style="display:block"> 7.2oz, 50/50 ringspun cotton, polyester</span>
                    <span class="w3-text-blue-gray" style="display:block"> unisex, boxy but not baggy </span>
                </h1>
            </div>

            <div class="w3-bar w3-border-top">
                <div class="w3-left w3-bar-item">
                    <b class="w3-bar-item" style=" font-weight:bolder">
                        SIZE
                    </b>
                </div>
                <div class="w3-right w3-bar-item">
                    <div class="w3-bar-item w3-button"><b>S</b></div>
                    <div class="w3-bar-item w3-button"><b>M</b></div>
                    <div class="w3-bar-item w3-button"><b>L</b></div>
                </div>
            </div>
            <div class="w3-bar w3-border-top">
                <div class="w3-left w3-bar-item w3-padding-16">
                    <button class="w3-bar-item w3-button w3-white w3-hover-black w3-large">-</button>
                    <div class="w3-bar-item w3-large"><b>1</b></div>
                    <button class="w3-bar-item w3-button w3-white w3-hover-black w3-large">+</button>
                </div>
                <div class="w3-right w3-bar-item">
                    <div class="w3-bar-item" >
                        <button class="w3-btn w3-round w3-black">IN DEN WARENKORB</button></div>
                </div>
            </div>
        </div>
    </div>


    <div class=" w3-row">
        <div class="w3-padding-48 " style="max-width: 1180px; margin-left: auto; margin-right: auto; ">
            <div class="w3-bar">
                <span class=" fa-2x fa-tex w3-text-deep-orange">HIER GIBTS NOCH MEHR!</span>
                <div class=" w3-border w3-bar-item w3-button w3-right">
                    <a class="">MEHR</a></div>
            </div>
            <div class="w3-quarter ">
                <div class=" w3-margin">
                    <img src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%" alt="Türkis shirt">
                    <div class="w3-container w3-center">
                        <h5>CLASSICS BRAND SHIRT</h5>
                        <h6>30€</h6>
                    </div>
                </div>
            </div>

            <div class="w3-quarter">
                <div class=" w3-margin">
                    <img src="img/deluxe_polo_mint_white_large.jpg" style="width:100%" alt="Mint shirt">
                    <div class="w3-container w3-center">
                        <h5>CLASSICS BRAND SHIRT</h5>
                        <h6>30€</h6>

                    </div>
                </div>
            </div>

            <div class="w3-quarter">
                <div class=" w3-margin">
                    <img src="img/deluxe_polo_black_white_large.jpg" style="width:100%" alt="Black polo">
                    <div class="w3-container w3-center">
                        <h5>CLASSICS BRAND SHIRT</h5>
                        <h6>30€</h6>

                    </div>
                </div>
            </div>
            <div class="w3-quarter">
                <div class="w3-margin">
                    <img src="img/deluxe_polo_black_white_large.jpg" style="width:100%" alt="Black polo with white logo">
                    <div class="w3-container w3-center">
                        <h5>CLASSICS BRAND SHIRT</h5>
                        <h6>30€</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
include "footer.php";
?>
