/*
 * 	Easy Paginate 1.0 - jQuery plugin
 *	written by Alen Grakalic	
 *	http://cssglobe.com/
 *
 *	Copyright (c) 2011 Alen Grakalic (http://cssglobe.com)
 *	Dual licensed under the MIT (MIT-LICENSE.txt)
 *	and GPL (GPL-LICENSE.txt) licenses.
 *
 *	Built for jQuery library
 *	http://jquery.com
 *
 */

(function($) {
		  
	$.fn.easyPaginate = function(options){

		var defaults = {				
			step: 4,
			delay: 100,
			numeric: true,
			nextprev: true,
			auto:true,
			loop:true,
			pause:4000,
			clickstop:true,
			controls: 'pagination',
			current: 'active',
			randomstart: false
		}; 
		
		var options = $.extend(defaults, options); 
		var step = options.step;
		var lower, upper;
		var children = $(this).children();
		var count = children.length;
		var obj, next, prev;		
		var pages = Math.floor(count/step);
		var page = (options.randomstart) ? Math.floor(Math.random()*pages)+1 : 1;
		var timeout;
		var clicked = false;
		
		function show(){
			clearTimeout(timeout);
			lower = ((page-1) * step);
			upper = lower+step;
			$(children).each(function(i){
				var child = $(this);
				child.hide();
				if(i>=lower && i<upper){ setTimeout(function(){ child.fadeIn(1000) }, ( i-( Math.floor(i/step) * step) )*options.delay ); }
				if(options.nextprev){
					if(upper >= count) { next.fadeOut(1); } else { next.fadeIn(1000); };
					if(lower >= 1) { prev.fadeIn(1000); } else { prev.fadeOut(1); };
				};
			});	
			$('span','#'+ options.controls).removeClass(options.current);
			$('span[data-index="'+page+'"]','#'+ options.controls).addClass(options.current);
			
			if(options.auto){
				if(options.clickstop && clicked){}else{ timeout = setTimeout(auto,options.pause); };
			};
		};
		
		function auto(){
			if(options.loop) if(upper >= count){ page=0; show(); }
			if(upper < count){ page++; show(); }				
		};
		
		this.each(function(){ 
			
			obj = $('#carousel');
			
			if(count>step){
								
				if((count/step) > pages) pages++;
				
				var ol = $('<div class="switcher" id="'+ options.controls +'"></div>').insertAfter(obj);
				
				if(options.nextprev){
					prev = $('.bw')
						.hide()
						
						.click(function(){
							clicked = true;
							page--;
							show();
						});
				};
				
				if(options.numeric){
					for(var i=1;i<=pages;i++){
					$('<span data-index="'+ i +'"></span>')
						.appendTo(ol)
						.click(function(){	
							clicked = true;
							page = $(this).attr('data-index');
							show();
						});					
					};				
				};
				
				if(options.nextprev){
					next = $('.fw')
						.hide()
						.click(function(){
							clicked = true;			
							page++;
							show();
						});
				};
			
				show();
			};
		});	
		
	};	

})(jQuery);