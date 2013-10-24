<?php
/*
 *  Custom Post Functionen zu Linktipps
 */


function piratenkleider_custom_post_linktipps() {
    global $defaultoptions;
    
	$labels = array(
		'name'               => __( 'Linktipps', 'piratenkleider' ),
		'singular_name'      => __( 'Linktipp', 'piratenkleider' ),
		
	);
	$args = array(
	    'labels'		=> $labels,
	    'description'	=> __( 'Erstellen und Verwalten von Leseempfehlungen und Linktipps', 'piratenkleider' ),
	    'public'		=> false,
	    'show_ui'		=> true,
	    'menu_position'	=> 7,
	    'supports'		=> array( 'title' ),
	 //   'has_archive'	=> true,	
	    'exclude_from_search' => true,
	    'query_var'		=> true,
	    'rewrite'		=> array( 'slug' => 'linktipps','with_front' => FALSE), 
	    'capability_type'	=> 'post',
	    'hierarchical'	=> false,
	//    'taxonomies'	=> false,
	    'menu_icon'		=> get_stylesheet_directory_uri() . '/images/icon-internet.png',
	);
	register_post_type( 'linktipps', $args );		
}
add_action( 'init', 'piratenkleider_custom_post_linktipps' );


function piratenkleider_taxonomies_linktipps() {
	$labels = array();
	$args = array(
		'labels'	=> $labels,
		'hierarchical'	=> true,
		'rewrite'	=> false,
	);
	register_taxonomy( 'linktipp_category', 'linktipps', $args );
}
add_action( 'init', 'piratenkleider_taxonomies_linktipps' );

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
    global $post;
 
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
		 $linktipp_imgid = get_post_meta( $post->ID, 'linktipp_imgid', true );
		 $linktipp_image = get_post_meta( $post->ID, 'linktipp_image', true );
		
		 if (isset($linktipp_imgid) && ($linktipp_imgid>0)) {
		     $image_attributes = wp_get_attachment_image_src( $linktipp_imgid, 'linktipp-thumb' );
		     if (is_array($image_attributes)) {
			echo '<img id="linktipp_image-show" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'">';
			$linktipp_image = $image_attributes[0];
		     }
		     
		 } elseif (filter_var($linktipp_image, FILTER_VALIDATE_URL)) {
			echo '<img id="linktipp_image-show" src="'.$linktipp_image.'" alt="" style="width: '.$defaultoptions['linktipp-thumbnail_width'].'px; height: auto;">';
		 } else {
			echo '<img id="linktipp_image-show" src="'.$defaultoptions['src-linktipp-thumbnail_default'].'" alt="" style="width: '.$defaultoptions['linktipp-thumbnail_width'].'px; height: auto;">';			
		 }
		 echo '<br /><span class="custom_default_image" style="display:none">'.$defaultoptions['src-linktipp-thumbnail_default'].'</span>';  
		?>
	     <input type="text" name="linktipp_image" size="50" id="linktipp_image" 
		    value="<?php echo $linktipp_image; ?>" />
	     <input type="hidden" name="linktipp_imgid" id="linktipp_imgid" 
		    value="<?php echo $linktipp_imgid; ?>" />	    
	     
	     
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
    if (  'linktipps'!= get_post_type()  ) {
	return;
    }

	
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
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	    update_post_meta( $post_id, 'linktipp_url', $url );
	}
	
	
	$imgid = intval($_POST['linktipp_imgid']);
	if ($imgid) {
	    update_post_meta( $post_id, 'linktipp_imgid', $imgid );
	} else {
	    $urlimg = $_POST['linktipp_image'];
	    if (filter_var($urlimg, FILTER_VALIDATE_URL)) {
		update_post_meta( $post_id, 'linktipp_image', $urlimg );
	    }
	}

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

