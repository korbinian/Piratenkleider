/* 
 * Optional Hamburger Menu for small screen displays
 */



jQuery(document).ready(function($) { 
    var lastsize= window.innerWidth;
    var cloneimg =0;
    if(window.innerWidth < 769) {
	$(".header").before('<div id="header-menu-icon"></div>');
	$( ".branding h1 img" ).clone().appendTo( "#header-menu-icon" );
	cloneimg =1;
	$("#header-menu-icon").click(function() {
	    $(".header").slideToggle();
	    $(".header .branding h1").hide();
	});
    }
    $(window).resize(function(){
	if(window.innerWidth > 768) {
	    $(".header").removeAttr("style");
	    $(".header .branding h1").show();
	    $("#header-menu-icon").detach();
	     lastsize = window.innerWidth;
             cloneimg=0;
	}
	if ((window.innerWidth <= 769) && (lastsize > 768)) {
	    lastsize = window.innerWidth;
	     
	    $(".header").before('<div id="header-menu-icon"></div>');
	    if (cloneimg==0) {
	      $( ".branding h1 img" ).clone().appendTo( "#header-menu-icon" );
              cloneimg=1;
	    }
	    $("#header-menu-icon").click(function() {
	    $(".header").slideToggle();
		if (cloneimg==1) {
		    $(".header .branding h1").hide();
		 }
	    });
	}
    });
});