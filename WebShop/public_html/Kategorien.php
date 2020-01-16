<?php

include "header.php";
?>

<main>
    <!--div class="w3-panel" style="padding:50px"-->
        <div class="w3-content-margin" style="padding: 50px">
            <div class="w3-row w3-padding-48">
                <div class="w3-col s5 w3-card-4 w3-left w3-mobile w3-display-container"
                     onmouseover="changeImg('r1p1', 'img/deluxe_polo_mint_white_large.jpg')"
                     onmouseout="changeImg('r1p1', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:9vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r1p1" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
                <div class="w3-col s5 w3-card-4 w3-right w3-mobile w3-display-container"
                     onmouseover="changeImg('r1p2', 'img/deluxe_polo_mint_white_large.jpg')"
                     onmouseout="changeImg('r1p2', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:9vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r1p2" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
            </div>
            <div class="w3-row w3-padding-48">
                <div class="w3-col s5 w3-card-4 w3-left w3-mobile w3-display-container"
                     onmouseover="changeImg('r2p1', 'img/deluxe_polo_mint_white_large.jpg')"
                     onmouseout="changeImg('r2p1', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:9vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r2p1" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
                <div class="w3-col s5 w3-card-4 w3-right w3-mobile w3-display-container"
                     onmouseover="changeImg('r2p2', 'img/deluxe_polo_mint_white_large.jpg')"
                     onmouseout="changeImg('r2p2', 'img/deluxe_shirt_black_tuerkis_large.jpg')">
                    <div class="w3-display-middle w3-text-white" style="font-size:9vw"> MIDDLE</div>
                    <a href="Produktübersicht.php" class=""> <img id="r2p2" src="img/deluxe_shirt_black_tuerkis_large.jpg" style="width:100%"> </a>
                </div>
            </div>

    </div>

</main>

<script>
function changeImg(id, path){
    document.getElementById(id).src=path;
}
</script>


<?php
include "footer.php";
?>