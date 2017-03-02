<!DOCTYPE html>
<html>
    <head>
        <?php include('head.php') ?>
        <title>Maël Mayon - Veille Technologique</title> 
         <script type="text/javascript" src="js/FeedEk.js"></script>
    </head>
    
<body>  <?php //include ('analyticstracking.php'); ?>
    <div class="wrapper">
    <?php include('navbar.php'); ?>
        <div class="container" style="text-align: center">
            <h1>Veille Technologique et Scientifique</h1>
            <h4>Fourni par : <a target="_blank" href="http://www.techniques-ingenieur.fr/">Techniques Ingénieur</a> - <a target="_blank" href="http://korben.info/">Korben</a> - <a target="_blank" href="http://www.raspians.com/">Raspians</a> - <a target="_blank" href="http://www.cnrs.fr/">CNRS</a> - <a target="_blank" href="https://www.nasa.gov/">Nasa</a> et plein d'autres...</h4>
            <div class="row">
                <a><span class="contentSearch">Raspberry</span>&nbsp; - &nbsp;<span class="contentSearch">Js</span></a>&nbsp; - &nbsp;<a><span class="contentSearch">Everything</span></a>&nbsp;&nbsp;<span class="contentSearch"></span>
                <input type="text" placeholder="Affiner votre recherche" id="cleaningFeed"> - <a id="chrono">Chronologique</a>
                <br><br>
            </div>
            <div class="row" style="text-align: left;">
                <br>
                <a id="showFiddle">Pour voir le code de traitement de cette page...</a>
                <br>
                <div class="hideFiddle" style="display:none;">
                    <iframe width="100%" height="300" src="//jsfiddle.net/Baldrani/o1kuzac6/embedded/js,html,css,result/dark/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
                </div>
                <br>
                <script>
                     /* Dévoile l'iframe */
                    $('#showFiddle').on('click',function(){
                        $('.hideFiddle').fadeIn();
                    })
                </script>
                <div class="row" style="text-align: center;">
                    <div id="divRss">
                    </div>
                </div>
                <div class="temp" style="display: none">
                <ul class="feedEkList"></ul>
                </div>
        </div>    
    <div class="push"></div>
</div>
<script type="text/javascript">

function launchFeedek(){
    var link = [
    'http://www.techniques-ingenieur.fr/rss/actualite/high-tech-thematique_193.xml',
    'http://www.lemondeinformatique.fr/flux-rss/thematique/internet/rss.xml',
    'http://korben.info/rss.php?t=univers&u=raspberry-pi',
    'https://www.nasa.gov/rss/dyn/breaking_news.rss',
    'https://medium.freecodecamp.com/feed',
    'http://code.tutsplus.com/posts.atom',
    'http://www2.cnrs.fr/rss.php?id=all',
    'http://javascriptissexy.com/feed/',
    'http://www.pibeginners.com/feed/',
    'http://alistapart.com/main/feed',
    'https://www.sitepoint.com/feed/',
    'http://www.coindesk.com/feed/',
    'http://raspifeed.com/feed/en',
    'https://davidwalsh.name/feed',
    'https://speckyboy.com/feed',
    'http://www.echojs.com/rss',
    'http://sametmax.com/feed/',
    ];

    for(var i=0; i < link.length; i++){
        $('#divRss').append('<div id="divRss'+ i + '"></div>');
        $('#divRss' + i).FeedEk({
            FeedUrl : link[i],
            MaxCount: 5,
            DateFormat: 'MM/DD/YYYY',
            DescCharacterLimit: 800,
            DateFormatLang:'en'
        });
        $('#divRss' + i).find
    }
}

/* Lance Feedek */
launchFeedek();

/* A changer ---> */
$('#chrono').on('click',function(){
    /* Clean la page */
    $('.feedEkList').each(function(){
       $(this).find('li').each(function(){
            $(this).appendTo('.feedEkList:first')
       })
    })
    $('#divRss0').contents().unwrap();
    $('[id*=divRss]:not(#divRss)').remove();
    $('#divRss ul:not(:first-child)').remove();
    /* Attribu à tous les article leurs date actuelle en data -> A améliorer */
    $('.itemDate').each(function(){
        $(this).data('date',$(this).text());
        /* Change la date au format Date */
        var date = new Date($(this).text())
        $(this).text(date);
    })
    /* Clean les dates invalides */
    $('.itemDate').each(function(){
        if($(this).text() === "Invalid Date"){
            $(this).parent().remove();
        }
    })

    /* Tri par date */
    $('#divRss li').sort(function(a, b) {
        var aDate = $(a).find('.itemDate').text();
        var bDate = $(b).find('.itemDate').text();
        return new Date(bDate).getTime() - new Date(aDate).getTime();
    }).appendTo('#divRss .feedEkList');
})

/* Type your search */
$('#cleaningFeed').keyup(function(event){
    $('.feedEkList li').css('display','none');
    var $typed = $(this).val();
        var regExp = new RegExp ($typed,'i');
    $('.itemTitle, .itemContent').each(function(){
        if($(this).text().match(regExp)) $(this).parent('li').css('display','block');  
    })
});


/* Specific recherche */
$('.contentSearch').on('click',function(){
    $('input').val('')
    $tri = $(this).text();
    if($(this).text() == "Everything")
    {
        $('.itemContent').closest('li').show();
    } else {
        $('.itemContent').closest('li').hide();
        $('.itemContent, .itemTitle').each(function(){
        var regExp = new RegExp ($tri,'i');
            if($(this).text().match(regExp))
            {
                $(this).closest('li').css('display','block');
            }  
       })
    }
})

</script>
    
    <div class="footer">
            <?php include ('footer.php'); ?>
    </div>
    </body>
</html>