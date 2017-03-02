<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="/" id="brand_mm">Maël Mayon</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Presentation.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Présentation</a></li> 
        <li><a href="Curriculum_vitae.php"><span class="glyphicon glyphicon-education"></span>&nbsp;Curriculum Vitae</a></li>
        <li id="Portofolio" class="dropdown">
          <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"><span class="glyphicon glyphicon-folder-close"></span>Portfolio <span class="caret"></span></a>
          <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                <li><a href="PPE.php">PPE</a></li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Projets Web</a>
                  <ul class="dropdown-menu">
                    <li><a href="Developpement_Web.php">Développement Web</a>
                    <li><a href="projetsjs.php">Javascript</a>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a tabindex="-1" href="#">Projets Cours</a>
                  <ul class="dropdown-menu">
                    <li><a href="Demineur.php">Démineur en Langage C</a></li>
                  </ul>
                </li>
                <li class="divider"></li>
                <li><a href="Prochainement.php">Prochainement...</a></li>
          </ul>
        </li>
        </li>
        <li><a href="Contact.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="blog.php"><span class="glyphicon glyphicon-apple"></span>&nbsp;Blog</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-lamp"></span>&nbsp;Veilles
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="FeedTechnologique.php">Technologique</a></li>
                <li><a href="FeedJuridique.php" >Juridique</a></li>
            </ul>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript">

    $('.navbar li').each(function(){
        $li = $(this);
        $(this).find('a').each(function(){
            if($(this).prop('href') == location) $li.addClass('active');
        })
    })


    $('a').hover(function(){
      if($(this).text() == "Portfolio "){
        $(this).click(function() {
          $(this).addClass('Clicked')
        });

        if(!$(this).hasClass('Clicked'))
        {
          $(this).find('span.glyhicon').toggleClass('glyphicon-folder-close');
          $(this).find('span.glyphicon').toggleClass('glyphicon-folder-open');
        }
      }
    })

    $(document).click(function() {
        $('.glyphicon-folder-open').parent('a').removeClass('Clicked');
        $('.glyphicon-folder-open').addClass('glyphicon-folder-close');
        $('.glyphicon-folder-open').removeClass('glyphicon-folder-open');
    });
    
    jQuery(document).ready(function() {
      if(location.pathname == "/Developpement_Web.php" || location.pathname == "/Demineur.php" || location.pathname == "/PPE.php" || location.pathname == "/Prochainement.php")
      {
        $('#Portofolio a').addClass('Clicked');
        $('#Portofolio').find('span.glyphicon').toggleClass('glyphicon-folder-close');
        $('#Portofolio').find('span.glyphicon').toggleClass('glyphicon-folder-open');
      }      
    });

</script>