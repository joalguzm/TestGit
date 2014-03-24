myApp= angular.module("APITest",['ngRoute','ngCookies','ui.bootstrap']);

myApp.config(function($routeProvider,$locationProvider){
	$routeProvider.when('/',
	{
		templateUrl:'test.html',
		controller: 'testController',
		resolve: testCtrl.resolve
	}).when('/:ticket', {
	    resolve: {
	    	valido: function($http, $route, $location,$cookieStore) {
	    		$http.get("http://localhost/laravel/validarTicket?ticket="+$route.current.params.ticket)
				.success(function(data){
					console.log(data);
					if(!data.user)
						window.location = "http://localhost/laravel/login?callback=http%3A%2F%2Flocalhost/ApiTest/";
					else{
						console.log("Exitooooo!!!! "+data.user);
						$cookieStore.put('user',data.user);
						$cookieStore.put('ticket',$route.current.params.ticket);
						$location.path("/");

					}
				})
				.error(function(data){

				});
		    }
	    }
	});
});

myApp.directive("mascota",function(){
	return {
		restrict: 'E',
		transclude: true,
		scope: {
			click: '&',
			nombre:'='
		},
		replace:true,
		template:'<div><td><input type="text" ng-model="nombre" /></td><td><input value="Eliminar" type="button" ng-click="click()"/></td></div>'
	}
});

myApp.factory('testService',function(){
		return {
			notify: function(asd){
			var message="Mensaje de Prueba"+asd;
			console.log(message);
		}
	};
})

testCtrl = myApp.controller("testController",function($scope, $http, $q, people, $cookieStore,testService) {

	$scope.consultarPersonas = function() {    
		$http.get("http://localhost/laravel/mostrarPersonas")
			.success(function(data){
				$scope.personas = [];

				angular.forEach(data, function(persona) {
					persona.mascotas = [];
					$scope.mascotasPersona(persona);
				});
				$scope.personas = data;
			});
	}

	$scope.editarPersona = function(persona) {
		$http.put("http://localhost/laravel/editarPersona/"+persona.id, {nombre: persona.nombre , apellido: persona.apellido })
			.success(function(data){
				console.log(data);
				angular.forEach(persona.mascotas,function(mascota){
					$scope.editarMascota(mascota.id,mascota.nombre);
				});
				if (persona.nuevaMascota) {
					$scope.crearMascota(persona.nuevaMascota, persona.id);
					persona.nuevaMascota = "";
				}
			});
	};

	$scope.crearPersona = function(nombre,apellido) {
		$http.post("http://localhost/laravel/action", {nombre: nombre , apellido: apellido })
			.success(function(data){
				console.log(data);
				$scope.nombre = "";
				$scope.apellido = "";
				$scope.consultarPersonas();
			});
	};

	$scope.eliminarPersona = function(id) {
		$http.delete("http://localhost/laravel/eliminar/"+id)
			.success(function(data){
				console.log(data);
				$scope.consultarPersonas();
			});
	};

	$scope.mascotasPersona = function(persona) {
		$http.get("http://localhost/laravel/mascotasPersona/"+persona.id)
			.success(function(data){
				persona.mascotas = data;
			});	
	};

	$scope.editarMascota = function(id,nombre) {
		$http.put("http://localhost/laravel/mascotas/editar/"+id,{nombre:nombre})
			.success(function(data){
				console.log(data);
			});	
	};
	
	$scope.crearMascota = function(nombre, duenio) {
		$http.post("http://localhost/laravel/mascotas/crear",{nombre:nombre, duenio: duenio})
			.success(function(data){
				console.log(data);
				$scope.consultarPersonas();

			});	
	};

	$scope.eliminarMascota = function(id) {
		$http.delete("http://localhost/laravel/mascotas/eliminar/"+id)
			.success(function(data){
				console.log(data);
				$scope.consultarPersonas();
			});
	};

	$scope.logout = function() {
		$cookieStore.remove('user');
		window.location = "http://localhost/laravel/logout/"+$cookieStore.get('ticket');
	};
	
	testService.notify("54165");
	$scope.personas=[];

	angular.forEach(people, function(persona) {
		persona.mascotas = [];
		$scope.mascotasPersona(persona);
	});

	$scope.personas = people;
});

testCtrl.resolve = {
	people: function($q, $http,$cookieStore,$location) {
		var deferred = $q.defer();
		var user = $cookieStore.get('user');
		if(user!=null){
			$http.get("http://localhost/laravel/mostrarPersonas")
				.success(function(data){
					deferred.resolve(data);
				})
				.error(function(data){
					deferred.reject("Error de conexión");
				});
		}
		else{

			window.location = "http://localhost/laravel/login?callback=http%3A%2F%2Flocalhost/ApiTest/";
		}

		deferred.promise.then(function() {
		    //alert('Success!!!!!!! ');
		  }, function(reason) {
		    alert('Failed!!!!!!!' + reason);
		  }, function(update) {
		    alert('Got notification: ' + update);
		  });

		return deferred.promise;
	}
};