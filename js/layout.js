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
    $("div").removeClass('no-js')

    /** @TODO modernizr einbinden und gegen das Original Modernizr.touch checken */
    if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) {
        var $links = $('a', '#nav');

        $links.on('touchstart', function (ev) {

            /** Hover vortäuschen damit die Submenus angezeigt/versteckt werden */
            $('li.hover', '#nav').removeClass('hover');
            $(this).parents('li').addClass('hover');

            /** Verhindere den Aufruf des Links beim ersten Tap */
            if (!$(this).hasClass('touched')) {
                $links.removeClass('touched').filter(this).addClass('touched');
                ev.preventDefault();
            }
        });
    }

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
	    $(".content-primary").css($cssPrimaryOnViewSidebar);
	    $(".content-aside").css($cssASideOnViewSidebar);      
	    event.preventDefault();
	})
    };


    
   var breite = $(window).width();
   if (breite > 1000) {
    $.SetOnSwitch();
    $.SetOffSwitch();
    $(".switchon").toggle();
    $.OnClickOnSwitchOff();
    $.OnClickOnSwitchOn();
   }
    
    


//alert('test');

    $(window).scroll(function () { 
        if (( $(window).scrollTop() > 184 ) && (breite > 800))  {
     /*     if ( !$("body").hasClass("nav-fixed") ) $(".menu-item-home").animate({ left: "20px"}, 200, "linear", function() {
                  $(".menu-item-home").animate({ left: "0px"}, 200);
            });          
            */
          $("body").addClass("nav-fixed");
      //    $("nav.main .menu-mlid-355 a").attr("title", "Zur Startseite");
        };
        if (( $(window).scrollTop() <= 184 )&& (breite > 800)) {
        /* if ( $("body").hasClass("nav-fixed") ) $(".menu-item-home").animate({ left: "0px"}, 200, function() {
                  $("#nav-home-text").animate({ left: "20px"}, 200, "linear", function() {
                  //  $(".menu-mlid-355 a").removeAttr("style");
              });
            });          
          */ 
          $("body").removeClass("nav-fixed");    
      //    $("nav.main .menu-mlid-355 a").attr("title", "");       
        };          
    });

    $("#nav-select").change(function(){
    //alert('url = ' + this.value );
    window.location.href = this.value;
  });
 
    
});  



/* 
 *  Workaround für IE8 und Webkit browser, um den Focus zu korrigieren, bei Verwendung von Skiplinks
 */  
(function () {
	var YAML_focusFix = {
		skipClass : 'p3-skip',

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
