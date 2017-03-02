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

			<div id="navAccueil">
				<ul>
					<li class="Presentation"><a href="#Presentation">Présentation</a></li>
					<li><a href="#LetMeTakeASelfie">#Selfie!</a></li>
					<li><a href="#Actualite">Actualités</a></li>
				</ul>
			</div>

			<article id="Presentation">
				<h1>Bienvenue sur mon site!</h1>
				<p>Vous y trouverez :<br /></p>
				<ul>
					<li>Ma présentation</li>
					<li>Mon CV</li>
					<li>Mes différents projets</li>
					<li>Et plus à venir..</li>
				</ul>
				<h3>Ce site est en constante évolution!</h3>
			</article>

			<aside>
				<p>Inscription :</p>
				<form method="post" action="indexCible.php">
					<p>
						<label for="Nom">Nom :</label>
						<br/>
						<input type="text" name="Nom" id="Nom" placeholder="Ex : Mauer" />
						<br/>
						<label for="Prenom">Prénom :</label>
						<br/>
						<input type="text" name="Prenom" id="Prenom" placeholder="Ex : Pierre" />
						<br/>
						<label for="DateDeNaissance">Date de naissance :</label>
						<br/>
						<input type="date" name="DateDeNaissance" id="DateDeNaissance" placeholder="Ex : 25/11/1992" />
						<br/>
						<br/>
						<input type="submit" value="Envoyer" ></code>
					</p>
				</form>
			</aside>

				<figure class="BarreDeSeparation"></figure>

			<article id="LetMeTakeASelfie">
				<h2>But First.. Let Me Take A Selfie!</h2>

				<div id="ImageSelfie">
					<div id="ImageSelfieBande">
						<strong>#Selfie!</strong>
						<div class="lienVideo">
							<a href="https://www.youtube.com/watch?v=kdemFfbS5H0" title="Let Me Take A Selfie!" target="_blank">Cliquez ici!</a>
						</div>
					</div>
	            </div>
	        </article>

	        	<figure class="BarreDeSeparation"></figure>

	        <article>
		        <iframe width="720px" height="405px" src="https://www.youtube.com/embed/kdemFfbS5H0" frameborder="0" allowfullscreen></iframe>
		    </article>

		    	<figure class="BarreDeSeparation"></figure>

			<article id="Actualite">
				<h1><strong>NEWS</strong></h1>

				<p>
				#YOLO<br />
				&#9829
				</p>
			</article>
		</section>

		<footer>
			<p>&copy Copyright - Pierre MAUER</p>
		</footer>
	</body>
</html>