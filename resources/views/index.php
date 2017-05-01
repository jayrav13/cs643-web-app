<html ng-app="cloudApp">

	<head>	
		<meta charset="UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Jay Ravaliya">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="/">

		<title>CS643</title>

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-route.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-cookies.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular-sanitize.js"></script>
		<script src="https://maps.google.com/maps/api/js?libraries=placeses,visualization,drawing,geometry,places&key=AIzaSyAeryvEAf5PNAmqcC6zAdQq2glGwQISTXI"></script>

		<script src="/js/bower_components/chart.js/dist/Chart.min.js"></script>
		<script src="/js/bower_components//angular-chart.js/dist/angular-chart.min.js"></script>

		<script type="text/javascript" src="/js/lib/markerclusterer.js"></script>

		<script type="text/javascript" src="/js/services/DataService.js"></script>
		<script type="text/javascript" src="/js/controllers/HeatmapController.js"></script>
		<script type="text/javascript" src="/js/controllers/PeakLocationsController.js"></script>
		<script type="text/javascript" src="/js/controllers/PeakHoursController.js"></script>
		<script type="text/javascript" src="/js/controllers/PickupsDatesController.js"></script>

		<script src="/js/bower_components/ngmap/build/scripts/ng-map.min.js"></script>

		<script type="text/javascript" src="/js/app.js"></script>

	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">CS643</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="/#!/peak/locations">Peak Locations</a></li>
						<li><a href="/#!/pickups">Pickups by Date</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->

			</div><!-- /.container-fluid -->
		</nav>

		<div style=" margin-top: 60px; ">
			<ng-view></ng-view>
		</div>

	</body>

</html>


