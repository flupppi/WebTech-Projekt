<?php

include "header.php";
?>
    <!--Breadcrumb-->
    <div class="w3-white">
        <div class="w3-bar" style="max-width: 1280px; margin:auto;">
            <ul class="breadcrumb w3-white">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Kategorien</a></li>

                <i class="fab fa-youtube w3-right"></i>
                <i class="fab fa-instagram w3-right"></i>
                <i class="fab fa-facebook w3-right"></i>
                <select class="w3-select w3-right" name="option" style="size: 200px">
                    <option disabled selected value="">Choose your option</option>
                    <option value="1">Preis desc</option>
                    <option value="2">Preis asc</option>
                    <option value="3">Lexikographisch asc</option>
                    <option value="3">Lexikographisch desc</option>
                </select>
            </ul>


        </div>
    </div>
    </header>
    <!-- TODO content alginment-->


    <main class="w3-container w3-padding-48">
        <div class="w3-row w3-padding-16" style="max-width: 1280px; margin: auto;">
            <!--Pick your gender either men, women or child but we don't target childs as customers-->
            <div class="w3-col l2 w3-light-gray w3-card w3-hide-small" id="memes">
                <ul class="w3-ul">
                    <li><a class="w3-hover-black">Mens</a></li>
                    <li><a class="w3-hover-black">Womes</a></li>
                </ul>
            </div>
            <div class="w3-center" id="content" style="z-index: -1">
                <img alt="womens section" class="w3-col w3-container s12 m3 l5 " id="women"
                     onclick="changeWomens()" src="img/PW_Gender_Page_Womens_967X813_DE.jpg">
                <img alt="mens section" class="w3-col w3-container s12 m3 l5 " id="men"
                     onclick="changeMens()" src="img/PW_Gender_Page_Mens_967X813_DE.jpg">
            </div>

            <!-- pagination -->
            <div class="w3-center w3-padding-24" id="pagination">

            </div>
        </div>
        <!-- TODO txt database -->
        <!-- TODO categories all products and add attributes for the same -->
        <!-- TODO create functions to sort the same according to their attributes-->
    </main>

<?php
include "footer.php";
?>