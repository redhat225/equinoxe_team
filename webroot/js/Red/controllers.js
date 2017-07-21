angular.module('equinoxe.controllers',[])
	.controller('MainCtrl',['$scope','$rootScope',function($scope,$rootScope){
		var self = this;
		self.contact = "";
		angular.element('.special-content').fitText(2,{minFontSize: '30px', maxFontSize: '60px' });

	}])
    .controller('HomeCtrl',['$scope','$templateCache','$rootScope',function($scope,$templateCache,$rootScope){
    	$templateCache.removeAll();
		var self = this;
		self.contact = "";
		angular.element('.prezento-master').prezento();

		angular.element('.parallax').parallax();
		angular.element('.special-text').fitText(1,{minFontSize: '20px', maxFontSize: '25px' });
		angular.element('.special-text-2').fitText(2,{minFontSize: '13px', maxFontSize: '20px' });
	}])
	.controller('ContactCtrl',['$scope','$rootScope','$templateCache',function($scope,$rootScope,$templateCache){
		$templateCache.removeAll();
		var self = this;
		angular.element('.prezento-master-3').prezento();

	}])
	.controller('IndoorCtrl',['$scope','$rootScope','$templateCache',function($scope,$rootScope,$templateCache){
		$templateCache.removeAll();
		angular.element('.special-text').fitText(2,{minFontSize: '20px', maxFontSize: '22px'});

		var self = this;
		angular.element('.prezento-master-5').prezento();

	}])

	.controller('OutdoorCtrl',['$scope','$rootScope','$templateCache',function($scope,$rootScope,$templateCache){
		$templateCache.removeAll();
		var self = this;
		angular.element('.prezento-master-6').prezento();

	}])
	.controller('EventCtrl',['$scope','$rootScope','$templateCache',function($scope,$rootScope,$templateCache){
		$templateCache.removeAll();
		var self = this;
		angular.element('.special-text').fitText(2,{minFontSize: '20px', maxFontSize: '22px' });
		angular.element('.parallax').parallax();

		angular.element('.prezento-master-2').prezento({
	      devices: [{
	        name: 'imac',
	        deviceImageSRC: '/img/assets/devices/imac.png',
	        xLeftTop: 186,
	        yLeftTop: 111,
	        xRightBottom: 2197,
	        yRightBottom: 1261,
	        breakpoint: 1024,
	        bgImgSrc : '/img/assets/event/equinoxe_event_maquette.jpg',
	        bgTransitionDuration: '8s'
	      },{
	        name: 'ipad',
	        deviceImageSRC: '/img/assets/devices/ipad.png',
	        xLeftTop: 112,
	        yLeftTop: 110,
	        xRightBottom: 950,
	        yRightBottom: 1144,
	        breakpoint: 480,
	        bgImgSrc : '/img/assets/event/equinoxe_event_maquette.jpg',
	        bgTransitionDuration: '4s'
	      },{
	        name: 'iphone',
	        deviceImageSRC: '/img/assets/devices/iphone.png',
	        xLeftTop: 42,
	        yLeftTop: 135,
	        xRightBottom: 470,
	        yRightBottom: 829,
	        breakpoint: 0,
	        bgImgSrc : '/img/assets/event/equinoxe_event_maquette.jpg',
	        bgTransitionDuration: '2s'
	      }], 
	      responsive: 'window',
	      resetWhenBelow:true,
	      startAfterScroll:true
	    });
	}])