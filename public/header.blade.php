<?php
    session_start();
    $admin_id = $_SESSION['admin_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/styles.css', 'resources/js/header.js'])
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
    <link rel="shortcut icon" href="/ressources/assets/Coat_of_arms_of_Benin.svg.png" type="image/x-icon">
</head>
<body>
<header>

    <div class="logo">
        <a href="Accueil.php"><span>ERITEL</span> Travel</a>
    </div>

    <ul id="menu" class="menu">
        <li><a href="/">Acceuil</a></li>|
        <li><a href="/about">à propos</a></li>|
        <li><a href="/site">sites</a></li>|
        <li><a href="/contact">contact</a></li>
    </ul>

    <div class="dropdown">
        <p>
            <i onclick="dropdownFunction()" class="material-icons dropbtn" style="font-size:30px">account_circle</i>
            <span>
                <?php
                    if (isset($_SESSION["user_id"])) {
                        echo (implode(array_slice(str_split($_SESSION['user_lname']),0,1)).'. '.$_SESSION['user_fname']); 
                    }
                ?>
            </span>
        </p> 
        <div id="myDropdown" class="dropdown-content">
            <?php if(isset($_SESSION["admin_id"])) : ?>
                <a href="/Admin/index?msg=Page admin">Admin</a>
                <a href="/Users/logout">Déconnexion</a>
            <?php elseif (isset($_SESSION["user_id"])) : ?>
            <a href="/Users/logout">Déconnexion</a>
            <?php else : ?>
                <a href="/Users/login">Connexion</a>
                <?php endif; ?>
        </div>
    </div>

    <a href="/reservation" class="btn_reservation reservation">Réserver un Hôtel</a>
    <div id="responsive_menu" class="responsive_menu"></div>

</header>

    {{-- <script src="/ressources/js/header.js"></script> --}}

</body>
</html>