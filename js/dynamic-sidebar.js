/**
 *  Dynamische Sidebar fuer Piratenkleider
*/
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
$(window).ready(function () {
   var breite = $(window).width();
   if (breite > 600) {
    $.SetOnSwitch();
    $.SetOffSwitch();
    $(".switchon").toggle();
    $.OnClickOnSwitchOff();
    $.OnClickOnSwitchOn();
   }
});  

