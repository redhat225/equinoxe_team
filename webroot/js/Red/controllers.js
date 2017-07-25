angular.module('equinoxe.controllers',[])
	.controller('MainCtrl',['$scope','$rootScope','NewsletterService', function($scope,$rootScope,NewsletterService){
		var self = this;
		self.contact = "";
		angular.element('.special-content').fitText(2,{minFontSize: '30px', maxFontSize: '60px' });

		self.submitting = false;

		self.newsletter_subscribe = function(evidence){
  		    self.submitting = true;
			NewsletterService.subscribe(evidence).then(function(response){
			    var message = "Félicitation! votre addresse a été enregistrée."
			    var style = "mg_sec_background_1 white-text bold";
				Materialize.toast(message,4000,style);
			}, function(errResponse){
				switch(errResponse.status){
					case 400:
					    var message = "Oups! Une erreur est survenue lors de l'opération, veuillez réessayer.";
					break;

					case 401:
					    var message = "Cette adresse est déjà enregistrée";
					break;

					case 403:
					    var message = "Veuillez effectuer les corrections necéssaires";
					break;

					default:
						var message = 'Une erreur est survenue, Veuillez réessayer';
					break;
				}
				
				var style = "red white-text darken bold";
				Materialize.toast(message,4000,style);

			}).finally(function(){
				self.submitting = false;
			});
		};

	}])
    .controller('HomeCtrl',['$scope','$templateCache','$rootScope','AssistanceService',function($scope,$templateCache,$rootScope,AssistanceService){
    	$templateCache.removeAll();
		var self = this;
		self.contact = "";
		angular.element('.prezento-master').prezento();

		self.service={
			service_category_item_id:1,
			subscriber_fullname:'',
			subscriber_tel:'',
			subscriber_email:'',
		};

		self.submitting = false;

		angular.element('.parallax').parallax();
		angular.element('.special-text').fitText(1,{minFontSize: '20px', maxFontSize: '25px' });
		angular.element('.special-text-2').fitText(2,{minFontSize: '13px', maxFontSize: '20px' });

		AssistanceService.all().then(function(response){
			self.service_items = response.data.items;
		},function(errResponse){
			Materialize.toast('Erreur lors de la récupération des items',2000,'rounded red');
		});

		self.subscribe_service = function(service){
			if(self.submitting === true)
				Materialize.toast('Une opération est en cours, veuillez patienter.');
			else
			{
			   self.submitting = true;
			   AssistanceService.subscribe(service).then(function(response){
			    var message = "Félicitation! votre demande a été prise en compte."
			    var style = "mg_sec_background_1 white-text bold";
				Materialize.toast(message,4000,style);
						self.service={
						service_category_item_id:1,
						subscriber_fullname:'',
						subscriber_tel:'',
						subscriber_email:'',
					};
			   }, function(errResponse){
					switch(errResponse.status){
						case 400:
						    var message = "Oups! Une erreur est survenue lors de l'opération, veuillez réessayer.";
						break;

						case 401:
						    var message = "Cette adresse est déjà enregistrée";
						break;

						case 403:
						    var message = "Veuillez effectuer les corrections necéssaires";
						break;

						default:
							var message = 'Une erreur est survenue, Veuillez réessayer';
						break;
					}
			   }).finally(function(){
			       self.submitting = false;

			   });
			}

		};

		$scope.options={
			fr_number:{ 
			   phone: true,
               phoneRegionCode: 'FR'
			}
		};




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