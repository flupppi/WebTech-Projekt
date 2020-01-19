<?php

function component($productname, $productprice, $productimg, $productid)
{
    $element = "
    
    <div class=\"w3-card w3-quarter w3-col w3-padding-24 \">
                <form action=\"../public_html/Produktseite.php\" method=\"post\">
                    <div class=\"w3-center\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"w3-cart-img\">
                        </div>
                        <div class=\"\">
                            <h5 class=\"\">$productname</h5>
                            <p class=\"\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                <small><s class=\"\">$519</s></small>
                                <span class=\"price\">$$productprice</span>
                            </h5>
                            <button type=\"submit\" class=\"w3-button w3-green my-3\" name=\"add\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"../public_html/Warenkorb.php?action=remove&id=$productid\" method=\"post\" class=\"w3-container\">
                    <section class=\"w3-border-bottom  w3-border-top\">
                        <article class=\"w3-row w3-white\">
                            <figure class=\"w3-col m2\">
                                <img src=$productimg alt=\"Image1\" class=\"w3-cart-img\">
                            </figure>
                            <div class=\"  w3-col m2\">
                                <h1 class=\"w3-large\">$productname</h1>
                                <small class=\"w3-small\">Typ: Damen</small>
                                <h2 class=\"w3-medium\">$$productprice</h2>
                                
                                
                             <input class=\" w3-border w3-input\" type=\"number\" value=\"1\" min=\"1\" max=\"10\" >
                              
                             <button type=\"submit\" class=\" w3-margin w3-margin-top w3-button w3-red \">Save for Later</button>
                                <button type=\"submit\" class=\" w3-margin w3-button w3-blue \" name=\"remove\">Remove</button>
                            </div>
                           
                           
                        </article>
                    </section>
                </form>
    
    ";
    echo  $element;
}

















