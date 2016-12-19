<?php



/*
 * Hilfereiche Funktionen für die Custom Fields
 */

if ( ! function_exists( 'wphelper_form_textarea' ) ) :
    function wphelper_form_textarea($name= '', $prevalue = '', $labeltext = '', $cols=60, $rows=5, $howtotext = '') {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {
	    echo "<p>\n";
	    echo '	<label for="'.$name.'">';
	    echo $labeltext;
	    echo "</label></p>\n";
	    echo '	<textarea name="'.$name.'" id="'.$name.'" rows="'.$rows.'" cols="'.$cols.'">'.$prevalue.'</textarea>';

	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_textarea() - name or label is missing.', 'wphelper');
	}
    }
endif;
if ( ! function_exists( 'wphelper_form_wpeditor' ) ) :
    function wphelper_form_wpeditor($name= '', $prevalue = '', $labeltext = '', $howtotext = '', $small = true) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {
	    echo "<p>\n";
	    echo '	<label for="'.$name.'">';
	    echo $labeltext;
	    echo "</label></p>\n";
	    if ($small==true) {
		wp_editor( $prevalue, $name, array('teeny' => true, 'textarea_rows' => 5, 'media_buttons' => false) );
	    } else {
		wp_editor( $prevalue, $name );
	    }
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_wpeditor() - name or label is missing.', 'wphelper');
	}
    }
endif;
if ( ! function_exists( 'wphelper_form_text' ) ) :
    function wphelper_form_text($name= '', $prevalue = '', $labeltext = '', $howtotext = '', $placeholder='', $size = 0) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {
	    echo "<p>\n";
	    echo '	<label for="'.$name.'">';
	    echo $labeltext;
	    echo "</label><br />\n";
	     
	    echo '	<input type="text" ';
	   if (intval($size)>0) {
	       echo ' size="'.$size.'"';
	    } else {
		echo ' class="large-text"';
	    }
	    echo ' name="'.$name.'" id="'.$name.'" value="'.$prevalue.'"';
	    if (strlen(trim($placeholder))) {
		echo ' placeholder="'.$placeholder.'"';
	    }
	  
	    echo " />\n";
	    echo "</p>\n";
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_text() - name or label is missing.', 'wphelper');
	}
    }
endif;
if ( ! function_exists( 'wphelper_form_email' ) ) :
    function wphelper_form_email($name= '', $prevalue = '', $labeltext = '', $howtotext = '', $placeholder='', $size = 0) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {
	    echo "<p>\n";
	    echo '	<label for="'.$name.'">';
	    echo $labeltext;
	    echo "</label><br />\n";
	     
	    echo '	<input type="email" ';
	   if (intval($size)>0) {
	       echo ' size="'.$size.'"';
	    } else {
		echo ' class="large-text"';
	    }
	    echo ' name="'.$name.'" id="'.$name.'" value="'.$prevalue.'"';
	    if (strlen(trim($placeholder))) {
		echo ' placeholder="'.$placeholder.'"';
	    }
	  
	    echo " />\n";
	    echo "</p>\n";
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_email() - name or label is missing.', 'wphelper');
	}
    }
endif;
if ( ! function_exists( 'wphelper_form_number' ) ) :
    function wphelper_form_number($name= '', $prevalue = '', $labeltext = '', $howtotext = '', $min = 0, $max = 0, $step=1) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {
	    echo "<p>\n";
	    echo '	<label for="'.$name.'">';
	    echo $labeltext;
	    echo "</label><br />\n";
	     
	    echo '	<input type="number" ';
	   
	    echo 'name="'.$name.'" id="'.$name.'" value="'.$prevalue.'"';
	    if ($min>0) {
		echo ' min="'.$min.'"';
	    }
	    if ($max>0) {
		echo ' max="'.$max.'"';
	    }
	     if ($step>1) {
		echo ' step="'.$step.'"';
	    }
	  
	    echo " />\n";
	    echo "</p>\n";
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_number() - name or label is missing.', 'wphelper');
	}
    }
endif;

