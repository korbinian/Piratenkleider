/*
 * Image Upload for Banner/Logo Link Widget
 */
jQuery(document).ready(function($){
    var custom_uploader;

     $('body').on('click','.upload_image_button',function(e) {
        e.preventDefault();
        var button = $(this);
        var id = button.attr('id').replace('_button', '');
        var idimgid = button.attr('id').replace('url_button', 'id'); 
        var idtitle = button.attr('id').replace('image_url_button', 'title');
	
	if (custom_uploader) {
            custom_uploader.open();
            return;
        }
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: { text:'Choose Image' },
            library: { type: 'image' }, 
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();            
            $('#'+id).val(attachment.url);   
            $('#'+idimgid).val(attachment.id);   
            var pretitle = $('#'+idtitle).val();
            if (!pretitle)
                $('#'+idtitle).val(attachment.title);
           
        });
 
        //Open the uploader dialog
        custom_uploader.open(); 
    });
});

/*
 * Attaches the image uploader to the input field
 */
jQuery(document).ready(function($){
 
   var custom_uploader;

    $('#linktipp_image-button').click(function(e) {
        e.preventDefault();
        var button = $(this);
	
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: { text:'Choose Image' },
            library: { type: 'image' }, 
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();            
            $('#linktipp_image').val(attachment.url); 
	    $('#linktipp_imgid').val(attachment.id); 
	    $('#linktipp_image-show').attr('src', attachment.url);   
           
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });
    
    $('.custom_clear_image_button').click(function() {  
        var defaultImage = $(this).parent().siblings('.custom_default_image').text();  
        $(this).parent().siblings('#linktipp_image').val('');  
        $(this).parent().siblings('#linktipp_imgid').val('');  
        $(this).parent().siblings('#linktipp_image-show').attr('src', defaultImage);
        return false;  
    });  
    
    
});


/*
 * Attaches the image uploader to the input field for custom type person
 */
jQuery(document).ready(function($){
 
   var custom_uploader;

    $('#person_bild-button').click(function(e) {
        e.preventDefault();
        var button = $(this);
	
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: { text:'Choose Image' },
            library: { type: 'image' }, 
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            var attachment = custom_uploader.state().get('selection').first().toJSON();            
            $('#person_bild').val(attachment.url); 
	    $('#person_bildid').val(attachment.id); 
	    $('#person_bild-show').attr('src', attachment.url);   
           
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });
    
    $('.custom_clear_image_button').click(function() {  
        var defaultImage = $(this).parent().siblings('.custom_default_image').text();  
        $(this).parent().siblings('#person_bild').val('');  
        $(this).parent().siblings('#person_bildid').val('');  
        $(this).parent().siblings('#person_bild-show').attr('src', defaultImage);
        return false;  
    });  
    
    
});




jQuery(document).ready(function($){
  var startval =  $("#piratenkleider-personalcard-id :selected").val();
  if (startval != '') {
      $(".visiting-card-manual").hide();
  }
  $("#piratenkleider-personalcard-id").change(function(){
    var thisval =  $("#piratenkleider-personalcard-id :selected").val();
    if (thisval != '') {	
	 $(".visiting-card-manual").hide();
    } else {
	$(".visiting-card-manual").show();
    }
  }); 

});

