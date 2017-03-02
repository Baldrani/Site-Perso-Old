<!DOCTYPE html>
<html>
    <head>
        <title>Maël Mayon - Portefolio - Démineur</title>
        <?php include ('head.php'); ?>
                <!-- Lightbox -->
        <link rel="stylesheet" href="lightbox/css/lightbox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="lightbox/js/lightbox.js"></script>
    </head>
    
<body>
    <div class="wrapper">
    <?php include('navbar.php'); ?>
    <?php include ('analyticstracking.php'); ?>
        <div class="container">
            <h1 id="title_dem">Projet de cours : Démineur en langage C</h1>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h3 style="margin-left:-10px">Développement</h3>
                    <p>Nous avons eu comme projet de premier semestre en développement de créer notre démineur en langage C.<br/>Nous avions comme consigne de créer un démineur basique de 10x10 contenant 10 mines. Avec un ami nous avons décidé de pousser un peu le vice en rajoutant le plus de fonctionnalités possible pour se rapprocher du démineur auquel nous avons tous joué étant plus jeunes.<br><br>Les deux difficultés majeures étaient : Le dévoilement des 0 et des indices adjacents lorsque l'on trouvait un 0 ("Effet cascade").<br/> La seconde était d'inclure des niveaux de difficulté, ce qui a notamment nécessité de modifier tout le code.<br> Enfin, il a fallu gérer un tas de petits bugs nuisant au jeu, par exemple permettant de gagner trop facilement ou, au contraire, rendant la victoire impossible.<br><br>Nous y avons passé un bon nombre d'heures mais la satifaction de ce travail une fois fini en valait l'investissement temporel. De plus ce fut très enrichissant sur les plans de l'analyse précodage mais aussi de la programmation pure.<br />Cela m'a d'ailleurs donné envie de coder quelques autres jeux en parallèle de mes cours qui seront bien sûr présentés sur ce site. À suivre...</p>
                    <p>Précisons que nous avons utilisé une bibliothèque spécifique non intégrée à un compilateur classique :  myconio. Il vous faudra donc l'ajouter pour pouvoir faire tourner mon code.</p>
                    <p>Je partage ici le fichier du code et de quoi le faire marcher.</p>
                    <ul style="text-aligne: center">
                        <li style="display:inline"><a class="desouligne" href="fichiers/Demineur_Mael_Mayon.c" target="_blank">Code en C&nbsp;&nbsp;<span class="glyphicon glyphicon-download-alt"></span></a><span class="marge"></span></li>
                        <li style="display:inline"><a class="desouligne" href="fichiers/Myconio%20Package.zip">myconio&nbsp;&nbsp;<span class="glyphicon glyphicon-download-alt"></span></a><span class="marge"></span></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h4 style="padding-left:20%">Aperçu</h4>
                    
                    <a href="/public/images/fond_demineur.jpg" rel="lightbox" title="Aperçus En Vrac" ><img src="/public/images/fond_demineur_miniature.jpg" /></a>

                </div>
            </div>
        </div>
    
    <div class="push"></div>
</div>
    
        <div class="footer">
            <?php include ('footer.php'); ?>
        </div>

    </body>

</html>

