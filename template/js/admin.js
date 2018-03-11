jQuery(document).ready(function () {  

			colorClickedHoverEl ('.navbar-brand', 'rgb(255, 255, 255)', 'rgb(204, 255, 204)', 'rgb(255, 255, 0)');

			$('.reports-main').click(function() {
					$('.table-wrap').remove();
					
					var href = $(this).attr('href') + '/' + 
										 $('#select-realties option:selected').val() + '/' +
										 $('#select-owners option:selected').val();

					$.ajax({
						  url: href,
						  type: 'post',
						  success: function(data) {
						  		$('.report-wrap').append(data);
						  }
					});
			});


			
});