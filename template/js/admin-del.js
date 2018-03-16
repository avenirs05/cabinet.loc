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
				$('#expense-gen-modal-del').modal('show');				
				$('#expense-gen-modal-del').data( 'expenseId', $(this).parent().parent().attr('id') );
				$('#expense-gen-modal-del h5 span').text( $('#expense-gen-modal-del').data('expenseId') );
		});
		// Кнопка "удалить" в попапе
		$(document).on('click', '#expense-gen-modal-del .btn-del-final', function() {		
				$.ajax({
				    url: '/del-expense',
				    data: 'expenseId=' + $('#expense-modal-del').data('expenseId'),
				    type: 'post',
				    success: function(data) {		  		
				    		$('#expense-modal-del .close').click();
				    		if ( data == 'gen') {
				    					$('#expenses-gen-admin').click();
				    		}
				    		if ( data == 'owner') {
				    					$('#expenses-owner-admin').click();
				    		}
				    		
				    }
				});
		});

}