<?php
session_start();
require_once __DIR__ . "/models/products_model.php";
$productId = null;

if(!empty($_GET['page'])) {
    $productId = $_GET['page'];
    $product = getOneProductById($productId);
    $relatedProducts = getRelatedProducs($product);
 
}

// $productId = $_GET['page'];
// $product = getOneProductById($productId);

// $relatedProducts = getRelatedProducs($product);

//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main_single.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";
?>