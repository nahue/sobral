var services = angular.module('albaFrontendApp');

services.factory('UserService', [function () {
  var sdo = {
    isLogged: false,
    username: ''
  };
  return sdo;
}]);