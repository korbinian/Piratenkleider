<?php if ( post_password_required() ) : ?>
    <p>Dieser Artikel ist Passwortgeschützt. Bitte gib das Passwort ein um die Kommentare zu sehen.</p>
    <?php return;
endif; ?>

<?php if ( have_comments() ) : ?>
    <h2 id="comments-title">Kommentare</h2>
     <p>   
    <?php printf( _n( 'Ein Kommentar zu %2$s', '%1$s Kommentare zu %2$s', get_comments_number(), 'piratenkleider' ), number_format_i18n( get_comments_number() ), '' . get_the_title() . '' ); ?>
    </p>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
            <?php previous_comments_link( __( '&larr; Ältere Kommentare', 'piratenkleider' ) ); ?>
            <?php next_comments_link( __( 'Neuere Kommentare &rarr;', 'piratenkleider' ) ); ?>
    <?php endif; ?>
    <ol>
            <?php wp_list_comments( array( 'callback' => 'piratenkleider_comment' ) );
            ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
            <?php previous_comments_link( __( '&larr; Ältere Kommentare', 'piratenkleider' ) ); ?>
            <?php next_comments_link( __( 'Neuere Kommentare &rarr;', 'piratenkleider' ) ); ?>
    <?php endif; ?>

<?php else : if ( ! comments_open() ) : ?>
	<p>Das Kommentieren dieses Artikels ist nicht (mehr) möglich.</p>
<?php endif; ?>

<?php endif; ?>

<?php comment_form(); ?> 