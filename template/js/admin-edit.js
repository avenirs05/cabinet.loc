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




}