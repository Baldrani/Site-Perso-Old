<!DOCTYPE html>
<style type="text/css" media="screen">
    * {
margin: 0;
}
html, body {
height: 100%;
}
.wrapper {
min-height: 100%;
height: auto !important;
height: 100%;
margin: 0 auto -104px;
}
.footer, .push {
height: 104px;
}
</style>
<html>
    <head>
        <?php include('head.php') ?>
        <title>Maël Mayon - Portfolio - PPE</title>
    </head>

    <body>  <?php include ('analyticstracking.php'); ?>
        <div class="wrapper">
            <?php include('navbar.php'); ?>
            <div class="container">
                <div class="row">
                    <!-- Content -->
                    
                    <h2>Bienvenue sur le projet Sos Partenaires</h2>

                    <p>• Vous pouvez en cliquant sur <a target="_blank" href="/sos-partenairepdo/views/">ce lien</a> accèder à la dernière version en ligne du projet.<br>Les informations de connexion sont les suivant : <br><br><table class="table" width="40%" style="text-align:center"><tr><td>Login</td><td>Examinateur</td></tr><tr><td>Mot de passe</td><td>Examinateur</td></tr></table><br>Vous pouvez aussi vous inscrire si vous le souhaitez.</p>
                    <p>• Si vous souhaitez télécharger l'ensemble du projet cliquez sur <a href="/fichiers/sos-partenairepdo.zip">ce lien</a> (dossier à dézipper).</p>
                    <p>• Les divers documents (documentation technique, d'utilisation...) sont accéssibles sur <a href="https://www.google.com/intl/fr_fr/drive/" target="_blank">Google Drive</a> via l'adresse <strong>examinateurmaxmael@gmail.com</strong> et le mot de passe <strong>Exam1n4t3ur</strong></p>

                    <!-- End Content -->
                </div>
            </div>  
            <div class="push"></div>
        </div>
        <div class="footer">
            <?php include('footer.php'); ?>
        </div>
    </body>
   
</html>