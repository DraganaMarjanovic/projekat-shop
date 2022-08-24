<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoors oprema</title>
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">




</head>


<body class="bg-light">
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid" class="d-flex p-2">
                <a  class="navbar-brand" href="#"><img alt="logo" src="./public/theme/img/logo.jpg" width="100" height="50"></a>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav" class="breadcrumb">
                        <li class="nav-item"  class="breadcrumb-item" >
                            <a  class="nav-link <?php if($page == 'index-home') {
                                echo htmlspecialchars('active');
                                } ?>" href="./index-home.php">Naslovna</a>
                          
                        </li>
                        <li class="nav-item"  class="breadcrumb-item" >
                            <a   class="nav-link <?php if($page == 'products-page') {
                                echo htmlspecialchars('active');
                                } ?>" href="./products-page.php">Proizvodi</a>
                        </li>
                        <li class="nav-item"  class="breadcrumb-item" >
                            <a class="nav-link <?php if($page == 'about-page') {
                                echo htmlspecialchars('active');
                                } ?>" href="./about-page.php">O nama</a>
                        </li>
                        <li class="nav-item"  class="breadcrumb-item" >
                            <a class="nav-link <?php if($page == 'contact-page') {
                                echo htmlspecialchars('active');
                                } ?>"
                                href="./contact-page.php">Kontakt</a>
                        </li>
                        <?php if (!$_SESSION) { ?>
                            <li class="nav-item" class="breadcrumb-item">
                                <a class="nav-link <?php if ($page == 'login') {
                                                        echo htmlspecialchars('active');
                                                    } ?>" href="./login.php">Prijava</a>
                            </li>
                            <li class="nav-item" class="breadcrumb-item">
                                <a class="nav-link <?php if ($page == 'register') {
                                                        echo htmlspecialchars('active');
                                                    } ?>" href="./register.php">Registracija</a>
                            </li>

                        <?php }if($_SESSION) { ?>

                            <li class="nav-item"  class="breadcrumb-item">
                                <a class="nav-link text-primary" href="#"><?php echo $_SESSION['user'] ?> </a>
                            </li>
                            <li class="nav-item"  class="breadcrumb-item">
                                <a class="nav-link text-danger" href="./login.php">Logout </a>
                            </li>
                        <?php } ?>
                        <li class="nav-item"  class="breadcrumb-item" >
                            <a   class="nav-link <?php if($page == 'products-page') {
                                echo htmlspecialchars('active');
                                } ?>" href="./not-found.php">Profil</a>
                        </li>

                    </ul>
                    

                </div>
            </div>
            
            <div class="collapse navbar-collapse">
                    <ul class="navbar-nav m-2">
                <li class="nav-item"  class="breadcrumb-item" >
                <a href="./shop.php?page=<?php echo $single['id']; ?>" class="bg-warning" role="button"><img src="./public/theme/img/korpa.jpg" width="30px" height="30px"></a>
                        </li>
                    </ul>
                </div>
        </nav>
    </header>