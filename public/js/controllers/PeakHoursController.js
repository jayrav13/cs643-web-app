angular.module('PeakHoursController', [])

.controller('PeakHoursController', function($scope, Location, NgMap, $timeout) {

	$scope.series = ["All"]
	$scope.data = [];
	$scope.labels = [];

	function init() {

		Location.peakHours()
			.then(function(data) {

				result = {};

				data = data.data.counts.total;

				for(var i = 0; i < data.length; i++) {
					$scope.labels.push(data[i].hour);
					$scope.data.push(data[i].count);
				}

			}, function(data) {

			});

	}

	init();


});