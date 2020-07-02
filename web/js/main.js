$( document ).ready(function() {
    $('#register-birth_date').attr('type', 'date');
    $('#order-date').attr('type', 'date');

    $( "#register-role" ).change(function() {
	  	if($(this).val() == 2) {
	  		$('.service').show();
	  	} else {
	  		$('.service').hide();
	  	}
	});
});