<?php
require_once "Produkt.php";

$hello= new Produkt("Iphone",100,"../public_html/img/mens/infinityGrill.jpg");
$baum= new Produkt("Iphone",100,"stringlocation");
$horse= new Produkt("Iphone",100,"stringlocation");

$hello->__serialize('../data/products.txt');
$hello->__unserialize('../data/products.txt');
$data=Produkt::getData();

var_dump($data);