$(document).ready(function(){
	$('#name-form').submit(function() {
		$.ajax({
			url: 'reduce.php',
			method: 'POST',
			data: {
				content: $('#nameInput').val()
			},
			success: function(data){
				showMessage(data);
			}
		})
		return false;
	})

});

function showMessage(message, alertClass) {
	$('#response-container').html('<div class="alert alert-warning">...And the reduced name is: <b>' + message + '</b></div>');
}

