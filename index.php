<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smooth Maker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800|Nixie+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>

<body>
<header>
        <a href="index.php"><img src="img/logo/logoblanc.svg" alt="Logo SmoothMaker"></a>
        <nav class="nav navDesktop">
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Accueil</a>
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Smoothies</a>
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Recettes</a>
            <a class="nav-link text-dark font-weight-bold text-uppercase mx-4" href="#">Le bar</a>
        </nav>
        <!-- Menu mobile caché -->
        <section>
            <p>Menu</p>
            <nav class="nav navMobile">
                <a class="nav-link text-dark text-uppercase mx-4" href="#">Accueil</a>
                <a class="nav-link text-dark text-uppercase mx-4" href="#">Smoothies</a>
                <a class="nav-link text-dark text-uppercase mx-4" href="#">Recettes</a>
                <a class="nav-link text-dark text-uppercase ml-4" href="#">Le bar</a>
            </nav>
        </section>
    <p class="pitch">Fabriquant de smoothies artisanal</p>
    <a class="btn discover" href="#">Decouvrir</a>    
</header>
    <main>
        <!-- Presentation -->
        <section id="presentation">
            <div class='titre'>
                <h1>Smooth Maker</h1>
                <small>Votre producteur de smoothie artisanal à Lyon</small> 
            </div>

            <article>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec erat risus, efficitur non malesuada ut, sollicitudin id 
                    est. Fusce ac velit rhoncus, ornare erat ac, vulputate neque.
                    Proin aliquet, erat ac vulputate sagittis, sem diam porta purus,
                    quis rhoncus ante mi eu sapien. Donec elementum turpis in nisi
                    sagittis sollicitudin. Phasellus venenatis orci ac ex elementum,
                    sit amet sollicitudin massa commodo. Nunc convallis.</p>
                <p class='right'>
                    elit et tempor cursus, felis risus congue ipsum, vitae euismod
                    felis leo vitae elit. Nulla laoreet est vel tincidunt posuere.
                    Fusce nisl sem, auctor vel risus vel, pharetra imperdiet tellus.
                    Nam quis justo ac risus sodales pulvinar. Sed interdum eget
                    risus sed semper. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus. Nullam vel laoreet dui. Nunc tellus urna,
                    luctus at tellus a, consectetur pharetra ipsum. In imperdiet
                    placerat gravida. Mauris quis orci cursus, gravida ipsum non,
                    rhoncus mi.</p>
            </article>
        </section>
        <!-- Nos Smoothies -->
        <section id="produits" >
            <div class="d">
            <h2>Nos Smoothies</h2>
            </div>


        <div  class="form-row">
      <?php include "listProduct.php";
        foreach($user as $value): ?>
        <article class="card col-md-4">
            <img class="card-img" src=<?= $value["imgSrc"] ?> alt="Photo du Smoothie">
                <a href="#"><h3 class="card-text"><?= $value["productName"] ?></h3></a>
        </article>
        <?php endforeach; ?>
        </section>
        <!-- Nous trouvez -->
        <section id="findUs">
        <div class='titre'>
        <h2>Nous trouver</h2>
        <small>venez boire un coup smooth détente</small>
        </div>
        <div class="text">
            <p class="localisation"><i class="fas fa-map-maker-alt"></i> 25, rue République</p>
            <p class="localisation">69002 Lyon</p>
            <p class="localisation"> <i class="fas fa-phone"></i> 04 78 02 03</p>
            <p class="localisation"><i class="fas fa-envelope"></i> smooth@maker.fr</p>
        </div>
        <div class="frame">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32414.124936276312!2d4.809459813325323!3d45.76178845286803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea56197f0eb3%3A0x6618930dd84dbfdc!2s25+Rue+de+la+R%C3%A9publique%2C+69002+Lyon!5e0!3m2!1sfr!2sfr!4v1545043069363" width="99%"  frameborder="0" allowfullscreen></iframe>
        </div>
        </section>

        <!-- Découvez nos smoothies DIY -->
        <section id="diy">
        <h2 class="">Découvrez les DIY smoothie</h2>
    <h4>Nos Smoothis, chez vous, par vous.</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Nobis ratione deleniti iusto voluptatum sunt velit
        necessitatibus eaque? Quisquam et fugiat vel qui odit,
        enim in! Optio explicabo consequatur magni laborum?</p>
        <a class="btn recipe" href="#"> Les Recettes</a>
        </section>


    </main>
    <footer>
        <p>Partage ton smoothie sur les réseaux sociaux avec </p>
        <p>#Smooth Maker</p>
        <div>
            <a href=""><img src="img/icons/instagram.png" alt="Instagram"></a>
            <a href=""><img src="img/icons/facebook.png" alt="Facebook"></a>
        </div>
        <small>2018 © SmoothMaker Lyon - Mentios Légales - Contact</small>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</html> 