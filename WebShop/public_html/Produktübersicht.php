<!DOCTYPE html>
<html lang="de">
<meta charset="UTF-8">
<title>Produktübersicht</title>

<?php
include "header.php";
?>
<script src="../js/tags.js"></script>
<script src="../js/categorize.js"></script>

<main>
    <section class="w3-container w3-content-margin">
        <nav class="w3-quarter w3-row w3-padding-48">
            <aside class=" w3-light-grey w3-bar-block w3-border w3-card w3-round">
                <span class="fa-2x w3-bar-item w3-border-bottom w3-border-black">Kategorien</span>

                <a onclick="categorize('knitted')" class=" w3-bar-item w3-button w3-border-bottom">T-Shirt</a>
                <a onclick="categorize('black')" class="w3-bar-item w3-button w3-border-bottom">Longsleeve</a>
                <a onclick="categorize('kurkuma')" class="w3-bar-item w3-button w3-border-bottom">Cropped</a>
                <a onclick="categorize('denim')" class="w3-bar-item w3-button w3-border-bottom">Pants</a>
                <a onclick="categorize('w3-nouline')" class="w3-bar-item w3-button w3-border-bottom">Alle</a>

                <span class="fa-2x w3-bar-item w3-border-bottom w3-border-black">Tags</span>
                <button class="w3-margin-small w3-round w3-button w3-border-bottom w3-dark-gray" onclick="showTagged('knitted')">Knitted</button>
                <button class="w3-margin-small w3-round w3-button w3-border-bottom w3-dark-gray" onclick="showTagged('black')">Black</button>
                <button class="w3-button w3-round w3-margin-small w3-border-bottom w3-dark-gray" onclick="showTagged('olive')">Olive</button>
                <button class="w3-margin-small w3-round w3-button w3-border-bottom w3-dark-gray" onclick="showTagged('kurkuma')">Kurkuma</button>
                <button class="w3-margin-small w3-round w3-button w3-border-bottom w3-dark-gray" onclick="showTagged('unisex')">Unisex</button>
                <button class="w3-margin-small w3-round w3-button w3-border-bottom w3-dark-gray" onclick="showTagged('denim')">Denim</button>
                <button class="w3-margin-small w3-round w3-button w3-border-bottom w3-dark-gray" onclick="showTagged('w3-nouline')">Alle</button>
            </aside>
        </nav>
        <div id="artikel" class="w3-threequarter w3-row">
            <section  class="w3-row w3-padding">
                <header class="w3-bar w3-border-bottom">
                    <span class=" fa-2x fa-tex">PRODUKTE</span>
                    <!--auskommentiert, da keine funktion
                    <a class="w3-right">
                        <span class="w3-large w3-text-grey w3-margin">sortieren: </span>
                        <nav class="w3-dropdown-hover w3-right">
                            <button class="w3-button w3-text-grey w3-small w3-border">DATUM, NEU NACH ALT <i
                                        class="fa fa-arrow-circle-o-down"></i></button>
                            <ul class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="#" class="w3-bar-item w3-button">Preis, höchste</a>
                                <a href="#" class="w3-bar-item w3-button">Preis, niedrigste</a>
                                <a href="#" class="w3-bar-item w3-button">Datum, neuste</a>
                                <a href="#" class="w3-bar-item w3-button">Datum, älteste</a>
                            </ul>
                        </nav>
                    </a> -->
                </header>


                <div  class="w3-third  "><a class="w3-nouline knitted black unisex w3-hide w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/BasicTShirtRust.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Unisex Basic T-Shirt Rust
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>

                <div class="w3-third black"><a class="w3-nouline black unisex w3-hide w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/BasicTShirtVoldemort.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Unisex Basic T-Shirt Midnight
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="w3-third"><a class="w3-nouline w3-hide unisex w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/BasicTShirtYoda.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Unisex Basic T-Shirt Cool Sage
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </section>
            <section class="w3-row w3-padding">
                <div  class="w3-third  "> <a  class="w3-nouline unisex w3-hide w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">

                            <img src="img/items/BasicTShirtLouis.jpg"  style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Unisex Basic T-Shirt Cashew
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div  class="w3-third"><a class="w3-nouline denim w3-hide w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/carla_Ecru.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Carla Waffle Longsleeve Ecru
                                <span class="w3-row">55.00€</span>
                            </figcaption>
                        </figure></a>
                </div>
                <div  class="w3-third"><a class="w3-nouline olive w3-hide w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/carla_sand.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Carla Waffle Longsleeve Sand
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>

            </section>


            <section class="w3-row w3-padding">
                <div  class="w3-third  "> <a class="w3-nouline w3-hide w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">

                            <img src="img/items/buddy_hoodie.jpg"  style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Coco Hoodie Ecru
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div  class="w3-third"><a class="w3-nouline black w3-hide w3-show " href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/Bobbie_Forest.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Bobbie Cropped Knitted Jumper Forest
                                <span class="w3-row">95.00€</span>
                            </figcaption>
                        </figure></a>
                </div>
                <div  class="w3-third"><a class="w3-nouline w3-hide w3-show" href="Produktseite.php">
                        <figure class=" w3-margin">
                            <img src="img/items/Bobbie_Kurkuma.jpg" style="width:100%" alt="shirt türkis">
                            <figcaption class="w3-container w3-center w3-medium">
                                Bobbie Cropped Knitted Jumper Kurkuma
                                <span class="w3-row">39.00€</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </section>
            <footer class="w3-center w3-padding-24">

                <nav class="w3-bar w3-border w3-round">
                    <a href="Produktübersicht.php" class="w3-button">&laquo;</a>
                    <a href="Produktübersicht.php" class="w3-button">1</a>
                    <a href="Produktübersicht.php" class="w3-button">2</a>
                    <a href="Produktübersicht.php" class="w3-button">3</a>
                    <a href="Produktübersicht.php" class="w3-button">4</a>
                    <a href="Produktübersicht.php" class="w3-button">&raquo;</a>
                </nav>
            </footer>
        </div>

    </section>
</main>

<?php
include "footer.php";
?>
