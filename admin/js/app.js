angular
  .module('app', [
    'ui.router'
  ])
  .config(['$urlRouterProvider', '$stateProvider', function($urlRouterProvider, $stateProvider) {
    $urlRouterProvider.otherwise('/');
    $stateProvider
      .state('home', {
        url: '/',
        templateUrl: 'index.php',
        controller: 'homeCtrl'
      })
      .state('news', {
        url : '/news',
        templateUrl : 'templates/news.php',
        controller: 'newsCtrl'
      })
  }])