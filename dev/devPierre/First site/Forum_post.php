<?php
	$bdd = new PDO('mysql:host=localhost;dbname=tests;charset=utf8', 'root', '');

	$req = $bdd->prepare('INSERT INTO forum(Pseudo, Commentaire) VALUES (?,?)');
	$req->execute(array($_POST['Pseudo'], $_POST['Commentaire']));

	header('Location: Forum.php')
?>