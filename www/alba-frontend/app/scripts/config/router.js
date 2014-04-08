'use strict';

angular.module('albaFrontendApp').config(function ($routeSegmentProvider, $httpProvider) {

  $routeSegmentProvider.options.autoLoadTemplates = true;

  $routeSegmentProvider.
    when('/', 'escritorio').
    when('/docentes', 'docentes').
    when('/login', 'login').
    segment('escritorio', {
      templateUrl: 'views/main.html',
      controller: 'MainCtrl',
      access: 'usuario'
    }
  ).
    segment('docentes', {
      templateUrl: 'views/docentes.html',
      controller: 'DocentesCtrl'
    }).
    segment('login', {
      templateUrl: 'views/login.html',
      controller: 'LoginCtrl',
      access: {
        todos: true
      }
    });
  /*
   var interceptor = ['$location', '$q', function ($location, $q) {
   function success(response) {
   return response;
   }

   function error(response) {

   if (response.status === 401) {
   //$location.path('/login');
   console.log("==== Hace falta Iniciar Sesion ====");
   return $q.reject(response);
   }
   else {
   return $q.reject(response);
   }
   }

   return function (promise) {
   return promise.then(success, error);
   }
   }];

   $httpProvider.responseInterceptors.push(interceptor);*/
});