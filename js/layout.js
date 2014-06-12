/**
 * JS-Frameset fuer Piratenkleider
 *
 */
    var $htmlOnSwitch = '';
    var $htmlOffSwitch = '';
    
jQuery(document).ready(function($) {

/*
 * Klasse no-js entfernen. Diese Klasse wurde im HTML statisch gesetzt.
 * Mit CSS werden die mit dieser Klasse bezeichneten Bereiche
 * unsichtbar gemacht. Durch JS entfernen wir die Klasse und 
 * machen sie also erst dann aktiv, wenn JS an ist.
 */ 
    $("div").removeClass('no-js');

 
     /* Barrierefreie Hauptnavigation mit Tastatur 
     * Links, die via Tastatur einen Fikus bekommen, erhalten die Klasse
     * "hover". Diese Klasse wird auf das aktive Element, sowie die darübergehenden
     * Elemente vergeben.
     * Die hover-Klasse ist parallel zu der normalen hover-Funktion im CSS
     * zu definieren.
     */

    $(document).on("focusin", function() { 
	var menuLayers = 5; //Anzahl der Menue-Ebenen
	var links = document.getElementById('nav').getElementsByTagName('a');

	for (var i = 0; i < links.length; i++) {   
	    links[i].onfocus = function(){ 
			var e = this;
			for(var j = 0; j < menuLayers*2; j++){
				e = e.parentNode;
				if(e.nodeName=='UL'||e.nodeName=='SPAN') continue;
				if(e.nodeName!='LI') break;
				e.className += ' hover';
			}
		};
	    links[i].onblur = function(){ 
			var e = this;
			for(var j = 0; j < menuLayers*2; j++){
				e = e.parentNode;
				if(e.nodeName=='UL'||e.nodeName=='SPAN') continue;
				if(e.nodeName!='LI') break;
				e.className = e.className.replace( /(?:^|\s)hover(?!\S)/ , '' );
			}
		};
	}
    });
    
     var $cssPrimaryOnHideSidebar = {
	'width' : '100%' 
    };
    var $cssASideOnHideSidebar = {
	'width' : '0'   
    };
    var $cssPrimaryOnViewSidebar = {
	'width' : '705px' 
    };
    var $cssPrimaryOnBigViewSidebar = {
	'width' : '1024px' 
    };
    var $cssASideOnViewSidebar = {
	'width' : '319px' 
    };
    

    
    
    $.SetOnSwitch = function() {   
	 $(".content-primary").prepend($htmlOnSwitch);     
    };
    $.SetOffSwitch = function() {      
	 $(".content-primary").prepend($htmlOffSwitch);
    };
    $.OnClickOnSwitchOff = function() {
	$(".switchoff a").click(function(event) {    
	    $(".switchon").toggle();
	    $(".switchoff").toggle();
	    $(".content-aside .skin").toggle();
	    $(".content-primary").css($cssPrimaryOnHideSidebar);
	    $(".content-aside").css($cssASideOnHideSidebar);
	    event.preventDefault();
	})
    };
    $.OnClickOnSwitchOn = function() {
	$(".switchon a").click(function(event) {
	    $(".switchon").toggle();
	    $(".switchoff").toggle();
	    $(".content-aside .skin").toggle();
            curwidth = $(window).width();
            if (curwidth >1350) {              
                $(".content-primary").css($cssPrimaryOnBigViewSidebar);
            } else {
                $(".content-primary").css($cssPrimaryOnViewSidebar);
            }	    
	    $(".content-aside").css($cssASideOnViewSidebar);      
	    event.preventDefault();
	})
    };

   var breite = $(window).width();
        $.SetOnSwitch();
        $.SetOffSwitch();
        $(".switchon").toggle();
        $.OnClickOnSwitchOff();
        $.OnClickOnSwitchOn();

 

    $(window).scroll(function () { 
        if (( $(window).scrollTop() > 184 ) && (breite > 800))  {
          $("body").addClass("nav-fixed");
        };
        if (( $(window).scrollTop() <= 184 )&& (breite > 800)) {
          $("body").removeClass("nav-fixed");    
        };          
    });
   $(window).resize(function() {
	breite = $(window).width();
	if (( $(window).scrollTop() > 184 ) && (breite > 800))  {
          $("body").addClass("nav-fixed");
        };
        if (( $(window).scrollTop() <= 184 )&& (breite > 800)) {
          $("body").removeClass("nav-fixed");    
        };  
   });
   
    $("#nav-select").change(function(){
    //alert('url = ' + this.value );
    window.location.href = this.value;
  });
 

    
});  

jQuery(document).ready(function($) {
		$(".accordion h2:gt(0)").addClass("closed");
		$(".accordion div:gt(0)").hide();
		$(".accordion h2").click(function(){
			$(this).next("div").slideToggle("slow");
			$(this).toggleClass("closed");
			});
	});

