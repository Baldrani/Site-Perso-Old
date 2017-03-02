<!DOCTYPE html>
<html>
    <head>
        <?php include('head.php') ?>
        <title>Maël Mayon - Veille Juridique</title> 
         <script type="text/javascript" src="js/FeedEk.js"></script>
    </head>
    
<body>  <?php include ('analyticstracking.php'); ?>
    <div class="wrapper">
    <?php include('navbar.php'); ?>
        <div class="container">
            <center>
            <h1>Veille Juridique</h1>
            <h4>Fourni par : <a href="http://www.cnil.fr/">CNIL..</a></h4>
            <div class="row">
            
            <div id="divRss"></div>

            </div>
            </center>
        </div>    

    <div class="push"></div>
</div>
<script type="text/javascript">
$('#divRss').FeedEk({
    FeedUrl : 'https://www.cnil.fr/fr/rss.xml',
    MaxCount: 10,
    DateFormat: 'DD MMMM YYYY'
});    

// /*$(window).bind("load",function(){
//     /*  Tri : Changer regExp en fonction de ce que l'on veut faire ressortir */
//     $('.itemContent').each(function(){
//         var regExp = new RegExp (/contrôle/);
//         if(!$(this).text().match(regExp))
//         {
//             $(this).closest('li').css('display','none');
//         }
//     })   
// });


</script>

    <div class="footer">
            <?php include ('footer.php'); ?>
    </div>
    </body>
</html>