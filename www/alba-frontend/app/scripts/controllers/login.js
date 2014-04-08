'use strict';

angular.module('albaFrontendApp')
  .controller('LoginCtrl', ['$scope', '$http', 'UserService', function ($scope, $http, UserService) {

    $scope.login = function () {
      var config = { /* ... */ } // configuration object

      $http(config)
        .success(function (data, status, headers, config) {
          if (data.status) {
            // succefull login
            User.isLogged = true;
            User.username = data.username;
          }
          else {
            User.isLogged = false;
            User.username = '';
          }
        })
        .error(function (data, status, headers, config) {
          User.isLogged = false;
          User.username = '';
        });
    }
  }]);
