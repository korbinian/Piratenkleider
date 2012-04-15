/* 
 * Spezielle JavaScript-Anweisungen für Piratenkleider-Theme 
 */

$(document).ready(function() {
        // Barrierefreie Navigation mit Tastatur
	$(".nav-main ul li a").focus(function() {
		$(this).parent().children("ul").css({top: "40px", display:"block"});
		$(this).parent().children("a").addClass("active");
		$(this).parent().addClass("active");
	});
	
	$(".nav-main ul li a").blur(function() {
		$(this).parent().children("ul").css({top: "-999em"});
		$(this).parent().removeClass("active");
		$(this).removeClass("active");
	});
	
	$(".nav-main ul li ul li a").focus(function() {
		$(this).parent().parent().parent().children("ul").css({top:"40px", display:"block"});
		$(this).parent().parent().parent().children("a").addClass("active");
		$(this).parent().parent().parent().addClass("active");
	});
	
	$(".nav-main ul li ul li a").blur(function() {
		$(this).parent().parent().parent().children("ul").css({top: "-999em"});
		$(this).parent().parent().parent().children("a").removeClass("active");
		$(this).parent().parent().parent().removeClass("active");
	});
	
	
	$(".nav-main ul li").hover(
		function(){
		  	$(this).children("ul").css({top: "40px"});
		},
		function(){
			$(this).children("ul").css({top: "-999em"});
			$(this).children("a").removeClass("active");
		    $(this).removeClass("active");  
		}
	);	        
}
);


