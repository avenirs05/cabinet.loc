jQuery(document).ready(function () {  

		var colorDefault = 'rgb(255, 255, 255)';
		var colorClicked = 'rgb(204, 255, 204)';
		var colorHover = 'rgb(255, 255, 0)';

		$('.navbar-brand').click(function(e) {
				e.preventDefault();

				$(this).css('color', colorClicked);
				var textOfThis = $(this).text();

				$('.navbar-brand').each(function(indx, el) {
						if ( $(el).text() !== textOfThis ) {
									$(el).css('color', colorDefault);
						}
				});

		});


		$('.navbar-brand').mouseover(function(e) {
				e.preventDefault();

				if ( $(this).css('color') == colorDefault ) {
							$(this).css('color', colorHover);
				}
		});
		

		$('.navbar-brand').mouseout(function(e) {
				e.preventDefault();
				
				if ( $(this).css('color') == colorHover) {
							$(this).css('color', colorDefault)
				}

				if ( $(this).css('color') == colorClicked) {
							$(this).css('color', colorClicked)
				}

		});
});