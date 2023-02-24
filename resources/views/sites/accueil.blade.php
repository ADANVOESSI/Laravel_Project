<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Voyage | Home</title>
    @vite(['resources/css/styles.css', 'resources/js/header.js'])
</head>
<body>
    <header>
        <?php 
            require 'header.blade.php';
        ?>
    </header>
    <main>
        <div class="container">
            <section class="home">
                <h2>Bienvenu au Bénin !</h2>
                <h4>Voyager en Sécurité</h4>
                <a href="/reservation" class="btn_reservation home_btn">Réserver un Hôtel</a>
            </section>
        </div>
    </main>
    <footer>
        <?php 
            require 'footer.blade.php';
        ?>
    </footer>
</body>
</html>