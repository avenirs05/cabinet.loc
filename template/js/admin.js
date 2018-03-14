jQuery(document).ready(function () {  

		colorClickedHoverEl ('.navbar-brand', 'rgb(255, 255, 255)', 'rgb(204, 255, 204)', 'rgb(255, 255, 0)', '#incomes-admin');

		IfAddBtnsClicked();

		// Основные отчеты. Операция read из бд
		$('.reports-main').click(function() {
				var reportText = $(this).text().trim();
				$('#which-report').text(reportText);

				showElemsIfReportClicked();
				getHeaderOfRepIfSelectRealties();
				getHeaderOfRepIfSelectOwners();	
				hideAddFields();

				if ( $(this).attr('id') == 'balance-admin') {
							hideElemsIfBalanceClicked();
				}			

				if ( $(this).attr('id') == 'realties-admin' || $(this).attr('id') == 'owners-admin') {
							hideElemsIfRealtiesOrOwnersClicked();
				}			

				$('.table-wrap').remove();				

				var href = $(this).attr('href') + '/' + 
									 $('#select-owners option:selected').val() + '/' +
									 $('#select-realties option:selected').val() + '/';									 

				$.ajax({
					  url: href,
					  type: 'post',
					  success: function(data) {
					  		$('.report-wrap').append(data);
					  		delZeroInTable();

					  		var saldo =  Number( $('#final-sum-minus').text() ) + Number($('#final-sum-plus').text() );
					  		if (saldo >= 0) {
					  					$('#saldo-plus').text(saldo);
					  		} else $('#saldo-minus').text(saldo);

					  		// Средняя цена в отчете "Доходы"
					  		$('#avg-price').text( 
					  				( $('#income-sum-amount').text().trim() / 
					  					$('#income-sum-days').text().trim() ).toFixed(2) 
					  				);
					  }
				});
		});


		// Запись в бд
		// Добавление собственника (пользователя)
		$('#add-owner-send').click(function(e) {	
				e.preventDefault();			

				$.ajax({
					  url: '/add-owner',
					  data: 'name=' + $('#user-name').val().trim() + '&' +
					  			'email=' + $('#user-email').val().trim() +	'&' +
					  			'pass=' + $('#user-pass').val().trim() + '&' +
					  			'phone=' + $('#user-phone').val().trim(),
					  type: 'post',
					  success: function(data) {
					  		$('#user-name').val('');
					  		$('#user-email').val('');
					  		$('#user-pass').val('');
					  		$('#user-phone').val('');
					  		$('#owners-admin').click();
					  }
				});
		});

		// Добавление объекта
		$('#add-realty-send').click(function(e) {	
				e.preventDefault();			

				$.ajax({
					  url: '/add-realty',
					  data: 'name=' + $('#realty-name').val().trim() + '&' +
					  			'userName=' + $('#select-users option:selected').text().trim(),
					  type: 'post',
					  success: function(data) {
					  		$('#realty-name').val('');
					  		$('#realties-admin').click();
					  }
				});
		});

		// Добавление баланса
		$('#add-balance-send').click(function(e) {	
				e.preventDefault();			

				$.ajax({
					  url: '/add-balance',
					  data: 'name=' + $('#realty-name').val().trim() + '&' +
					  			'userName=' + $('#select-users option:selected').text().trim(),
					  type: 'post',
					  success: function(data) {
					  		$('#realty-name').val('');
					  		$('#realties-admin').click();
					  }
				});
		});

});