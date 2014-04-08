'use strict';

angular.module('albaFrontendApp')
  .controller('DocentesCtrl', function ($scope,$http,DocenteService) {
    $scope.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];

    console.log(DocenteService.getDocentes());
  }).


factory('DocenteService', function ($http) {

    var _getDocentes = function(){
      $http.get('docentes.json').success(function(data, status, headers, config){
        return data;
      }).error(function(data, status, headers, config){
          return status;
        });
    }
    return {
      getDocentes: _getDocentes
    }
});