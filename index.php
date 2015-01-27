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
      
      <div id="main">
        <div ng-view></div>
      </div>

      <footer class="footer">
         <p>© Company 2014</p>
      </footer>
    </div>

    <script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
    <script type="text/javascript" src="bower_components/angular-route/angular-route.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/npnm-data.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script>window.twttr = (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0],
        t = window.twttr || {};
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
//      js.src = "https://platform.twitter.com/widgets.js";
      js.src = "assets/js/twitter-widget.js";
      fjs.parentNode.insertBefore(js, fjs);

      t._e = [];
      t.ready = function(f) {
        t._e.push(f);
      };

      return t;
    }(document, "script", "twitter-wjs"));</script>
  </body>
</html>
