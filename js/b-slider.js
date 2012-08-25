// jQuery Plugin - B Slider
// Version 0.1
// Made by Henrik Jepsen - http://hekjje.dk
(function( $ ) {
    
        
	var methods = {
		
		init : function(options){
		    var settings = $.extend( {
                  'height'          : '620px',
                  'width'           : '930px',
                  'showControles'   : 'true',
                }, options);
            if(settings.showControles){
                $(this).prepend('<div class="b-slider-control"><ul><li><span class="play" id="b-slider-play" title="Play">Play</span></li><li><span class="stop" id="b-slider-stop" title="Stop">Stop</span></li></ul></div>');
            }
			$(this).prepend('<div class="b-slider-main" style="height:'+settings.height+'; width:'+settings.width+'"></div>');
			$firstImage = $('ul.b-slider-grid li:first-child a img').attr('data-b-slider-main-url');
			$('.b-slider-main').html('<img src="' + $firstImage + '" />');
			var intID = 0;
		},
		
		startShow : function(){
			var setImage = function(elm){
				$url = $(elm).children('a').children('img').attr('data-b-slider-main-url');
				$('.b-slider-main').html('<img style="display:none;" src="' + $url + '" />');
				$('.b-slider-main img').load(function(){
					$('.b-slider-main img').fadeIn(1000);
				});
			}
			
			var target = $('ul.b-slider-grid li:first');
			
			intID = setInterval(function(){
				$('.b-slider-main img').fadeOut(1000);
				setImage(target);
				target = target.next();
				if(target.length == 0){
					target = $('ul.b-slider-grid li:first');
				}
			},  3000);
		},
		pauseShow : function(){
			console.log('PAUSE');
		},
		stopShow : function(){
			console.log('STOP');
			clearInterval(intID);
		}
		
		
	}
	
	$.fn.bslider = function( method ) {
		// Method calling logic
		if ( methods[method] ) {
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'Method ' +  method + ' does not exist on jQuery.bslider' );
		}    
	};
})( jQuery );