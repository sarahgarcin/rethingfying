$(document).ready(function(){

	init();

});

function init(){

	// recupérer la couleurs pour les bordures
	$(".article").each(function(){
		var color = $(this).attr('data-color');
		$(this).find('.contenu').css({
			"border-color": color
		});

	});

}