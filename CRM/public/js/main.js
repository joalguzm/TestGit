myApp= angular.module("CRMTest",['ngRoute', 'ngCookies']);

myApp.config(function($routeProvider,$locationProvider){
	$routeProvider.when('/',
	{
		templateUrl:'template.html',
		controller: 'testController'
	}).when('/cuentas',
	{
		templateUrl:'templateCuentas.html',
		controller: 'cuentaController'
	}).otherwise({
		templateUrl: 'error.html'
	});
});

testCtrl = myApp.controller("testController", function($scope, $http, $q, $cookieStore) {
	$scope.candidatos=[];
	$http.get("http://localhost/CRM/api/candidatos")
	.success(function(data){
		$scope.candidatos=data;
	})
	.error(function(data){
		
	});

	$scope.consultarCandidatos = function() {    
		$http.get("http://localhost/CRM/api/candidatos")
		.success(function(data){
			$scope.candidatos = [];
			$scope.candidatos = data;
		});
	}
	$scope.editarCandidato = function(candidato) {
		$http.put("http://localhost/CRM/api/candidatos/editar/"+candidato.id, {usuario: candidato.usuario , descripcion: candidato.descripcion})
		.success(function(data){
			console.log(data);
		});
	};

	$scope.crearCandidato = function(usuario, descripcion) {
		$http.post("http://localhost/CRM/api/candidatos/crear", {usuario: usuario , descripcion: descripcion})
		.success(function(data){
			console.log(data);
			$scope.usuario = "";
			$scope.descripcion = "";
			$scope.consultarCandidatos();
		});
	};

	$scope.eliminarCandidato = function(id) {
		$http.delete("http://localhost/CRM/api/candidatos/eliminar/"+id)
		.success(function(data){
			console.log(data);
			$scope.consultarCandidatos();
		});
	};
});

cuentaCtrl = myApp.controller("cuentaController", function($scope, $http, $q, $cookieStore) {
	$scope.cuentas=[];
	$http.get("http://localhost/CRM/api/cuentas")
	.success(function(data){
		$scope.cuentas=data;
	})
	.error(function(data){
		
	});

	$http.get("http://localhost/CRM/api/cuentas/tipos")
	.success(function(data){
		$scope.tipoCuentas = data;
	})
	.error(function(data){
		
	});

	$scope.consultarCuentas = function() {    
		$http.get("http://localhost/CRM/api/cuentas")
		.success(function(data){
			$scope.cuentas = [];
			$scope.cuentas = data;
		});
	}

	$scope.editarCuenta = function(cuenta) {
		$http.put("http://localhost/CRM/api/cuentas/editar/"+cuenta.id, {nombre: cuenta.nombre, descripcion: cuenta.descripcion, tipo: cuenta.tipo, numero: cuenta.numero})
		.success(function(data){
			console.log(data);
		});
	};

	$scope.crearCuenta = function(nombre,descripcion,cuenta,tipo) {
		$http.post("http://localhost/CRM/api/cuentas/crear", {nombre: nombre, descripcion: descripcion, tipo: tipo, numero: cuenta})
		.success(function(data){
			console.log(data);
			$scope.nombre = "";
			$scope.descripcion = "";
			$scope.tipo = "";
			$scope.numero = "";
			$scope.consultarCuentas();
		});
	};

	$scope.eliminarCuenta = function(id) {
		$http.delete("http://localhost/CRM/api/cuentas/eliminar/"+id)
		.success(function(data){
			console.log(data);
			$scope.consultarCuentas();
		});
	};
});

myApp.controller('navController', function($scope, $location){
	$scope.$location = $location;
})