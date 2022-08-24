<?php
session_start();
require __DIR__ . "/models/products_model.php";
$term = "";
$sort = "";
$popular=getPopular();
if(!empty($_GET['term'])) {
    $term = $_GET['term'];
}
if($term != "") {
    $products = filteredProducts($products, $term);
}
if(!empty($_GET['sort'])) {
    $sort = $_GET['sort'];
}
if($sort != "") {
    $products = sortProductBy($products, $sort);
}
//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-pagin.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";
?>