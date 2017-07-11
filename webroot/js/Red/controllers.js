angular.module('equinoxe.controllers',[])
	.controller('MainCtrl',['$scope',function($scope){
		var self = this;
		self.contact = "";
		angular.element('.special-content').fitText(2,{minFontSize: '30px', maxFontSize: '60px' });

	}])
    .controller('HomeCtrl',['$scope',function($scope){
		var self = this;
		self.contact = "";

		angular.element('.parallax').parallax();
		angular.element('.special-text').fitText(1,{minFontSize: '20px', maxFontSize: '25px' });
		angular.element('.special-text-2').fitText(2,{minFontSize: '13px', maxFontSize: '20px' });
	}])