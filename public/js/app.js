
var cloudApp = angular.module("cloudApp", [
	"ngRoute",
	"HeatmapController",
	"Location",
	"ngMap",
	"PeakLocationsController"
]);

cloudApp.config(function($routeProvider) {

	$routeProvider
		.when("/", {
			templateUrl: "/js/views/heatmap.html",
			controller: "HeatmapController"
		})
		.when("/peak/locations", {
			templateUrl: "/js/views/peak_locations.html",
			controller: "PeakLocationsController"
		})
		.otherwise({
			redirect: "/"
		});

});

cloudApp.run(function() {

});