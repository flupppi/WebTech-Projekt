<?php
    include "header.php";
?>
<?php
//error_reporting(0);
if (isset($_GET['error'])){
    if ($_GET['error'] == "emptyfields"){
        echo '<p class="w3-red w3-center">Fill in all fields!</p>';
    }
    else if ($_GET['error'] == "invaliduidmail") {
        echo '<p class="w3-red w3-center ">invalid username and e-mail!</p>';
    }else if ($_GET['error'] == "invaliduid") {
        echo '<p class="w3-red w3-center">invalid username! A username must be between 5 and 32 characters long
                      and can only contain numbers and letters form the latin Alphabet</p>';
    }else if ($_GET['error'] == "invalidmail") {
        echo '<p class="w3-red w3-center">invalid e-mail!</p>';
    }else if ($_GET['error'] == "passwordcheck") {
        echo '<p class="w3-red w3-center">Your passwords do not match!</p>';
    }else if ($_GET['error'] == "userTaken") {
        echo '<p class="w3-red w3-center">Username is already taken!</p>';
    }else if ($_GET['error'] == "wrongpwd"){
        echo '<p class="w3-border-red w3-center">Wrong password!</p>';
    }
} elseif ($_GET['signup'] == "success"){
    echo '<p class="w3-green w3-center">Signup successful!</p>';
} elseif ($_GET['login'] == "success"){
    echo '<p class="w3-border-green w3-center">You\'re logged in</p>';
}
?>
<!--Header-->
<main>

        <!-- Automatic Slideshow Images -->
        <figure class="w3-content w3-section w3-display-container w3-hide-small">

            <img class="mySlides w3-banner w3-animate-right" src="img/home-slider-slide-1.jpg" ">
        <img class="mySlides w3-banner w3-animate-right" src="img/home-slider-slide-2.jpg">
        <img class="mySlides w3-banner w3-animate-right" src="img/home-slider-slide-3.jpg">
        <label class="w3-padding w3-display-bottomleft  w3-funky fa-5x w3-text-white ">Sustainable Fashion!</label>

    </figure>

    <script src="../js/carousel.js"></script>
    <figure class="w3-content w3-hide-medium w3-hide-large">
        <img class="w3-banner" src="img/mobile-home.jpg">
    </figure>
    <article class="w3-border-bottom w3-border-light-gray w3-margin w3-white w3-row">
        <header class="w3-container">
            <h2 class="w3-xlarge w3-bold w3-funky w3-uline">Fair Fashion Guide</h2>
            <h3 class="w3-large">ekoehrer, <span class="w3-opacity">27/08/2017</span></h3>
        </header>

        <section class="w3-twothird w3-container">
            <h4 class="w3-large w3-bold w3-funky">„Trends ändern sich, Persönlichkeit und Attitude bleiben“</h4>
            <br>
            Experten-Interviews mit Martina Glomb, Marie Nasemann, Kirsten Brodde, Max Gilgenmann und Magdalena
            Schaffrin sowie Tipps zum fairen Modekonsum aus dem Fair Fashion Guide. Webseite und Printmagazin sind
            in Zusammenarbeit mit FEMNET e. V. und dem Beneficial Design Institute entstanden. Hier ein Auszug mit
            Links zum Weiterschmökern im Original…
            <br></p>
            <nav class="w3-row w3-col m8 s12">
                <p>
                    <button class="w3-button w3-padding-large
                                        w3-white w3-border"><a href="Blogseite.php" class="w3-nouline w3-bold">READ MORE
                            »</a></button>
                </p>
            </nav>

        </section>
        <section class="w3-third">
            <img class="w3-image" src="../text/blog/fair_fashion_guide.jpg" alt="future fashion forward e. V.">
            <figcaption class="w3-small">Trendy und nachhaltig: Wie das geht zeigt der Fair Fashion Guide.
            </figcaption>
        </section>
    </article>


    <article class="w3-border-bottom w3-border-light-gray w3-margin w3-white w3-row">
        <header class="w3-container">
            <h2 class="w3-xlarge w3-bold w3-funky w3-uline">Fashion Revolution Week</h2>
            <h3 class="w3-large">ekoehrer, <span class="w3-opacity">16/04/2017</span></h3>
        </header>

        <section class="w3-twothird w3-container">
            <h4 class="w3-large w3-bold w3-funky">Countdown</h4>
            <p class="w3-padding">

                In 8 Tagen, also am 24. April, startet die Fashion Revolution Week weltweit in Memorian an den
                Einsturz der Rana Plaza-Textilfabriken 2013 in Bangladesch.<br> Damals wurden über 1138 Menschen
                unter
                den Trümmern begraben, rund 2500 wurden zum Teil schwer verletzt. Damit so etwas nie wieder passiert
                macht die Fashion Revolution-Bewegungen jedes Jahr zum Jahrestag Aktionen in der ganzen Welt…

            </p>
            <nav class="w3-row w3-col m8 s12">
                <p>
                    <button class="w3-button w3-padding-large
                                        w3-white w3-border"><a href="Blogseite.php" class="w3-nouline w3-bold">READ MORE
                            »</a></button>
                </p>
            </nav>
        </section>
        <section class="w3-third">
            <img class="w3-image" src="../text/blog/quote_ellenköhrer.jpg" alt="future fashion forward e. V.">
            <figcaption class="w3-hide">future fashion forward e. V.</figcaption>
        </section>
    </article>


    <article class="w3-border-bottom w3-border-light-gray w3-margin w3-white w3-row">
        <header class="w3-container">
            <h2 class="w3-xlarge w3-bold w3-funky w3-uline">Interview</h2>
            <h3 class="w3-large">ekoehrer, <span class="w3-opacity">03/04/2017</span></h3>
        </header>

        <section class="w3-twothird w3-container">
            <h4 class="w3-large w3-bold w3-funky">MUD JEANS Blog: Interview with Ellen Köhrer</h4>
            <p class="w3-padding">

                Fashion Made Fair’ is a book regarding ethical and eco-friendly fashion labels. The authors of the
                book, journalist Ellen Köhrer and Magdalena Schaffrin, founder of the Greenshowroom for sustainable
                high-end fashion, put emphasis on presenting sustainable fashion in a modern way. The book is an
                excellent selection of 33 designers and labels from all over the world that put equal emphasis on
                sustainability as creating well-designed clothing.
                The book lets you discover fair trade and sustainable fashion labels from more established brands
                like Vivienne Westwood, Freitag and Patagonia, but it also features a range of exciting younger
                fashion labels. The book itself features well-written pages, including expert talks explaining all
                aspects of sustainability, in combination with the beautiful imagery. Excited as we were to see
                several pages dedicated to Mud Jeans, we set up an interview with author Ellen Köhrer which you will
                find below…

            </p>
            <nav class="w3-row w3-col m8 s12">
                <p>
                    <button class="w3-button w3-padding-large
                                        w3-white w3-border"><a href="Blogseite.php" class="w3-nouline w3-bold">READ MORE
                            »</a></button>
                </p>
            </nav>
        </section>
        <section class="w3-third">
            <img class="w3-image w3-sha" src="../text/blog/MUD-JEANS-Blog_Interview-moi.jpg"
                 alt="future fashion forward e. V.">
            <figcaption class="w3-hide">FASHION MADE FAIR</figcaption>
        </section>
    </article>

    <section class="w3-padding-48 w3-content-margin w3-row ">
        <header class="w3-bar ">
            <span class=" fa-2x fa-tex w3-text-green w3-funky">Hier gehts zu den Klamotten!</span>
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
</main>

<?php
    include "footer.php";
?>
