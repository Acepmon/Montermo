var our_company = angular.module("our_company", ['ngSanitize']);

our_company.controller('about_us', function($scope, $http){
	$http.get("../json/our_company.json").success(function(response) {
		$scope.about_eng = response.about_us_eng;
		$scope.about_mon = response.about_us_mon;
	});
})
our_company.controller('careers', function($scope, $http) {
	$http.get("../json/our_company.json").success(function(response) {
		$scope.careers_eng = response.careers.eng;
		$scope.careers_mon = response.careers_mon;
	});
});