/**
 * JS-Frameset fuer Piratenkleider
 *
 */

jQuery(document).ready(function($) {

/*
 * Klasse no-js entfernen. Diese Klasse wurde im HTML statisch gesetzt.
 * Mit CSS werden die mit dieser Klasse bezeichneten Bereiche
 * unsichtbar gemacht. Durch JS entfernen wir die Klasse und 
 * machen sie also erst dann aktiv, wenn JS an ist.
 */ 
    $("div").removeClass('no-js')

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
	'width' : '67%' 
    };
    var $cssASideOnViewSidebar = {
	'width' : '33%' 
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
	    $(".content-primary").css($cssPrimaryOnViewSidebar);
	    $(".content-aside").css($cssASideOnViewSidebar);      
	    event.preventDefault();
	})
    };


    
   var breite = $(window).width();
   if (breite > 600) {
    $.SetOnSwitch();
    $.SetOffSwitch();
    $(".switchon").toggle();
    $.OnClickOnSwitchOff();
    $.OnClickOnSwitchOn();
   }
    
});  

/* 
 *  Workaround für IE8 und Webkit browser, um den Focus zu korrigieren, bei Verwendung von Skiplinks
 */  
(function () {
	var YAML_focusFix = {
		skipClass : 'ym-skip',

		init : function () {
			var userAgent = navigator.userAgent.toLowerCase();
			var	is_webkit = userAgent.indexOf('webkit') > -1;
			var	is_ie = userAgent.indexOf('msie') > -1;

			if (is_webkit || is_ie) {
				var body = document.body,
					handler = YAML_focusFix.click;
				if (body.addEventListener) {
					body.addEventListener('click', handler, false);
				} else if (body.attachEvent) {
					body.attachEvent('onclick', handler);
				}
			}
		},

		trim : function (str) {
			return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
		},

		click : function (e) {
			e = e || window.event;
			var target = e.target || e.srcElement;
			var a = target.className.split(' ');

			for (var i=0; i < a.length; i++) {
				var cls = YAML_focusFix.trim(a[i]);
				if ( cls === YAML_focusFix.skipClass) {
					YAML_focusFix.focus(target);
					break;
				}
			}
		},

		focus : function (link) {
			if (link.href) {
				var href = link.href,
					id = href.substr(href.indexOf('#') + 1),
					target = document.getElementById(id);
				if (target) {
					target.setAttribute("tabindex", "-1");
					target.focus();
				}
			}
		}
	};
	YAML_focusFix.init();
})(); 