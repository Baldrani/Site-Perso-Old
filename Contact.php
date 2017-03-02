<?php  
define( 'MAIL_TO', /* >>>>> */'mael.mayon@free.fr'/* <<<<< */ );  //ajouter votre courriel  

$mailSent = false; // drapeau qui aiguille l'affichage du formulaire OU du récapitulatif  
$errors = array(); // tableau des erreurs de saisie  

if( filter_has_var( INPUT_POST, 'send' ) ) // le formulaire a été soumis avec le bouton [Envoyer]  
{  
    $from = filter_input( INPUT_POST, 'from', FILTER_VALIDATE_EMAIL );  
if( $from === NULL || $from === MAIL_FROM ) // si le courriel fourni est vide OU égale à la valeur par défaut  
{  
    $errors[] = 'Vous devez renseigner votre adresse de courrier électronique.';  
}  
elseif( $from === false ) // si le courriel fourni n'est pas valide  
{  
    $errors[] = 'L\'adresse de courrier électronique n\'est pas valide.';  
    $from = filter_input( INPUT_POST, 'from', FILTER_SANITIZE_EMAIL );  
}  

$object = filter_input( INPUT_POST, 'object', FILTER_SANITIZE_STRING, FILTER_FLAG_ENCODE_HIGH | FILTER_FLAG_ENCODE_LOW );  
if( $object === NULL OR $object === false OR empty( $object ) OR $object === MAIL_OBJECT ) // si l'objet fourni est vide, invalide ou égale à la valeur par défaut  
{  
    $errors[] = 'Vous devez renseigner le sujet.';  
}  

/* pas besoin de nettoyer le message.   
/ http://www.phpsecure.info/v2/article/MailHeadersInject.php  
/ Logiquement, les parties message, To: et Subject: pourraient servir aussi à injecter quelque chose,  mais la fonction mail()  
/ filtre bien les deux dernières, et la première est le message, et à partir du moment où on a sauté une ligne dans l'envoi du mail,  
/ c'est considéré comme du texte; le message ne saurait donc rester qu'un message.*/  
$message = filter_input( INPUT_POST, 'message', FILTER_UNSAFE_RAW );  
if( $message === NULL OR $message === false OR empty( $message ) OR $message === MAIL_MESSAGE ) // si le message fourni est vide ou égale à la valeur par défaut  
{  
    $errors[] = 'Vous devez écrire un message.';  
}  

if( count( $errors ) === 0 ) // si il n'y a pas d'erreurs  
{  
if( mail( MAIL_TO, $object, $message, "From: $from\nReply-to: $from\n" ) ) // tentative d'envoi du message  
{  
    $mailSent = true;  
}  
else // échec de l'envoi  
{  
    $errors[] = 'Votre message n\'a pas été envoyé.';  
}  
}  
}  
else // le formulaire est affiché pour la première fois, avec les valeurs par défaut  
{  
    $from = MAIL_FROM;  
    $object = MAIL_OBJECT;  
    $message = MAIL_MESSAGE;  
}  
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">  
<title>Maël Mayon - Contact</title>
<?php include ('head.php'); ?>  
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />  
<meta http-equiv="content-language" content="fr" />  
<!--   <style type="text/css">
label{ display:block; font-weight:bold; }  
p#welcome{ padding:10px 20px; border:1px dotted #00f; color:#00f; font-weight:bold; }  
ul{ padding:10px 20px; border:1px dotted #f00; color:#f00; font-weight:bold; }  
p#success{ padding:10px 20px; border:1px dotted #0f0; color:#0f0; font-weight:bold; }  
p em{ display:block; font-weight:normal; }  
</style>  Rentre en conflie avec Bootstrap.. à voir-->
<script src='https://www.google.com/recaptcha/api.js'></script> <!-- Pour reCaptcha -->
</head>  
<body> <?php include ('analyticstracking.php'); ?>
    <div class="wrapper">
        <?php include('navbar.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <?php  
if( $mailSent === true ) // si le message a bien été envoyé, on affiche le récapitulatif  
{  
    ?>  
    <p id="success">Votre message a bien été envoyé.</p>  
    <p><strong>Courriel pour la réponse :</strong><br /><?php echo( $from ); ?></p>   
    <p><strong>Message :</strong><br /><?php echo( nl2br( htmlspecialchars( $message ) ) ); ?></p>  
    <?php  
}  
else // le formulaire est affiché pour la première fois ou le formulaire a été soumis mais contenait des erreurs  
{  
    if( count( $errors ) !== 0 )  
    {  
        echo( "\t\t<ul>\n" );  
        foreach( $errors as $error )  
        {  
            echo( "\t\t\t<li>$error</li>\n" );  
        }  
        echo( "\t\t</ul>\n" );  
    }  
    else  
    {  
        echo( "\t\t<p id=\"welcome\"><em>Tous les champs sont obligatoires</em></p>\n" );  
    }  
    ?>  
    <form id='contact' method="post" action="<?php echo( $_SERVER['REQUEST_URI'] ); ?>">  
        <p>   
            <input type="text" name="from" id="from" placeholder="Votre email..." />  
        </p>  
        <p>    
            <input type="text" name="object" id="object" placeholder="Qui êtes-vous ?" />  
        </p>   
        <p>  
            <textarea name="message" id="message" rows="20" cols="80" placeholder="Votre message..."></textarea>  
        </p> 
        <div class="row">
            <div class="col-xs-6">
                <div class="g-recaptcha" data-sitekey="6LdeBAQTAAAAAOuZZSzSmxlJTXK1RNioXe0_OcP4"></div>  
            </div>
            <div class="col-xs-6">
                <div class="button">
                    <button name="send" value="Envoyer" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Envoyer votre message</button>
                </div>   
            </div>
        </div>
    </form> 
    <?php  
}  
?>  </div>
</div>
<div class="push"></div>
</div>
</div>
<div class="footer">
    <?php include ('footer.php') ?>
</div>

</body>  
</html>