var $ = function(id){
	return document.getElementById(id);
}

window.onload = function (){
	$('brickPortfolio').onclick = nextImg;
}
function nextImg () {
	var backgroundImg = this.src
	var viewPort = window.open("", "", "width=400,height=400");
	viewPort.document.write = ("<img src='img/brickpatio.jpg'/>");
	viewPort.document.write = ("<img src='img/halfBrick.jpg'/>");
	
}