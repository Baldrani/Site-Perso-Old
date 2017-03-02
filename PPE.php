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
					<a href="/sosPartenairesPDO.php"><div class="sosPartenaires">SOS Partenaires</div></a>
					<br>
					<br>
					<a href="/boSosPartenaires.php"><div class="sosPartenaires" >BO SOS Partenaires</div></a>
                </div>
            </div>
          
            
            <div class="push"></div>
        </div>
        <div class="footer">
            <?php include('footer.php'); ?>
        </div>
    </body>
   
</html>
<?php
	function getUserIP()
	{
	    $client  = @$_SERVER['HTTP_CLIENT_IP'];
	    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	    $remote  = $_SERVER['REMOTE_ADDR'];

	    if(filter_var($client, FILTER_VALIDATE_IP))
	    {
	        $ip = $client;
	    }
	    elseif(filter_var($forward, FILTER_VALIDATE_IP))
	    {
	        $ip = $forward;
	    }
	    else
	    {
	        $ip = $remote;
	    }

	    return $ip;
	}

	$subject = "Connexion page PPE";
	$message = "Connexion le " . date('l jS F Y h:i:s') . " de l'adresse : " . getUserIP() . " ";
	$to = "mael.mayon@free.fr";
	
	if(getUserIP() != "81.57.19.123" && getUserIP() != "92.90.21.118" && getUserIP() != "80.15.154.173"){
		mail ($to , $subject , $message);
	}
?>