var module = angular.module('ci', ['ngRoute', 'ui.bootstrap','restangular']);

module.config(function($routeProvider) {
    $routeProvider.
            when("/peliculas", {controller: "PeliculasCtrl", templateUrl: "peliculas.html"}).
            when("/peliculas/:id", {controller: "PeliculaCtrl", templateUrl: "pelicula.html"}).
            when("/generos", {controller: "GenerosCtrl", templateUrl: "generos.html"}).
            otherwise({redirectTo: "/peliculas"});
});

module.controller('NavegacionCtrl', function($scope) {
    $scope.links = [{
            nombre: 'Peliculas',
            url: 'peliculas',
            activo: true
        }, {
            nombre: 'Generos',
            url: 'generos'
        }];

    $scope.activar = function(link_nombre) {
        for (var i = 0, l = $scope.links.length; i < l; i++) {
            if ($scope.links[i].nombre === link_nombre) {
                $scope.links[i].activo = true;
            } else {
                $scope.links[i].activo = false;
            }
        }
    };
});
module.controller('PeliculasCtrl', function($scope, Restangular) {
    
    var base = Restangular.all('api/v1/peliculas');
    $scope.peliculas = [];
    $scope.getPeliculas = function()
    {
        if ($scope.peliculas.length === 0)
        {
            base.getList().then(function(peliculas){
                $scope.peliculas = Restangular.copy(peliculas);
            });
        }
    }
    
    $scope.getPeliculas();
        
   
    
});

module.controller('PeliculaCtrl', function($scope, Restangular, $routeParams){
    
    Restangular.one('api/v1/peliculas',$routeParams['id']).get().then(function(pelicula){
        $scope.pelicula = Restangular.copy(pelicula);
    });
});
module.controller('GenerosCtrl', function($scope) {

});