jQuery(document).ready(function () {  

	//Прижать футер к низу
	if ( $(document).height() <= $(window).height() ) {
	  $(".footer").addClass("fixed-bottom");
	}	

});