// [bartag foo="foo-value"]
function linktipps_shortcode( $atts ) {
    global $options;
	extract( shortcode_atts( array(
		'cat' => '',
		'num' => 5,
	), $atts ) );
	
	$cat = sanitize_text_field($cat);
	if ((isset($cat)) && ( strlen(trim($cat))>0)) {
	    $args = array(
			'post_type' => 'linktipps',
			'tax_query' => array(
				array(
					'taxonomy' => 'linktipp_category',
					'field' => 'slug',
					'terms' => $cat
				    )
			)
		);
	} else {
	    $args = array(
			'post_type' => 'linktipps'
	    );
	}
	
	$links = new WP_Query( $args );
		if( $links->have_posts() ) {
		    $i=0;
		    $out = '';
		    while ($links->have_posts() && ($i<$num) ) {
			$links->the_post();
			$i++;
	
			    $post_id = $links->post->ID;
			    $title = get_the_title(); 
			    $linktipp_url = get_post_meta( $post_id, 'linktipp_url', true );
			    $linktipp_imgid = get_post_meta( $post_id, 'linktipp_imgid', true );
			    $linktipp_image = get_post_meta( $post_id, 'linktipp_image', true );
			    $linktipp_untertitel = get_post_meta( $post_id, 'linktipp_untertitel', true );
			    $linktipp_text = get_post_meta( $post_id, 'linktipp_text', true );
			  if (isset($linktipp_untertitel) && !isset($title)) {
			      $title = $linktipp_untertitel;
			      $linktipp_untertitel = '';
			  } 
			 
			      $out .= '<section class="shortcode ym-column linktipps" id="post-'.$post_id.'" >';
			      $out .= "\n";
				 if ($options['linktipps-titlepos']!=1) { 
				    $out .=  '<header class="post-title ym-cbox">';
					if (mb_strlen(trim($linktipp_untertitel))>1) {
					    $out .= '<hgroup>';
					}
					if (($options['linktipps-subtitlepos']==0) && (mb_strlen(trim($linktipp_untertitel))>1)) {
					    $out .= '<h3 class="subtitle">'.$linktipp_untertitel.'</h3>';
					}

				       $out .= '<h2>';   
				       if (($options['linktipps-linkpos']==0) || ($options['linktipps-linkpos']==3)) {	
					    $out .= '<a href="'.$linktipp_url.'" rel="bookmark">';
					}    
					$out .=  $title;
					if (($options['linktipps-linkpos']==0) || ($options['linktipps-linkpos']==3)) { echo '</a>'; }
					$out .= '</h2>';
					if (($options['linktipps-subtitlepos']==1) && (mb_strlen(trim($linktipp_untertitel))>1)) { 
					    $out .= '<h3 class="subtitle">'.$linktipp_untertitel.'</h3>';

					}
					if (mb_strlen(trim($linktipp_untertitel))>1) {
					    $out .= '</hgroup>';
					}
				    $out .= '</header>';  
				     $out .= "\n";
				 } 
				 $out .= '<div class="ym-column">';
				  $out .= "\n";
				     $out .= '<article class="post-entry ym-cbox"><p>';
				     $out .= "\n";
					 if ($options['linktipps-linkpos']==1) {    
					     $out .= '<a href="'.$linktipp_url.'">';
					 }

					 if (isset($linktipp_imgid) && ($linktipp_imgid>0)) {
					     $image_attributes = wp_get_attachment_image_src( $linktipp_imgid, 'linktipp-thumb' );
					     if (is_array($image_attributes)) {
						$out .= '<img src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.$linktipp_text.'">';
					     }
					 } elseif (isset($linktipp_image)) {
					     $out .= '<img src="'.$linktipp_image.'" alt="">'; 
					 }                 		
					 if ($options['linktipps-linkpos']==1) {    
					     $out .= '</a>';
					 }
					if (isset($linktipp_text)) {
					     $out .=  $linktipp_text;
					}     
				     $out .= '</p>';
				     $out .= "</article>\n"; 

				     if ($options['linktipps-titlepos']==1) { 
					$out .= '<header class="post-title ym-cbox">';
					if (str_len(trim($linktipp_untertitel))>1) {
					    $out .= '<hgroup>';
					}
					if (($options['linktipps-subtitlepos']==0) && (str_len(trim($linktipp_untertitel))>1)) {
					    $out .= '<h3 class="subtitle">'.$linktipp_untertitel.'</h3>';
					}
					$out .= '<h2>';   
					if (($options['linktipps-linkpos']==0) || ($options['linktipps-linkpos']==3)) { 	
					    $out .= '<a href="'.$linktipp_url.'" rel="bookmark">';
					}    
					$out .=  $title;
					if (($options['linktipps-linkpos']==0) || ($options['linktipps-linkpos']==3)) { echo '</a>'; }
					$out .= '</h2>';
					if (($options['linktipps-subtitlepos']==1) && (str_len(trim($linktipp_untertitel))>1)) {
					    $out .= '<h3 class="subtitle">'.$linktipp_untertitel.'</h3>';
					}
					if (str_len(trim($linktipp_untertitel))>1) {
					    $out .= '</hgroup>';
					}
					$out .= '</header>'; 
					 $out .= "\n";
				      }
				      if (($options['linktipps-linkpos']==2) || ($options['linktipps-linkpos']==3)) { 
					  $out .= '<footer class="linktipp-url"><a href="'.$linktipp_url.'">'.$linktipp_url.'</a></footer>'; 

				      }

				  $out .= "</div>\n"; 
			      $out .= "</section>\n";
				
	  
		    }
		    wp_reset_postdata();
	
		} else {
			$out = '<section class="shortcode linktipps"><p>';
			$out .= __('Es konnten keine Leseempfehlungen gefunden werden.', 'piratenkleider');
			$out .= "</p></section>\n";
		}
	
	return $out;
}
add_shortcode( 'linktipps', 'linktipps_shortcode' );

?>
