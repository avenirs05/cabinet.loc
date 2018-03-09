jQuery(document).ready(function () {  

	//Прижать футер к низу
	if ( $(document).height() <= $(window).height() ) {
	  		$(".footer").addClass("fixed-bottom");
	}	

	// то или иное содержание атрибута href у отчета в зависимости от выбранного селекта
	// то ли по всем объектам делать отчет, то ли по 1 выбранному
	$('.select-realty-wrap .custom-select').change(function() {
			$(this).children().each(function(indx, el) {
					if ( $(el).prop('selected') ) {
									if ( $(el).text() == 'Все' ) {
										   $('#incomes').attr('href', '/incomes/all');
										   $('#expenses-owner').attr('href', '/expenses-owner/all');
										   $('#expenses-gen').attr('href', '/expenses-gen/all');
									} else {
											 $('#incomes').attr( 'href', '/incomes/' + $(el).val() );
											 $('#expenses-owner').attr( 'href', '/expenses-owner/' + $(el).val() );
											 $('#expenses-gen').attr( 'href', '/expenses-gen/' + $(el).val() );
									}
							return false;
					}
			});
	});


	// Отчет доходы
	$('#incomes').click(function(e) {
			e.preventDefault();
			
			$('.table-wrap').remove();

			if ( $('#incomes').attr('href') == '/incomes/all' ) {
				     $('.report-wrap h3').text('Доходы по всем объектам недвижимости');
			} else {
				     $('.report-wrap h3').text('Доходы по объекту ' + $('.select-realty-wrap .custom-select option:selected').text() );
			}

			$.ajax({
				  url: $('#incomes').attr('href'),
				  type: 'post',
				  success: function(data) {
				  		$('.report-wrap').append(data);
				  }
			});
	});


	// Отчет расходы собственника
	$('#expenses-owner').click(function(e) {
			e.preventDefault();
			
			$('.table-wrap').remove();

			if ( $('#expenses-owner').attr('href') == '/expenses-owner/all' ) {
				     $('.report-wrap h3').text('Расходы собственника по всем объектам недвижимости');
			} else {
				     $('.report-wrap h3').text('Расходы собственника по объекту ' + $('.select-realty-wrap .custom-select option:selected').text() );
			}
			
			$.ajax({
				  url: $('#expenses-owner').attr('href'),
				  type: 'post',
				  success: function(data) {
				  		$('.report-wrap').append(data);
				  }
			});
	});


	// Отчет общие расходы
	$('#expenses-gen').click(function(e) {
			e.preventDefault();
			
			$('.table-wrap').remove();

			if ( $('#expenses-gen').attr('href') == '/expenses-gen/all' ) {
				     $('.report-wrap h3').text('Общие расходы по всем объектам недвижимости');
			} else {
				     $('.report-wrap h3').text('Общие расходы по объекту ' + $('.select-realty-wrap .custom-select option:selected').text() );
			}
			
			$.ajax({
				  url: $('#expenses-gen').attr('href'),
				  type: 'post',
				  success: function(data) {
				  		$('.report-wrap').append(data);
				  }
			});
	});


	// Взаиморасчеты
	$('#money').click(function(e) {
			e.preventDefault();
			
			$('.table-wrap').remove();
			$('.report-wrap h3').text('Взаиморасчеты по всем объектам недвижимости');
			
			$.ajax({
				  url: $('#money').attr('href'),
				  type: 'post',
				  success: function(data) {
				  		$('.report-wrap').append(data);
				  }
			});
	});


});