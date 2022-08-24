<?php
session_start();
require __DIR__ . "/models/insert.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    $submited = false;
    $systemErrors = [];
    
    if($_POST['sub'] == "yes") {
    
    
    
    $name = (string) $_POST['name'];
    $name = trim($name);
    if(empty($name)) {
        $systemErrors['name'] = "Obavezno polje!";
    }
    
    
    $email = (string) $_POST['email'];
    $email = trim($email);
    if(empty($email)) {
        $systemErrors['email'] = "Obavezno polje!";
    }
    if(empty($systemErrors['email']) && !str_contains($email, "@")) {
        $systemErrors['email'] = "Email mora sadrzati @!";
    }
    $message = (string) $_POST['message'];
    $message = trim($message);
    
    if(empty($systemErrors)) {
        $submited = true;
        
    }
    if($submited)
    {
      
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $contacts= new Contacts;
        $contacts->insert($name,$email,$message);
        $poruka= '<div class="alert alert-success alert-dismissable" id="success-alert">'.
       '<strong">Uspesno ste nas kontaktirali, odgovoricemo u sto kracem roku </strong>'.
       '</div>';  
           
    } 
    
}
}



$page="contact-page";
//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-contact.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";

?>
