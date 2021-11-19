jQuery(function(){
	// Author: Lucas Victor
	window.setTimeout(function(){
		$('[data-src]').each(function(ind, elem){
			$elem = $(this)
			$elem.attr('src', $elem.attr('data-src'));
			$(this).removeAttr('data-src')
		})
		$('[data-background]').each(function(ind, elem){
			$elem = $(this)
			$elem.css('background-image', 'url("'+$elem.attr('data-background')+'")');
			$(this).removeAttr('data-background');
		})
		
		$('[data-images]').each(function(ind, elem){
			$elem = $(this)
			imagens = $elem.attr('data-images').split('|')
			
			$('body').append('<style> '+imagens[2]+' { background-image: url("'+imagens[0]+'") !important; } @media (min-width: 768px) { '+imagens[2]+' { background-image: url("'+imagens[1]+'") !important; } }</style>')
			$(this).removeAttr('data-images');

		})

		$('[data-href]').each(function(ind, elem){
			$elem = $(this)
			$elem.attr('href', $elem.attr('data-href'));
			$(this).removeAttr('data-href');
		})

	}, 500);
})