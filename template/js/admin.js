jQuery(document).ready(function () {  

		colorClickedHoverEl ('.navbar-brand', 'rgb(255, 255, 255)', 'rgb(204, 255, 204)', 'rgb(255, 255, 0)', '#incomes-admin');


		// Основные отчеты
		$('.reports-main').click(function() {
				var reportText = $(this).text().trim();
				$('#which-report').text(reportText);

				$('.table-wrap').remove();
				

				var href = $(this).attr('href') + '/' + 
									 $('#select-owners option:selected').val() + '/' +
									 $('#select-realties option:selected').val() + '/';
									 
				console.log(href)
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
						var realty = null;						

						if ( $(el).prop('selected') ) {	
									realty = $(el).text().trim();					
									
									$('#which-realty').text(realty);									 
								  return false;
						}
				});			
		});

		$('.select-realty-wrap #select-owners').change(function() {
				$(this).children().each(function(indx, el) {
						var owner = null;						

						if ( $(el).prop('selected') ) {
									owner = $(el).text().trim();

									$('#which-owner').text(owner);										 
								  return false;
						}
				});					

		});
			
});