<?php

include "header.php";
?>
<!DOCTYPE html>
<html>

<main>
    <nav style="padding: 4vw">
        <section class="w3-row">
            <div class="w3-half">
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r1p1', 'img/deluxe_polo_mint_white_large.jpg')"
                    onmouseout="changeImg('r1p1', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:8vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r1p1" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
            </div>
            <div class="w3-half">
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r1p2', 'img/deluxe_polo_mint_white_large.jpg')"
                    onmouseout="changeImg('r1p2', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:8vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r1p2" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
            </div>
        </section>
        <section class="w3-row">
            <div class="w3-half">
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r2p1', 'img/deluxe_polo_mint_white_large.jpg')"
                    onmouseout="changeImg('r2p1', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:8vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r2p1" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
            </div>
            <div class="w3-half">
                <div class="w3-card-4 w3-display-container"
                    style="margin: 4vw"
                    onmouseover="changeImg('r2p2', 'img/deluxe_polo_mint_white_large.jpg')"
                    onmouseout="changeImg('r2p2', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:8vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r2p2" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
            </div>
        </section>
    </nav>
</main>
</html>

<script>
function changeImg(id, path){
    document.getElementById(id).src=path;
}
</script>


<?php
include "footer.php";
?>