if ( ! function_exists( 'wphelper_form_url' ) ) :
    function wphelper_form_url($name= '', $prevalue = '', $labeltext = '', $howtotext = '', $placeholder='http://', $size = 0) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {
	    echo "<p>\n";
	    echo '	<label for="'.$name.'">';
	    echo $labeltext;
	    echo "</label><br />\n";
	    echo '	<input type="url" class="large-text" name="'.$name.'" id="'.$name.'" value="'.$prevalue.'"';
	    if (strlen(trim($placeholder))) {
		echo ' placeholder="'.$placeholder.'"';
	    }
	    if (intval($size)>0) {
		echo ' length="'.$size.'"';
	    }
	    echo " />\n";
	    echo "</p>\n";
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_url() - name or label is missing.', 'wphelper');
	}
    }
endif;    

if ( ! function_exists( 'wphelper_form_onoff' ) ) :
    function wphelper_form_onoff($name= '', $prevalue = 0, $labeltext = '',  $howtotext = '' ) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) { ?>
	    <div class="schalter">
		<select class="onoff" name="<?php echo $name; ?>" id="<?php echo $name; ?>">
		    <option value="0" <?php selected(0,$prevalue);?>>Aus</option>
		    <option value="1" <?php selected(1,$prevalue);?>>An</option>
		</select>
		<label for="<?php echo $name; ?>">
		    <?php echo $labeltext; ?>
		</label>
	    </div>
	    <?php 
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_onoff() - name or label is missing.', 'wphelper');
	}
    }
endif;    
    
if ( ! function_exists( 'wphelper_form_select' ) ) :
    function wphelper_form_select($name= '', $liste = array(), $prevalue = '', $labeltext = '',  $howtotext = '', $showempty=1, $emptytext = '' ) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	$emptytext = wphelper_san( $emptytext );

	if (is_array($liste) && !empty($name) && !empty($labeltext)) { ?>
	    <div class="liste">
		<p><label for="<?php echo $name; ?>">
		    <?php echo $labeltext; ?>
		    </label></p>
		<select name="<?php echo $name; ?>" id="<?php echo $name; ?>">
		<?php 
		if ($showempty==1) { 
		    echo '<option value="">';
		    if (!empty($emptytext)) {
			echo $emptytext;
		    } else {
			_e('No selection','wphelper');
		    }
		    echo '</option>';
		}

		foreach($liste as $entry => $value){  ?>
		    <option value="<?php echo $entry; ?>" <?php selected($entry,$prevalue);?>><?php echo $value; ?></option>
		<?php } ?>	
		</select>

	    </div>
	    <?php 
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_select() - array, name or label is missing.', 'wphelper');
	}
    }
endif;    
    
if ( ! function_exists( 'wphelper_form_multiselect' ) ) :  
    function wphelper_form_multiselect($name= '', $liste = array(), $prevalues = array(), $labeltext = '',  $howtotext = '', $showempty=1, $emptytext = '' ) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	$emptytext = wphelper_san( $emptytext );

	if (is_array($liste) && !empty($name) && !empty($labeltext)) { ?>
	    <div class="liste">
		<p><label for="<?php echo $name; ?>">
		    <?php echo $labeltext; ?>
		    </label></p>
		    <select size="5" multiple="1" name="<?php echo $name; ?>[]" id="<?php echo $name; ?>">
		<?php 
		if ($showempty==1) { 
		    echo '<option value="">';
		    if (!empty($emptytext)) {
			echo $emptytext;
		    } else {
			_e('No selection','wphelper');
		    }
		    echo '</option>';
		}

		foreach($liste as $entry => $value){  
		    echo '<option value="'.$entry.'"';
		    if (is_array($prevalues)) {
			foreach($prevalues as $pnum){
			    if ($entry==$pnum)
				echo ' selected="selected"';
			}
		    }
		    echo '>';		
		    echo $value;
		    echo '</option>';

		} ?>	
		</select>

	    </div>
	    <?php 
	    if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	} else {
	    echo __('Invalid call to wphelper_form_multiselect() - array, name or label is missing.', 'wphelper');
	}
    }
endif;    
   


