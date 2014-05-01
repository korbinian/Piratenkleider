<?php

/*
 * Metaboxes and adjustments for generell custom fields 
 */


add_action( 'load-post.php', 'piratenkleider_metabox_cf_setup' );
add_action( 'load-post-new.php', 'piratenkleider_metabox_cf_setup' );



/* Meta box setup function. */
function piratenkleider_metabox_cf_setup() {
	/* Display Display options. */
	add_action( 'add_meta_boxes', 'piratenkleider_add_metabox_displayoption' );	
	/* Save post display option. */
	add_action( 'save_post', 'piratenkleider_save_metabox_displayoption', 10, 2 );

	/* Display sidecontent */
	add_action( 'add_meta_boxes', 'piratenkleider_add_metabox_pagesidecontent' );	
	/* Save sidecontent */
	add_action( 'save_post', 'piratenkleider_save_metabox_pagesidecontent', 10, 2 );
}


/* Create one or more meta boxes to be displayed on the post editor screen. */
function piratenkleider_add_metabox_displayoption() {
	add_meta_box(
		'piratenkleider_metabox_displayoption',			
		esc_html__( 'Display Option', 'piratenkleider' ),		
		'piratenkleider_do_metabox_displayoption',		
		 'page','side','default'
	);
        add_meta_box(
		'piratenkleider_metabox_displayoption',		
		esc_html__( 'Display Option', 'piratenkleider' ),
		'piratenkleider_do_metabox_displayoption',	
		 'post','side',	'default'
	);
}
function piratenkleider_add_metabox_pagesidecontent() {
	add_meta_box(
		'piratenkleider_metabox_pagesidecontent',			
		esc_html__( 'Sidebar Text', 'piratenkleider' ),		
		'piratenkleider_do_metabox_pagesidecontent',		
		 'page','advanced','default'
	);
}

/* Display Options for posts and pages */
function piratenkleider_do_metabox_displayoption( $object, $box ) { 
    global $options;
	wp_nonce_field( basename( __FILE__ ), 'piratenkleider_metabox_displayoption_nonce' ); 
	
	$post_type = get_post_type( $object->ID); 
	
	if ( 'page' == $post_type ) {
		if ( !current_user_can( 'edit_page', $object->ID) )
		return;
	} elseif ('post' == $post_type) {
		if ( !current_user_can( 'edit_post',$object->ID ) )
		return;
	} else {
	    return;
	}
	
	
        $nosidebaraktiv =0;
        $nosidebar = get_post_meta( $object->ID, 'piratenkleider_displayoption', true );
	$custom_fields = get_post_custom(); 
		if ( ( !empty( $nosidebar ) && $nosidebar==1) 
		    || ((isset($custom_fields['fullsize'])) && ($custom_fields['fullsize'][0] == true)))  {
		  $nosidebaraktiv = 1; 
		}
		
	?>
	<p>
		<label for="piratenkleider_displayoption">
                    <?php _e( "Content display option:", 'piratenkleider' ); ?>
                </label>
		<br />
		<select name="piratenkleider_displayoption" id="piratenkleider_displayoption">
		    <option value="0" <?php selected( $nosidebaraktiv, 0 ); ?>><?php _e( "Default", 'piratenkleider' ); ?></option>
		    <option value="1" <?php selected( $nosidebaraktiv, 1 ); ?>><?php _e( "Display content in 100%; Move sitebar below content.", 'piratenkleider' ); ?></option>		   
		</select>			
	</p>
	<?php 

	$show_disclaimer = 0;	
	if ($post_type == 'post') {
	    /* also handle field 'piratenkleider-show-post-disclaimer' for
	        posts */
	    $show_disclaimer = get_post_meta( $object->ID, 'piratenkleider-show-post-disclaimer', true );
	    ?>
	    
	 <p>
		<label for="piratenkleider-show-post-disclaimer">
                    <?php _e( "Show disclaimer", 'piratenkleider' ); ?>
                </label>
		<br />
		<select name="piratenkleider-show-post-disclaimer" id="piratenkleider-show-post-disclaimer">
		    <option value="0" <?php selected( $show_disclaimer, 0 ); ?>><?php _e( "Do not show any disclaimer", 'piratenkleider' ); ?></option>
		    <option value="1" <?php selected( $show_disclaimer, 1 ); ?>><?php _e( "Display disclaimer before article", 'piratenkleider' ); ?></option>		   
		    <option value="2" <?php selected( $show_disclaimer, 2 ); ?>><?php _e( "Display disclaimer after article.", 'piratenkleider' ); ?></option>		   
		    <option value="3" <?php selected( $show_disclaimer, 3 ); ?>><?php _e( "Display disclaimer before and after article.", 'piratenkleider' ); ?></option>		   
		</select>			
	</p>   
	    <?php if ((isset($options['post_disclaimer'])) && (strlen($options['post_disclaimer'])>0)) { ?>
	<p>
	    <b><?php _e( "Disclaimer Text", 'piratenkleider' ); ?>:</b><br>
	    <em><?php echo $options['post_disclaimer'];?></em>
	</p>   
	    <?php } else {   ?>
	<p>
	    <b><?php _e( "Notice: No disclaimer text defined. Please define a disclaimer in theme options.", 'piratenkleider' ); ?></b>
	</p>
	    <?php }
	}
	
}



