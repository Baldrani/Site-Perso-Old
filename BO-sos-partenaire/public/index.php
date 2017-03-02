<?php

	require '../app/Autoloader.php';
	
	App\Autoloader::register();

	if (isset($_GET['p'])){
		$p = $_GET['p'];
	} else {
		$p = 'home';
	}

	// Initialisation Database
	$db = new App\Database('sos');	

	ob_start();

	if($p === 'home') {

		require '../pages/home.php';

	} elseif ($p === 'lieu') {

		require '../pages/lieu.php';

	} elseif ($p === 'sport') {

		require '../pages/sport.php';

	} elseif ($p === 'niveau') {

		require '../pages/niveau.php';

	}

	$content = ob_get_clean();

	require '../pages/templates/default.php';