if ( ! function_exists( 'wphelper_form_image' ) ) :
    function wphelper_form_image($name= '', $preimageid = 0, $labeltext = '',  $howtotext = '', $width=300, $height=200 ) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {
	    echo '<p><label for="'.$name.'">';
	    echo $labeltext;
	    echo "</label></p>\n";

	    echo '<div class="uploader">';
	    
	    $image = '';
	    $imagehtml = '';
	    if (isset($preimageid) && ($preimageid>0)) {
		$image = wp_get_attachment_image_src($preimageid, 'full'); 
		if (isset($image)) {
		    $imagehtml = '<img class="image_show_'.$name.'" src="'.$image[0].'" width="'.$width.'" height="'.$height.'" alt="">';
		}
	    }

	    echo '<div class="previewimage showimg_'.$name.'">';
	    if (!empty($imagehtml)) {  
		echo $imagehtml;
	    } 
	    echo "</div>\n"; ?>		

	    <input type="hidden" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo sanitize_key( $preimageid ) ; ?>" />
	    

	    <input class="button" name="image_button_<?php echo $name; ?>" id="image_button_<?php echo $name; ?>" value="<?php _e('Select image', 'wphelper'); ?>" />
	    <small><a href="#" class="image_remove_<?php echo $name; ?>"><?php _e( "Remove", 'wphelper' );?></a></small>
	    <br><p class="howto"><?php echo $howtotext; ?>	      
	    </p><script>
	    jQuery(document).ready(function() {
		jQuery('#image_button_<?php echo $name; ?>').click(function()  {
		    wp.media.editor.send.attachment = function(props, attachment) {
			jQuery('#<?php echo $name; ?>').val(attachment.id);
			htmlshow = "<img src=\""+attachment.url + "\" width=\"<?php echo $width;?>\" height=\"<?php echo $height;?>\">";  					   
			jQuery('.showimg_<?php echo $name; ?>').html(htmlshow);

		    }
		    wp.media.editor.open(this);
		    return false;
		});
	    });
	    jQuery(document).ready(function() {
		jQuery('.image_remove_<?php echo $name; ?>').click(function()   {
			jQuery('#<?php echo $name; ?>').val('');
			jQuery('.showimg_<?php echo $name; ?>').html('<?php _e('No image selected', 'wphelper'); ?>');
			return false;
		});
	    });
	   </script> 		    	    
	   </div>
	   <?php 
	
	} else {
	    echo __('Invalid call to wphelper_form_image() - name or label is missing.', 'wphelper');
	}
    }
 endif;
    


if ( ! function_exists( 'wphelper_form_link' ) ) :
    function wphelper_form_link($name= '', $pretitle ='', $preurl ='' , $labeltext = '',  $howtotext = '', $types = '' ) {
	$name = wphelper_san( $name );
	$labeltext = wphelper_san( $labeltext );
	if (!empty($name) && !empty($labeltext)) {    
	    wp_enqueue_script( 'wp-link' );
	    echo '<div class="linkeingabe">';
	    $rand = rand();
	    echo '<h2 class="label">'.$labeltext.'</h2>';
	     if (strlen(trim($howtotext))) {
		echo '<p class="howto">';
		echo $howtotext;
		echo "</p>\n";
	    }
	    echo '<div class="linkauswahl" id="container_'.$rand.'">';
	    echo "<p>\n";
	    echo '<label for="title_'.$rand.'_'.$name.'">'.__('Title','wphelper');   
	    echo "</label><br />\n";
	    echo '<input type="text" class="large-text" name="'.$name.'_title" id="title_'.$rand.'_'.$name.'" value="'.$pretitle.'" placeholder="'.__('Use title of linked page','wphelper').'">';
	    echo "</p>\n";	    
	    echo "<p>\n";
	    echo '<label for="url_'.$rand.'_'.$name.'">'.__('URL','wphelper');  
	    echo "</label><br />\n";
	    echo '<input type="url" class="large-text" name="'.$name.'_url" id="url_'.$rand.'_'.$name.'" value="'.$preurl.'" placeholder="https://">';
	    echo "</p>";
	    echo '<p><input class="button link_button_'.$name.'" name="link_button_'.$name.'" id="link_button_'.$name.'" type="button" value="'.__('Select link','wphelper').'"></p>';
	    echo "</div>\n";
	   
	    ?>
	   <script>	
	
		var _link_sideload = false; 
		var link_btn_<?php echo $name?> = (function($){
	 		    
		    var link_sideload = false; 
		    var link_val_container = $('#url_<?php echo $rand ?>_<?php echo $name ?>');
		    var title_val_container = $('#title_<?php echo $rand ?>_<?php echo $name ?>');
		    
		    function _init() {
			$('.link_button_<?php echo $name ?>').on('click', function (event) {
                            _addLinkListeners();
                            _link_sideload = false;
                            
                          
                            if ( typeof wpActiveEditor != 'undefined') {
                                wpLink.open();
                                wpLink.textarea = $(link_val_container);
                            } else {
                                window.wpActiveEditor = true;
                                _link_sideload = true;
                                wpLink.open();
                                wpLink.textarea = $(link_val_container);
                            }
                            return false;
                        });
		    }
		    function _addLinkListeners() {
			$('body').on('click', '#wp-link-submit', function(event) {
			    var linkAtts = wpLink.getAttrs();
			    $('#url_<?php echo $rand?>_<?php echo $name?>').val(linkAtts.href);
			    $('#title_<?php echo $rand?>_<?php echo $name?>').val(linkAtts.title);
			   
			    _removeLinkListeners();
			    return false;
			});
			$('body').on('click', '#wp-link-cancel', function(event) {
			    _removeLinkListeners();
			    return false;
			});
		    }



		    function _removeLinkListeners() {
			if(_link_sideload){
			    if ( typeof wpActiveEditor != 'undefined') {
				wpActiveEditor = undefined;
			    }
			}
			wpLink.close();
			wpLink.textarea = $('html');//focus on document
			title_val_container.focus();
			$('body').off('click', '#wp-link-submit');
			$('body').off('click', '#wp-link-cancel');
		    }
		    return {
			init:       _init,
		    };
		    })(jQuery);
	   
	    jQuery(document).ready(function($) {
	   
		 link_btn_<?php echo $name?>.init();
	    });
	  
	   </script> 		    	    
	   <?php   
	 echo "</div>\n";
	
	add_action( 'admin_footer-post-new.php', 'wphelper_wpLinkUpdate_getAttr', 9999 );
	add_action( 'admin_footer-post.php',     'wphelper_wpLinkUpdate_getAttr', 9999 );
	 
	} else {
	    echo __('Invalid call to wphelper_form_link() - name or label is missing.', 'wphelper');
	}
    }
 endif;
