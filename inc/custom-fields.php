<?php

/*
 * Metaboxes and adjustments for generell custom fields 
 */

/* Adding Metabox for setting a link from posts to people */

/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'piratenkleider_metabox_nosidebar_setup' );
add_action( 'load-post-new.php', 'piratenkleider_metabox_nosidebar_setup' );

/* Meta box setup function. */
function piratenkleider_metabox_nosidebar_setup() {
	/* Add meta boxes on the 'add_meta_boxes' hook. */
	add_action( 'add_meta_boxes', 'piratenkleider_add_metabox_nosidebar' );	
	/* Save post meta on the 'save_post' hook. */
	add_action( 'save_post', 'piratenkleider_save_metabox_nosidebar', 10, 2 );
}
/* Create one or more meta boxes to be displayed on the post editor screen. */
function piratenkleider_add_metabox_nosidebar() {
	add_meta_box(
		'piratenkleider_metabox_nosidebar',			
		esc_html__( 'Display Option', 'piratenkleider' ),		
		'piratenkleider_do_metabox_nosidebar',		
		 'page','advanced','default'
	);
        add_meta_box(
		'piratenkleider_metabox_nosidebar',		
		esc_html__( 'Display Option', 'piratenkleider' ),
		'piratenkleider_do_metabox_nosidebar',	
		 'post','advanced',	'default'
	);
}
/* Display the post meta box. */
function piratenkleider_do_metabox_nosidebar( $object, $box ) { 

	wp_nonce_field( basename( __FILE__ ), 'piratenkleider_metabox_nosidebar_nonce' ); 
        $nosidebaraktiv =0;
        $nosidebar = get_post_meta( $object->ID, 'piratenkleider_nosidebar', true );
	$custom_fields = get_post_custom(); 
		if ( ( !empty( $nosidebar ) && $nosidebar==1) 
		    || ((isset($custom_fields['fullsize'])) && ($custom_fields['fullsize'][0] == true)))  {
		  $nosidebaraktiv = 1; 
		}
	?>
	<p>
		<label for="piratenkleider_nosidebar">
                    <?php _e( "Darstellung des Inhalts ändern:", 'piratenkleider' ); ?>
                </label>
		<br />
		<select name="piratenkleider_nosidebar" id="piratenkleider_nosidebar">
		    <option value="0" <?php selected( $nosidebaraktiv, 0 ); ?>><?php _e( "Normale Anzeige", 'piratenkleider' ); ?></option>
		    <option value="1" <?php selected( $nosidebaraktiv, 1 ); ?>><?php _e( "Artikel auf die gesamte Breite ausdehnen; Sidebar nach unten verschieben.", 'piratenkleider' ); ?></option>		   
		</select>			
	</p>
<?php }

/* Save the meta box's post metadata. */
function piratenkleider_save_metabox_nosidebar( $post_id, $post ) {

	/* Verify the nonce before proceeding. */
	if ( !isset( $_POST['piratenkleider_metabox_nosidebar_nonce'] ) || !wp_verify_nonce( $_POST['piratenkleider_metabox_nosidebar_nonce'], basename( __FILE__ ) ) )
		return $post_id;

	/* Get the post type object. */
	$post_type = get_post_type_object( $post->post_type );

	/* Check if the current user has permission to edit the post. */
	if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
		return $post_id;


	$newval = ( isset( $_POST['piratenkleider_nosidebar'] ) ? intval( $_POST['piratenkleider_nosidebar'] ) : 0 );
	$oldval = get_post_meta( $post_id, 'piratenkleider_nosidebar', true );
	
	if ( $newval && '' == $oldval )
		add_post_meta( $post_id, 'piratenkleider_nosidebar', $newval, true );
	elseif ( $newval && $newval != $oldval )
		update_post_meta( $post_id, 'piratenkleider_nosidebar', $newval );
	elseif ( '' == $newval && $oldval )
		delete_post_meta( $post_id, 'piratenkleider_nosidebar', $oldval );	
	
	// Remove old values from version 2
	$oldval = get_post_meta( $post_id, 'fullsize', true );
	if (isset($oldval)) {
	    delete_post_meta( $post_id, 'fullsize', $oldval );	
	}
}
?>
