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
	}).when('/contactos',
	{
		templateUrl:'templateContactos.html',
		controller: 'contactosController'
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
		$http.put("http://localhost/CRM/api/candidatos/"+candidato.id, {usuario: candidato.usuario , descripcion: candidato.descripcion})
		.success(function(data){
			console.log(data);
		});
	};

	$scope.crearCandidato = function(usuario, descripcion) {
		$http.post("http://localhost/CRM/api/candidatos", {usuario: usuario , descripcion: descripcion})
		.success(function(data){
			console.log(data);
			$scope.usuario = "";
			$scope.descripcion = "";
			$scope.consultarCandidatos();
		});
	};

	$scope.eliminarCandidato = function(id) {
		$http.delete("http://localhost/CRM/api/candidatos/"+id)
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
		$http.put("http://localhost/CRM/api/cuentas/"+cuenta.id, {nombre: cuenta.nombre, descripcion: cuenta.descripcion, tipo: cuenta.tipo, numero: cuenta.numero})
		.success(function(data){
			console.log(data);
		});
	};

	$scope.crearCuenta = function(nombre,descripcion,cuenta,tipo) {
		$http.post("http://localhost/CRM/api/cuentas", {nombre: nombre, descripcion: descripcion, tipo: tipo, numero: cuenta})
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
		$http.delete("http://localhost/CRM/api/cuentas/"+id)
		.success(function(data){
			console.log(data);
			$scope.consultarCuentas();
		});
	};
});

contactoCtrl = myApp.controller("contactosController", function($scope, $http, $q, $cookieStore) {
	$scope.contactos=[];
	$http.get("http://localhost/CRM/api/contactos")
	.success(function(data){
		$scope.contactos=data;
	})
	.error(function(data){
		
	});

	$http.get("http://localhost/CRM/api/cuentas")
	.success(function(data){
		$scope.cuentas=data;
	})
	.error(function(data){
		
	});

	$scope.consultarContactos = function() {    
		$http.get("http://localhost/CRM/api/contactos")
		.success(function(data){
			$scope.contactos = [];
			$scope.contactos = data;
		});
	}

	$scope.editarContacto = function(contacto) {
		$http.put("http://localhost/CRM/api/contactos/editar/"+contacto.id, {nombre: contacto.nombre, apellido: contacto.apellido, mail: contacto.mail, telefono: contacto.telefono, cuenta: contacto.cuenta_id})
		.success(function(data){
			console.log(data);
		});
	};

	$scope.crearContacto = function(nombre,apellido,mail,telefono,cuenta) {
		$http.post("http://localhost/CRM/api/contactos/crear", {nombre: nombre, apellido: apellido, mail: mail, telefono: telefono, cuenta: cuenta})
		.success(function(data){
			console.log(data);
			$scope.nombre = "";
			$scope.apellido = "";
			$scope.mail = "";
			$scope.telefono = "";
			$scope.consultarContactos();
		});
	};

	$scope.eliminarContacto = function(id) {
		$http.delete("http://localhost/CRM/api/contactos/eliminar/"+id)
		.success(function(data){
			console.log(data);
			$scope.consultarCuentas();
		});
	};
});

myApp.controller('navController', function($scope, $location){
	$scope.$location = $location;
})