$(document).ready(function(){

	init();

});

function init(){

	// recupérer la couleurs pour les bordures
	// $(".article").each(function(){
	// 	var color = $(this).data('color');
	// 	$(this).find('.contenu').css({
	// 		"border-color": color
	// 	});

	// });

	$('.imagecouv li').each(function(i){
		console.log(i);
		var randomPaddingTop = Math.random() * 30;
		var randomMarginTop = Math.random() * (50+40) - 40;
		var randomMarginLeft = Math.random() * 50;
		var imageH = $('.cover').height();
		$(this).css({
			'padding': randomPaddingTop + randomMarginLeft ,
			'margin-top' : randomMarginTop
			// 'left': (i * $(this).width()),
			// 'top' : Math.random() * imageH
		});
	});

	$('.gallerie li').each(function(i){
		var randomMarginLeft = Math.random() * (100+80) - 80;
		var randomPaddingLeft = Math.random() * (100-20) + 20;
		$(this).css({
			'padding-left': randomPaddingLeft,
			'padding-right': randomPaddingLeft,
			'margin-left': randomMarginLeft
		});
	});

}