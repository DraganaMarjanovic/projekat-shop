<?php

session_start();
if($_SESSION)
{
   session_unset();
}
$page= "login";
require __DIR__ . "/models/insert.php";

  
$systemErrors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

$email=$_POST['email'];
$password=$_POST['password'];
    $users= new Users;
    $users=$users->login($email);
   foreach($users as $user)
   {
    $emailB=$user->email;
    $passwordB=$user->password;
  
    if($emailB == $email)
    {       
        if($password == $passwordB)
        {
            $_SESSION['user']=$email;
            header ("location:products-page.php");
        }else{
            $systemErrors['login'] = "Uneli ste pogresan password!";
        }
        
    }else{
     
        $systemErrors['login']="uneli ste pogresan email";
    }
   } 
    
}






//HEADER
require __DIR__ . "/views/_layout/header.php";

//MAIN
require __DIR__ . "/views/main-log.php";

//FOOTER
require __DIR__ . "/views/_layout/footer.php";

?>
