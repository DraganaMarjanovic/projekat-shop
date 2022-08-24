<?php
session_start();
$page= "index-home";

require_once __DIR__ . "/models/products_model.php";

$products=getAvailableProducts();
$popular=getPopular();

// $key=getPopular() ;

//HEADER
require __DIR__ . "/views/_layout/header.php";

// PAGE
require __DIR__ . "/views/main-index-home.php";

// FOOTER
require __DIR__ . "/views/_layout/footer.php";
?>
