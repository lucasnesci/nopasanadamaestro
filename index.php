<!doctype html>
<html lang="es" ng-app="npnm">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>#NoPasaNadaMaestro</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/jumbotron-narrow.css">
<!--	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.css">-->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300'>
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
  <link rel="stylesheet" href="bower_components/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
  <link rel="stylesheet" href="bower_components/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/css/npnm.css">
        
</head>
  <body ng-controller="AppController">
    <div class="container">
      <div class="header text-center">
        <div>
          <h3 class="text-muted">#NoPasaNadaMaestro</h3>
        </div>
        <div class="menu-principal">
          <a class="btn btn-primary" ng-class="setActiveIfPath('/inicio')" href="#/inicio" role="button">Inicio</a>
          <a class="btn btn-primary" ng-class="setActiveIfPath('/tus-amigos')" href="#/tus-amigos" role="button">Tus amigos</a>
          <a class="btn btn-primary" ng-class="setActiveIfPath('/famosos')" href="#/famosos" role="button">Famosos</a>
          <a class="hidden-xs btn btn-danger" ng-class="setActiveIfPath('/quiero-ayudar')" href="#/quiero-ayudar" role="button">Quiero ayudar!</a>
        </div>
        <div class="visible-xs menu-ayudar">
          <a class="btn btn-danger btn-sm" ng-class="setActiveIfPath('/quiero-ayudar')" href="#/quiero-ayudar" role="button">Quiero ayudar!</a>
        </div>
      </div>
      
      <div id="main">
        <div ng-view></div>
      </div>

      <footer class="footer col-xs-12">
         <p class="pull-left">#NoPasaNadaMaestro</p>
         <p class="pull-right">
           <!--<a href="https://twitter.com/neschii" target="_blank">@neschii</a>-->
           <a href="https://linkedin.com/in/neschi" target="_blank">in/neschi</a>
         </p>
      </footer>
    </div>

    <script type="text/javascript" src="bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="bower_components/angular-route/angular-route.js"></script>
    <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="bower_components/angular-utils-pagination/dirPagination.js"></script>
    <!--<script type="text/javascript" src="bower_components/angular-google-analytics/src/angular-google-analytics.js"></script>-->
    <script type="text/javascript" src="bower_components/fancybox/source/jquery.fancybox.js"></script>
    <script type="text/javascript" src="bower_components/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="bower_components/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="bower_components/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript" src="assets/js/config.js"></script>
    <!--<script type="text/javascript" src="assets/js/googleAnalytics.js"></script>-->
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