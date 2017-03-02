<!DOCTYPE html>
<html>
    <head>
        <?php include('head.php') ?>
        <title>Maël Mayon - Présentation</title> 
    </head>
    
<body>  <?php include ('analyticstracking.php'); ?>
    <div class="wrapper">
    <?php include('navbar.php'); ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-xs-12">
                <p align="justify">
                <br />
                Jeune étudiant <span class="stronger1">passionné</span> d'informatique, je me suis attaché très vite à ce milieu y ayant baigné depuis toujours grâce, notamment, à mon père. Très jeune il m'apprenait à me servir de <span class="stronger1">Photoshop</span>, puis plus tard je m'essayais à la modélisation 3D. Je me suis par la suite cherché dans les domaines <span class="stronger1">scientifiques</span>, de la chimie à la mécanique en passant par les mathématiques et la physique, avant de me rendre enfin à l'évidence : le <strong>développement</strong> est ma passion et l'<span class="stronger1">informatique</span> est le domaine dans lequel je souhaite réussir.
                <br/><br/>
                On dit de moi que je suis <span class="stronger1">énergique</span> et <span class="stronger1">dynamique</span>. Étudiant et <span class="stronger1">autodidacte</span> je suis intéressé et <span class="stronger1">curieux</span> d'approfondir mon expérience dans l'informatique. Ce goût pour la découverte m'incite à m'<span class="stronger1">adapter</span> rapidement à mon environnement de travail. Attiré depuis longtemps par le <span class="stronger1">développement</span>, je découvre en ce moment les multiples possibilités que ce dernier offre à moi et ce, notamment afin de tarir ma soif de <strong>création</strong>.
                <br/><br/>
                Commençant à <strong>explorer</strong> les différents domaines, je me suis pour le moment beaucoup intéressé au coté <strong>graphique</strong> du <strong>Web</strong> et continue à me renseigner et apprendre en parallèle les langages <strong>d'architecture</strong> comme le <strong>PHP</strong> qui me plait beaucoup. J'ai aussi eu un petit coup de cœur pour le <strong>Java</strong> souhaitant m'essayer à la création de petits jeux.
                <br/><br/>
                Toutes ces découvertes me <strong>passionnent</strong> et me <strong>motivent</strong>. Je sais que j'ai encore beaucoup à apprendre et ceci <strong>m'anime</strong> d'autant plus en me poussant à longueur de journée à me renseigner sur tel ou tel <strong>langage</strong>, à lire des revues informatiques et à tenter à chaque fois d'utiliser mes <strong>découvertes</strong> au quotidien.
                </p>
                </div>
                <div class="col-sm-offset-1 col-sm-4 col-xs-12">
                <img id="photo_presentation" src="/public/images/IMG_0141-Recovered.png" height="720" width="1080"></img> <!-- a modifier en utilisant les photo bootstrap -->
                </div>
            </div>
            <div class="row competences">
                <h1>Compétences Informatique</h1>
                <div id="A" class="col-xs-6 col-md-4"></div>
                <div id="B" class="col-xs-6 col-md-4"></div>
                <div id="C" class="col-md-4"></div>
                <script>
                	$(window).resize(function(){
                		var viewportWidth = $(window).width();
                		if(viewportWidth == 768){
                			$('.containerSkills')
                		} else if(viewportWidth > 768){

                		}
                	});
                </script>
                <div class="col-md-4">
                	<div class="containerSkills">
					<span class="hide">PHP / SQL<br></span>
					  PHP
					  <div data-level="50" class="innerSkill">PHP7</div>
					  <div data-level="60" class="innerSkill">Laravel</div>
					  <div data-level="70" class="innerSkill">Smarty</div>
					  <div data-level="80" class="innerSkill">Blade</div>
					  <div data-level="50" class="innerSkill">OOP</div>
					  SQL
					  <div data-level="70" class="innerSkill">MySQL</div> 
					</div>
                <br>
                	<div class="containerSkills">
					  HTML
					  <div data-level="95" class="innerSkill">HTML5</div>
					  <div data-level="60" class="innerSkill">Emmet</div>
					  <div data-level="60" class="innerSkill">Newsletter</div>
					</div>
                </div>
                <div class="col-xs-6 col-md-4">
                	<div class="containerSkills">
					  JS
					  <div data-level="50" class="innerSkill">Vanilla</div>
					  <div data-level="90" class="innerSkill">jQuery</div>
					</div>
                <br>
                	<div class="containerSkills">
					  CSS
					  <div data-level="90" class="innerSkill">CSS3</div>
					  <div data-level="60" class="innerSkill">SASS/Compass</div>
					  <div data-level="75" class="innerSkill">Bootstrap</div>
					</div>
                </div>
                <div class="col-xs-6 col-md-4">
                	<div class="containerSkills">
					  <span class="hide">Logiciels/Autres<br></span>
					  Logiciels
					  <div data-level="95" class="innerSkill">Sublime Text</div>
					  <div data-level="40" class="innerSkill">PHPStorm</div>
					  <div data-level="55" class="innerSkill">Photoshop</div>
					  Autres
					  <div data-level="90" class="innerSkill">Regex</div>
					  <div data-level="75" class="innerSkill">Git</div>
					  <div data-level="90" class="innerSkill">Shell</div>
					</div>
                <br>
                	<div class="containerSkills">
					  Autres languages
					  <div data-level="35" class="innerSkill">C/C++</div>
					  <div data-level="55" class="innerSkill">Java</div>
					</div>
                </div>
			</div>
			<br><br>
			<a href="#" id="showFiddle">Pour voir le code de ces petites boxes...</a>
            <div class="hideFiddle" style="display:none;">
                <iframe width="100%" height="300" src="//jsfiddle.net/Baldrani/2fwy92w8/embedded/js,html,css,result/dark/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
            </div>
            <script type="text/javascript">
                /* Conatainer Js*/
				$('.containerSkills').hover(function(){
					$(this).children('.hide').fadeToggle();
				  	$(this).children('.innerSkill').each(function(){
				      	width = $(this).attr('data-level') * 0.85;
				      	width += '%';
				      	$(this).css('width',width);
				    })
				})

				$('.containerSkills').mouseleave(function(){
					$(this).children('.innerSkill').each(function(){
				    $(this).css('width',0);
				  })
				})

                /* Dévoile l'iframe */
                $('#showFiddle').on('click',function(){
                    $('.hideFiddle').fadeIn();
                })
            </script>
        </div>    

    <div class="push"></div>
</div>
    
    <div class="footer">
            <?php include ('footer.php'); ?>
    </div>
    </body>
</html>