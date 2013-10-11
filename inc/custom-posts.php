<?php
/*
 *  Custom Post Functions
 */


function piratenkleider_custom_post_linktipps() {
    global $defaultoptions;
    
	$labels = array(
		'name'               => __( 'Linktipps', 'piratenkleider' ),
		'singular_name'      => __( 'Linktipp', 'piratenkleider' ),
		
	);
	$args = array(
		'labels'        => $labels,
		'description'   => __( 'Erstellen und Verwalten von Leseempfehlungen und Linktipps', 'piratenkleider' ),
		'public'        => true,
		'menu_position' => 7,
		'supports'      => array( 'title' ),
		'has_archive'   => true,	
		'exclude_from_search' => true,
		'query_var' => true,
//		'menu_icon' => get_stylesheet_directory_uri() . '/images/super-duper.png',
	);
	register_post_type( 'linktipps', $args );		
}
add_action( 'init', 'piratenkleider_custom_post_linktipps' );


function piratenkleider_taxonomies_linktipps() {
	$labels = array();
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'rewrite' => array('slug' => 'linktipps' )
	);
	register_taxonomy( 'linktipp_category', 'linktipps', $args );
}
add_action( 'init', 'piratenkleider_taxonomies_linktipps', 0 );

function piratenkleider_linktipp_metabox() {
    add_meta_box( 
        'linktipp_metabox',
        __( 'Kurzbeschreibung und Zieladresse', 'piratenkleider' ),
        'linktipp_metabox_content',
        'linktipps',
        'normal',
        'high'
    );
}
function linktipp_metabox_content( $post ) {
    global $defaultoptions;
    
	wp_nonce_field( plugin_basename( __FILE__ ), 'linktipp_metabox_content_nonce' );
	?>
	
	
	<p>
		<label for="linktipp_url"><?php _e( "Geben Sie hier die Webadresse (URL) ein, zu der die Leseempfehlung verweisen soll", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="linktipp_url"
		       id="linktipp_url" value="<?php echo esc_attr( get_post_meta( $post->ID, 'linktipp_url', true ) ); ?>" size="30" />
	</p>
	<p>
		<label for="linktipp_text"><?php _e( "Kurzbeschreibung (Optional; Mindestens Kurzbeschreibung oder Beitragsbild m&uuml;ssen vorhanden sein)", 'piratenkleider' ); ?>:</label>
		<br />
		<textarea class="widefat" name="linktipp_text" cols="70" rows="5" id="linktipp_text" /><?php echo esc_attr( get_post_meta( $post->ID, 'linktipp_text', true ) ); ?></textarea>
	</p>
	<p>
	    <label for="linktipp_image"><?php _e( "Beitrags- oder Symbolbild (URL)", 'piratenkleider' ); ?>:</label>
	    <br />
	     
	    
		<?php
		    $bild = esc_attr( get_post_meta( $post->ID, 'linktipp_image', true ) );
		    if (filter_var($bild, FILTER_VALIDATE_URL)) {
			echo '<img id="linktipp_image-show" src="'.$bild.'" alt="" style="width: '.$defaultoptions['linktipp-thumbnail_width'].'px; height: auto;">';
		    } else {
			echo '<img id="linktipp_image-show" src="'.$defaultoptions['src-linktipp-thumbnail_default'].'" alt="" style="width: '.$defaultoptions['linktipp-thumbnail_width'].'px; height: auto;">';			
		    }
		    echo '<br /><span class="custom_default_image" style="display:none">'.$defaultoptions['src-linktipp-thumbnail_default'].'</span>';  
		?>
	     <input type="text" name="linktipp_image" size="50" id="linktipp_image" value="<?php echo esc_attr( get_post_meta( $post->ID, 'linktipp_image', true ) ); ?>" />
	    <input type="button" id="linktipp_image-button" class="button" value="<?php _e( "Bild ausw&auml;hlen oder hochladen", 'piratenkleider' ); ?>" />
	    <small> <a href="#" class="custom_clear_image_button">Bild entfernen</a></small> 
	</p>
	
	<p>
		<label for="linktipp_untertitel"><?php _e( "Optionaler Untertitel", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="linktipp_untertitel"
		       id="linktipp_untertitel" value="<?php echo esc_attr( get_post_meta( $post->ID, 'linktipp_untertitel', true ) ); ?>" size="30" />
	</p>
	
	<?php 
	
}
add_action( 'add_meta_boxes', 'piratenkleider_linktipp_metabox' );


function linktipp_metabox_save( $post_id ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	return;

	if ( !wp_verify_nonce( $_POST['linktipp_metabox_content_nonce'], plugin_basename( __FILE__ ) ) )
	return;

	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}
	
	$url = $_POST['linktipp_url'];
	if (!filter_var($url, FILTER_VALIDATE_URL)) {
	    return;
	}
	update_post_meta( $post_id, 'linktipp_url', $url );
	
	$urlimg = $_POST['linktipp_image'];
	if (!filter_var($urlimg, FILTER_VALIDATE_URL)) {
	    return;
	}
	update_post_meta( $post_id, 'linktipp_image', $urlimg );
	
	if( isset( $_POST[ 'linktipp_text' ] ) ) {
	    update_post_meta( $post_id, 'linktipp_text', sanitize_text_field( $_POST[ 'linktipp_text' ] ) );
	}
	if( isset( $_POST[ 'linktipp_untertitel' ] ) ) {
	    update_post_meta( $post_id, 'linktipp_untertitel', sanitize_text_field( $_POST[ 'linktipp_untertitel' ] ) );
	}
    
}
add_action( 'save_post', 'linktipp_metabox_save' );



function linktipp_metabox_updated_messages( $messages ) {
	global $post, $post_ID;
	$messages['linktipps'] = array(
		0 => '', 
		1 => __('Die Leseempfehlung wurde aktualisiert. ', 'piratenkleider'),
		2 => __('Die Leseempfehlung wurde aktualisiert.', 'piratenkleider'),
		3 => __('Leseempfehlung wurde gel&ouml;scht.', 'piratenkleider'),
		6 => __('Leseempfehlung wurde ver&ouml;ffentlicht.', 'piratenkleider'), 
		7 => __('Leseempfehlung wurde gespeichert.', 'piratenkleider'),
			);
	return $messages;
}
add_filter( 'post_updated_messages', 'linktipp_metabox_updated_messages' );


?>
