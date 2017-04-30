angular.module('HeatmapController', [])

.controller('HeatmapController', function($scope, Location, NgMap, $timeout) {

	$scope.locations = null;
	$scope.googleMapsUrl = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAeryvEAf5PNAmqcC6zAdQq2glGwQISTXI&libraries=visualization&sensor=false";

	$scope.peakData = [new google.maps.LatLng(40.7128, -74.0059)];

	function init() {
		Location.rides()
			.then(function(data) {
				$scope.locations = data.data;

				for(var i = 0; i < $scope.locations.length; i++) {
					var point = new google.maps.LatLng(parseFloat($scope.locations[i].latitude), parseFloat($scope.locations[i].longitude));
					$scope.peakData.push(point);
				}

				NgMap.initMap();

				var heatmap, vm = this;
				NgMap.getMap().then(function(map) {
					vm.map = map;
					heatmap = vm.map.heatmapLayers.uber;
				});

			}, function(data) {

			});


	}

	init();


});