if ( ! function_exists( 'wphelper_wpLinkUpdate_getAttr' ) ) :  

function wphelper_wpLinkUpdate_getAttr() {
     ?>
    <script type="text/javascript">
        ( function( $ ) {
            var  inputs = {};
	    
            if ( typeof wpLink == 'undefined' )
                return;

            // Override the function
            wpLink.getAttrs= function () { 
		inputs.url = $( '#wp-link-url' );
		inputs.text = $( '#wp-link-text' );
		inputs.openInNewTab = $( '#wp-link-target' );
		return {
    		    title: $.trim( inputs.text.val() ),
                    href: $.trim( inputs.url.val() ),
                    target: inputs.openInNewTab.prop( 'checked' ) ? '_blank' : ''
               };
            };
        } )( jQuery );
    </script>
   <?php
}
endif;    

if ( ! function_exists( 'wphelper_save_standard' ) ) :  
    function wphelper_save_standard($name, &$val, $post_id, $type='text') {
	if (!empty($name) && !empty($post_id) ) {
	    
	    if ($type == 'url') {
		 $newval = ( isset( $val ) ? esc_url( $val ) : 0 );		
	    } elseif ($type == 'email') {
		 $newval = ( isset( $val ) ? sanitize_email( $val ) : 0 );	
            } elseif ($type == 'text') {
		 $newval = ( isset( $val ) ? sanitize_text_field( $val ) : 0 );	
	    } elseif ($type == 'textnohtml') {
	        $newval = ( isset( $val ) ? wp_strip_all_tags( $val ) : 0 );
            } elseif (($type == 'intval') || ($type == 'int')) {			
		 $newval =  ( isset( $val ) ? intval( $val ) : 0 );	    
	    } elseif ($type == 'textarea') {			
		 $newval =  ( isset( $val ) ? esc_textarea( $val ) : 0 );				 
	     } elseif ($type == 'wpeditor') {
		 $newval =  $val;			 
	    } else {
		 $newval = ( isset( $val ) ? sanitize_text_field( $val ) : 0 );
	    }
	    $oldval =  get_post_meta( $post_id, $name, true );	  
	    if (!empty($newval)) {
		update_post_meta( $post_id, $name, $newval );
	    } elseif ($oldval) {
		delete_post_meta( $post_id, $name, $oldval );	
	    } 

	    
	} else {
	    return false;
	}
    
    }

 endif;    



if ( ! function_exists( 'wphelper_san' ) ) :  
    function wphelper_san($s){
	return filter_var(trim($s), FILTER_SANITIZE_STRING);
    }
endif;    
