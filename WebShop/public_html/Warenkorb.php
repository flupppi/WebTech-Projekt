<?php
require_once 'header.php';
require_once 'component.php';
require_once '../includes/Produkt.php';
if (isset($_POST['remove'])){
    if ($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["product_id"] == $_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>alert('Product has been Removed...!')</script>";
                echo "<script>window.location = '../public_html/Warenkorb.php'</script>";
            }
        }
    }
}
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>Cart</title>

        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg-light">

    <div class="container-fluid">
        <div class="w3-row px-5">
            <div class="col-md-7">
                <div class="shopping-cart">
                    <hr>

                    <?php
                    $total = 0;
                    Produkt::__unserialize('../data/products.txt');
                    $Produkte = Produkt::getData();
                    // print_r($Produkte);
                    $product_id = array_column($_SESSION['cart'], 'product_id');
                    //print_r($product_id);
                    if (isset($_SESSION['cart'])){
                        try {
                            foreach ($product_id as $id){
                                $Produkt=Produkt::__getProduktByID($id);
                                cartElement($Produkt->__getImage(),$Produkt->__getName(),$Produkt->__getPrice(),$Produkt->__getProduktID());
                                $total+=$Produkt->__getPrice();
                            }
                        }catch (exception $e){
                            echo "no such Produkt";
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }
                    ?>

                </div>
            </div>
            <div class="offset-md-1 border rounded mt-5 bg-white h-25 w3-right w3-quarter">

                <div class="pt-4">
                    <h6>PRICE DETAILS</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                            ?>
                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total; ?></h6>
                            <h6 class="w3-green">FREE</h6>
                            <hr>
                            <h6>$<?php
                                echo $total;
                                ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-padding-64"></div>
    </body>
    </html>
<?php require_once 'footer.php';?>