angular.module('PickupsDatesController', [])

.controller('PickupsDatesController', function($scope, Location, NgMap, $timeout) {

	$scope.labels = [];
	$scope.series = ["Uber", "Lyft", "FHV"];
	$scope.data = [];

	function init() {

		Location.pickupsDates()
			.then(function(data) {

				// Redefine data.
				data = data.data;

				$scope.labels = data.map(function(element) {
					return element.timestamp;
				});

				$scope.data.push(data.map(function(element) {
					return element.uber_count;
				}));

				$scope.data.push(data.map(function(element) {
					return element.lyft_count;
				}));

				$scope.data.push(data.map(function(element) {
					return element.fhv_count;
				}));


			}, function(data) {

			});

	}

	init();


});