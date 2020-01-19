<?php
require_once "Produkt.php";

$Infinity= new Produkt("Infinity",77,"../public_html/img/items/BasicTShirtVoldemort.jpg");
$Infinity1= new Produkt("Infinity",69,"../public_html/img/items/BasicTShirtRust.jpg");
$Infinity2= new Produkt("Infinity",42,"../public_html/img/items/BasicTShirtLouis.jpg");
$Infinity3= new Produkt("Infinity",13,"../public_html/img/items/BasicTShirtYoda.jpg");
$Infinity4= new Produkt("Infinity",37,"../public_html/img/items/Berta_Ecru.jpg");
$Infinity5= new Produkt("Infinity",72,"../public_html/img/items/bertaecru.JPG");
$Infinity6= new Produkt("Infinity",33,"../public_html/img/items/bertaecru_2.JPG");
$Infinity7= new Produkt("Infinity",12,"../public_html/img/items/Bobbie_Forest.jpg");
$Infinity8= new Produkt("Infinity",7,"../public_html/img/items/Bobbie_Kurkuma.jpg");
$Infinity9= new Produkt("Infinity",3,"../public_html/img/items/buddy_hoodie.jpg");
$Infinity10= new Produkt("Infinity",2,"../public_html/img/items/carla_Ecru.jpg");
$Infinity11= new Produkt("Infinity",13,"../public_html/img/items/Carla_Ecru_Dariadeh_1.JPG");
$Infinity12= new Produkt("Infinity",19,"../public_html/img/items/Carla_Ecru_Dariadeh_2.JPG");
$Infinity13= new Produkt("Infinity",23,"../public_html/img/items/Carla_Ecru_Dariadeh_3.JPG");
$Infinity14= new Produkt("Infinity",81,"../public_html/img/items/carla_sand.jpg");
$Infinity15= new Produkt("Infinity",30,"../public_html/img/items/Carla_Sand_Dariadeh_1.JPG");
$Infinity16= new Produkt("Infinity",17,"../public_html/img/items/Carla_Sand_Dariadeh_2.JPG");
$Infinity17= new Produkt("Infinity",16,"../public_html/img/items/Carla_Sand_Dariadeh_3.JPG");
$Infinity18= new Produkt("Infinity",15,"../public_html/img/items/Coco_Hoodie_Dariadeh_1.JPG");
$Infinity19= new Produkt("Infinity",13,"../public_html/img/items/Coco_Hoodie_Dariadeh_2a.JPG");
$Infinity20= new Produkt("Infinity",12,"../public_html/img/items/Coco_Hoodie_Dariadeh_3.JPG");
$Infinity21= new Produkt("Infinity",30,"../public_html/img/items/dariadeh_ayla_top_lowres.jpg");
$hello= new Produkt("Infinity",10,"../public_html/img/items/transparency_carla_sand.jpg");


$hello->__serialize('../data/products.txt');
$hello->__unserialize('../data/products.txt');
$data=Produkt::getData();

var_dump($data);