/* 
 * Spezielle JavaScript-Anweisungen für Piratenkleider-Theme 
 */

$(document).ready(function() {
    
    //    $(".first-teaser-widget-area div.no-js").bind(function() {    
    //        $(this).parent().removeClass("no-js");
    //    }); 

        $(".no-js").bind(function() {    
            $(this).parent().removeClass("no-js");
        });
        $(".first-teaser-widget-area .no-js").bind(function() {    
            $(this).parent().removeClass("no-js");
        });
        // Barrierefreie Hauptnavigation mit Tastatur
	$(".nav-main ul li a").focus(function() {
		$(this).parent().children("a").addClass("active");
		$(this).parent().addClass("active");
	});
	
	$(".nav-main ul li a").blur(function() {
		$(this).parent().removeClass("active");
		$(this).removeClass("active");
	});
	$(".nav-main ul li ul li a").focus(function() {
                $(this).parent().children("a").addClass("active");
		$(this).parent().addClass("active");
		$(this).parent().parent().parent().children("a").addClass("active");
		$(this).parent().parent().parent().addClass("active");
	});
	
	$(".nav-main ul li ul li a").blur(function() {
		$(this).parent().removeClass("active");
		$(this).removeClass("active");            
		$(this).parent().parent().parent().children("a").removeClass("active");
		$(this).parent().parent().parent().removeClass("active");
	});
	$(".nav-main ul li ul li ul li a").focus(function() {
                $(this).parent().children("a").addClass("active");
		$(this).parent().addClass("active");
		$(this).parent().parent().parent().children("a").addClass("active");
		$(this).parent().parent().parent().addClass("active");
		$(this).parent().parent().parent().parent().parent().children("a").addClass("active");
		$(this).parent().parent().parent().parent().parent().addClass("active");                
	});
	
	$(".nav-main ul li ul li ul li a").blur(function() {
		$(this).parent().removeClass("active");
		$(this).removeClass("active");            
		$(this).parent().parent().parent().children("a").removeClass("active");
		$(this).parent().parent().parent().removeClass("active");                
		$(this).parent().parent().parent().parent().parent().children("a").removeClass("active");
		$(this).parent().parent().parent().parent().parent().removeClass("active");
	});
	
	$(".nav-main ul li").hover(
	//	function(){
	//	  	$(this).children("ul").css({top: "40px"});
	//	},
		function(){
			$(this).children("a").removeClass("active");
		    $(this).removeClass("active");  
		}
	);	        
});


