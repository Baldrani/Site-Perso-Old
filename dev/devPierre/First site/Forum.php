<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8" />
    	<link rel="stylesheet" href="style.css" />
    	<title>Pierre MAUER</title>
	</head>

	<body>
		<header>
			<?php include("menuPrincipal.php"); ?>
		</header>

		<section>
			<div id="EnTeteAccueil">
				<?php
				echo 'Bonjour ! Nous sommes le ' . date('d') . '/' . date('m') . '/' . date('Y') . ' et il est ' . date('H') . ' h ' . date('i') . '.';
				?>
			</div>

			<div id="Post">
				<form method="post" action="Forum_post.php">
					<p>
						<label for="Pseudo">Pseudo :</label>
						<br/>
						<input type="text" name="Pseudo" id="Pseudo" />
						<br/>
						<label for="Commentaire">Commentaire</label>
						<br/>
						<input type="text" name="Commentaire" id="Commentaire" />
						<br/>
						<br/>
						<input type="submit" value="Poster" />
						<br/>
					</p>
				</form>
			</div>

			<div id="Chat">
				<?php
					$bdd = new PDO('mysql:host=sql.maelmayon.fr;dbname=tests;charset=utf8', 'root', '');

					$reponse = $bdd->query('SELECT Pseudo, Commentaire FROM forum ORDER BY ID DESC LIMIT 0,10');
					while($donnees = $reponse->fetch())
					{
						echo'<p><strong>' . htmlspecialchars($donnees['Pseudo']) . '</strong> : ' . htmlspecialchars($donnees['Commentaire']) . '</p>';
					}
				?>
			</div>
		</section>

		<footer>
			<p>&copy Copyright - Pierre MAUER</p>
		</footer>
	</body>
</html>