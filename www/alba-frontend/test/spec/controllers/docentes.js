'use strict';

describe('Controller: DocentesCtrl', function () {

  // load the controller's module
  beforeEach(module('albaFrontendApp'));

  var DocentesCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    DocentesCtrl = $controller('DocentesCtrl', {
      $scope: scope
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(scope.awesomeThings.length).toBe(3);
  });
});
