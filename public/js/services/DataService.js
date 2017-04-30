angular.module('Location', [])

.factory('Location', function($http) {

	return {

		peak: function() {
			return $http({
				method: 'GET',
				url: '/services/rides',
			})
		},

	}

});