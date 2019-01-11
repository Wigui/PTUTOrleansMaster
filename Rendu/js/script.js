$(function(){
	$( ".reglement" ).change(function() {
	// console.log( "change OK" );
		$(".cache").toggleClass( "hidden" );
		if($(this).val()=="Oui"){
			var target = $(this);
			$('html, body')
				.stop()
				.animate({scrollTop: $(target).offset().top+90}, 1000 );
		}
	// else if($(this).val()=="Non"){
	//     $( ".cache" ).toggleClass( "hidden" );
	// }

	});
});