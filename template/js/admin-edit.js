// Редактирование записей из админки
function ifEditBtnsClicked () {

		// Редактирование собственника		
		// Попап 
		$(document).on('click', '.users-table-wrap .edit', function() {
				$('#user-modal-edit').modal('show');
				$('#user-modal-edit').data( 'userName', $(this).parent().parent().children('.name-of-owner').text() );
				$('#user-modal-edit').data( 'userEmail', $(this).parent().parent().children('.email-of-owner').text() );
				$('#user-modal-edit').data( 'userPass', $(this).parent().parent().children('.pass-of-owner').text() );
				$('#user-modal-edit').data( 'userPhone', $(this).parent().parent().children('.phone-of-owner').text() );
				$('#user-modal-edit').data( 'userId', $(this).parent().parent().attr('id') );
				$('#user-modal-edit h5 span').text( $('#user-modal-edit').data('userName') );

				$('#user-name-edit').val( $('#user-modal-edit').data('userName') );
				$('#user-email-edit').val( $('#user-modal-edit').data('userEmail') );
				$('#user-pass-edit').val( $('#user-modal-edit').data('userPass') );
				$('#user-phone-edit').val( $('#user-modal-edit').data('userPhone') );
		});
		// Кнопка "сохранить" в попапе
		$(document).on('click', '#user-modal-edit .btn-edit-final', function() {		
				$.ajax({
				    url: '/edit-owner',
				    data: 'userId=' + $('#user-modal-edit').data('userId') + '&' +
				    			'userName=' + $('#user-name-edit').val() + '&' +
				    			'userEmail=' + $('#user-email-edit').val() + '&' +
				    			'userPass=' + $('#user-pass-edit').val() + '&' +
				    			'userPhone=' + $('#user-phone-edit').val(),
				    type: 'post',
				    success: function(data) {			   		
				    		$('#user-modal-edit .close').click();
				    		$('#owners-admin').click();
				    }
				});
		});


		// Редактирование объекта	
		// Попап 
		function getCurrUserValRealty () {
				$('#realty-modal-edit .select-user option').each(function(indx, el) {
						if (indx != 0) {
								if ( $(el).text().trim() == $('#realty-modal-edit .current-user').text() ) {
											$('.current-user').val( $(el).val() );
											return false;
								}
						}
				});
		}

		$(document).on('click', '.realties-table-wrap .edit', function() {
				$('#realty-modal-edit').modal('show');
				$('#realty-modal-edit').data( 'currUser', $(this).parent().parent().children('.name-of-owner').text() );
				$('#realty-modal-edit').data( 'realtyName', $(this).parent().parent().children('.name-of-realty').text() );
				$('#realty-modal-edit').data( 'ownerName', $(this).parent().parent().children('.name-of-owner').text() );
				$('#realty-modal-edit').data( 'realtyId', $(this).parent().parent().attr('id') );
				
				$('#realty-modal-edit h5 span').text( $('#realty-modal-edit').data('realtyName') );

				$('#realty-name-edit').val( $('#realty-modal-edit').data('realtyName') );
				$('#realty-modal-edit .current-owner').text( $('#realty-modal-edit').data('ownerName') );

				$('#realty-modal-edit .current-user').text( $('#realty-modal-edit').data('currUser') );
				getCurrUserValRealty();

		});
		// Кнопка "сохранить" в попапе
		$(document).on('click', '#realty-modal-edit .btn-edit-final', function() {		
				$.ajax({
				    url: '/edit-realty',
				    data: 'realtyId=' + $('#realty-modal-edit').data('realtyId') + '&' +
				    			'userId=' + $('#realty-modal-edit .select-user option:selected').val() + '&' +
				    			'realtyName=' + $('#realty-name-edit').val(),
				    type: 'post',
				    success: function(data) {		
				    		console.log(data);
				    		$('#realty-modal-edit .close').click();
				    		$('#realties-admin').click();
				    }
				});
		});

		// Редактирование строки баланса		
		// Попап 
		function getCurrUserValBalance () {
				$('#balance-modal-edit .select-user option').each(function(indx, el) {
						if (indx != 0) {
								if ( $(el).text().trim() == $('#balance-modal-edit .current-user').text() ) {
											$('.current-user').val( $(el).val() );
											return false;
								}
						}
				})
		}

		$(document).on('click', '.money-table-wrap .edit', function() {
				$('#balance-modal-edit').modal('show');
				$('#balance-modal-edit').data( 'currUser', $(this).parent().parent().children('.money-owner-name').text() );
				$('#balance-modal-edit').data( 'date', $(this).parent().parent().children('.trans-date').text() );
				$('#balance-modal-edit').data( 'got', $(this).parent().parent().children('.gave-money').text() );
				$('#balance-modal-edit').data( 'gave', $(this).parent().parent().children('.got-money').text() );
				$('#balance-modal-edit').data( 'comment', $(this).parent().parent().children('.money-comment').text() );
				$('#balance-modal-edit').data( 'transId', $(this).parent().parent().attr('id') );
				$('#balance-modal-edit h5 span').text( $('#balance-modal-edit').data('transId') );

				$('#balance-date-edit').val( $('#balance-modal-edit').data('date') );
				$('#balance-got-edit').val( Math.abs( $('#balance-modal-edit').data('got') ) );
				$('#balance-gave-edit').val( Math.abs( $('#balance-modal-edit').data('gave') ) );
				$('#balance-comment-edit').val( $('#balance-modal-edit').data('comment') );

				$('#balance-modal-edit .current-user').text( $('#balance-modal-edit').data('currUser') );
				getCurrUserValBalance();
		});
		// Кнопка "сохранить" в попапе
		$(document).on('click', '#balance-modal-edit .btn-edit-final', function() {			
				$.ajax({
				    url: '/edit-balance',
				    data: 'date=' + $('#balance-date-edit').val() + '&' +
				    			'got=' + $('#balance-got-edit').val() + '&' +
				    			'gave=' + $('#balance-gave-edit').val() + '&' +
				    			'comment=' + $('#balance-comment-edit').val() + '&' +
				    			'id=' + $('#balance-modal-edit').data('transId') + '&' +
				    			'userId=' + $('#balance-modal-edit .select-user option:selected').val(),
				    type: 'post',
				    success: function(data) {		   		
				    		$('#balance-modal-edit .close').click();
				    		$('#balance-admin').click();
				    }
				});
		});


		// Редактирование строки дохода		
		// Попап 
		function getCurrUserValIncome () {
				$('#income-modal-edit .select-realties option').each(function(indx, el) {
						if (indx != 0) {
								if ( $(el).text().trim() == $('#income-modal-edit .current-realty').text() ) {
											$('.current-realty').val( $(el).val() );
											return false;
								}
						}
				})
		}

		$(document).on('click', '.income-table-wrap .edit', function() {
				$('#income-modal-edit').modal('show');
				
				
				$('#income-modal-edit').data( 'incomeId', $(this).parent().parent().attr('id') );		
				$('#income-modal-edit').data( 'dateArr', $(this).parent().parent().children('.income-date-arr').text() );
				$('#income-modal-edit').data( 'dateDep', $(this).parent().parent().children('.income-date-dep').text() );
				$('#income-modal-edit').data( 'price', $(this).parent().parent().children('.income-price').text() );
				$('#income-modal-edit').data( 'sum', $(this).parent().parent().children('.income-sum').text() );
				$('#income-modal-edit').data( 'comment', $(this).parent().parent().children('.income-comment').text() );						
				$('#income-modal-edit').data( 'currRealty', $(this).parent().parent().children('.income-realty-name').text() );

				$('#income-modal-edit h5 span').text( $('#income-modal-edit').data('incomeId') );
				$('#income-edit-date-arr').val( $('#income-modal-edit').data('dateArr') );	
				$('#income-edit-date-dep').val( $('#income-modal-edit').data('dateDep') );
				$('#income-edit-price').val( $('#income-modal-edit').data('price') );
				$('#income-edit-sum').val( $('#income-modal-edit').data('sum') );
				$('#income-edit-comment').val( $('#income-modal-edit').data('comment') );				
		
				$('#income-modal-edit .current-realty').text( $('#income-modal-edit').data('currRealty') );
				getCurrUserValIncome();
		});
		// Кнопка "сохранить" в попапе
		$(document).on('click', '#income-modal-edit .btn-edit-final', function() {			
				$.ajax({
				    url: '/edit-income',
				    data: 'incomeId=' + $('#income-modal-edit').data( 'incomeId' ) + '&' +
				    			'dateArr=' + $('#income-edit-date-arr').val() + '&' +
				    			'dateDep=' + $('#income-edit-date-dep').val() + '&' +
				    			'price=' + $('#income-edit-price').val() + '&' +
				    			'sum=' + $('#income-edit-sum').val() + '&' +
				    			'comment=' + $('#income-edit-comment').val() + '&' +
				    			'realtyId=' + $('#income-modal-edit .select-realties option:selected').val(),
				    type: 'post',
				    success: function(data) {		   
				    		console.log(data);		
				    		$('#income-modal-edit .close').click();
				    		$('#incomes-admin').click();
				    }
				});
		});

}