	(function($){

	/*=========================================\
		$SLIDER
	\=========================================*/

	function init_carousel() {
		$('.slider').owlCarousel({
			items: 1
		});
	}
	init_carousel();

	/*=========================================\
		$AUTOGROW
	\=========================================*/

	autosize($('textarea'));
	
	/*=========================================\
		$LOADPAGE   
	\=========================================*/

	// Pour vous aider n1
	//console.log($('.logo').attr('class'));

	// Pour vous aider n2
	//$.get('pages/accueil.html',function( data ) {
	//	console.log(data);
	//});

	function loadPage(target){		
		$('[data-page="'+target+'"]').addClass('.active');
		$.get('pages/'+target+'.html',function(data){		
		$("#pages").html(data);
		init_carousel();
		})

		
	}
	$('nav a').click(function(event){
	console.log(event.target);
	event.preventDefault();

	
	var lP=$(this).attr('data-page')
	if(lP != undefined){
	loadPage(lP)
	};	

});
	

})(jQuery);