jQuery(document).ready(function($){
    /* backend option switches */
  var startval =  $("#artikelstream-type :selected").val();
  if (startval < 2) {
      $(".option-artikelstream-exclusive-catliste").hide();
       $(".option-artikelstream-show-second").hide();
       $(".option-artikelstream-maxnum-second").hide();
       $(".option-artikelstream-nextnum-second").hide();
       $(".option-artikelstream-numfullwidth-second").hide();
       $(".option-artikelstream-title-second").hide();
       $(".option-artikelstream-title-secondcontinuelist").hide();
       $(".option-artikelstream-show-linktipps").hide();
       $(".option-artikelstream-maxnum-linktipps").hide();
       $(".option-artikelstream-nextnum-linktipps").hide();
       $(".option-artikelstream-title-linktipps").hide();
       $(".option-artikelstream-title-linktippcontinuelist").hide();
  }
  $("#artikelstream-type").change(function(){
    var thisval =  $("#artikelstream-type :selected").val();
    if (thisval <2) {	
	 $(".option-artikelstream-exclusive-catliste").hide();
       $(".option-artikelstream-show-second").hide();
       $(".option-artikelstream-maxnum-second").hide();
       $(".option-artikelstream-nextnum-second").hide();
       $(".option-artikelstream-numfullwidth-second").hide();
       $(".option-artikelstream-title-second").hide();
       $(".option-artikelstream-title-secondcontinuelist").hide();
       $(".option-artikelstream-show-linktipps").hide();
       $(".option-artikelstream-maxnum-linktipps").hide();
       $(".option-artikelstream-nextnum-linktipps").hide();
       $(".option-artikelstream-title-linktipps").hide();
       $(".option-artikelstream-title-linktippcontinuelist").hide();	 
    } else {
	$(".option-artikelstream-exclusive-catliste").show();
       $(".option-artikelstream-show-second").show();
       $(".option-artikelstream-maxnum-second").show();
       $(".option-artikelstream-nextnum-second").show();
       $(".option-artikelstream-numfullwidth-second").show();
       $(".option-artikelstream-title-second").show();
       $(".option-artikelstream-title-secondcontinuelist").show();
       $(".option-artikelstream-show-linktipps").show();
       $(".option-artikelstream-maxnum-linktipps").show();
       $(".option-artikelstream-nextnum-linktipps").show();
       $(".option-artikelstream-title-linktipps").show();
       $(".option-artikelstream-title-linktippcontinuelist").show();
    }
  }); 
  
  
  var startval =  $("#artikelstream-show-second :selected").val();
  if (startval == 0) {
       $(".option-artikelstream-maxnum-second").hide();
       $(".option-artikelstream-nextnum-second").hide();
       $(".option-artikelstream-numfullwidth-second").hide();
       $(".option-artikelstream-title-second").hide();
       $(".option-artikelstream-title-secondcontinuelist").hide();
  }
  $("#artikelstream-show-second").change(function(){
    var thisval =  $("#artikelstream-show-second :selected").val();
    var streammain =  $("#artikelstream-type :selected").val();
    if (thisval ==0) {	
	$(".option-artikelstream-maxnum-second").hide();
	$(".option-artikelstream-nextnum-second").hide();
	$(".option-artikelstream-numfullwidth-second").hide();
	$(".option-artikelstream-title-second").hide();
	$(".option-artikelstream-title-secondcontinuelist").hide();
    } else if (streammain>1) {
	$(".option-artikelstream-maxnum-second").show();
	$(".option-artikelstream-nextnum-second").show();
	$(".option-artikelstream-numfullwidth-second").show();
	$(".option-artikelstream-title-second").show();
	$(".option-artikelstream-title-secondcontinuelist").show();
    }
  }); 
  
  var startval =  $("#artikelstream-show-linktipps :selected").val();
  if (startval == 0) {
       $(".option-artikelstream-maxnum-linktipps").hide();
       $(".option-artikelstream-nextnum-linktipps").hide();
       $(".option-artikelstream-title-linktipps").hide();
       $(".option-artikelstream-title-linktippcontinuelist").hide();
  }
  $("#artikelstream-show-linktipps").change(function(){
    var thisval =  $("#artikelstream-show-linktipps :selected").val();
    var streammain =  $("#artikelstream-type :selected").val();
    if (thisval ==0) {	
       $(".option-artikelstream-maxnum-linktipps").hide();
       $(".option-artikelstream-nextnum-linktipps").hide();
       $(".option-artikelstream-title-linktipps").hide();
       $(".option-artikelstream-title-linktippcontinuelist").hide();
    } else if (streammain>1) {
       $(".option-artikelstream-maxnum-linktipps").show();
       $(".option-artikelstream-nextnum-linktipps").show();
       $(".option-artikelstream-title-linktipps").show();
       $(".option-artikelstream-title-linktippcontinuelist").show();
    }
  }); 
  

  
  var sidebar_plakatslider = $("#slider-defaultwerbeplakate:checked").val();
  if (sidebar_plakatslider==1) {
	 $(".option-plakate-src").show();   
	 $(".option-plakate-title").show();   
	 $(".option-plakate-url").show();   
	 $(".option-plakate-altadressen").show();   
    } else {
	 $(".option-plakate-src").hide();   
 	 $(".option-plakate-title").hide();   
	 $(".option-plakate-url").hide();   
	 $(".option-plakate-altadressen").hide();
  }
  $("#slider-defaultwerbeplakate").click(function(){
    var thisval =  $('#slider-defaultwerbeplakate:checked').val();
    if (thisval == 1) {	
	 $(".option-plakate-src").show();   
	 $(".option-plakate-title").show();   
	 $(".option-plakate-url").show();   
	 $(".option-plakate-altadressen").show();   
    } else {
	 $(".option-plakate-src").hide();   
 	 $(".option-plakate-title").hide();   
	 $(".option-plakate-url").hide();   
	 $(".option-plakate-altadressen").hide();
    }
   });  
 
});