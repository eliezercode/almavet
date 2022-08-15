//$(document).ready(function() {
//	$("ul li:has(ul)").click(function() {
//		$(this).find("ul").show();
//	}, function() {
//		$(this).find("ul").hide();
//	});
//});


$(".submenu").click(function(){
	$(this).children("ul").slideToggle();
})
$("ul").hover(function(p){
	p.stopPropagation();
})