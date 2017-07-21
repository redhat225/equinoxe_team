/*
 * Name: jQuery Prezento
 * Original author: @ivaldi
 * Licensed under the GNU Affero General Public License Version 3
 */

;(function($){
"use strict";

	$.fn.prezento = function(options){

		// Set defaults
		var config = $.extend({									
			devices: [],							
			debug: false,
			deviceHolder: 'prezento-device',
			deviceScreen: 'prezento-screen',
			startAfterScroll : false,
			distanceTop: 0.25,
			resetWhenBelow: false,
			responsive: 'window',
			autoPlay: true
		}, options ),
			parentElem = this,
			deviceName = [],
			selectedDevice,
			currentPlayState;

		// Set value for distanceTop, depends if the user entered a float or string
		config.distanceTop = (typeof(config.distanceTop) === 'string') ? parseFloat(config.distanceTop)/100 : config.distanceTop;

		// Create layout
		parentElem
			.css({'position': 'relative', 'display': 'inline-block', 'margin' : '0 auto', 'width' : '100%', 'text-align' : 'center' })
			.append('<div class="'+config.deviceHolder+' col l6 m6 s12"></div>')
			.append('<div class="'+config.deviceScreen+'"></div>');


		// Initialization logic
		function init(){
			sortDevice();
			setBreakpoints(config.devices.length);
		}

		// Order devices based on breakpoint value, output highest first
		function sortDevice(){
			config.devices.sort(function(a,b) {
			    return b.breakpoint - a.breakpoint;
			});
		}
				
		// Change layout of screen based on selected width
		function setBreakpoints(numberOfDevices){
			if(config.responsive === 'parent'){
				var windowWidth = parentElem.parent().width();
			}else{
				var windowWidth = $(window).width();
			}
			for(var i = 0; i < numberOfDevices; i++){
				deviceName[config.devices[i].name] = i;
			}
			for(var i = 0; i < numberOfDevices; i++){
				if(windowWidth - config.devices[i].breakpoint > 0){
					selectedDevice = i;
					setPlaceholderImage(selectedDevice);
					break;
				}
			}
		}

		// Create animation based on device and tell if it should play, pause, resume or reset
		function animAction(selectedDevice, motion){
			var anim = 'moveBG ' + config.devices[selectedDevice].bgTransitionDuration + ' linear forwards',
				position = calcBackgroundPosition(),
				duration = ((100-position) / 100) * config.devices[selectedDevice].bgTransitionDuration.replace("s",""),
				transi = 'all ' + duration + 's linear';

			if(motion === 'play'){
				$('.'+config.deviceScreen).css({
			        'animation': anim,
			        'transition': 'none'
			    });
		    }

		    if(motion === 'pause'){
				$('.'+config.deviceScreen).css({
					'background-position' : '0% ' + position +'%',
			        'animation': 'none',
			        'transition': 'none'
			    });
		    	currentPlayState = 'paused';
		    }

		    if(motion === 'resume'){
		    	if(currentPlayState === 'paused'){
					$('.'+config.deviceScreen).css({
						'background-position' : '0% 100%',
				        'transition': transi,
				    });
		    		currentPlayState = 'resumed';
			    }
		    }

		    if(motion === 'reset'){
				$('.'+config.deviceScreen).css({
					'background-position' : '0% 0%',
					'animation': 'none',
					'transition': 'none'
			    });
		    }
		}

		// Calculate position of background and return value
		function calcBackgroundPosition(){
			var myPos = $('.' + config.deviceScreen).css("background-position").split(" ");
				myPos = myPos[1].replace("%","");

			return myPos;
		}

		// Detect scrollposition and trigger animation based on distance top
		function scrollScreen(){
			if(typeof selectedDevice === 'undefined'){
				init();
			}

			var deviceTop = parentElem.offset().top, 
				deviceHeight = parentElem.height(),
				winHeight = $(window).height(),
				windowScroll = $(document).scrollTop();

			if((deviceTop - windowScroll) / winHeight < config.distanceTop && (deviceTop - windowScroll + deviceHeight) / winHeight > 0){
				animAction(selectedDevice, 'play');
			}else{
				if(config.resetWhenBelow){
					animAction(selectedDevice, 'reset');
				}
			}
		}

		// Output debug values
		function debugDevice(){
			if(!window.console){ window.console = {log: function(){} }; } 
			if (typeof console != "undefined" && typeof console.debug != "undefined") {
				console.log(config);
			}
		}

		// Create a dummyImage so we can get original size later
		function setPlaceholderImage(selectedDevice){
			var dummyImage = new Image();
			dummyImage.src = config.devices[selectedDevice].deviceImageSRC;
			dummyImage.onload = function(){
				initDeviceShowcase(selectedDevice, dummyImage);
			}

			// Reset values to default
			$('.'+config.deviceScreen).css({
				'background-position' : '0% 0%',
		        'animation': 'none',
		        'transition': 'none'
		    });
		}

		// Start calculation based on screensize
		function initDeviceShowcase(selectedDevice, dummyImage){
			var device = config.devices[selectedDevice],
				deviceHolder = '.' + config.deviceHolder,
				deviceScreen = '.' + config.deviceScreen,
				imageWidth = dummyImage.naturalWidth,
				imageHeight = dummyImage.naturalHeight;

			$(deviceHolder).html($(dummyImage).clone());


			$(deviceHolder).find('img').load(function(){
			    var deviceWidth = $(this).width(),
			    	deviceHeight = $(this).height(),
		    		screenWidth = device.xRightBottom - device.xLeftTop,
		    		screenHeight = device.yRightBottom - device.yLeftTop,
		    		wRatio = screenWidth / imageWidth,
		    		hRatio = screenHeight / imageHeight,
		    		lRatio = device.xLeftTop / imageWidth,
		    		tRatio = device.yLeftTop / imageHeight;

			    // Add some basic styling
			    $(deviceHolder).css({
			    	'position' : 'relative',
			    	'z-index' : 3,
			    	// 'width': '50%'
			    });

			    $(deviceScreen).css({
			    	'position' : 'absolute',
			    	'z-index' : 2,
			        'width' : Math.ceil(deviceWidth * wRatio),
			        'height': Math.ceil(deviceHeight * hRatio),
			        'left' : Math.round(deviceWidth * lRatio),
			        'top' : Math.round(deviceHeight * tRatio),
			        'background-size' : '100%',
			        'background-image' : 'url('+device.bgImgSrc+')',
			        'background-position' : '0% 0%'
				});
		    
		    });
			    
		    // Extra options based on config
		    if(!config.startAfterScroll && config.autoPlay){
		    	animAction(selectedDevice, 'play');
		    }
		}

		if(config.devices.length != 0){
			// Init plugin
			if(config.debug){
				$(document).on("ready", debugDevice);
			}
			if(config.startAfterScroll){
				$(window).on("scroll", scrollScreen);
			}
			if(config.responsive === 'window' || config.responsive === 'parent'){
				$(window).on("resize", init);
			}
			$(window).on("load", init);
		}else{
			parentElem.append('<p class="pserror">You haven\'t defined any devices. Please read <a href="https://github.com/ivaldi/prezento/blob/master/README.md">the instructions</a> on how to do this. At least one device is needed for this plugin to work.</p>')
		}

		// Extend plugin with new functions
		$.extend($.fn.prezento, {
		  	play: function(){
		  		animAction(selectedDevice, 'play');
		  	},
		  	pause: function(){
		  		animAction(selectedDevice, 'pause');
		  	},
		  	resume: function(){
		  		animAction(selectedDevice, 'resume');
		  	},
		  	reset: function(){
				animAction(selectedDevice, 'reset');
		  	},
		  	changeDevice: function(name){
		  		setPlaceholderImage(deviceName[name]);
		  	}
		}); 
	}

}(jQuery));