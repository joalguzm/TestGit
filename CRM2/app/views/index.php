<!doctype html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/angular-1.2.14/angular.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<script src="js/angular-1.2.14/angular-route.js"></script>
	<script src="js/angular-1.2.14/angular-cookies.js"></script>
	<script src="js/ui-bootstrap.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">	
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">	
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link href="css/estilo.css" rel="stylesheet" media="screen">	
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
	
	<meta charset="UTF-8">
	<title>API Test</title>
</head>
<body ng-app="CRMTest">
	<div class="navbar" ng-controller="navController">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#" name="top">CRM</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li ng-class="{active: $location.path()=='/'}"><a href="#/"><i class="icon-user"></i> Candidatos</a></li>
						<li class="divider-vertical"></li>
						<li ng-class="{active: $location.path()=='/cuentas'}"><a href="#/cuentas"><i class="icon-file"></i> Cuenta</a></li>
						<li class="divider-vertical"></li>
						<li ng-class="{active: $location.path()=='/contactos'}"><a href="#/contactos"><i class="icon-phone"></i> Contactos</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			<!--/.container-fluid -->
		</div>
		<!--/.navbar-inner -->
	</div>

	<ng-view />
</body>
</html>