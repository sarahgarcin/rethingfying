$(document).ready(function(){

	init();

});

function init(){

	// recupérer la couleurs pour les bordures
	$(".section").each(function(){
		var color = $(this).data('color');
		$(this).css({
			"border-color": color
		});

	});

	$('.imagecouv li').each(function(i){
		var randomPaddingTop = Math.random() * 30;
		var randomMarginTop = Math.random() * (30+30) - 30;
		var randomMarginLeft = Math.random() * 30;
		var imageH = $('.cover').height();

		$(this).css({
			'padding': randomPaddingTop + randomMarginLeft ,
			'margin-top' : randomMarginTop
		});
	});

	$('.gallerie li').each(function(i){
		var randomMarginLeft = Math.random() * (100+100) - 100;
		var imgW = $(this).width();
		var imgH = $(this).height();
		var ratio = imgW / imgH;
		var padding = 80/ratio;
		var paddingTop;
		console.log(ratio, 80/ratio);
		// if(ratio < 1){
		// 	padding = 120;
		// }
		// if(ratio > 2){
		// 	padding = 50;
		// }
		// else{
		// 	padding = 80;
		// }
		paddingTop = padding/2;
		// console.log($(this), imgW, imgH, ratio);
		$(this).css({
			'padding-left': padding,
			'padding-right': padding,
			'padding-bottom': paddingTop,
			'left': randomMarginLeft
		});
	});

}