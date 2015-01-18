<?php
/*
 *  Custom Post Functionen zu Linktipps
 */


function piratenkleider_custom_post_linktipps() {    
	$labels = array(
		'name'               => __( 'Bookmarks', 'piratenkleider' ),
		'singular_name'      => __( 'Bookmark', 'piratenkleider' ),
		
	);
	$args = array(
	    'labels'		=> $labels,
	    'description'	=> __( 'Add or manage bookmark entries', 'piratenkleider' ),
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
        __( 'Description and target URL', 'piratenkleider' ),
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
		<label for="linktipp_url"><?php _e( "Enter target URL", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="linktipp_url"
		       id="linktipp_url" value="<?php echo esc_attr( get_post_meta( $post->ID, 'linktipp_url', true ) ); ?>" size="30" />
	</p>
	<p>
		<label for="linktipp_text"><?php _e( "Enter an optional and short target description", 'piratenkleider' ); ?>:</label>
		<br />
		<?php wp_editor( get_post_meta( $post->ID, 'linktipp_text', true  ), 
			'linktipp_text', 
			array('media_buttons'=>false)); ?>

  </p>
	<p>
	    <label for="linktipp_image"><?php _e( "Image for bookmark (either by media library or external URL)", 'piratenkleider' ); ?>:</label>
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
	     
	     
	     <input type="button" id="linktipp_image-button" class="button" value="<?php _e( "Chose image", 'piratenkleider' ); ?>" />
	    <small> <a href="#" class="custom_clear_image_button"><?php _e( "Remove image", 'piratenkleider' ); ?></a></small> 
	</p>
	
	<p>
		<label for="linktipp_untertitel"><?php _e( "Optional pretitle", 'piratenkleider' ); ?>:</label>
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
	    } else {
	    	delete_post_meta( $post_id, 'linktipp_image' );
	    }
		delete_post_meta( $post_id, 'linktipp_imgid' );
	}
	
	if( isset( $_POST[ 'linktipp_text' ] ) ) {
	    update_post_meta( $post_id, 'linktipp_text',  $_POST[ 'linktipp_text' ]  );
	}
	if( isset( $_POST[ 'linktipp_untertitel' ] ) ) {
	    update_post_meta( $post_id, 'linktipp_untertitel', sanitize_text_field( $_POST[ 'linktipp_untertitel' ] ) );
	}
	
    
}
add_action( 'save_post', 'linktipp_metabox_save' );



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
		  $out .= '<div class="hgroup">';
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
		  $out .= '</div>';
	      }
	  $out .= '</header>';  
	  $out .= "\n";
       } 
       $out .= '<div class="p3-column">';
	$out .= "\n";
	   $out .= '<article class="post-entry p3-cbox">';
	   $out .= "\n";
	       if ($options['linktipps-linkpos']==1) {    
		   $out .= '<a href="'.$linktipp_url.'">';
	       }

	       if (isset($linktipp_imgid) && ($linktipp_imgid>0)) {
		   $image_attributes = wp_get_attachment_image_src( $linktipp_imgid, 'linktipp-thumb' );
		   if (is_array($image_attributes)) {
		      $out .= '<img src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.trim(strip_tags($linktipp_text)).'">';
		   }
	       } elseif (isset($linktipp_image)) {
		   $out .= '<img src="'.$linktipp_image.'" alt="">'; 
	       }                 		
	       if ($options['linktipps-linkpos']==1) {    
		   $out .= '</a>';
	       }
	      if (isset($linktipp_text)) {
		   $out .=  apply_filters('the_content', $linktipp_text);
	      }
	   $out .= "</article>\n"; 

	   if ($options['linktipps-titlepos']==1) { 
	      $out .= '<header class="post-title p3-cbox">';
	      if (str_len(trim($linktipp_untertitel))>1) {
		  $out .= '<div class="hgroup">';
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
		  $out .= '</div>';
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
			$out .= __('No bookmarks found.', 'piratenkleider');
			$out .= "</p></section>\n";
		}
	
	return $out;
}
add_shortcode( 'linktipps', 'linktipps_shortcode' );


