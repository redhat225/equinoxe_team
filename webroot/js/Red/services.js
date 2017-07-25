angular.module('equinoxe.services',[])
		.factory('NewsletterService',['$http','$q', function($http,$q){
			return{
				subscribe: function(evidence){
					return $http.post('/home/subscribe-newsletter',evidence).then(function(response){
						return response;
					}, function(errResponse){
						return $q.reject(errResponse);
					});
				}
			};
		}])
		.factory('AssistanceService',['$http','$q', function($http,$q){
			return{
				all: function(evidence){
					return $http.get('/home/service-hub',{params:{'action':'get'}}).then(function(response){
						return response;
					}, function(errResponse){
						return $q.reject(errResponse);
					});
				},
				subscribe: function(subscription){
					return $http.post('/home/service-hub',subscription).then(function(response){
						return response;
					}, function(errResponse){
						return $q.reject(errResponse);
					});
				}
			};
		}])