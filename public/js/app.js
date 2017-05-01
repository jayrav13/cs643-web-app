
var cloudApp = angular.module("cloudApp", [
	"ngRoute",
	"HeatmapController",
	"Location",
	"ngMap",
	"PeakLocationsController",
	"PeakHoursController",
	"chart.js",
	"PickupsDatesController",
	"NightlifeController"
]);

cloudApp.config(function($routeProvider, ChartJsProvider) {

	$routeProvider
		.when("/", {
			templateUrl: "/js/views/heatmap.html",
			controller: "HeatmapController"
		})
		.when("/peak/locations", {
			templateUrl: "/js/views/peak_locations.html",
			controller: "PeakLocationsController"
		})
		.when("/pickups", {
			templateUrl: "/js/views/pickups_dates.html",
			controller: "PickupsDatesController"
		})
		.when("/peak/hours", {
			templateUrl: "/js/views/peak_hours.html",
			controller: "PeakHoursController"
		})
		.when("/nightlife", {
			templateUrl: "/js/views/nightlife.html",
			controller: "NightlifeController"
		})
		.otherwise({
			redirect: "/"
		});

	// Configure all charts
	ChartJsProvider.setOptions({
		chartColors: ['#FF5252', '#FF8A80'],
		responsive: false
	});
	// Configure all line charts
	/*
	ChartJsProvider.setOptions('line', {
		showLines: false
	});
	*/

});

cloudApp.run(function() {

});