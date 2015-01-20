<?php include_once 'assets/helpers/func.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>#NoPasaNadaMaestro</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="contrib/css/jumbotron-narrow.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">#NoPasaNadaMaestro</h3>
      </div>

      <div class="content">
        <h3 class="text-center">En Twitter:</h3>
        <div class="twitter-feeds text-center">
          <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/hashtag/nopasanadamaestro" data-widget-id="556862951639240704">Tweets sobre #nopasanadamaestro</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>

        <h3 class="text-center">En Instagram:</h3>
        <div class="instagram-photos text-center">
          <?php
            //$grams = getInstagramTaggedMedia('nopasanadamaestro');
            $grams = mockInstagram();
            //print count($grams['data']);
            foreach ($grams['data'] as $photo) {
              $url = $photo['images']['thumbnail']['url'];
              print "<img src=$url>";
            }
          ?>
        </div>
      </div>

      <footer class="footer">
         <p>© Company 2014</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
