angular.module('Location', [])

.factory('Location', function($http) {

	return {

		rides: function() {
			return $http({
				method: 'GET',
				url: '/services/rides',
			})
		},

		peakLocs: function() {
			return $http({
				method: "GET",
				url: "/services/locations/peak"
			})
		},

		pickupsDates: function() {
			return $http({
				method: "GET",
				url: "/services/dates"
			})
		},

		peakHours: function() {
			return $http({
				method: "GET",
				url: "/services/hours"
			})
		},

		nightlife: function() {
			return $http({
				method: "GET",
				url: "/services/nightlife"
			})
		}

	}

});