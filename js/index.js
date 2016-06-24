$('document').ready(function() {
//execute function when thumb clicked
	$('.thumbnail').click(function() {
//"this" thumbnails src
		var backImg = $(this).attr("src");
//divs background is set to "this" thumbnails src
		//$('.view').html("<img src='"+backImg+"' id='fillBackground'/>);
		$('.view').css('background-image', 'url("'+ backImg +'")');
	if (backImg == "img/beneducePan.jpg") {
		$('.view').css("background-size", "cover");
	}else{
		$('.view').hide().fadeIn(1000);
		}
	});
});