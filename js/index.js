$('document').ready(function() {
	$('.thumbnail').click(function() {
		var backImg = $(this).attr("src");
		$('#view').css('background-image', 'url('+ backImg +')');
		$('#view').hide().fadeIn();
	$( "button" ).click(function() {
  		$(this)  = $(this).next();
	});

	});
});