<!doctype html>
<html lang="es" ng-app="npnm">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>#NoPasaNadaMaestro</title>
	<link rel="icon" type="image/png" href="assets/img/favicon.png"/>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300'>
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/npnm.css">
        <link rel="stylesheet" href="assets/css/jumbotron-narrow.css">
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
            foreach ($grams['data'] as $value) {
              $url = $value['images']['thumbnail']['url'];
              //print "<img src=$url>";
            }
            echo '<pre>'; var_dump($grams['data']); echo '</pre>';
          ?>
        </div>
      </div>

      <footer class="footer">
         <p>© Company 2014</p>
      </footer>
    </div>

    <script type="text/javascript" src="bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/npnm-data.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
  </body>
</html>
