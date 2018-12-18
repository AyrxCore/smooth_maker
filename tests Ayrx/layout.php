<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smooth Maker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800|Nixie+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="testStyle.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body id="layout">
    <header>
        <a href="index.php"><img src="../img/logo/logo.png" alt="Logo SmoothMaker"></a>
        <nav class="nav navDesktop">
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Accueil</a>
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Smoothies</a>
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Recettes</a>
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Le bar</a>
        </nav>
        <!-- Menu mobile caché -->
        <section>
            <p class="menuMobile text-uppercase"><i class="fas fa-bars"></i> Menu</p>
            <nav class="nav navMobile">
                <a class="nav-link text-white text-uppercase mx-4" href="#">Accueil</a>
                <a class="nav-link text-white text-uppercase mx-4" href="#">Smoothies</a>
                <a class="nav-link text-white text-uppercase mx-4" href="#">Recettes</a>
                <a class="nav-link text-white text-uppercase ml-4" href="#">Le bar</a>
            </nav>
        </section>
        <!--  -->
    </header>

    <main>
        <?php include "recipe.phtml" ?>
    </main>
    
    <footer>
        <p>Partage ton smoothie sur les réseaux sociaux avec </p>
        <p>#Smooth Maker</p>
        <div>
            <a href=""><img src="../img/icons/instagram.png" alt="Instagram"></a>
            <a href=""><img src="../img/icons/facebook.png" alt="Facebook"></a>
        </div>
        <small>2018 © SmoothMaker Lyon - Mentios Légales - Contact</small>
    </footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
<script src="../main.js"></script>
</body>
</html> 