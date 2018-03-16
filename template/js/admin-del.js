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
}