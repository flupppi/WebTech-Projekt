<?php
require_once "Produkt.php";

$hello= new Produkt("Iphone",100,"stringlocation");
$baum= new Produkt("Iphone",100,"stringlocation");

$data = $hello->getData();

var_dump($data);