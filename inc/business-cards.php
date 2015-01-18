<?php

/* 
 * Defines visiting cards / personal info pages using custom post types and meta boxes
 */


// Register Custom Post Type
function piratenkleider_person_post_type() {
	$labels = array(
		'name'                => _x( 'Business Card', 'Personal information', 'piratenkleider' ),
		'singular_name'       => _x( 'Business Card', 'Personal information', 'piratenkleider' ),
		'menu_name'           => __( 'Business Card', 'piratenkleider' ),            
	);
	$args = array(
		'label'               => __( 'Business Card', 'piratenkleider' ),
		'description'	      => __( 'Manage personal information', 'piratenkleider' ),
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
        'piratenkleider_person_metabox',
        __( 'Personal information', 'piratenkleider' ),
        'piratenkleider_person_metabox_content',
        'person',
        'normal',
        'high'
    );
}
function piratenkleider_person_metabox_content( $post ) {
    global $defaultoptions;
    global $post;
    $academictitle = array(
	__("Prof.", 'piratenkleider'), 
	__("Doc.", 'piratenkleider'),
        __("PD", 'piratenkleider')
    );
	wp_nonce_field( plugin_basename( __FILE__ ), 'person_metabox_content_nonce' );
	?>

        
        <p>
		<label for="person_first_name"><?php _e( "Pre name", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="person_first_name"
		       id="person_first_name" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_first_name', true ) ); ?>" size="15" />
	</p>
	<p>
		<label for="person_last_name"><?php _e( "Last name", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="person_last_name"
		       id="person_last_name" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_last_name', true ) ); ?>" size="15" />
	</p>
        <p>
		<label for="person_academic"><?php _e( "Academic title", 'piratenkleider' ); ?>:</label>
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
		<label for="person_shortdesc"><?php _e( "Short description", 'piratenkleider' ); ?>:</label>
		<br />
		<input class="widefat" type="text" name="person_shortdesc"
		       id="person_shortdesc" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_shortdesc', true ) ); ?>" size="70" />
	</p>
	<p>
	    <label for="person_bild"><?php _e( "Personal image", 'piratenkleider' ); ?>:</label>
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
	     
	     
	     <input type="button" id="person_bild-button" class="button" value="<?php _e( "Upload and chose image", 'piratenkleider' ); ?>" />
	    <small> <a href="#" class="custom_clear_image_button"><?php _e("Remove image",'piratenkleider'); ?></a></small> 
	</p>
	
	<p>
		<label for="person_email"><?php _e( "Email", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_email"
			id="person_email" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_email', true ) ); ?>" size="30" />
	</p>
        <p>
		<label for="person_pgp_fingerprint"><?php _e( "PGP Fingerprint", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_pgp_fingerprint"
			id="person_pgp_fingerprint" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_pgp_fingerprint', true ) ); ?>" size="49" />
	</p>
	<p>
		<label for="person_url"><?php _e( "Homepage (URL)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_url"
			id="person_url" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_url', true ) ); ?>" size="30" />
	</p>
	
	<p>
		<label for="person_wiki"><?php _e( "Wiki Page (Username)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_wiki"
			id="person_wiki" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_wiki', true ) ); ?>" size="10" />
	</p>
	
	<p>
		<label for="person_twitter"><?php _e( "Twitter (Accountname)", 'piratenkleider' ); ?>:</label>
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
	
	<p>
		<label for="person_newsfeed"><?php _e( "Personal Newsfeed (URL)", 'piratenkleider' ); ?>:</label>
		<br />
		<input  type="text" name="person_newsfeed"
			id="person_newsfeed" value="<?php echo esc_attr( get_post_meta( $post->ID, 'person_newsfeed', true ) ); ?>" size="30" />
	</p>
      

	<?php

}
add_action( 'add_meta_boxes', 'piratenkleider_person_metabox' );


function piratenkleider_person_metabox_save( $post_id ) {
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
		} else {
			delete_post_meta( $post_id, 'person_bild' );
		}
		delete_post_meta( $post_id, 'person_bildid' );
	}

	$url = '';
	if ((isset( $_POST['person_url'] ) && (filter_var($_POST['person_url'], FILTER_VALIDATE_URL)))) {
		$url = $_POST['person_url'];
	} else {
            if ((isset( $_POST['person_url'])) && (preg_match("/^www/i",$_POST['person_url']))) { 
               $tryurl = 'http://'.$_POST['person_url'];
               if (filter_var($tryurl, FILTER_VALIDATE_URL)) {
                   $url = $tryurl;
               }
            }
	}	
	$oldurl = get_post_meta( $post_id, 'person_url', true );
	if ( $url && '' == $oldurl )
		add_post_meta( $post_id, 'person_url', $url, true );
	elseif ( $url && $url != $oldurl )
		update_post_meta( $post_id, 'person_url', $url );
	elseif ( '' == $url && $oldurl )
		delete_post_meta( $post_id, 'person_url', $oldurl );		     
			     
	
        $newid = ( isset( $_POST['person_email'] ) ?  $_POST['person_email']  : '' );
        if ((isset($newid)) && (filter_var($newid, FILTER_VALIDATE_EMAIL))) {
           /* URL ok */ 
        } else {
            $newid = '';
        }
	$oldid = get_post_meta( $post_id, 'person_email', true );

	if ( $newid && '' == $oldid )
		add_post_meta( $post_id, 'person_email', $newid, true );
	elseif ( $newid && $newid != $oldid )
		update_post_meta( $post_id, 'person_email', $newid );
	elseif ( '' == $newid && $oldid )
		delete_post_meta( $post_id, 'person_email', $oldid );
	
        $newid = ( isset( $_POST['person_facebook'] ) ? $_POST['person_facebook']  : '' );
        if ((isset($newid)) && (filter_var($newid, FILTER_VALIDATE_URL))) {
           /* URL ok */ 
        } else {
            $newid = '';
        }
	$oldid = get_post_meta( $post_id, 'person_facebook', true );

	if ( $newid && '' == $oldid )
		add_post_meta( $post_id, 'person_facebook', $newid, true );
	elseif ( $newid && $newid != $oldid )
		update_post_meta( $post_id, 'person_facebook', $newid );
	elseif ( '' == $newid && $oldid )
		delete_post_meta( $post_id, 'person_facebook', $oldid );
        
 	$newid = ( isset( $_POST['person_google'] ) ?   $_POST['person_google']  : '' );
        if ((isset($newid)) && (filter_var($newid, FILTER_VALIDATE_URL))) {
           /* URL ok */ 
        } else {
            $newid = '';
        }
	$oldid = get_post_meta( $post_id, 'person_google', true );

	if ( $newid && '' == $oldid )
		add_post_meta( $post_id, 'person_google', $newid, true );
	elseif ( $newid && $newid != $oldid )
		update_post_meta( $post_id, 'person_google', $newid );
	elseif ( '' == $newid && $oldid )
		delete_post_meta( $post_id, 'person_google', $oldid );
        
        
       
 	$newid = ( isset( $_POST['person_newsfeed'] ) ?   $_POST['person_newsfeed'] : '' );
        if ((isset($newid)) && (filter_var($newid, FILTER_VALIDATE_URL))) {
           /* URL ok */ 
        } else {
            $newid = '';
        }
	$oldid = get_post_meta( $post_id, 'person_newsfeed', true );

	if ( $newid && '' == $oldid )
		add_post_meta( $post_id, 'person_newsfeed', $newid, true );
	elseif ( $newid && $newid != $oldid )
		update_post_meta( $post_id, 'person_newsfeed', $newid );
	elseif ( '' == $newid && $oldid )
		delete_post_meta( $post_id, 'person_newsfeed', $oldid );	
	       
        
        
        $newid = ( isset( $_POST['person_wiki'] ) ?   $_POST['person_wiki'] : '' );       
	$oldid = get_post_meta( $post_id, 'person_wiki', true );

	if ( $newid && '' == $oldid )
		add_post_meta( $post_id, 'person_wiki', $newid, true );
	elseif ( $newid && $newid != $oldid )
		update_post_meta( $post_id, 'person_wiki', $newid );
	elseif ( '' == $newid && $oldid )
		delete_post_meta( $post_id, 'person_wiki', $oldid );	
	       

	if( isset( $_POST[ 'person_twitter' ] ) ) {
	    update_post_meta( $post_id, 'person_twitter',  sanitize_text_field($_POST[ 'person_twitter' ]) );
	}

	if( isset( $_POST[ 'person_shortdesc' ] ) ) {
	    update_post_meta( $post_id, 'person_shortdesc',  $_POST[ 'person_shortdesc' ] );
	}
	if( isset( $_POST[ 'person_pgp_fingerprint' ] ) ) {
	    update_post_meta( $post_id, 'person_pgp_fingerprint', sanitize_text_field( $_POST[ 'person_pgp_fingerprint' ]) );
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
add_action( 'save_post', 'piratenkleider_person_metabox_save' );


function piratenkleider_person_metabox_updated_messages( $messages ) {
	global $post, $post_ID;
	$messages['person'] = array(
		0 => '',
		1 => __('Business card updated.', 'piratenkleider'),
		2 => __('Business card updated.', 'piratenkleider'),
		3 => __('Business card removed.', 'piratenkleider'),
		6 => __('Business card publiced.', 'piratenkleider'),
		7 => __('Business card saved.', 'piratenkleider'),
			);
	return $messages;
}
add_filter( 'post_updated_messages', 'piratenkleider_person_metabox_updated_messages' );





function piratenkleider_display_person ($post_id = 0, $format = 'full', $profillink = 1) {
    global $options;
    

    $person_shortdesc = get_post_meta( $post_id, 'person_shortdesc', true );
    $person_text = apply_filters('the_content', get_post_field('post_content', $post_id));
    
    $person_link = get_permalink( $post_id);
    
    $person_last_name = get_post_meta( $post_id, 'person_last_name', true );
    $person_first_name = get_post_meta( $post_id, 'person_first_name', true );
    $person_academic = get_post_meta( $post_id, 'person_academic', true );
    $fullname = '';
    if (isset($person_academic) && strlen($person_academic)>1) {
        $fullname = $person_academic.' ';
    }
    $fullname .= $person_first_name.' '.$person_last_name;
    $person_url = get_post_meta( $post_id, 'person_url', true );
    $person_email = get_post_meta( $post_id, 'person_email', true );
    $person_pgp_fingerprint = get_post_meta( $post_id, 'person_pgp_fingerprint', true );
    
    
    $person_facebook = get_post_meta( $post_id, 'person_facebook', true );
    $person_twitter = get_post_meta( $post_id, 'person_twitter', true );
    $person_wiki = get_post_meta( $post_id, 'person_wiki', true );
    $person_google = get_post_meta( $post_id, 'person_google', true );
    $person_newsfeed = get_post_meta( $post_id, 'person_newsfeed', true );
    
    
    $person_imgid = get_post_meta( $post_id, 'person_bildid', true );
    $person_image = get_post_meta( $post_id, 'person_bild', true );
    $bildfullwidth =  $bildsmallwidth = $personenbildfull = $personenbildsmall = $personenbildsidebar = '';
    
    if ((isset($person_imgid) && ($person_imgid>0)) || (isset($person_image) && (strlen($person_image)))) {
	$alttext = $fullname;
	$coprightcap = '';
	if (isset($person_imgid) && ($person_imgid>0)) {
	   $image_attributes = wp_get_attachment_image_src( $person_imgid, 'person-thumb' );
	   $image_attributessmall = wp_get_attachment_image_src( $person_imgid, 'post-thumbnails' );
	   $image_attributessidebar = wp_get_attachment_image_src( $person_imgid, $options['sidebar-thumbnail_name'] );

	   if (isset($image_attributes["credits"]) && (strlen($image_attributes["credits"])>1)) {
	       $alttext .= "\n".' ('.$image_attributes["credits"].')';  
	       $coprightcap .= '('.$image_attributes["credits"].')';  
	   } 
	   if (is_array($image_attributes)) {
	      $personenbildfull = '<img itemprop="image" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.$alttext.'" class="size-full">';
	      $personenbildsmall = '<img itemprop="image" src="'.$image_attributessmall[0].'" width="'.$image_attributessmall[1].'" height="'.$image_attributessmall[2].'" alt="'.$alttext.'" class="size-full">';
	      $personenbildsidebar = '<img src="'.$image_attributessidebar[0].'" width="'.$image_attributessidebar[1].'" height="'.$image_attributessidebar[2].'" alt="'.$alttext.'">';
	    }
        
	} elseif (isset($person_image)) {
	    $personenbildfull = '<img itemprop="image" src="'.$person_image.'" alt="'.$alttext.'" class="size-full" height="'.$options['person-thumbnail_height'].'" style="width: auto;">'; 
	    $personenbildsmall = '<img itemprop="image" src="'.$person_image.'" alt="'.$alttext.'" class="size-full" height="150" style="width: auto;">'; 
	    $personenbildsidebar = '<img src="'.$person_image.'" alt="'.$alttext.'" width="'.$options['sidebar-thumbnail_width'].'" style="height: auto;">'; 

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
	    $kontaktdata .= '<h3 class="contact">'.__('Contact','piratenkleider').'</h3>';
	    $kontaktdata .= "<ul class=\"contact\">\n";
	    if (isset($person_email) && strlen($person_email)>1) {
		$kontaktdata .= "<li class=\"email\"><span>E-Mail: </span><a itemprop=\"email\" href=\"mailto:".$person_email."\">".$person_email."</a>";                  
                $kontaktdata .= "</li>\n";
	    }
            if (isset($person_pgp_fingerprint) && strlen($person_pgp_fingerprint)>1) {
                $kontaktdata .= "<li class=\"pgp\"><span>Fingerprint: </span><code>".$person_pgp_fingerprint."</code></li>";
            }  
	    if (isset($person_url) && strlen($person_url)>1) {
		$kontaktdata .= "<li class=\"website\"><span>Web: </span><a class=\"extern\" itemprop=\"url\" href=\"".$person_url."\">".piratenkleider_display_url($person_url)."</a></li>\n";
	    }
	    if (isset($person_twitter) && strlen($person_twitter)>1) {		
		if (filter_var($person_twitter, FILTER_VALIDATE_URL)) {
		    $url = $person_twitter; 
		} else {
		    $url = 'https://twitter.com/'.$person_twitter; 
		}		
		$kontaktdata .= "<li class=\"twitter\"><span>Twitter: </span><a href=\"".$url."\">".piratenkleider_display_url($url)."</a></li>\n";
	    }
	     if (isset($person_facebook) && strlen($person_facebook)>1) {
		$kontaktdata .= "<li class=\"facebook\"><span>Facebook: </span><a href=\"".$person_facebook."\">".piratenkleider_display_url($person_facebook)."</a></li>\n";
	    }
	    if (isset($person_google) && strlen($person_google)>1) {
		$kontaktdata .= "<li class=\"google\"><span>Google: </span><a href=\"".$person_google."\">".piratenkleider_display_url($person_google)."</a></li>\n";
	    } 
	    if (isset($person_wiki) && strlen($person_wiki)>1) {
		if (filter_var($person_wiki, FILTER_VALIDATE_URL)) {
		    $url = $person_wiki; 
		} else {
		    $url = $options['url-wiki'].'/User:'.$person_wiki; 
		}
		$wikiclass = 'piratewiki';
		if (preg_match("/wikipedia\.org/i",$url)) {
		    $wikiclass = 'wiki';
		}
		$kontaktdata .= "<li class=\"".$wikiclass."\"><span>Wiki: </span><a href=\"".$url."\">".piratenkleider_display_url($url)."</a></li>\n";
	    } 
             if (isset($person_newsfeed) && strlen($person_newsfeed)>1) {
		$kontaktdata .= "<li class=\"feed\"><span>Feed: </span><a href=\"".$person_newsfeed."\">".piratenkleider_display_url($person_newsfeed)."</a></li>\n";
	    } 
	    $kontaktdata .= "</ul>\n";
	   
	}
	
	if ($format== 'full') {
	    $out .= $bildfullwidth."\n";
	    $out .= "<div class=\"textinfo\">\n";
	    $out .= '<h3 class="about">'.__('About','piratenkleider').' ';
	    if ($profillink==1) $out .= '<a href="'.$person_link.'">';	   
	    $out .= '<span itemprop="name">' . $fullname . '</span>';
	    if ($profillink==1) $out .= '</a>';
	    $out .= '</h3>';
	    $out .= '<p itemprop="description">'.$person_shortdesc."</p>\n";
	    $out .= $kontaktdata;
	    $out .= $person_text;
	    $out .= "</div>\n";
            
           if ($options['vcard-showfeed']==1 && isset($person_newsfeed) && strlen($person_newsfeed)>1) {
                if(function_exists('fetch_feed')) {
                    include_once(ABSPATH.WPINC.'/feed.php');
                    $feed = fetch_feed($person_newsfeed);
                    $limit = $feed->get_item_quantity($options['vcard-feed-maxnum']); // specify number of items
                    $items = $feed->get_items(0, $limit); // create an array of items
                }
                if ($limit == 0) {
                    $out .= '<div class="personfeed skip">'.__("The feed is either empty or unavailable.",'piratenkleider').'</div>';
                } else {
                     $out .= '<div class="personfeed">';
                     $out .= "<h3>".__('Last posts', 'piratenkleider')."</h3>\n";
                     $out .= "<ul>";
                        foreach ($items as $item) {     
                            $out .= '<li><a href="'.$item->get_permalink().'">';
                            $out .= $item->get_title();
                            $out .= '</a>';
                            $out .= ' ('.$item->get_date('j. F Y').')';
                            $out .= '</li>';
                        }              
                     $out .= "</ul>";
                     $out .= "</div>\n"; 
                }     
            }
            if ($options['vcard-showlocalentries']==1) {
                $searchterm = $fullname;
                $query_args = array( 's' => $searchterm );
                $personposts = new WP_Query( $query_args );
                if ($personposts->have_posts() ) { 
                    $ppout = $ppoutput = '';  
                    while ($personposts->have_posts()) : $personposts->the_post();
                        $ppout = piratenkleider_post_teaser(1,1,1,200, 1,1,4);        
                         if (isset($ppout)) {
                            $ppoutput .= $ppout;
                         }
                     endwhile;
                }     
                wp_reset_query();
                if (isset($ppoutput)) {
                    $out .= '<div class="businesscard-entries">';
                    $out .=  "<h3>".__('Last entries from this site about', 'piratenkleider')." $fullname</h3>\n";
                    $out .= $ppoutput;
                    $out .= "</div>\n"; 
                }
            }
            
            
	} elseif ($format== 'small') {
	    $out .=  $bildsmallwidth;
	    $out .= "<div class=\"textinfo\">\n";
	    $out .= '<h3 class="about">';
	    if ($profillink==1) $out .= '<a href="'.$person_link.'">';	   
	    $out .= $fullname;
	    if ($profillink==1) $out .= '</a>';
	    $out .= '</h3>';
	    $out .= '<p>'.$person_shortdesc."</p>\n";
	    $out .= $kontaktdata;
	    $out .= "</div>\n";
	} elseif ($format== 'sitebar') {
	     $out .= '<section id="steckbrief">';   
	     if ($profillink==1) $out .= '<a href="'.$person_link.'">';	   
             $out .=  $personenbildsidebar;
              if ($profillink==1) $out .= '</a>';
	     $out .= '<div class="text">';
	     $out .= '<h3>';     
	     $out .= $fullname;          
	     $out .= '</h3>';
	     $out .= $kontaktdata;
	     $out .= '<p>'.$person_shortdesc."</p>\n";

	     $out .= "</div>\n";
	     $out .= "</section>\n";
	} elseif ($format== 'table') {
	     $out .= "<tr>";
	     $out .= "<td>";
	     $out .=  $bildsmallwidth;
	     $out .= "</td>";
	     $out .= "<td>";
	     $out .= '<h3 class="about">';
	     if ($profillink==1) $out .= '<a href="'.$person_link.'">';	   
	    $out .= $fullname;
	    if ($profillink==1) $out .= '</a>';
	     $out .= '</h3>';
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
	     $out .= '<h3 class="about">';
	    if ($profillink==1) $out .= '<a href="'.$person_link.'">';	   
	    $out .= $fullname;
	    if ($profillink==1) $out .= '</a>';
	     $out .= '</h3>';
	     $out .= $kontaktdata;
	     $out .= '<p>'.$person_shortdesc."</p>\n";
      	     $out .= $person_text;	    
	     $out .= "</td>";
	     $out .= "</tr>";
	} else {
	    $out .=  $bildsmallwidth;
	    $out .= "<div class=\"textinfo\">\n";
	    $out .= '<h3 class="about">';
	    if ($profillink==1) $out .= '<a href="'.$person_link.'">';	   
	    $out .= $fullname;
	    if ($profillink==1) $out .= '</a>';
	    $out .= '</h3>';
	    $out .= $person_shortdesc."\n";
	    $out .= $kontaktdata;
	    $out .= "</div>\n";
	}

    return $out;
}

/*
 * Shortcode CPT Person
 */


function piratenkleider_person_shortcode( $atts ) {
    global $options;

	extract( shortcode_atts( array(
		'cat' => '',
	        'name' => '',
		'num' => 30,
		'id'	=> '',
		'format'    => 'table',
		'order'	    => 'ASC',
		'showautor' => 1,
                'listorder' => '',
		'offset'	=> 0,
	), $atts ) );
	$single = 0;
	$cat = sanitize_text_field($cat);
        $listorder= sanitize_text_field($listorder);
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
        } elseif ((isset($listorder)) && ( strlen(trim($listorder))>0)) {   
            $post_list = explode(",",$listorder);
            $list = array();
            $i=0;
            foreach( $post_list as $post_id ) {               
                if (intval(trim($post_id))) {
                    $list[$i] = intval(trim($post_id));
                    $i= $i +1;
                }
            }
            $args = array(
			'post_type' => 'person',
			'post__in'      => $list,
			'order' => $order,
			'orderby' => 'post__in',    
                        'posts_per_page' => $i,
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
	 $out = '';
	$person = new WP_Query( $args );
		if( $person->have_posts() ) {
		   
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
			if ((isset($format) && ($format=='table') && ($single==0)) 
			     || (isset($format) && ($format=='bigtable') && ($single==0))) {
				$out .= '</table>';
			} else {
			    $out .= '</div>';
			}


		    wp_reset_postdata();

		} else {
			$out = '<section class="shortcode person"><p>';
			$out .= __('No person found.', 'piratenkleider');
			$out .= "</p></section>\n";
		}
	 wp_reset_query();
	return $out;
}
add_shortcode( 'person', 'piratenkleider_person_shortcode' );


/* Adding Metabox for setting a link from posts to people */

/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'piratenkleider_post_metabox_person_setup' );
add_action( 'load-post-new.php', 'piratenkleider_post_metabox_person_setup' );

/* Meta box setup function. */
function piratenkleider_post_metabox_person_setup() {
	/* Add meta boxes on the 'add_meta_boxes' hook. */
	add_action( 'add_meta_boxes', 'piratenkleider_add_post_metabox_person' );	
		/* Save post meta on the 'save_post' hook. */
	add_action( 'save_post', 'piratenkleider_save_post_class_meta', 10, 2 );
}
/* Create one or more meta boxes to be displayed on the post editor screen. */
function piratenkleider_add_post_metabox_person() {

	add_meta_box(
		'piratenkleider-post-class-person',			// Unique ID
		esc_html__( 'Personal card', 'piratenkleider' ),		// Title
		'piratenkleider_post_class_metabox_person',		// Callback function
		'post',					// Admin page (or post type)
		'advanced',					// Context
		'default'					// Priority
	);
}
/* Display the post meta box. */
function piratenkleider_post_class_metabox_person( $object, $box ) { 
	global $defaultoptions;
	
	wp_nonce_field( basename( __FILE__ ), 'piratenkleider_post_class_nonce' ); 
	?>
	<p>
		<label for="piratenkleider-personalcard-id"><?php _e( "Select someone you want to show with a personal card along the article.", 'piratenkleider' ); ?></label>
		<br />
		<select name="piratenkleider-personalcard-id" id="piratenkleider-personalcard-id">
		    <option value=""><?php _e( "Do not display any personal card", 'piratenkleider' ); ?></option>
		    <?php
		    
			$notice = '';
			 $oldid = esc_attr( get_post_meta( $object->ID, 'piratenkleider-personalcard-id', true ) );
		    	    $args = array(
					'post_type' => 'person',
					'order' => 'ASC',
					'meta_key' => 'person_last_name',
					'orderby' => 'meta_value',
					'posts_per_page' => 30,

				);
	    
			    $out = '';
			    $personlist = new WP_Query( $args );
			    if( $personlist->have_posts() ) {		
				
				if ($personlist->post_count > $defaultoptions['vcard-maxnum-selectlist']) {
				    $catsortlist = array();	    
				    while ($personlist->have_posts() ) {
					$thisissel = 0;
					$catout = '';
					$personlist->the_post();
					$listid = $personlist->post->ID;
					$person_last_name = get_post_meta( $listid, 'person_last_name', true );
					$person_first_name = get_post_meta( $listid, 'person_first_name', true );
					$fullname = $person_first_name.' '.$person_last_name;
					$firstsel = 0;
					$catout .= '<option value="'.$listid.'"';
					
					if ($oldid && $oldid==$listid) {
					    $catout .= ' selected="selected"';
					    $thisissel = 1;
					}
					$catout .= '>'.$fullname.'</option>'."\n";
					$catout2 =  '<option value="'.$listid.'">'.$fullname.'</option>'."\n";
					
					
					$post_categories = wp_get_object_terms( $listid, 'person_category' );
					if (empty($post_categories) ) {
					    $catsortlist['_default'][] = $catout;
					} else {
					    foreach($post_categories as $key => $val){
						$thiscatname = $val->name;
						if (($thisissel==1) && ($firstsel==0)) {
						    $catsortlist["$thiscatname"][] = $catout;
						    $firstsel =1;
						} else {
						    $catsortlist["$thiscatname"][] = $catout2;
						}
					    }
					}
				    }
				   
				    foreach($catsortlist as $name => $val){
					if ($name == '_default') {
					    foreach($val as $entry){
						$out .= $entry;
					    }
					} else {
					    $out .= '<optgroup label="'.$name.'">';
					    foreach($val as $entry){
						$out .= $entry;
					    }
					    $out .= '</optgroup>';
					}
				    }
				} else {
				    while ($personlist->have_posts() ) {
					$personlist->the_post();	   
					$listid = $personlist->post->ID;
					$person_last_name = get_post_meta( $listid, 'person_last_name', true );
					$person_first_name = get_post_meta( $listid, 'person_first_name', true );
					$fullname = $person_first_name.' '.$person_last_name;
					$out .= '<option value="'.$listid.'"';
					if ($oldid && $oldid==$listid) {
					    $out .= ' selected="selected"';
					}
					$out .= '>'.$fullname.'</option>'."\n";
				    }
				}
			    } else {
				$notice = __('No person card defined yet.', 'piratenkleider');
			    }
			    wp_reset_query();
			    if (isset($out)) {
				echo $out;
			    }		    
			    ?>
		</select>	
		<?php
		   if (isset($notice)) {
		       echo '<span class="info">'.$notice."</span>\n";
		   }
		?>
	</p>
	<div class="visiting-card-manual">
	<p>
	    <?php _e( "Alternativly define manually a short text and an image:", 'piratenkleider' ); ?>
	</p>
	
	<p>
		<label for="piratenkleider-sidebar-text"><?php _e( "Short text for sidebar", 'piratenkleider' ); ?></label>
		<br />
		<?php 
		    // Downwards comtability:  Version 2 used "text" as meta key, Version 3 "piratenkleider-sidebar-text"
		    $textfield = esc_attr( get_post_meta( $object->ID, 'piratenkleider-sidebar-text', true ) );
		    if (empty($textfield)) {
			$textfield = esc_attr( get_post_meta( $object->ID, 'text', true ) );			
		    }
		  ?>
		
		<input class="widefat" type="text" name="piratenkleider-sidebar-text" id="piratenkleider-sidebar-text" value="<?php echo $textfield; ?>" size="30" />
	</p>
	
	<p>
	    <label for="person_bild"><?php _e( "Picture", 'piratenkleider' ); ?>:</label>
	    <br />
	     	    
		<?php
		
		 $person_bildid = get_post_meta( $object->ID, 'piratenkleider-sidebar-image_id', true );
		 $person_bild = get_post_meta( $object->ID, 'piratenkleider-sidebar-image_url', true );
		 if ((empty($person_bildid)) || (empty($person_bild))) {
		     $person_bildid = get_post_meta( $object->ID, 'image_url', true );
		 }
		 if (isset($person_bildid) && ($person_bildid>0)) {
		     $image_attributes = wp_get_attachment_image_src( $person_bildid, 'person-thumb' );
		     if (is_array($image_attributes)) {
			echo '<img id="person_bild-show" src="'.$image_attributes[0].'" style="max-width: 200px; height: auto;">';
			$person_bild = $image_attributes[0];
		     }
		     
		 } elseif (filter_var($person_bild, FILTER_VALIDATE_URL)) {
			echo '<img id="person_bild-show" src="'.$person_bild.'" alt="" style="max-width: 200px; height: auto;">';
		 } else {
			echo '<img id="person_bild-show" src="'.$defaultoptions['src-person_bild_default'].'" alt="" >';			
		 }
		 echo '<br /><span class="custom_default_image" style="display:none">'.$defaultoptions['src-person_bild_default'].'</span>';  
		?>
	     <input type="text" name="person_bild" size="50" id="person_bild" 
		    value="<?php echo $person_bild; ?>" />
	     <input type="hidden" name="person_bildid" id="person_bildid" 
		    value="<?php echo $person_bildid; ?>" />	    
	     
	     
	     <input type="button" id="person_bild-button" class="button" value="<?php _e( "Chose or upload picture", 'piratenkleider' ); ?>" />
	    <small> &nbsp;  <a href="#" class="custom_clear_image_button"><?php _e( "Remove picture", 'piratenkleider' ); ?></a></small> 
	</p>
	</div>

	    
<?php }

/* Save the meta box's post metadata. */
function piratenkleider_save_post_class_meta( $post_id, $post ) {

	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['piratenkleider_post_class_nonce'] ) || !wp_verify_nonce( $_POST['piratenkleider_post_class_nonce'], basename( __FILE__ ) ) )
		return $post_id;

	/* Get the post type object. */
	$post_type = get_post_type_object( $post->post_type );

	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
		return $post_id;

	$newid = ( isset( $_POST['piratenkleider-personalcard-id'] ) ? sanitize_key( $_POST['piratenkleider-personalcard-id'] ) : '' );
	$oldid = get_post_meta( $post_id, 'piratenkleider-personalcard-id', true );

	if ( $newid && '' == $oldid )
		add_post_meta( $post_id, 'piratenkleider-personalcard-id', $newid, true );
	elseif ( $newid && $newid != $oldid )
		update_post_meta( $post_id, 'piratenkleider-personalcard-id', $newid );
	elseif ( '' == $newid && $oldid )
		delete_post_meta( $post_id, 'piratenkleider-personalcard-id', $oldid );
	

	$newid = ( isset( $_POST['person_bildid'] ) ? sanitize_key( $_POST['person_bildid'] ) : '' );
	$oldid = get_post_meta( $post_id, 'piratenkleider-sidebar-image_id', true );
	if (empty($oldid))  {
	    $oldid =get_post_meta( $post_id, 'image_url', true );
	}
	if ( $newid && '' == $oldid )
		add_post_meta( $post_id, 'piratenkleider-sidebar-image_id', $newid, true );
	elseif ( $newid && $newid != $oldid )
		update_post_meta( $post_id, 'piratenkleider-sidebar-image_id', $newid );
	elseif ( '' == $newid && $oldid )
		delete_post_meta( $post_id, 'piratenkleider-sidebar-image_id', $oldid );	
	
	// Remove old values from version 2
	$olderid = get_post_meta( $post_id, 'image_url', true );
	if (isset($olderid)) {
	    delete_post_meta( $post_id, 'image_url', $olderid );	
	}
	
	if ((isset( $_POST['person_bild'] ) && (filter_var($_POST['person_bild'], FILTER_VALIDATE_URL)))) {
	    $bildurl = $_POST['person_bild'];
	} else {
	    $bildurl = '';
	}	
	$oldurl = get_post_meta( $post_id, 'piratenkleider-sidebar-image_url', true );
	
	if ( $bildurl && '' == $oldurl )
		add_post_meta( $post_id, 'piratenkleider-sidebar-image_url', $bildurl, true );
	elseif ( $bildurl && $bildurl != $oldurl )
		update_post_meta( $post_id, 'piratenkleider-sidebar-image_url', $bildurl );
	elseif ( '' == $bildurl && $oldurl )
		delete_post_meta( $post_id, 'piratenkleider-sidebar-image_url', $oldurl );	
	
	
	$new_text = ( isset( $_POST['piratenkleider-sidebar-text'] ) ? sanitize_text_field( $_POST['piratenkleider-sidebar-text'] ) : '' );
	$oldtext = get_post_meta( $post_id, 'piratenkleider-sidebar-text', true );
	if (empty($oldtext)) {
	    $oldtext = get_post_meta( $post_id, 'text', true );
	}
	if ( $new_text && '' == $oldtext )
		add_post_meta( $post_id, 'piratenkleider-sidebar-text', $new_text, true );
	elseif ( $new_text && $new_text != $oldtext )
		update_post_meta( $post_id, 'piratenkleider-sidebar-text', $new_text );
	elseif ( '' == $new_text && $oldtext )
		delete_post_meta( $post_id, 'piratenkleider-sidebar-text', $oldtext );	
	
	// Remove old values from version 2
	$oldertext = get_post_meta( $post_id, 'text', true );
	if (isset($oldertext)) {
	    delete_post_meta( $post_id, 'text', $oldertext );	
	}		
}


if ( ! function_exists( 'get_piratenkleider_steckbrief' ) ) :
    /*
     * Anzeige der Steckbrief-Info zu einem Post
     */
    
function get_piratenkleider_steckbrief(){
  global $post;
  global $options;
  
  
  $personid = esc_attr( get_post_meta( $post->ID, 'piratenkleider-personalcard-id', true ) );
  if ((isset($personid)) && ($personid>0)) {      
      return piratenkleider_display_person($personid,'sitebar'); 
  }  
  
  $text = esc_attr( get_post_meta( $post->ID, 'piratenkleider-sidebar-text', true ) );
   if (empty($text)) {
       /* Downwards compatibility */
	$text = esc_attr( get_post_meta( $post->ID, 'text', true ) );			
    }
   $image_url = get_post_meta( $post->ID, 'piratenkleider-sidebar-image_url', true );
   $image_id = 0;
    if (empty($image_url))  {
	/* Downwards compatibility */
	$image_url = get_post_meta( $post->ID, 'image_url', true );
    } else {
	$image_id = get_post_meta( $post->ID, 'piratenkleider-sidebar-image_id', true );
    }
  
    $out = '';	
    if  (  ( isset($text) 
	    && isset($image_url)
	    && (strlen(trim($text))>0))
	|| (
	    (isset($text) 
	    && (strlen(trim($text))>0)) 
	    && (has_post_thumbnail()))
	    ) {   
	$out .= '<div id="steckbrief">';   
	if (isset($image_url) ) {
	    if ($image_id >0) {
		$out .= wp_get_attachment_image( $image_id, array($options['sidebar-steckbrief-maxwidth'],$options['sidebar-steckbrief-maxheight']) );		
	    } else {
		$out .= wp_get_attachment_image( $image_url, array($options['sidebar-steckbrief-maxwidth'],$options['sidebar-steckbrief-maxheight']) );
	    }
	} 
	$out .= "\n";  
	$out .= ' <div class="text">';
	$out .=  do_shortcode($text); 
	$out .= "</div>\n";
	$out .= "</div>\n";
		
    }  
   return $out;
  
}
endif;

function piratenkleider_display_url($url = '') {
    $outurl = preg_replace('/^(https?:\/\/)/','',$url); 
    return $outurl;
}
