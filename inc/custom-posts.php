<?php
/*
 *  Custom Post Functionen zu Linktipps
 */


function piratenkleider_custom_post_linktipps() {    
	$labels = array(
		'name'               => __( 'Linktipps', 'piratenkleider' ),
		'singular_name'      => __( 'Linktipp', 'piratenkleider' ),
		
	);
	$args = array(
	    'labels'		=> $labels,
	    'description'	=> __( 'Erstellen und Verwalten von Leseempfehlungen und Linktipps', 'piratenkleider' ),
	    'public'		=> false,
	    'show_ui'		=> true,
	    'menu_position'	=> 8,
	    'supports'		=> array( 'title' ),
	    'exclude_from_search' => true,
	    'query_var'		=> true,
	    'rewrite'		=> array( 'slug' => 'linktipps','with_front' => FALSE), 
	    'capability_type'	=> 'post',
	    'hierarchical'	=> false,
	    'menu_icon'		=> '',
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

function linktipp_display ($linktipp, $addclass = '') {
    global $options;
    if (!isset($linktipp)) {
	return;
    }
 
    $post_id = isset( $linktipp->ID ) ? $linktipp->ID : 0;
    $title = get_the_title($linktipp); 
    $linktipp_url = get_post_meta( $post_id, 'linktipp_url', true );
    $linktipp_imgid = get_post_meta( $post_id, 'linktipp_imgid', true );
    $linktipp_image = get_post_meta( $post_id, 'linktipp_image', true );
    $linktipp_untertitel = get_post_meta( $post_id, 'linktipp_untertitel', true );
    $linktipp_text = get_post_meta( $post_id, 'linktipp_text', true );
    if (isset($linktipp_untertitel) && !isset($title)) {
	$title = $linktipp_untertitel;
	$linktipp_untertitel = '';
    } 
    $out = '';			 
    $out .= '<section class="p3-column linktipps '.$addclass.'" id="post-'.$post_id.'" >';
    $out .= "\n";
       if ($options['linktipps-titlepos']!=1) { 
	  $out .=  '<header class="post-title p3-cbox">';
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
	      if (($options['linktipps-linkpos']==0) || ($options['linktipps-linkpos']==3)) {  $out .= '</a>'; }
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
       $out .= '<div class="p3-column">';
	$out .= "\n";
	   $out .= '<article class="post-entry p3-cbox"><p>';
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
	      $out .= '<header class="post-title p3-cbox">';
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
	      if (($options['linktipps-linkpos']==0) || ($options['linktipps-linkpos']==3)) {  $out .= '</a>'; }
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
		$out .= '<footer class="linktipp-url"><a class="extern" href="'.$linktipp_url.'">'.$linktipp_url.'</a></footer>'; 

	    }

	$out .= "</div>\n"; 
    $out .= "</section>\n";
    return $out;
    
}

function linktipps_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'cat' => '',
		'num' => 5,
	), $atts ) );
	$num = sanitize_text_field($num);
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
			),
			'posts_per_page' => $num,
		);
	} else {
	    $args = array(
			'post_type' => 'linktipps',
			'posts_per_page' => $num,
	    );
	}
	
	$links = new WP_Query( $args );
		if( $links->have_posts() ) {
		    $out = '';
		    while ($links->have_posts() ) {
			$links->the_post();
			$out .= linktipp_display($links->post,'shortcode');

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



/* Visitenkarten / Personeninfos */


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Register Custom Post Type
function piratenkleider_person_post_type() {

	$labels = array(
		'name'                => _x( 'Personen', 'Informationen f&uuml;r Personenseiten und Visitenkarten', 'piratenkleider' ),
		'singular_name'       => _x( 'Person', 'Personeninformationen', 'piratenkleider' ),
		'menu_name'           => __( 'Personen', 'piratenkleider' ),
		'parent_item_colon'   => __( 'Parent Item:', 'piratenkleider' ),
		'all_items'           => __( 'Alle Personen', 'piratenkleider' ),
		'view_item'           => __( 'Person ansehen', 'piratenkleider' ),
		'add_new_item'        => __( 'Neue Person', 'piratenkleider' ),
		'add_new'             => __( 'Neu', 'piratenkleider' ),
		'edit_item'           => __( 'Bearbeiten', 'piratenkleider' ),
		'update_item'         => __( 'Aktualisieren', 'piratenkleider' ),
		'search_items'        => __( 'Person suchen', 'piratenkleider' ),
		'not_found'           => __( 'Person nicht gefunden', 'piratenkleider' ),
		'not_found_in_trash'  => __( 'Person nicht im Papierkorb gefunden', 'piratenkleider' ),
	);
	$args = array(
		'label'               => __( 'Person', 'piratenkleider' ),
		'description'	      => __( 'Erstellen und verwalten von Personeninformationen', 'piratenkleider' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'editor'),
		'hierarchical'        => false,
		'public'              => true,
		'menu_position'       => 7,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
	);
	register_post_type( 'person', $args );

}

// Hook into the 'init' action
add_action( 'init', 'piratenkleider_person_post_type', 0 );

function piratenkleider_taxonomies_person() {
	$labels = array();
	$args = array(
		'labels'	=> $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'person_category', 'person', $args );
}
add_action( 'init', 'piratenkleider_taxonomies_person', 0 );

/*
 * Metabox fuer weitere Personeninfo
 */


function piratenkleider_person_metabox() {
    add_meta_box(
        'person_metabox',
        __( 'Beschreibung der Person', 'piratenkleider' ),
        'person_metabox_content',
        'person',
        'normal',
        'high'
    );
}
function person_metabox_content( $post ) {
    global $defaultoptions;
    global $post;
    $academictitle = array(
	"Prof.", 
	"Dr."
    );
	wp_nonce_field( plugin_basename( __FILE__ ), 'person_metabox_content_nonce' );
	?>

        
        <p>
		<label for="person_first_name"><?php _e( "Vorname", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="person_first_name"
		       id="person_first_name" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_first_name', true ) ); ?>" size="15" />
	</p>
	<p>
		<label for="person_last_name"><?php _e( "Nachname", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="person_last_name"
		       id="person_last_name" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_last_name', true ) ); ?>" size="15" />
	</p>
        <p>
		<label for="person_academic"><?php _e( "Akademischer Titel", 'piratenkleider' ); ?>:</label>
		<br />
		<select name="person_academic" id="person_academic">
		    <option value=""></option>
		<?php
		    $current = esc_attr( get_post_meta( $post->ID, 'person_academic', true ) );
			 foreach($academictitle as $i) {   
                                        echo "\t\t\t\t";
                                        echo '<option value="'.$i.'"';
                                        if ( $i == $current ) {
                                            echo ' selected="selected"';
                                        }                                                                                                                                                                
                                        echo '>';
					echo $i;
                                        echo '</option>';                                                                                                                                                              
                                        echo "\n";                                            
                                    }  
		    ?>
		</select> 

	</p>	
        
        
        <p>
		<label for="person_shortdesc"><?php _e( "Kurzbeschreibung", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="person_shortdesc"
		       id="person_shortdesc" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_shortdesc', true ) ); ?>" size="70" />
	</p>
	<p>
	    <label for="person_bild"><?php _e( "Beitrags- oder Symbolbild (URL)", 'piratenkleider' ); ?>:</label>
	    <br />
	     
	    
		<?php
		 $person_bildid = get_post_meta( $post->ID, 'person_bildid', true );
		 $person_bild = get_post_meta( $post->ID, 'person_bild', true );
		
		 if (isset($person_bildid) && ($person_bildid>0)) {
		     $image_attributes = wp_get_attachment_image_src( $person_bildid, 'person-thumb' );
		     if (is_array($image_attributes)) {
			echo '<img id="person_bild-show" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'">';
			$person_bild = $image_attributes[0];
		     }
		     
		 } elseif (filter_var($person_bild, FILTER_VALIDATE_URL)) {
			echo '<img id="person_bild-show" src="'.$person_bild.'" alt="" style="width: '.$defaultoptions['person-thumbnail_width'].'px; height: auto;">';
		 } else {
			echo '<img id="person_bild-show" src="'.$defaultoptions['src-person_bild_default'].'" alt="" style="width: '.$defaultoptions['person-thumbnail_width'].'px; height: auto;">';			
		 }
		 echo '<br /><span class="custom_default_image" style="display:none">'.$defaultoptions['src-person_bild_default'].'</span>';  
		?>
	     <input type="text" name="person_bild" size="50" id="person_bild" 
		    value="<?php echo $person_bild; ?>" />
	     <input type="hidden" name="person_bildid" id="person_bildid" 
		    value="<?php echo $person_bildid; ?>" />	    
	     
	     
	     <input type="button" id="person_bild-button" class="button" value="<?php _e( "Bild ausw&auml;hlen oder hochladen", 'piratenkleider' ); ?>" />
	    <small> <a href="#" class="custom_clear_image_button">Bild entfernen</a></small> 
	</p>
	
	<p>
		<label for="person_email"><?php _e( "E-Mail-Adresse", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_email"
			id="person_email" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_email', true ) ); ?>" size="30" />
	</p>
	<p>
		<label for="person_url"><?php _e( "Homepage/Blog (URL)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_url"
			id="person_url" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_url', true ) ); ?>" size="30" />
	</p>
	
	<p>
		<label for="person_wiki"><?php _e( "Wiki Benutzerseite (Benutzername)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_wiki"
			id="person_wiki" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_wiki', true ) ); ?>" size="10" />
	</p>
	
	<p>
		<label for="person_twitter"><?php _e( "Twitter (Account)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_twitter"
			id="person_twitter" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_twitter', true ) ); ?>" size="10" />

	</p>
	<p>
		<label for="person_facebook"><?php _e( "Facebook (URL)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_facebook"
			id="person_facebook" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_facebook', true ) ); ?>" size="30" />

	</p>
	<p>
		<label for="person_google"><?php _e( "Google+ (URL)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_google"
			id="person_google" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_google', true ) ); ?>" size="30" />

	</p>
	<!--
	<p>
		<label for="person_kalender"><?php _e( "Kalender (URL)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_kalender"
			id="person_kalender" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_kalender', true ) ); ?>" size="30" />

	</p>
	<p>
		<label for="person_newsfeed"><?php _e( "Newsfeed aus Blog oder CMS (RSS URL)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_newsfeed"
			id="person_newsfeed" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_newsfeed', true ) ); ?>" size="30" />
	</p>
        -->

	<?php

}
add_action( 'add_meta_boxes', 'piratenkleider_person_metabox' );


function person_metabox_save( $post_id ) {
    global $options;
    if (  'person'!= get_post_type()  ) {
	return;
    }


	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
	return;

	if ( !wp_verify_nonce( $_POST['person_metabox_content_nonce'], plugin_basename( __FILE__ ) ) )
	return;

	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}

	
	$imgid = intval($_POST['person_bildid']);
	if ($imgid) {
	    update_post_meta( $post_id, 'person_bildid', $imgid );
	} else {
	    $urlimg = $_POST['person_bild'];
	    if (filter_var($urlimg, FILTER_VALIDATE_URL)) {
		update_post_meta( $post_id, 'person_bild', $urlimg );
	    }
	}
	
		     
			     
	$url = $_POST['person_url'];
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	    update_post_meta( $post_id, 'person_url', $url );
	}
	$email = $_POST['person_email'];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    update_post_meta( $post_id, 'person_email', $email );
	}
	$url = $_POST['person_facebook'];
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	    update_post_meta( $post_id, 'person_facebook', $url );
	}
	$url = $_POST['person_google'];
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	    update_post_meta( $post_id, 'person_google', $url );
	}
	$url = $_POST['person_kalender'];
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	    update_post_meta( $post_id, 'person_kalender', $url );
	}
	$url = $_POST['person_newsfeed'];
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	    update_post_meta( $post_id, 'person_newsfeed', $url );
	}
	$url = $_POST['person_wiki'];
	if (filter_var($url, FILTER_VALIDATE_URL)) {
	    update_post_meta( $post_id, 'person_wiki', $url );
	} else {
	    update_post_meta( $post_id, 'person_wiki',  $url );
	}
	

	if( isset( $_POST[ 'person_twitter' ] ) ) {
	    update_post_meta( $post_id, 'person_twitter',  sanitize_text_field($_POST[ 'person_twitter' ]) );
	}

	
	if( isset( $_POST[ 'person_shortdesc' ] ) ) {
	    update_post_meta( $post_id, 'person_shortdesc',  $_POST[ 'person_shortdesc' ] );
	}
	if( isset( $_POST[ 'person_last_name' ] ) ) {
	    update_post_meta( $post_id, 'person_last_name', sanitize_text_field( $_POST[ 'person_last_name' ] ) );
	}
        if( isset( $_POST[ 'person_first_name' ] ) ) {
	    update_post_meta( $post_id, 'person_first_name', sanitize_text_field( $_POST[ 'person_first_name' ] ) );
	}
        if( isset( $_POST[ 'person_academic' ] ) ) {
	    update_post_meta( $post_id, 'person_academic', sanitize_text_field( $_POST[ 'person_academic' ] ) );
	}


}
add_action( 'save_post', 'person_metabox_save' );


function person_metabox_updated_messages( $messages ) {
	global $post, $post_ID;
	$messages['person'] = array(
		0 => '',
		1 => __('Die Personeninformationen wurden aktualisiert. ', 'piratenkleider'),
		2 => __('Die Personeninformationen wurden aktualisiert.', 'piratenkleider'),
		3 => __('Personeninformationen wurden gel&ouml;scht.', 'piratenkleider'),
		6 => __('Personeninformationen wurden ver&ouml;ffentlicht.', 'piratenkleider'),
		7 => __('Personeninformationen wurden gespeichert.', 'piratenkleider'),
			);
	return $messages;
}
add_filter( 'post_updated_messages', 'person_metabox_updated_messages' );





function piratenkleider_display_person ($post_id = 0, $format = 'full') {
    global $options;
    

    $person_shortdesc = get_post_meta( $post_id, 'person_shortdesc', true );
    $person_text = apply_filters('the_content', get_post_field('post_content', $post_id));
    $person_last_name = get_post_meta( $post_id, 'person_last_name', true );
    $person_first_name = get_post_meta( $post_id, 'person_first_name', true );
    $person_academic = get_post_meta( $post_id, 'person_academic', true );
    $fullname = $person_academic.' '.$person_first_name.' '.$person_last_name;
    $person_url = get_post_meta( $post_id, 'person_url', true );
    $person_email = get_post_meta( $post_id, 'person_email', true );
    $person_facebook = get_post_meta( $post_id, 'person_facebook', true );
    $person_twitter = get_post_meta( $post_id, 'person_twitter', true );
    $person_wiki = get_post_meta( $post_id, 'person_wiki', true );
    $person_google = get_post_meta( $post_id, 'person_google', true );
   // $person_kalender = get_post_meta( $post_id, 'person_kalender', true );
  //  $person_newsfeed = get_post_meta( $post_id, 'person_newsfeed', true );
    
    
    $person_imgid = get_post_meta( $post_id, 'person_bildid', true );
    $person_image = get_post_meta( $post_id, 'person_bild', true );
    $bildfullwidth = '';
    $bildsmallwidth = '';
    if ((isset($person_imgid) && ($person_imgid>0)) || (isset($person_image) && (strlen($person_image)))) {
	$personenbildfull = '';
	$personenbildsmall = '';
	$alttext = $fullname;
	$coprightcap = '';
	if (isset($person_imgid) && ($person_imgid>0)) {
	   $image_attributes = wp_get_attachment_image_src( $person_imgid, 'person-thumb' );
	   $image_attributessmall = wp_get_attachment_image_src( $person_imgid, 'post-thumbnails' );

	   if (isset($image_attributes["credits"]) && (strlen($image_attributes["credits"])>1)) {
	       $alttext .= "\n".' ('.$image_attributes["credits"].')';  
	       $coprightcap .= '('.$image_attributes["credits"].')';  
	   } 
	   if (is_array($image_attributes)) {
	      $personenbildfull = '<img src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.$alttext.'" class="size-full">';
	      $personenbildsmall = '<img src="'.$image_attributessmall[0].'" width="'.$image_attributessmall[1].'" height="'.$image_attributessmall[2].'" alt="'.$alttext.'" class="size-full">';
	   }

	} elseif (isset($person_image)) {
	    $personenbildfull = '<img src="'.$person_image.'" alt="'.$alttext.'" class="size-full" height="'.$options['person-thumbnail_height'].'" style="width: auto;">'; 
	    $personenbildsmall = '<img src="'.$person_image.'" alt="'.$alttext.'" class="size-full" height="150" style="width: auto;">'; 
	}          

	$bildfullwidth = '<div style="width: 210px" class="wp-caption alignright">';
	$bildfullwidth .= $personenbildfull;
	$bildfullwidth .= '<p class="wp-caption-text">'.$fullname;
	    if (isset($coprightcap) && strlen($coprightcap)>1) {
		$bildfullwidth .= '<br>('.$coprightcap.')';
	    }
	$bildfullwidth .= '</p></div>';
	
	
	$bildsmallwidth = '<div style="width: 160px" class="wp-caption alignleft">';
	$bildsmallwidth .= $personenbildsmall;
	$bildsmallwidth .= '<p class="wp-caption-text">'.$fullname;
	   if (isset($coprightcap) && strlen($coprightcap)>1) {
		$bildsmallwidth .= '<br>('.$coprightcap.')';
	    }
	$bildsmallwidth .= '</p></div>';
	
    }
	    
		   
    $out = '';

	$kontaktdata = '';
	if (isset($person_url) || isset($person_email) 
		|| isset($person_facebook) || isset($person_twitter)
		|| isset($person_wiki) || isset($person_google)) {
	    $kontaktdata .= '<h3 class="contact">'.__('Kontakt','piratenkleider').'</h3>';
	    $kontaktdata .= "<ul class=\"contact\">\n";
	    if (isset($person_email) && strlen($person_email)>1) {
		$kontaktdata .= "<li class=\"email\"><span>E-Mail: </span><a href=\"mailto:".$person_email."\">".$person_email."</a></li>\n";
	    }
	    if (isset($person_url) && strlen($person_url)>1) {
		$kontaktdata .= "<li class=\"homepage\"><span>Web: </span><a href=\"".$person_url."\">".$person_url."</a></li>\n";
	    }
	    if (isset($person_twitter) && strlen($person_twitter)>1) {		
		if (filter_var($person_twitter, FILTER_VALIDATE_URL)) {
		    $url = $person_twitter; 
		} else {
		    $url = 'https://twitter.com/'.$person_twitter; 
		}		
		$kontaktdata .= "<li class=\"twitter\"><span>Twitter: </span><a href=\"".$url."\">".$person_twitter."</a></li>\n";
	    }
	     if (isset($person_facebook) && strlen($person_facebook)>1) {
		$kontaktdata .= "<li class=\"facebook\"><span>Facebook: </span><a href=\"".$person_facebook."\">".$person_facebook."</a></li>\n";
	    }
	    if (isset($person_google) && strlen($person_google)>1) {
		$kontaktdata .= "<li class=\"google\"><span>Google: </span><a href=\"".$person_google."\">".$person_google."</a></li>\n";
	    } 
	    if (isset($person_wiki) && strlen($person_wiki)>1) {
		if (filter_var($person_wiki, FILTER_VALIDATE_URL)) {
		    $url = $person_wiki; 
		} else {
		    $url = $options['url-wiki'].'/User:'.$person_wiki; 
		}
		$kontaktdata .= "<li class=\"wiki\"><span>Wiki: </span><a href=\"".$url."\">".$person_wiki."</a></li>\n";
	    } 
	    $kontaktdata .= "</ul>\n";
	   
	}
	
	if ($format== 'full') {
	    $out .= $bildfullwidth."\n";
	    $out .= "<div class=\"textinfo\">\n";
	    $out .= '<h3 class="about">'.__('Über','piratenkleider').' '.$fullname.'</h3>';
	    $out .= '<p>'.$person_shortdesc."</p>\n";
	    $out .= $kontaktdata;
	    $out .= $person_text;
	    $out .= "</div>\n";
	} elseif ($format== 'small') {
	    $out .=  $bildsmallwidth;
	    $out .= "<div class=\"textinfo\">\n";
	    $out .= '<h3 class="about">'.__('Über','piratenkleider').' '.$fullname.'</h3>';
	    $out .= '<p>'.$person_shortdesc."</p>\n";
	    $out .= $kontaktdata;
	    $out .= "</div>\n";
	} elseif ($format== 'sitebar') {
	     $out .=  $bildsmallwidth;
	     $out .= $kontaktdata;
	} elseif ($format== 'table') {
	     $out .= "<tr>";
	     $out .= "<td>";
	     $out .=  $bildsmallwidth;
	     $out .= "</td>";
	     $out .= "<td>";
	     $out .= '<h3>'.$fullname.'</h3>';
	     $out .= $kontaktdata;
	     $out .= '<p>'.$person_shortdesc."</p>\n";
	     $out .= "</td>";
	     $out .= "</tr>";     
	} elseif ($format== 'bigtable') {
	     $out .= "<tr>";
	     $out .= "<td>";
	     $out .=  $bildfullwidth;
	     $out .= "</td>";
	     $out .= "<td>";
	     $out .= '<h3>'.$fullname.'</h3>';
	     $out .= $kontaktdata;
	     $out .= '<p>'.$person_shortdesc."</p>\n";
      	     $out .= $person_text;	    
	     $out .= "</td>";
	     $out .= "</tr>";
	} else {
	    $out .=  $bildsmallwidth;
	    $out .= "<div class=\"textinfo\">\n";
	    $out .= '<h3 class="about">'.__('Über','piratenkleider').' '.$fullname.'</h3>';
	    $out .= $person_shortdesc."\n";
	    $out .= $kontaktdata;
	    $out .= "</div>\n";
	}

    return $out;
}

/*
 * Shortcode CPT Person
 */


function person_shortcode( $atts ) {
    global $options;

	extract( shortcode_atts( array(
		'cat' => '',
	        'name' => '',
		'num' => 30,
		'id'	=> '',
		'format'    => 'table',
		'order'	    => 'ASC',
		'showautor' => 1,
		'offset'	=> 0,
	), $atts ) );
	$single = 0;
	$cat = sanitize_text_field($cat);
	$name = sanitize_text_field($name);
	$order =   strtolower(sanitize_text_field($order));
	$offset = intval($offset);
	
	if ($order != 'desc') {
		$order='ASC';
	} else {
	    $order='DESC';  
	}
	$format = sanitize_text_field($format);
	$showautor = sanitize_text_field($showautor);
	if ((isset($id)) && ( strlen(trim($id))>0)) {
	    $args = array(
			'post_type' => 'person',
			'p' => $id
		);
	    $single = 1;
	} elseif ((isset($name)) && ( strlen(trim($name))>0)) {    
	      $args = array(
			'post_type' => 'person',
			'meta_query' => array(
			    array(
				'key' => 'person_last_name',
				'value' => $name,
				'compare' => 'LIKE',
			    )
			)
		);
	    $single = 1;
	} elseif ((isset($cat)) && ( strlen(trim($cat))>0)) {
	    $args = array(
			'post_type' => 'person',
			'tax_query' => array(
				array(
					'taxonomy' => 'person_category',
					'field' => 'slug',
					'terms' => $cat
				)
			),
			'order' => $order,
			'meta_key' => 'person_last_name',
			'orderby' => 'meta_value',
			'posts_per_page' => $num,
			'offset'    => $offset
		);

	} else {
	    $args = array(
		    'post_type' => 'person',
		    'order' => $order,
		    'meta_key' => 'person_last_name',
		    'orderby' => 'meta_value',
		    'posts_per_page' => $num,
		    'offset'    => $offset
			
	    );
	}
	$person = new WP_Query( $args );
		if( $person->have_posts() ) {
		    $out = '';
		    if ((isset($format) && ($format=='table') && ($single==0)) 
	  	       || (isset($format) && ($format=='bigtable') && ($single==0))) 
			{
			 $out .= ' <table class="person">';
		    } else {
			 $out .= ' <div class="person">';
		    }

		    while ($person->have_posts() ) {
			    $person->the_post();	   
			    $post_id = $person->post->ID;
			    if (isset($id) && isset($format) &&($format=='short')) {
				    $out .= piratenkleider_display_person($post_id, 'short');
			    } elseif (isset($format) && ($format=='table') && ($single==0)) {
				    $out .= piratenkleider_display_person($post_id, 'table');
			    } elseif (isset($format) && ($format=='bigtable') && ($single==0)) {
				    $out .= piratenkleider_display_person($post_id, 'bigtable');
		            } else {
				     $out .= piratenkleider_display_person($post_id, 'full');
			    }
			}
			if (isset($format) && ($format=='table') && ($single==0)) {
				$out .= '</table>';
			} else {
			    $out .= '</div>';
			}


		    wp_reset_postdata();

		} else {
			$out = '<section class="shortcode person"><p>';
			$out .= __('Es konnten keine Personeninformationen gefunden werden.', 'piratenkleider');
			$out .= "</p></section>\n";
		}

	return $out;
}
add_shortcode( 'person', 'person_shortcode' );

?>


