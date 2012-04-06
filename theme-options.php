<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'piratenkleider_options', 'piratenkleider_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Piratenkleider pimpen', 'piratenkleider' ), __( 'Piratenkleider pimpen', 'piratenkleider' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}


/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' pimpen ', 'piratenkleider' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'piratenkleider' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'piratenkleider_options' ); ?>
			<?php $options = get_option( 'piratenkleider_theme_options' ); ?>

			<table class="form-table">


				<tr valign="top"><th scope="row"><?php _e( 'Eingabemaske für den Piraten-Newsletter', 'piratenkleider' ); ?></th>
					<td>
						<input id="piratenkleider_theme_options[newsletter]" name="piratenkleider_theme_options[newsletter]" type="checkbox" value="1" <?php checked( '1', $options['newsletter'] ); ?> />
						<label class="description" for="piratenkleider_theme_options[newsletter]"><?php _e( 'Eingabemaske anzeigen', 'piratenkleider' ); ?></label>
					</td>
				</tr>
                                <tr valign="top"><th scope="row"><?php _e( 'Social Media Buttons', 'piratenkleider' ); ?></th>
					<td>
						<input id="piratenkleider_theme_options[alle-socialmediabuttons]" name="piratenkleider_theme_options[alle-socialmediabuttons]" type="checkbox" value="1" <?php checked( '1', $options['alle-socialmediabuttons'] ); ?> />
						<label class="description" for="piratenkleider_theme_options[alle-socialmediabuttons]"><?php _e( 'Alle Buttons anzeigen', 'piratenkleider' ); ?></label>
					</td>
				</tr>




				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'piratenkleider' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['newsletter'] ) )
		$input['newsletter'] = null;
	$input['newsletter'] = ( $input['alle-socialmediabuttons'] == 1 ? 1 : 0 );
	if ( ! isset( $input['alle-socialmediabuttons'] ) )
		$input['alle-socialmediabuttons'] = null;
	$input['alle-socialmediabuttons'] = ( $input['alle-socialmediabuttons'] == 1 ? 1 : 0 );
        
	// Say our text option must be safe text with no HTML tags
	// $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	// if ( ! array_key_exists( $input['selectinput'], $select_options ) )
	//	$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	// if ( ! isset( $input['radioinput'] ) )
	//	$input['radioinput'] = null;
	// if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
	//	$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	// $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/