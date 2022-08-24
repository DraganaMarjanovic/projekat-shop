
<?php
session_start();
// require_once __DIR__."/models/products_model.php";

// require_once __DIR__."/models/shopping-cart-model.php";
// $items=getShoppingCart();
// $productId=null;
// $quantity=null;



$productId = null;
$quantity = null;
$submited = false;
$systemErrors = [];

if(!empty($_POST['product_id'])) {
    $productId = $_POST['product_id'];
}

if(!empty($_POST['quantity'])) {
    $quantity = $_POST['quantity'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    $submited = false;
    $systemErrors = [];

    
    if($_POST['buy'] == "yes") {
    
    
    
    $name = (string) $_POST['name'];
    $name = trim($name);
    if(empty($name)) {
        $systemErrors['name'] = "Upisite Vase ime!";
    }
    
    $last_name = (string) $_POST['last_name'];
    $last_name = trim($last_name);
    if(empty($last_name)) {
        $systemErrors['last_name'] = "Upisite Vase prezime!";
    }
    $email = (string) $_POST['email'];
    $email = trim($email);
    if(empty($email)) {
        $systemErrors['email'] = "Upisite email!";
    }
    if(empty($systemErrors['email']) && !str_contains($email, "@")) {
        $systemErrors['email'] = "Email mora sadrzati @!";
    }
    

    $city= (string) $_POST['city'];
    $city = trim($city);
    if(empty($city)) {
        $systemErrors['city'] = "Upisite grad";
    }



    $phone = (string) $_POST['phone'];
    $phone = trim($phone);
    // if(!is_numeric($phone)) {
    //     $systemErrors['phone'] = "Polje sadrzi samo brojeve!";
    // }
    // if(strlen($phone) < 9 or strlen($phone) > 11) {
    //     $systemErrors['phone'] = "Mora sadrzati izmedju 9 i 11 cifara";
    // }
    if(empty($phone)) {
        $systemErrors['phone'] = "Obavezno polje";
    }
    if(empty($systemErrors['phone']) && false) {
        $systemErrors['phone'] = "Greska!";
    }





    $street = (string) $_POST['street'];
    $street = trim($street);
    if(empty($street)) {
        $systemErrors['street'] = "Upisite adresu!";
    }
    

    $zip = (string) $_POST['zip'];
    $zip = trim($zip);
    // if(!is_numeric($zip)) {
    //     $systemErrors['zip'] = "Polje sadrzi samo brojeve!";
    // }
    // if(strlen($zip) !== 5) {
    //     $systemErrors['zip'] = "Polje mora sadrzati 5 cifara!";
    // }
    if(empty($zip)) {
        $systemErrors['zip'] = "Upisite postanski broj!";
    }





    $rights = (string) $_POST['rights'];
    if(empty($rights)) {
        $systemErrors['rights'] = "Obavezno!";
    }




    if(empty($systemErrors)) {
        $submited = true;
        
    }
    if($submited)
    {
      
        $name = $_POST['name'];
        $last_name=$_POST['last_name'];
        $email = $_POST['email'];
        $city= $_POST['city'];
        $phone = $_POST['phone'];
        $street = $_POST['street'];
        $zip = $_POST['zip'];
        $message = $_POST['message'];
    header ("location:thank-you.php");
    } 
    
}
}






require_once __DIR__ . "/models/products_model.php";


$product = getOneProductById($productId);
//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main_check.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";

?>