/**
 * JS-Frameset fuer Piratenkleider
 *
 */

/*
 * Klasse no-js entfernen. Diese Klasse wurde im HTML statisch gesetzt.
 * Mit CSS werden die mit dieser Klasse bezeichneten Bereiche
 * unsichtbar gemacht. Durch JS entfernen wir die Klasse und 
 * machen sie also erst dann aktiv, wenn JS an ist.
 */ 
$(window).load(function () {
     $("div").removeClass('no-js')
});  
 
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
