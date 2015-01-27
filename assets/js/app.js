var app = angular.module('npnm',['ngRoute']);

//Routing
app.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'templates/inicio.php',
      controller: 'HomeController'
    })
    .when('/empresa', {
      templateUrl: 'templates/empresa.tpl.html',
      controller: 'AppController'
    });
  $routeProvider.otherwise({
    redirectTo: '/'
  });
});

app.controller('AppController', function($scope, $routeParams) {
  $scope.isActive = function (viewLocation) {
    return viewLocation === $location.path();
  };

  $scope.getClass = function(path) {
    if ($location.path().substr(0, path.length) == path) {
      return "active";
    } else {
      return "";
    };
  }
});

app.controller('HomeController', function($scope, $http) {
  $scope.$on('$viewContentLoaded', function(){
    twttr.widgets.load();
  });

  $http.jsonp('https://api.instagram.com/v1/tags/nopasanadamaestro/media/recent?client_id=a1832e16662b4e3eb4de131ac3884588&callback=JSON_CALLBACK')
    .success(function(data) {
      $scope.grams = data;
      console.log(data);
    });
});