<!DOCTYPE html>
<html>
    <head>
        <title>Maël Mayon - Accueil</title>
        <?php include ('head.php'); ?>
        <!-- Js Slider -->
        <script src="../js/jsSlider/jssor.slider.mini.js"></script>
        <script>
        jssor_slider1_starter = function (containerId) {

            var _SlideshowTransitions = [
            //Fade
            { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                           //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                 //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                  //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }

            };


            var jssor_slider1 = new $JssorSlider$(containerId, options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales
            //while window resizes
            function ScaleSlider() {
                var parentWidth = $('#slider1_container').parent().width();
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            //Scale slider after document ready
            ScaleSlider();

            //Scale slider while window load/resize/orientationchange.
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
            };

        </script>
        <!-- End Js Slider -->
    </head>
    <body>            <?php include ('analyticstracking.php'); ?>
    <div class="wrapper">
        <?php include('navbar.php'); ?>
        <div class="container">
            <div class="jumbotron jumbotron_petit">
                <h1 id="entete_jumbotron">Bienvenue sur le site de Maël Mayon</h1>
                <p id="p_jumbotron">Vous pourrez à travers ces quelques pages, conçues de toute pièce par mes soins, découvrir mon parcours, mes créations et bien sûr me contacter si mon univers vous intéresse.<br/><a href="Presentation.php"><span class="color_blue" id="a_jumbotron">Cliquez ici pour en apprendre plus sur moi...</span></a></p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h3>Quoi de neuf : </h3>
                    <p><strong>• Depuis le 21 Avril</strong>, La section <a href="/FeedTechnologique.php">veille téchnologique</a> possède désormais une fonctionnalité de recherche.</p>
                    <p><strong>• Depuis le 20 Avril</strong>, La section <a href="http://maelmayon.fr/Presentation.php">présentation</a> du site possède une petite nouvelle fonctionnalité. Jetez un coup d'œeil ;)</p>
                    <p><strong>• Depuis le 17 Mars</strong>, Grâce à l'excellent plugin <a href="http://prismjs.com/index.html" alt="Prism">Prism</a> les codes sur ce site sont désormais plus jolis ! Et pour agrémenter ceci la section <em><a href="http://maelmayon.fr/projetsjs.php">Projets Web > Javascript</a></em> fait son entrée.</p>
                    <p><strong>• Depuis le 1 Août</strong>, le navigateur est désormais géré via JavaScript évitant ainsi la répétition de son <span class="hoverPopupWrapper">code</span>. De plus les feeds sont désormais disponible directement sur le site.</p>
<pre class="hoverPopup"><code  class="language-javascript">$('.navbar li').each(function(){
    $(this).removeClass('active');
    if($(this).find('a').prop('href') == location)
    {
        $(this).addClass('active');
    }
})</code></pre>
                </div><!-- End col -->
                <div class="col-xs-12 col-sm-6">
                        <!--#region Jssor Slider Begin -->
                        <!-- To move inline styles to css file/block, please specify a class name for each element. -->
                        <div id="slider1_container" style="position: relative; width:600px;
                            height: 300px; border-radius:5px; overflow: hidden;">

                            <!-- Slides Container -->
                            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                                overflow: hidden;">
                                <div><img u="image" src="/public/images/slider/02.jpg" /></div>
                                <div><img u="image" src="/public/images/slider/03.jpg" /></div>
                                <div><img u="image" src="/public/images/slider/04.jpg" /></div>
                                <div><img u="image" src="/public/images/slider/01.jpg" /></div>
                            </div>

                            <!--#region Bullet Navigator Skin Begin -->
                            <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                            <style>
                                /* jssor slider bullet navigator skin 01 css */
                                /*
                                .jssorb01 div           (normal)
                                .jssorb01 div:hover     (normal mouseover)
                                .jssorb01 .av           (active)
                                .jssorb01 .av:hover     (active mouseover)
                                .jssorb01 .dn           (mousedown)
                                */
                                .jssorb01 {
                                    position: absolute;
                                }
                                .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                                    position: absolute;
                                    /* size of bullet elment */
                                    width: 12px;
                                    height: 12px;
                                    filter: alpha(opacity=70);
                                    opacity: .7;
                                    overflow: hidden;
                                    cursor: pointer;
                                    border: #000 1px solid;
                                }
                                .jssorb01 div { background-color: gray; }
                                .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
                                .jssorb01 .av { background-color: #fff; }
                                .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }

                                /* jssor slider arrow navigator skin 09 css */
                                /*
                                .jssora09l                  (normal)
                                .jssora09r                  (normal)
                                .jssora09l:hover            (normal mouseover)
                                .jssora09r:hover            (normal mouseover)
                                .jssora09l.jssora09ldn      (mousedown)
                                .jssora09r.jssora09rdn      (mousedown)
                                */
                                .jssora09l, .jssora09r {
                                    display: block;
                                    position: absolute;
                                    /* size of arrow element */
                                    width: 50px;
                                    height: 50px;
                                    cursor: pointer;
                                    background: url(/public/Jssor.Slider.FullPack/img/a09.png) no-repeat;
                                    overflow: hidden;
                                    opacity: .4;
                                    filter: alpha(opacity=40);
                                }
                                .jssora09l { background-position: -5px -35px; }
                                .jssora09r { background-position: -65px -35px; }
                                .jssora09l:hover { background-position: -5px -35px; opacity: .8; filter:alpha(opacity=80); }
                                .jssora09r:hover { background-position: -65px -35px; opacity: .8; filter:alpha(opacity=80); }
                                .jssora09l.jssora09ldn { background-position: -5px -35px; opacity: .3; filter:alpha(opacity=30); }
                                .jssora09r.jssora09rdn { background-position: -65px -35px; opacity: .3; filter:alpha(opacity=30); }
                            </style>
                            <!-- Arrow Left -->
                            <span u="arrowleft" class="jssora09l" style="top: 123px; left: 8px;">
                            </span>
                            <!-- Arrow Right -->
                            <span u="arrowright" class="jssora09r" style="top: 123px; right: 8px;">
                            </span>
                            <!-- bullet navigator container -->
                            <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"></div>

                            </div>
                            <!--#endregion Bullet Navigator Skin End -->
                        </div>
                        <!--#endregion Jssor Slider End -->
                        <script>
                            jssor_slider1_starter('slider1_container');
                        </script>
                </div><!-- End Row -->
            </jssor_slider1_starter('slider1_container');>
        </div>

        <script type="text/javascript">
            $('.hoverPopupWrapper').hover(function(){
                $('.hoverPopup').toggle();
            });
            $('.hoverPopupWrapper').click(function() {
                $('.hoverPopup').toggle();
            });

            jQuery(function(){
                var kKeys = [];
                function Kpress(e){
                    kKeys.push(e.keyCode);
                    if (kKeys.toString().indexOf("38,38,40,40,37,39,37,39,66,65") >= 0) {
                        jQuery(this).unbind('keydown', Kpress);
                        kExec();
                    }
                    if (kKeys.toString().indexOf("67,65,82,79,76,73,78,69") >= 0){
                        $(this).unbind('keydown', Kpress);
                        kExecCar()
                    }
                }
                jQuery(document).keydown(Kpress);
            });
            function kExecCar(){
               $(location).attr("href", "https://www.maelmayon.fr/love.php");
            }
            function kExec(){
                $(location).attr("href", "https://fr.games.konami-europe.com/");
            }
        </script>
                <div class="push"></div>
        </div>
 	</div>
        <div class="footer">
            <?php include ('footer.php'); ?>
        </div>

</body>



</html>
