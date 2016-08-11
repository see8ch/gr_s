// -- Set Dynamic Heights and CSS -- //
function resizeDiv() {
	vpw = $(window).width();
	vph = $(window).height();
}

$(document).ready(function(){
	resizeDiv();
});

window.onresize = function() {
	resizeDiv();
};
