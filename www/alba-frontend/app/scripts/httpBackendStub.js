(function (ng) {

  'use strict';

  if (document.URL.match(/\?backend$/)) {
    return; // do nothing special - this app is not gonna use stubbed backend
  }

  console.log('======== UTILIZANDO DATOS FALSOS ========');

  ng.module('devAlbaFrontendApp', ['ngMockE2E'])
//    .config(function ($provide) {
//      $provide.decorator('$httpBackend', angular.mock.e2e.$httpBackendDecorator);
//    })
    .run(function ($httpBackend) {
      // define responses for requests here as usual

      $httpBackend.whenGET('pepe.json').respond({pepe: 'asd'});
      $httpBackend.whenGET('docentes.json').respond(401,'No permitido');
      $httpBackend.whenPOST('/login').respond(200,{'username': 'strato1986'});
      // Don't mock the html views
      $httpBackend.whenGET(/views\/\w+.*/).passThrough();

      // For everything else, don't mock

      $httpBackend.whenGET(/^\w+.*/).passThrough();
      $httpBackend.whenPOST(/^\w+.*/).passThrough();
    });

  ng.module('albaFrontendApp').requires.push('devAlbaFrontendApp');

})(angular);