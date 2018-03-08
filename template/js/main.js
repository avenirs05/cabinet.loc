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
									if ( $(el).text() === 'Все' ) {
										   $('#incomes').attr('href', '/incomes');
									} else $('#incomes').attr('href', '/incomes/' + $(el).val());
							return false;
					}
			});
	})

});