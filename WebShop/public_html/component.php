<?php
#TODO bitte kann jemand das CSS von den 2 Dingern machen es wurde mit Bootstrap gemacht


function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"w3-container\">
                    <section class=\"w3-border-bottom  w3-border-top\">
                        <article class=\"w3-row w3-white\">
                            <figure class=\"w3-col m2\">
                                <img src=$productimg alt=\"Image1\" class=\"w3-cart-img\">
                            </figure>
                            <div class=\"  w3-col m2\">
                                <h1 class=\"w3-large\">$productname</h1>
                                <small class=\"w3-small\">Typ: Damen</small>
                                <h2 class=\"w3-medium\">$$productprice</h2>
                                
                                
                             <input class=\"  w3-border w3 - input\" type=\"number\" value=\"1\" min=\"1\" max=\"10\" >
                              
                             <button type=\"submit\" class=\" w3-margin w3-margin-top w3-button w3-red \">Save for Later</button>
                                <button type=\"submit\" class=\" w3-margin w3-button w3-blue \" name=\"remove\">Remove</button>
                            </div>
                           
                           
                        </article>
                    </section>
                </form>
    
    ";
    echo  $element;
}

















