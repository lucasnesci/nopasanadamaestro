var app = angular.module('npnm',['ngRoute']);

//Routing
app.config(function($routeProvider) {
  $routeProvider
    .when('/tus-amigos', {
      templateUrl: 'templates/tus-amigos.tpl.html',
      controller: 'TusAmigosController'
    })
    .when('/famosos', {
      templateUrl: 'templates/famosos.tpl.html',
      controller: 'FamososController'
    })
    .when('/quiero-ayudar', {
      templateUrl: 'templates/quiero-ayudar.tpl.html',
      controller: 'QuieroAyudarController'
    });
  $routeProvider.otherwise({
    redirectTo: '/tus-amigos'
  });
});

app.controller('AppController', function($scope, $location) {
  $scope.setActiveIfPath = function(path) {
    if ($location.path().substr(0, path.length) === path) {
      return "active";
    } else {
      return "";
    };
  }
});

app.controller('TusAmigosController', function($scope, $http) {
  $scope.$on('$viewContentLoaded', function(){
    twttr.widgets.load();
  });

  $http.jsonp('https://api.instagram.com/v1/tags/nopasanadamaestro/media/recent?client_id=a1832e16662b4e3eb4de131ac3884588&callback=JSON_CALLBACK')
    .success(function(data) {
      $scope.grams = data;
    });
});

app.controller('FamososController', function($scope, $http) {
//  $http.jsonp('https://api.instagram.com/v1/tags/nopasanadamaestro/media/recent?client_id=a1832e16662b4e3eb4de131ac3884588&callback=JSON_CALLBACK')
//    .success(function(data) {
//      $scope.videos = data;
//    });
});

app.controller('QuieroAyudarController', function($scope, $http) {
//  $http.jsonp('https://api.instagram.com/v1/tags/nopasanadamaestro/media/recent?client_id=a1832e16662b4e3eb4de131ac3884588&callback=JSON_CALLBACK')
//    .success(function(data) {
//      $scope.videos = data;
//    });
});