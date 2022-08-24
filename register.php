<<?php

session_start();
$page= "register";
require __DIR__ . "/models/insert.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    $submited = false;
    $systemErrors = [];
    
    if($_POST['sub'] == "yes") {
    
    
    
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
        $systemErrors['email'] = "Obavezno polje!";
    }
    if(empty($systemErrors['email']) && !str_contains($email, "@")) {
        $systemErrors['email'] = "Email mora sadrzati @!";
    }
    
    $password = (string) $_POST['password'];
    $password = trim($password);
    if(empty($password)) {
        $systemErrors['password'] = "Obavezno polje!";
    }
  

    $age = (string) $_POST['age'];
    $age = trim($age);
    if(empty($age)) {
        $systemErrors['age'] = "Polje mora sadrzati broj";
    }

    $gender = (string) $_POST['gender'];
    $gender = trim($gender);
    if(empty($gender)) {
        $systemErrors['gender'] = "Obavezno polje!";
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
        $password = $_POST['password'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $users= new Users;
        $users->insert($name,$last_name,$email,$password,$age,$gender);
        $poruka= '<div class="alert alert-success alert-dismissable" id="success-alert">'.
       '<strong> Dobrodosli,Vasa registracija je uspesna! </strong>'.
       '</div>'; 
       header ("location:login.php");
    } 
    
}
}






//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-register.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";

?>
