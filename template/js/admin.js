jQuery(document).ready(function () {  

		colorClickedHoverEl ('.navbar-brand', 'rgb(255, 255, 255)', 'rgb(204, 255, 204)', 'rgb(255, 255, 0)');


		// Основные отчеты
		$('.reports-main').click(function() {
				$('.table-wrap').remove();
				
				var href = $(this).attr('href') + '/' + 
									 $('#select-realties option:selected').val() + '/' +
									 $('#select-owners option:selected').val();

				$.ajax({
					  url: href,
					  type: 'post',
					  success: function(data) {
					  		$('.report-wrap').append(data);
					  }
				});
		});

		// то или иное содержание атрибута href у отчета в зависимости от выбранного селекта
		// то ли по всем объектам и юзерам делать отчет, то ли по выбранным
		$('.select-realty-wrap #select-realties').change(function() {
				$(this).children().each(function(indx, el) {
						var text = null;

						if ( $(el).prop('selected') ) {
									text = $(el).text().trim();

									console.log( $('#which-realty').text(text) );										 
								  return false;
						}
				});			
		});

		$('.select-realty-wrap #select-owners').change(function() {
				$(this).children().each(function(indx, el) {
						var text = null;
						if ( $(el).prop('selected') ) {
									text = $(el).text().trim();
									$('#which-owner').text(text);										 
								  return false;
						}
				});					

		});
			
});