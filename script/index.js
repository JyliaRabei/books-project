$(document).ready(function() {
	$('#form').submit(function() {
		if (document.form.name.value == '' || document.form.email.value == '' || document.form.item.value == '') {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find('input').val('');
			$('#form').trigger('reset');
		});
		return false;
	});
});




    




