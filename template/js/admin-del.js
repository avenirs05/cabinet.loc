// Удаление записей из админки
function ifDelBtnsClicked () {

		// Удаление собственника		
		// Попап 
		$(document).on('click', '.users-table-wrap .delete', function() {
				$('#user-modal-del').modal('show');
				$('#user-modal-del').data( 'userName', $(this).parent().parent().children('.name-of-owner').text() );
				$('#user-modal-del').data( 'userId', $(this).parent().parent().attr('id') );
				$('#user-modal-del h5 span').text( $('#user-modal-del').data('userName') );
		});
		// Кнопка "удалить" в попапе
		$(document).on('click', '#user-modal-del .btn-del-final', function() {		
				$.ajax({
				    url: '/del-owner',
				    data: 'userId=' + $('#user-modal-del').data('userId'),
				    type: 'post',
				    success: function(data) {				    		
				    		$('#user-modal-del .close').click();
				    		$('#owners-admin').click();
				    }
				});
		});


		// Удаление объета		
		// Попап 
		$(document).on('click', '.realties-table-wrap .delete', function() {
				$('#realty-modal-del').modal('show');
				$('#realty-modal-del').data( 'realtyName', $(this).parent().parent().children('.name-of-realty').text() );
				$('#realty-modal-del').data( 'realtyId', $(this).parent().parent().attr('id') );
				$('#realty-modal-del h5 span').text( $('#realty-modal-del').data('realtyName') );
		});
		// Кнопка "удалить" в попапе
		$(document).on('click', '#realty-modal-del .btn-del-final', function() {		
				$.ajax({
				    url: '/del-realty',
				    data: 'realtyId=' + $('#realty-modal-del').data('realtyId'),
				    type: 'post',
				    success: function(data) {				    		
				    		$('#realty-modal-del .close').click();
				    		$('#realties-admin').click();
				    }
				});
		});


		// Удаление баланса		
		// Попап 
		$(document).on('click', '.money-table-wrap .delete', function() {
				$('#balance-modal-del').modal('show');
				$('#balance-modal-del').data( 'balanceName', $(this).parent().parent().children('.id-of-trans').text() );
				$('#balance-modal-del').data( 'balanceId', $(this).parent().parent().attr('id') );
				$('#balance-modal-del h5 span').text( $('#balance-modal-del').data('balanceName') );
		});
		// Кнопка "удалить" в попапе
		$(document).on('click', '#balance-modal-del .btn-del-final', function() {		
				$.ajax({
				    url: '/del-balance',
				    data: 'balanceId=' + $('#balance-modal-del').data('balanceId'),
				    type: 'post',
				    success: function(data) {		    		
				    		$('#balance-modal-del .close').click();
				    		$('#balance-admin').click();
				    }
				});
		});


		// Удаление расхода общего		
		// Попап 
		$(document).on('click', '.expenses-table-wrap .delete', function() {
				$('#expense-modal-del').modal('show');				
				$('#expense-modal-del').data( 'expenseId', $(this).parent().parent().attr('id') );
				$('#expense-modal-del').data( 'expenseType', $(this).parent().parent().children('.exp-type').text() );
				$('#expense-modal-del h5 span').text( $('#expense-modal-del').data('expenseId') );
		});
		// Кнопка "удалить" в попапе
		$(document).on('click', '#expense-modal-del .btn-del-final', function() {		
				$.ajax({
				    url: '/del-expense',
				    data: 'expenseId=' + $('#expense-modal-del').data('expenseId'),
				    type: 'post',
				    success: function(data) {		  		
				    		$('#expense-modal-del .close').click();
				    		if ( $('#expense-modal-del').data('expenseType') == '1') {
				    					$('#expenses-gen-admin').click();
				    		}
				    		if ( $('#expense-modal-del').data('expenseType') == '2') {
				    					$('#expenses-owner-admin').click();
				    		}
				    		
				    }
				});
		});


		// Удаление дохода		
		// Попап 
		$(document).on('click', '.income-table-wrap .delete', function() {
				$('#income-modal-del').modal('show');
				$('#income-modal-del').data( 'incomeId', $(this).parent().parent().attr('id') );
				$('#income-modal-del h5 span').text( $('#income-modal-del').data('incomeId') );
		});
		// Кнопка "удалить" в попапе
		$(document).on('click', '#income-modal-del .btn-del-final', function() {		
				$.ajax({
				    url: '/del-income',
				    data: 'incomeId=' + $('#income-modal-del').data('incomeId'),
				    type: 'post',
				    success: function(data) {				    		
				    		$('#income-modal-del .close').click();
				    		$('#incomes-admin').click();
				    }
				});
		});

}