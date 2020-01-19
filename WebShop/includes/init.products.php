<?php
require_once "Produkt.php";

$Infinity= new Produkt("Basic T Shirt Voldemort",77,"../public_html/img/items/BasicTShirtVoldemort.jpg");
$Infinity1= new Produkt("Basic T Shirt Rust",69,"../public_html/img/items/BasicTShirtRust.jpg");
$Infinity2= new Produkt("Basic T Shirt Louis",42,"../public_html/img/items/BasicTShirtLouis.jpg");
$Infinity3= new Produkt("Basic T Shirt Yoda",13,"../public_html/img/items/BasicTShirtYoda.jpg");
$Infinity4= new Produkt("Berta Ecru",37,"../public_html/img/items/Berta_Ecru.jpg");
$Infinity5= new Produkt("bertaecru",72,"../public_html/img/items/bertaecru.JPG");
$Infinity6= new Produkt("bertaecru 2",33,"../public_html/img/items/bertaecru_2.JPG");
$Infinity7= new Produkt("Bobbie Forest",12,"../public_html/img/items/Bobbie_Forest.jpg");
$Infinity8= new Produkt("Bobbie Kurkuma",7,"../public_html/img/items/Bobbie_Kurkuma.jpg");
$Infinity9= new Produkt("buddy hoodie",3,"../public_html/img/items/buddy_hoodie.jpg");
$Infinity10= new Produkt("carla Ecru",2,"../public_html/img/items/carla_Ecru.jpg");
$Infinity11= new Produkt("Carla Ecru Dariadeh",13,"../public_html/img/items/Carla_Ecru_Dariadeh_1.JPG");
$Infinity12= new Produkt("Carla Ecru Dariadeh",19,"../public_html/img/items/Carla_Ecru_Dariadeh_2.JPG");
$Infinity13= new Produkt("Carla Ecru ariadeh",23,"../public_html/img/items/Carla_Ecru_Dariadeh_3.JPG");
$Infinity14= new Produkt("carla sand",81,"../public_html/img/items/carla_sand.jpg");
$Infinity15= new Produkt("Carla Sand Dariadeh",30,"../public_html/img/items/Carla_Sand_Dariadeh_1.JPG");
$Infinity16= new Produkt("Carla Sand Dariadeh",17,"../public_html/img/items/Carla_Sand_Dariadeh_2.JPG");
$Infinity17= new Produkt("Carla Sand Dariadeh",16,"../public_html/img/items/Carla_Sand_Dariadeh_3.JPG");
$Infinity18= new Produkt("Coco Hoodie Dariadeh",15,"../public_html/img/items/Coco_Hoodie_Dariadeh_1.JPG");
$Infinity19= new Produkt("Coco Hoodie Dariadeh 2a",13,"../public_html/img/items/Coco_Hoodie_Dariadeh_2a.JPG");
$Infinity20= new Produkt("Coco Hoodie Dariadeh",12,"../public_html/img/items/Coco_Hoodie_Dariadeh_3.JPG");
$Infinity21= new Produkt("dariadeh ayla top lowres",30,"../public_html/img/items/dariadeh_ayla_top_lowres.jpg");
$hello= new Produkt("transparency carla sand",10,"../public_html/img/items/transparency_carla_sand.jpg");


$hello->__serialize('../data/products.txt');
$hello->__unserialize('../data/products.txt');
$data=Produkt::getData();

var_dump($data);