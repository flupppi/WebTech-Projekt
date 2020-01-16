<?php

include "header.php";
?>

<script src="../js/slideshow_button.js"></script>
<script src="../js/slideshow.js"></script>
<main>
    <div class="w3-bar w3-content-margin">

        <section class="w3-col w3-padding-32 w3-half w3-hide-small">

            <article class="w3-third w3-right-align">
                <figure class="w3-padding">

                    <img class="w3-opacity w3-hover-opacity-off w3-image" src="img/items/Coco_Hoodie_Dariadeh_2b.JPG"
                         alt="green dress"
                         onclick="currentDiv(1)">
                </figure>
                <figure class="w3-padding">
                    <img class="w3-opacity w3-hover-opacity-off w3-image" src="img/items/Coco_Hoodie_Dariadeh_1.JPG"
                         alt="green dress"
                         onclick="currentDiv(2)">
                </figure>
                <figure class="w3-padding">
                    <img class="w3-opacity w3-hover-opacity-off w3-image" src="img/items/Coco_Hoodie_Dariadeh_3.JPG"
                         alt="green dress"
                         onclick="currentDiv(3)">
                </figure>
            </article>

            <article class="w3-twothird w3-left-align">
                <figure class="w3-content">
                    <img class="mySlides w3-image" src="img/items/Coco_Hoodie_Dariadeh_2b.JPG" style="display:none"
                         alt="green dress">
                    <img class="mySlides w3-image" src="img/items/Coco_Hoodie_Dariadeh_1.JPG" style="display:block"
                         alt="green dress">
                    <img class="mySlides w3-image" src="img/items/Coco_Hoodie_Dariadeh_3.JPG" style="display:none"
                         alt="green dress">

                </figure>
            </article>
        </section>

        <section class="w3-content w3-display-container w3-hide-medium w3-hide-large" style="max-width:800px">
            <img class="mySlidesMobile" src="img/items/Coco_Hoodie_Dariadeh_2b.JPG" style="width:100%">
            <img class="mySlidesMobile" src="img/items/Coco_Hoodie_Dariadeh_1.JPG" style="width:100%; display: block">
            <img class="mySlidesMobile" src="img/items/Coco_Hoodie_Dariadeh_3.JPG" style="width:100%">
            <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
                 style="width:100%">
                <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                <span class="w3-badge demoMobile w3-border w3-transparent w3-hover-white"
                      onclick="currentDivMobile(1)"></span>
                <span class="w3-badge demoMobile w3-border w3-transparent w3-hover-white"
                      onclick="currentDivMobile(2)"></span>
                <span class="w3-badge demoMobile w3-border w3-transparent w3-hover-white"
                      onclick="currentDivMobile(3)"></span>
            </div>
        </section>


        <section class="w3-margin  w3-show-inline-block w3-width-medium">
            <h1 class="w3-xlarge w3-left-align w3-margin">
                <span class="w3-text-dark-gray">Carla Waffle Longsleeve Sand</span>
                <span class="w3-text-gray w3-large w3-block">59.00 € now 35.00 € </span>
            </h1>
            <div class="w3-left-align w3-margin w3-border-top">
                <article class="w3-medium">
                    <h2 class="w3-text-dark-gray w3-large">Details</h2>
                    <p class="w3-small"> + Fitted Waffle Longsleeve <br>
                        <br>
                        + Material: 100% Organic Cotton / Sewing Threads: 100% Lyocell (TENCEL™) / Wrist cuff elastic:
                        50% Organic Cotton / 50% Natural Rubber<br>
                        <br>
                        + Fabric Origin: Turkey / The elastic on the wrist is made by a small factory in Austria.<br>
                        <br>
                        + Made in Portugal<br>
                        <br>
                        + Model is 1,60m and wears size S<br>
                        <br>
                        + Measurements in cm (chest width: from armhole to armhole / sleeve length / total length).
                        Please note that measurements are just an approximate indictor and that due to the manufacturing
                        process, items can slightly vary in size.<br>
                        <br>


                        For certifications, information on the textile and production please carefully read our FAQ's.<br>
                    </p>
                </article>
            </div>
            <!-- Größenauswahl -->
            <div class="w3-bar w3-border-top">
                <label class="w3-left w3-bar-item">
                    <b class="w3-bar-item w3-bold">
                        SIZE
                    </b>
                </label>
                <nav class="w3-right w3-bar-item">
                    <button class="w3-bar-item w3-button">XS</button>
                    <button class="w3-bar-item w3-button">S</button>
                    <button class="w3-bar-item w3-button">M</button>
                </nav>
            </div>

            <footer class="w3-bar w3-border-top">
                <div class="w3-left w3-bar-item w3-padding-16">
                    <button class="w3-bar-item w3-button w3-white w3-hover-black w3-large">-</button>
                    <label class="w3-bar-item w3-large w3-bold">1</label>
                    <button class="w3-bar-item w3-button w3-white w3-hover-black w3-large">+</button>
                </div>
                <button onclick="hinzufügen()" class=" w3-margin w3-btn w3-round w3-black w3-right w3-bar-item">IN DEN WARENKORB</button>
            </footer>
        </section>
    </div>
    <?php include 'component.php';?>
    <?php cartElement('./img/items/BasicTShirtLouis.jpg', 'Unisex Basic T-Shirt Cashew','39.00€',1); ?>
<i class="fa"> </i>


        <section class="w3-padding-48 w3-content-margin w3-row ">
            <header class="w3-bar ">
                <span class=" fa-2x fa-tex w3-text-green">HIER GIBTS NOCH MEHR!</span>
                <button class=" w3-border w3-bar-item w3-button w3-right">
                    <a class="w3-nouline" href="Produktübersicht.php">MEHR</a>
                </button>
            </header>
            <section class="w3-row w3-padding">
                <article class="w3-quarter  "> <a  class="w3-nouline" href="Produktseite.php">
                        <figure class=" w3-margin">

                            <img src="img/items/BasicTShirtLouis.jpg"  style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Unisex Basic T-Shirt Cashew
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </article>
                <article class="w3-quarter"><a class="w3-nouline" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/carla_Ecru.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Carla Waffle Longsleeve Ecru
                                <span class="w3-row">55.00€</span>
                            </figcaption>
                        </figure></a>
                </article>
                <article class="w3-quarter"><a class="w3-nouline" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/carla_sand.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Carla Waffle Longsleeve Sand
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </article>
                <article class="w3-quarter"><a class="w3-nouline" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/dariadeh_ayla_top_lowres.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Alya Top White
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </article

            </section>
        </section>
</main>


<?php
include "footer.php";
?>
