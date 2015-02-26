(function() {
  var app = angular.module('config', []);

  app.constant('CONFIG', {
    'name': 'dev',
    'apiBaseUrl': 'http://api.nopasanadamaestro.com/data/'
  });	
})();