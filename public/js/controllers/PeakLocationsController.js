angular.module('PeakLocationsController', [])

.controller('PeakLocationsController', function($scope, Location, NgMap, $timeout) {

	$scope.locations = [];
	$scope.googleMapsUrl = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAeryvEAf5PNAmqcC6zAdQq2glGwQISTXI&libraries=visualization&sensor=false";

	function init() {

		var heatmap, vm = this;
		NgMap.getMap().then(function(map) {
			vm.map = map;
		});


		Location.peakLocs()
			.then(function(data) {
				$scope.locations = data.data;
				NgMap.initMap();
			}, function(data) {

			});

	}

	$scope.zoomIn = function(lat, long) {
		console.log(lat);
	}

	init();


});