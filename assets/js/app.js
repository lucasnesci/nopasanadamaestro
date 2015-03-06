var app = angular.module('npnm',['ngRoute', 'angularUtils.directives.dirPagination', 'config', 'angular-loading-bar']);

//Routing
app.config(function($routeProvider) {
  $routeProvider
    .when('/inicio', {
      templateUrl: 'templates/inicio.tpl.html',
      controller: 'InicioController'
    })
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
    redirectTo: '/inicio'
  });
});

app.controller('AppController', function($scope, $location, $rootScope) {
  $scope.setActiveIfPath = function(path) {
    if ($location.path().substr(0, path.length) === path) {
      return "active";
    } else {
      return "";
    };
  }
  $rootScope.$on('$routeChangeSuccess', function() {
    ga('send', 'pageview', {'page': $location.path()});
  });
});

app.controller('InicioController', function($scope, $http, CONFIG) {
});

app.controller('TusAmigosController', function($scope, $http, CONFIG) {
  $scope.$on('$viewContentLoaded', function(){
    twttr.widgets.load();
  });

  $http.get(CONFIG.apiBaseUrl + 'views/get_all_instagram_posts')
    .success(function(data) {
      $scope.grams = data;
    });
});

app.controller('FamososController', function($scope, $http, CONFIG) {
  $http.get(CONFIG.apiBaseUrl + 'views/get_all_famous_videos')
    .success(function(data) {
      $scope.videos = data;
    });
  $('.fancybox-media').fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    helpers : {
      media : {},
      title	: {
        type: 'inside'
      },
//      thumbs	: {
//	width	: 50,
//	height	: 50
//	}
    },
  });
});

app.controller('QuieroAyudarController', function($scope, $http, CONFIG) {
  $scope.bloodGroups = [
    {name:'0'},
    {name:'A'},
    {name:'B'},
    {name:'AB'}
  ];
  $scope.bloodFactors = [
    {name:'+'},
    {name:'-'}
  ];

  $scope.formData = {};

  $scope.processForm = function() {
    $scope.success = false;
    $scope.error = false;
    $scope.warning = false;
    $http({
      url: CONFIG.apiBaseUrl + 'user/register',
      method: "POST",
      data: {
        name:$scope.formData.email,
        mail:$scope.formData.email,
        pass:'ch4ng3m3',
        status:1,
        field_user_fullname:      {und: {0: {value: $scope.formData.nombre}}},
        field_user_address:       {und: {0: {value: $scope.formData.direccion}}},
        field_user_city:          {und: {0: {value: $scope.formData.localidad}}},
        field_user_postal_code:   {und: {0: {value: $scope.formData.codigoPostal}}},
        field_user_state:         {und: {0: {value: $scope.formData.provincia}}},
        field_user_country:       {und: {0: {value: $scope.formData.pais}}},
        field_user_dni:           {und: {0: {value: $scope.formData.dni}}},
        field_user_phone:         {und: {0: {value: $scope.formData.telefono}}},
        field_user_blood:         {und: {0: {value: $scope.formData.sangreGrupo.name+$scope.formData.sangreFactor.name}}},
      }
    })
    .then(
      function(response) {
        // success
        $scope.success = true;
        $scope.form.$setPristine();
        $scope.formData.nombre = '';
        $scope.formData.direccion = '';
        $scope.formData.dni = '';
        $scope.formData.telefono = '';
        $scope.formData.localidad = '';
        $scope.formData.codigoPostal = '';
        $scope.formData.provincia = '';
        $scope.formData.pais = '';
        $scope.formData.email = '';
        $scope.formData.sangreGrupo = '';
        $scope.formData.sangreFactor = '';
      }, 
      function(response) {
        // failed
        if (response.data !== null) {
          $scope.warning = true;
        } else {
          $scope.error = true;
        }
      }
    );
  };
});
