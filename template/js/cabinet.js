jQuery(document).ready(function () {  

	// Tooltips
	$('[data-toggle="tooltip"]').tooltip();

	// Кнопки отчетов
	var bgRepDefault = 'RGB(248, 248, 248)'; 
	var bgRepClicked = 'RGB(0, 123, 255)'; 
	var colorRepDefault = 'RGB(0, 0, 0)';
	var colorRepClicked = 'RGB(255, 255, 255)';

	whichColorForBalance();

	// Hover эффект при наведении на отчет, чтобы текст ссылки нужным цветом был
	$('.nav-item').mouseover(function() {
			$(this).children().css('color', 'RGB(255, 255, 255)');
	});

	$('.nav-item a').mouseout(function() {
			//console.log( $(this).parent().css('background-color') == 'rgb(243, 243, 243)' )
			if ( $(this).parent().css('background-color') == 'rgb(243, 243, 243)' || 
					 $(this).parent().css('background-color') == 'rgb(248, 248, 248)') 
			{
					 $(this).css('color', 'RGB(0, 0, 0)');
			} 
	})

	// По умолчанию - отчет "Доходы собственника как бы нажат"
	$('#incomes').parent().css('background-color', bgRepClicked);
	$('#incomes').css('color', colorRepClicked);

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

			// Подсветка кнопока отчетов при клике
			$(this).parent().css('background-color', bgRepClicked);
			$(this).css('color', colorRepClicked);
			$('#expenses-owner').parent().css('background-color', bgRepDefault);
			$('#expenses-owner').css('color', colorRepDefault);
			$('#expenses-gen').parent().css('background-color', bgRepDefault);
			$('#expenses-gen').css('color', colorRepDefault);
			$('.select-realty-wrap label').css('background-color', bgRepClicked);
			$('.select-realty-wrap label').css('color', colorRepClicked);
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
				  		delZeroInTable();
				  }
			});



			// Подсветка кнопока отчетов при клике
			$(this).parent().css('background-color', bgRepClicked);
			$(this).css('color', colorRepClicked);
			$('#incomes').parent().css('background-color', bgRepDefault);
			$('#incomes').css('color', colorRepDefault);
			$('#expenses-gen').parent().css('background-color', bgRepDefault);
			$('#expenses-gen').css('color', colorRepDefault);
			$('.select-realty-wrap label').css('background-color', bgRepClicked);
			$('.select-realty-wrap label').css('color', colorRepClicked);

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
				  		delZeroInTable();
				  }
			});

			

			// Подсветка кнопок отчетов при клике
			$(this).parent().css('background-color', bgRepClicked);
			$(this).css('color', colorRepClicked);
			$('#incomes').parent().css('background-color', bgRepDefault);
			$('#incomes').css('color', colorRepDefault);
			$('#expenses-owner').parent().css('background-color', bgRepDefault);
			$('#expenses-owner').css('color', colorRepDefault);
			$('.select-realty-wrap label').css('background-color', bgRepClicked);
			$('.select-realty-wrap label').css('color', colorRepClicked);
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

				  		var saldo =  Number( $('#final-sum-minus').text() ) + Number($('#final-sum-plus').text() );
				  		if (saldo >= 0) {
				  					$('#saldo-plus').text(saldo);
				  		} else $('#saldo-minus').text(saldo);

				  		delZeroInTable();
				  }
			});

			// Подсветка других кнопок
			$('.report-menu-wrap .nav-item a').parent().css('background-color', bgRepDefault);
			$('.report-menu-wrap .nav-item a').css('color', 'RGB(0, 0, 0)');
			$('.select-realty-wrap label').css('background-color', bgRepDefault);
			$('.select-realty-wrap label').css('color', 'RGB(0, 0, 0)');
	});


});