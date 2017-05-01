angular.module('NightlifeController', [])

.controller('NightlifeController', function($scope, Location, NgMap, $timeout) {

	$scope.googleMapsUrl = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAeryvEAf5PNAmqcC6zAdQq2glGwQISTXI&libraries=visualization&sensor=false";
	$scope.data = null;

	function init() {

		var heatmap, vm = this;
		NgMap.getMap().then(function(map) {
			vm.map = map;
		});

		Location.nightlife()
			.then(function(data) {

				$scope.data = data.data;
				NgMap.initMap();


			}, function(data) {

			});

	}

	init();


});