/* Save the meta box's post/page metadata. */
function piratenkleider_save_metabox_displayoption( $post_id, $post ) {

	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['piratenkleider_metabox_displayoption_nonce'] ) || !wp_verify_nonce( $_POST['piratenkleider_metabox_displayoption_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	} else {
		if ( !current_user_can( 'edit_post', $post_id ) )
		return;
	}

	

	$newval = ( isset( $_POST['piratenkleider_displayoption'] ) ? intval( $_POST['piratenkleider_displayoption'] ) : 0 );
	$oldval = get_post_meta( $post_id, 'piratenkleider_displayoption', true );
	
	if ( $newval && '' == $oldval )
		add_post_meta( $post_id, 'piratenkleider_displayoption', $newval, true );
	elseif ( $newval && $newval != $oldval )
		update_post_meta( $post_id, 'piratenkleider_displayoption', $newval );
	elseif ( '' == $newval && $oldval )
		delete_post_meta( $post_id, 'piratenkleider_displayoption', $oldval );	
	
	// Remove old values from version 2
	$oldval = get_post_meta( $post_id, 'fullsize', true );
	if (isset($oldval)) {
	    delete_post_meta( $post_id, 'fullsize', $oldval );	
	}
	if ($_POST['post_type'] == 'post') {
	   	
	    $newval = ( isset( $_POST['piratenkleider-show-post-disclaimer'] ) ? intval( $_POST['piratenkleider-show-post-disclaimer'] ) : 0 );
	    $oldval = get_post_meta( $post_id, 'piratenkleider-show-post-disclaimer', true );

	    if ( $newval && '' == $oldval )
		    add_post_meta( $post_id, 'piratenkleider-show-post-disclaimer', $newval, true );
	    elseif ( $newval && $newval != $oldval )
		    update_post_meta( $post_id, 'piratenkleider-show-post-disclaimer', $newval );
	    elseif ( '' == $newval && $oldval )
		    delete_post_meta( $post_id, 'piratenkleider-show-post-disclaimer', $oldval );
	}	
}


/* Display Options for posts and pages */
function piratenkleider_do_metabox_pagesidecontent( $object, $box ) { 
	wp_nonce_field( basename( __FILE__ ), 'piratenkleider_metabox_pagesidecontent_nonce' ); 
	$post_type = get_post_type( $object->ID); 
	
	if ( 'page' == $post_type ) {
		if ( !current_user_can( 'edit_page', $object->ID) )
		return;
	} else {
	    return;
	}
	
	$text = get_post_meta( $object->ID, 'piratenkleider_sidebar-content', true );
	if ((!isset($text)) || (strlen($text) <2)) {
	    $custom_fields = get_post_custom();
	    if (isset($custom_fields['right_column'])) {
		$text = $custom_fields['right_column'][0];
	    }
	}
	
	?>
	<p>
		<label for="piratenkleider_sidebar-content">
                    <?php _e( "Optional text for sidebar", 'piratenkleider' ); ?>
                </label>
		<br />
		<textarea name="piratenkleider_sidebar-content" id="piratenkleider_sidebar-content" class="large-text" rows="8" ><?php echo $text; ?></textarea>			
	</p>
	<?php 

 }

/* Save the meta box's post/page metadata. */
function piratenkleider_save_metabox_pagesidecontent( $post_id, $post ) {
	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['piratenkleider_metabox_pagesidecontent_nonce'] ) || !wp_verify_nonce( $_POST['piratenkleider_metabox_pagesidecontent_nonce'], basename( __FILE__ ) ) )
		return $post_id;


	/* Check if the current user has permission to edit the post. */
	if ( 'page' == $_POST['post_type'] ) {
		if ( !current_user_can( 'edit_page', $post_id ) )
		return;
	}


	$newval = ( isset( $_POST['piratenkleider_sidebar-content'] ) ? sanitize_text_field( $_POST['piratenkleider_sidebar-content'] ) : 0 );
	$oldval = get_post_meta( $post_id, 'piratenkleider_sidebar-content', true );
	
	if ( $newval && '' == $oldval )
		add_post_meta( $post_id, 'piratenkleider_sidebar-content', $newval, true );
	elseif ( $newval && $newval != $oldval )
		update_post_meta( $post_id, 'piratenkleider_sidebar-content', $newval );
	elseif ( '' == $newval && $oldval )
		delete_post_meta( $post_id, 'piratenkleider_sidebar-content', $oldval );	
	
	// Remove old values from version 2
	 $oldval = get_post_meta( $post_id, 'right_column', true );
	 if (isset($oldval)) {
	   delete_post_meta( $post_id, 'right_column', $oldval );	
	}
	
}

