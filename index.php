<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smooth Maker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800|Nixie+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

</head>
<body>
    <header>
        <a href="#"><img class="logo" src="img/logo/logoblanc.svg" alt="Logo de Smooth Maker"></a> 
        <p class="pitch">Fabriquant de smoothies artisanal</p>
        <a class="btn discover" href="#">Decouvrir</a>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Smoothies</a></li>
                <li><a href="#">Recettes</a></li>
                <li><a href="#">Le bar</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <section id="presentation">
            <div class='titre'>
                <h1>Smooth Maker</h1>
                <small>Votre producteur de smoothie artisanal à Lyon</small> 
            </div>

            <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nobis maxime modi fugit atque reiciendis numquam expedita,
                quisquam rerum incidunt placeat inventore vero eaque facilis
                similique. Fugit sapiente harum autem deleniti. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nobis maxime modi fugit atque reiciendis numquam expedita,
                quisquam rerum incidunt placeat inventore vero eaque facilis
                similique. </p>
            <p class="right"> Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nobis maxime modi fugit atque reiciendis numquam expedita,
                quisquam rerum incidunt placeat inventore vero eaque facilis
                similique. Fugit sapiente harum autem deleniti. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Nobis maxime modi fugit atque reiciendis numquam expedita,
                quisquam rerum incidunt placeat inventore vero eaque facilis
                similique.</p>
        </section>

    <section id="produits">  
        <h2>Nos Smoothies</h2> 
        <div  class="form-row">
        <?php include "listProduct.php";
            foreach($user as $value): ?>
                <article class="col-md-4">
            <img src=<?= $value["imgSrc"] ?> alt="img du smoothies">
            <a href="#"><h3><?= $value["productName"] ?></h3></a>
                </article>
        <?php endforeach; ?>
            </div>
            </section>
            
            <section id="findUs">
            <div class='titre'>
            <h2>Nous trouver</h2>
            <small>venez boire un coup smooth détente</small>
            </div>
        
            <p class="localisation">25, rue République</p>
            <p class="localisation">69002 Lyon</p>
            <br>
            <p class="localisation">04 78 02 03</p>
            <br>
            <p class="localisation">smooth@maker</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32414.124936276312!2d4.809459813325323!3d45.76178845286803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea56197f0eb3%3A0x6618930dd84dbfdc!2s25+Rue+de+la+R%C3%A9publique%2C+69002+Lyon!5e0!3m2!1sfr!2sfr!4v1545043069363" width="99%"  frameborder="0" allowfullscreen></iframe>
    </section>
    
        <h2>Découvrez les DIY smoothie</h2>
    <h4>Nos Smoothis, chez vous, par vous.</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Nobis ratione deleniti iusto voluptatum sunt velit
        necessitatibus eaque? Quisquam et fugiat vel qui odit,
        enim in! Optio explicabo consequatur magni laborum?</p>
        <a class="btn recipe" href="#"> Les Recettes</a>
    </main>

</body>

<footer>
    <p>Partage ton smoothie sur les réseaux sociaux avec <span>#Smooth Maker</span></p>
    <img src="img/icons/instagram.png" alt="Instagram">
    <img src="img/icons/facebook.png" alt="Facebook">
    <br>
    <small>2018 © SmoothMaker Lyon - Mentios Légales - Contact</small>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</html> 