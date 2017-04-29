
var cloudApp = angular.module("cloudApp", [
	"ngRoute",
	"HeatmapController"
]);

cloudApp.config(function($routeProvider) {

	$routeProvider
		.when("/", {
			templateUrl: "/js/views/heatmap.html",
			controller: "HeatmapController"
		})
		.otherwise({
			redirect: "/"
		});

});

cloudApp.run(function() {

});