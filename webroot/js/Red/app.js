angular.module('equinoxe-team',['ui.router','equinoxe.services','equinoxe.controllers','ui.materialize','cleave.js'])
		.run(['$rootScope', function($rootScope){
		    // Verifications Here
		    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
                $rootScope.preloader = true;
                if(toState.name==="app.contact")
                {
		            $rootScope.back_theme_newsletter = 'mg_sec_background_2';
                    $rootScope.navbar_invisible = false;
                }
                else
                {
		            $rootScope.back_theme_newsletter = 'grey lighten-2';
                    $rootScope.navbar_invisible = true;
                }
            });
            $rootScope.$on('$viewContentLoaded', function(event, toState, toParams, fromState, fromParams) {
                
                $rootScope.preloader = false;
            });

		}])
		.config(['$httpProvider','$urlRouterProvider','$stateProvider','$locationProvider', function($httpProvider,$urlRouterProvider,$stateProvider,$locationProvider){
				// Enabling Html5Mode
				$locationProvider.html5Mode(true);
			    $locationProvider.hashPrefix('!');

			    //routing file
			    $stateProvider.state('app',{
			    	url:'/',
			    	cache:false,
			    	abstract:true,
			    	views:{
			    		"":{
			    			template:'<ui-view/>',
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"navbar":{
			    			templateUrl:"/element/navbar",
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"newsletter":{
			    			templateUrl:"/element/newsletter",
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"footer":{
			    			templateUrl:'/element/footer',
			    			controller:'MainCtrl as mainctrl'
			    		}
			    	}
			    })
			    .state('app.home',{
			    	url:'home',
			    	params:{
			    		is_subscribing:0
			    	},
			    	cache:false,
			    	templateUrl:'/home/home',
			    	controller:'HomeCtrl as homectrl'
			    })
			    .state('app.contact',{
			    	url:'contact',
			    	cache:false,
			    	templateUrl:'/home/contact',
			    	controller:'ContactCtrl as contactctrl'
			    })
				.state('app.event',{
			    	url:'event',
			    	cache:false,
			    	templateUrl:'/home/event',
			    	controller:'EventCtrl as eventctrl'
			    })
			    .state('app.indoor',{
			    	url:'service_indoor',
			    	cache:false,
			    	templateUrl:'/home/indoor',
			    	controller:'IndoorCtrl as indoorctrl'
			    })
			    .state('app.outdoor',{
			    	url:'service_outdoor',
			    	cache:false,
			    	templateUrl:'/home/outdoor',
			    	controller:'OutdoorCtrl as outdoorctrl'
			    });


			    $urlRouterProvider.otherwise('home');


				// //Custom Setting $httpProvider
				$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
		}])