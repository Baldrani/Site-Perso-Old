<!DOCTYPE html>
<html>
	<head>
	<title>Maël Mayon - Portefolio - Développement Web</title>
	<?php include('head.php') ?>
	</head>
	<body>	<?php include ('analyticstracking.php'); ?> 
	   	<div class="wrapper">
        <?php include('navbar.php'); ?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p id="intro_dev"><em>Au cours de cette dernière année j'ai eu l'occasion de travailler quelque peu sur le Web et donc de découvrir les différents outils de développement.<br /> C'est donc à la fois des différents sites que j'ai crée mais aussi des outils que j'ai découvert et utilisés dont je vais vous parler à travers ces quelques lignes.</em></p>


			        <h1 class="titre_dev">Projet de Stage :</h1>
			        <h2>Reprise et mise en ligne d'un site de e-commerce.</h2>
			        <h5>Date : 1 Juillet – 31 Aout 2015</h5>
			        <p> Il m'a été donné l'opportunité de travailler sur plusieurs tâche durant ce stage et l'une des plus enrichissante fut peu être celle relaté ci-suit. Je suis arrivé lors du départ du designer front-end principale et ai donc écopé de la charge de finir son travail. Chose non pas aisé mais plutôt agréable grâce à sa disponibilité, même une fois les bureaux quitté et je l'en remercie pour ça. Le site en développement était un site d'e-commerce vendant des impressions liées à la photo sur différents supports comme des tableaux, des tasses ou encore de simples tirages. Ce site à été développé à l'aide d'un CMS spécialisé prénommé Prestashop. Fort d'une première expérience avec Wordpress je n'ai pas pris trop de temps à prendre mes marques bien que les deux supports soit foncièrement différents. Mon travaille à donc consisté à parachever le travail de mon prédécesseur. Voici listé et quelques peu expliqué les différentes techniques que j'ai appris durant mon exercice.
			        <h4>Bonne utilisation de FileZilla.</h4><em>Trois choses se sont imposés à moi d'elle même chacune provenant d'une situation tout à fait indépendante.</em>
			        <ul><li>Je me suis aperçu que je perdais pas mal de temps à télécharger et renvoyer à chaque fois les différents fichier que j'éditais sans compter que parfois je m'y perdais un peu ! Jusqu'au jours où recherchant comment améliorer ma productivité j'ai découvert ceci : <br> <img src … ×/img> Cette petite fonctionnalité permet d'éditer le document sélectionné dans une sauvegarde temporaire et si un enregistrement est fait le fichier est directement renvoyé sur le serveur.<br/> Plus de téléchargement inutile et plus de milliards de fichiers dans le dossier de téléchargement.</li><li> Un autre problème que j'ai eu est celui de gérer les différentes autorisation en effet sur une des pages j'ai été confronté à un problème nouveau pour moi, le chargement d'une photo ne se faisait pas correctement. Il s'est avéré que cela était du à un problème d'autorisation sur le serveur ftp en effet l'image n'était lisible que du coté propriétaire, ni par le serveur ni par le client. J'ai donc modifié du modifier les attributs du fichier. <img src … ×/img></li><li> Enfin le dernier problème est une erreur de ma part qui aurait pu avoir des conséquences importante sur notre planning. En effet j'ai écopé des identifiants administrateur et donc de tous les droits sur la database. Et il m'est arrivé une fois de par mégarde déplacer un fichier de la racine dans un autre folder. Je me suis assez vite rendu compte d'avoir fait une erreur quand il m'a été rendu impossible de modifier quelques fichier que ce soit et que les autres développeur ne pouvait plus s e connecter. Notre chance est que je n'ai pas écouté ce que me disait mes collègues qui m'incitait à fermer mon client FTP pour « voir si tout allait se réparer comme de part magie » mais d'essayé de percevoir où il y avait eu un problème et il ne m'a pas fallu si longtemps en observant l'historique de mes actions pour me rendre compte qu'un dossier /lib avait été déplacé de la racine au dossier /etc ce qui donnait /etc/lib.. Cette petite erreur dont je n'ai même pas eu conscience à fait perdre 20m à notre équipe et aurait pu nous faire perdre toute la journée voir plus. J'ai alors pris conscience de deux choses d'une qu'un serveur est très fragile et se manipule avec des pincettes ainsi qu'il faut garder une trace de toutes opérations effectués pour être capable de reconnaître où l'erreur à eu lieu. Et ma deuxième prise de conscience à été qu'il est très dangereux de confier à un débutant l'accès sans restriction à un serveur contenant les informations et la base de données de plusieurs dizaines de sites.</li></ul>
			        <h4>Bonne pratique de debuging.</h4><em>Il m'a aussi été donné d'apprendre un peu plus sur le debuging. Les questions que je me suis posé lors des problèmes rencontrés dans cette partie sont resté sans réponses quand je les ai posées sur Stackoverflow je pense donc intéressant d'expliquer les solutions apportés.</em>
			        <ul><li> Comment zoomer sur un éléments sans déclencher ses propriétés relative à la taille de l'écran ? En effet lors d'un zoom classique sur un navigateur <kbd>Cmd</kbd> + <kbd>+</kbd> ce dernier réagis comme ci la taille de la fenêtre diminuai et donc tous les événements lié à ceci réagissent. J'ai donc chercher à outrepasser ce défaut et c'est à force de recherche que j'ai trouvé la commande <kbd>Cmd</kbd> + <kbd>Alt</kbd> + <kbd>=</kbd> qui permet de zoomer (sur Mac) sur l'écran directement.</li><li>Un autre problème que j'ai eu à été lié aux fichiers caches enregistrés dans son navigateur. Bien que le bug soit connu parfois on n'y pense pas et perdons plusieurs minutes à chercher une autre cause. Une fois habitué a repérer si le problème provenait du cache il m'est apparu un autre problème qui était de trouver une commande afin de recharger uniquement une page sans prendre en compte le cache plutôt que devoir à chaque fois vider le cache du navigateur, une opération qui prend plusieurs secondes et qui plus ai n'est pas des plus utiles sachant que certains des caches sont intéressant à garder (mot de passe …). C'est encore une fois à force de recherche que j'ai trouvé  deux solutions, le première consiste à ouvrir le DevTool (sous Google Chrome) et à cocher une petite checkbox indiquant.
			        «Disable cache (while DevTools is open)».  Seul problème de cette technique, elle nécessite que le DevTool soit ouvert.
			        C'est alors par intuition que j'ai pensé à essayer <kbd>Cmd</kbd> + <kbd>Shift</kbd> + <kbd>R</kbd>. Et l’intuition fut bonne, c'est donc dorrénavent la commande que j'utilise pour résoudre mes problèmes de cache et parfois même tester ci mon problème provient de là.</li></ul>
			        <h4>Bonne utilisation de SublimText 3</h4>
			        <em>SublimeText est l'éditeur de texte qui nous réserve toujours des surprises et elles sont à chauqe fois de bonne augure. Ci dessous voici un tableau récapitulant les différentes commandes qui m'ai été donné d'apprendre et d'utiliser au cours de ce stage.</em></p>
			        <h5><strong>Précisons que ces commandes on étés éxécutés sur Mac</strong></h5>
			        <table class="table">
			        	<tr>
			        		<th>Combinaison</th>
			        		<th>Description de l'action</th>
			        	</tr>
			        	<tr>
			        		<td><kbd>Cmd</kbd> + <kbd>Shift</kbd> + <kbd>D</kbd></td>
			        		<td>Si le curseur est placé devant une ligne :  duplique cette denière / Si une partie du code est séléctionné, la duplique.</td>
			        	</tr>
			        	<tr>
			        		<td><kbd>Cmd</kbd> + <kbd>Shift</kbd> + <kbd>(</kbd><br/><kbd>Cmd</kbd> + <kbd>Shift</kbd> + <kbd>)</kbd></td>
			        		<td>Indente et désindente le contenue sélectionné.<br/>À associer avec la fonction Reindente (Edit/Line/Reindente).</td>
			        	</tr>
			        	<tr>
			        		<td><kbd>Cmd</kbd> + <kbd>K</kbd> + <kbd>B</kbd></td>
			        		<td>Affiche / Cache l'arborescence.</td>
			        	</tr>
			        	<tr>
			        		<td><kbd>Cmd</kbd> + <kbd>Ctrl</kbd> + <kbd>G</kbd></td>
			        		<td>Selectionne toute les occurences du mot séléctionné</td>
			        	</tr>
			        	<tr>
			        		<td><kbd>Cmd</kbd> + <kbd>K</kbd> + <kbd>V</kbd></td>
			        		<td>Permet de choisir parmis l'historique du clipboard (He oui il y'a un historique de clipboard dans ST)</td>
			        	</tr>
			        </table>
			        <br/><br/>
			        <h2>Création d'un blog couplé d'une boutique de vente en ligne</h2>
			        <h5>Date : 16 Mars - 1 Mai 2015</h5>
			        <p>Parlons ici du projet sur le quel j'ai travaillé durant mon stage de 6 semaines ayant eu cours cette année. J'ai été recruté dans une petite entreprise du nom de <strong><a alt="Site Marchand Non Comestible" target="_blank" href="http://www.noncomestible.com/">"Non Comestible"</a></strong> dont l'activité principale est la vente d'objet divers et variés essentielement des montres conceptuelles mais aussi des mugs ou encore des t-shirts.<br />Mon rôle dans cette entreprise fut de concevoir un blog pour un collectif associé à cette marque dont le nom est <strong><a href="http://noncomestible-crew.overblog.com/" alt="Lien Nc Crew" target="_blank">"Nc Crew"</a></strong>. Pour la conception de ces sites j'ai cherché quel serait la meilleur solution puisqu'il fallait aussi que le site soit une fois fini manageable par un non développeur. Je me suis alors penché sur <strong><a href="https://wordpress.org/" alt="Lien WordPress" target="_blank">WordPress</a></strong> et j'ai été agréablement suppris de ce que j'ai découvert. Les possibilités de ce dernier sont excellentes et m'on permis de mieux comprendre le fonctionnement des sites <strong>dynamiques</strong>.<br/>Nous nous sommes donc mis d'accord et lancés sur ce projet ainsi. Le défi était alors de faire un <strong>"theme enfant"</strong> qui correspondait au design bien spécifique qu'il m'était demandé de respecter tout en associant les divers éléments d'un <em>blog et d'une boutique en ligne</em>.<br />
			        Au cours de ce stage j'ai décidé de changer d'éditeur pour diverses raisons, j'ai donc écouté des conseils forts avisés et me suis penché sur le cas <strong><a href="http://www.sublimetext.com/3" target="_blank" alt="Sublime Text 3">Sublime Text</a></strong>. Et pour le coup je suis resté littéralement bluffé. Je ne pensai pas qu'un jour je prendrai du plaisir à configurer un éditeur de texte ! Je me suis aussi mis à utiliser 2 sites qui me furent d'une grande aide : <strong><a href="http://www.quora.com/" target="_blank" alt="Lien Quora">Quora</a></strong> un réseau social d'entraide ou l'idée est de répondre le plus précisement possible au divers questions posées. Et dans la même idée le fameux <strong><a href="http://stackoverflow.com/" target="_blank" alt="StackOverflow">StackOverflow</a></strong>.</p>



					<h1 class="titre_dev">Projet de Cours :</h1>
					<h2>Création et Amélioration de mon Site Perso</h2>
					<h5>Date : Novembre 2014</h5>
					<p>Étant en informatique et qui plus ai dans la branche du dévellopement, il va de soit de posséder son propre site "vitrine". Je me suis donc attelé à la tâche le plus tôt possible dès que nous avons eu les bases inculqués.<br/><br/>
					Pour se faire je me suis alors renseigné sur les différentes possibilités qui s'offrai à moi et, en parallèle de nos cours, me suis lancé dans l'approfondissement de mes connaissances grâce au fameux <strong><a target="_blank" href="http://openclassrooms.com/" alt="Lien Open ClassRooms / Site du Zéro">Site du Zéro</a></strong> (dorénavent plus connu sous le nom : "OpenClassRooms") mais aussi <strong><a target="_blank" href="http://www.codecademy.com/fr/learn" alt="Lien Code Academy">Code Academy</a></strong> ou encore <strong><a target="_blank" href="https://www.edx.org/" alt="Lien Edx">Edx</a></strong>.<br/>
					Je suis alors tombé inévitablement sur la désormais incontournable framework <strong><a href="http://getbootstrap.com/http://getbootstrap.com/" alt="Lien Bootstrap" target="_blank">Bootstrap</a></strong>. Immédiatement sous le charme je me suis mis à dévellopper ce petit site que je vous présente aujourd'hui en essayant de tirer le plus possible de mes différents outils.<br/>
					J'ai commencé à développer en utilisant l'éditeur de texte <strong><a href="http://brackets.io/" alt="Lien Brackets" target="_blank">Brackets</a></strong> éditeur fort sympathique qui propose une vue en direct de l'évolution de ses modifications sur les pages.
					<br />Le résultat... vous pouvez le voir à travers ce site.
					</p>
					<h5>Date : Octobre 2015</h5>
					<p>Bien que mon site soit en constante évolution, récemment et à la suite de mon apprentissage, j'ai décidé de le refaire enièrement. La charte visuel ne me plaisait plus, le code était très "amateur" et de nombreuses améliorations pouvait être apportés.
					Voici doonc listés ci dessous les différents changements apportés et ce qu'il ma été utile pour les réaliser. </p>
				</div>
			</div>
        </div>
            <div class="push"></div>
        <div class="footer">
            <?php include ('footer.php'); ?>
        </div>
      </div>
	</body>
</html>