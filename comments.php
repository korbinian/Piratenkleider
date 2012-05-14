<?php if ( post_password_required() ) : ?>
    <p>Dieser Artikel ist Passwortgesch&uuml;tzt. Bitte gib das Passwort ein um die Kommentare zu sehen.</p>
    <?php return;
endif; ?>

<?php if ( have_comments() ) : ?>
    <h2 id="comments-title">Kommentare</h2>
     <p>   
    <?php printf( _n( 'Ein Kommentar zu %2$s', '%1$s Kommentare zu %2$s', get_comments_number(), 'piratenkleider' ), number_format_i18n( get_comments_number() ), '' . get_the_title() . '' ); ?>
    </p>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
            <?php previous_comments_link( __( '&larr; &Auml;ltere Kommentare', 'piratenkleider' ) ); ?>
            <?php next_comments_link( __( 'Neuere Kommentare &rarr;', 'piratenkleider' ) ); ?>
    <?php endif; ?>
    <ol>
            <?php wp_list_comments( array( 'callback' => 'piratenkleider_comment' ) );
            ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
            <?php previous_comments_link( __( '&larr; &Auml;ltere Kommentare', 'piratenkleider' ) ); ?>
            <?php next_comments_link( __( 'Neuere Kommentare &rarr;', 'piratenkleider' ) ); ?>
    <?php endif; ?>

<?php else : if ( ! comments_open() ) : ?>
	<p>Das Kommentieren dieses Artikels ist nicht (mehr) m&ouml;glich.</p>
<?php endif; 
 endif; 
     
$options = get_option( 'piratenkleider_theme_options' );
if (!isset($options['anonymize-user'])) 
            $options['anonymize-user'] = $defaultoptions['anonymize-user'];

if ($options['anonymize-user']==1) {
    // Emailadresse kann/soll weggelassen werden
    if (!isset($options['anonymize-user-commententries'])) 
            $options['anonymize-user-commententries'] = $defaultoptions['anonymize-user-commententries'];
    
    if ($options['anonymize-user-commententries']==1) {
        // Nur Autorname        
         $comments_args = array( 'fields' => array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>'
       ),
        'comment_notes_before' => ' '
        );
        comment_form( $comments_args); 
    } elseif ($options['anonymize-user-commententries']==2) {
        // Name + URL
         $comments_args = array( 'fields' => array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
	            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
        'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>'.
	            '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>'
       ),
        'comment_notes_before' => ' '
        );
        comment_form( $comments_args); 
    } else {
        // WP-Default (Name+Email+URL)
          comment_form(); 
    }
        
   
        
} else {
    comment_form(); 
}
?> 