<?php

include "header.php";
?>
<!DOCTYPE html>
<html>

<!--auf dieser seite werden die verschiedenen kategorien präsentiert-->
<main style="background-image: url('img/Cottonfield.jpg')">
    <nav style="padding: 4vw">
        <section class="w3-row">
            <!-- in jeder reihe werden zwei kategorien angezeigt-->
            <article class="w3-half">
                <!--kategorie wird mit karte angezeigt, beim hovern über der karte ändert sich das bild-->
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r1p1', 'img/shirtback.jpg')"
                    onmouseout="changeImg('r1p1', 'img/shirtfront.jpg')">
                    <span class="w3-display-middle w3-text-white" style="font-size:8vw"> SHIRTS</span>
                    <!--bilder dienen als verlinkung auf die produktübersicht-->
                    <a href="Produktübersicht.php" class=""> <img id="r1p1" src="img/shirtfront.jpg" style="width:100%"> </a>
                </div>
            </article>
            <article class="w3-half">
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r1p2', 'img/shirtback.jpg')"
                    onmouseout="changeImg('r1p2', 'img/shirtfront.jpg')">
                    <span class="w3-display-middle w3-text-white" style="font-size:8vw"> JACKETS</span>
                    <a href="Produktübersicht.php" class=""> <img id="r1p2" src="img/shirtfront.jpg" style="width:100%"> </a>
                </div>
            </article>
        </section>
        <section class="w3-row">
            <article class="w3-half">
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r2p1', 'img/shirtback.jpg')"
                    onmouseout="changeImg('r2p1', 'img/shirtfront.jpg')">
                    <span class="w3-display-middle w3-text-white" style="font-size:8vw"> PANTS</span>
                    <a href="Produktübersicht.php" class=""> <img id="r2p1" src="img/shirtfront.jpg" style="width:100%"> </a>
                </div>
            </article>
            <article class="w3-half">
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r2p2', 'img/shirtback.jpg')"
                    onmouseout="changeImg('r2p2', 'img/shirtfront.jpg')">
                    <span class="w3-display-middle w3-text-white" style="font-size:8vw"> SHOES</span>
                    <a href="Produktübersicht.php" class=""> <img id="r2p2" src="img/shirtfront.jpg" style="width:100%"> </a>
                </div>
            </article>
        </section>
    </nav>
</main>
</html>

<!-- tauscht den src pfad der img aus-->
<script>
function changeImg(id, path){
    document.getElementById(id).src=path;
}
</script>


<?php
include "footer.php";
?>