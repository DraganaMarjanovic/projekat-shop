<?php
session_start();
$page="about-page";
//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-about.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";

?>




