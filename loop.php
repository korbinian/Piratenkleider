
        <?php
                $category_description = category_description();
                if ( ! empty( $category_description ) )
                        echo '' . $category_description . ''; ?>	
                <?php /* If there are no posts to display, such as an empty archive page */ ?>
                <?php if ( ! have_posts() ) : ?>
                        <h1><?php _e( 'Nichts gefunden', 'piratenkleider' ); ?></h1>
                        <p><?php _e( 'Vielleicht hilft eine Suche weiter?', 'piratenkleider' ); ?></p>
                        <div class="fullwidth"><?php get_search_form(); ?></div>
                <?php endif; ?>

                <?php while ( have_posts() ) : the_post(); ?>

                <?php /* gallery */ ?>

                <?php if ( in_category( _x('gallery', 'gallery category slug', 'piratenkleider') ) ) : ?>
                        <h2>
                                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'piratenkleider' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                </a>
                        </h2>
                        <?php piratenkleider_post_pubdateinfo(); ?>

                <?php if ( post_password_required() ) : ?>
                        <?php the_content(); ?>
                <?php else : ?>
                <?php
                $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
                $total_images = count( $images );
                $image = array_shift( $images );
                $image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
                ?>
                        <a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>

                        <p>
                                <?php printf( __( 'Diese Galerie enth&auml;lt <a %1$s>%2$s photos</a>.', 'piratenkleider' ),
                                                        'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'piratenkleider' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
                                                        $total_images
                                                ); ?>
                        </p>

                        <?php the_excerpt(); ?>
                <?php endif; ?>

                        <a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'piratenkleider'), 'category' ); ?>" title="<?php esc_attr_e( 'Zeige Artikel aus der Galerie', 'piratenkleider' ); ?>"><?php _e( 'Mehr Bildergalerien', 'piratenkleider' ); ?></a>
                                        |
                                        <?php comments_popup_link( __( 'Hinterlasse einen Kommentar', 'piratenkleider' ), __( '1 Comment', 'piratenkleider' ), __( '% kommentare', 'piratenkleider' ) ); ?>
                                        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '|', '' ); ?>

                <?php /* asides */ ?>

                <?php elseif ( in_category( _x('asides', 'asides category slug', 'piratenkleider') ) ) : ?>

                        <?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
                                <?php the_excerpt(); ?>
                        <?php else : ?>
                                <?php the_content( __( 'Weiterlesen', 'piratenkleider' ) ); ?>
                        <?php endif; ?>

                                        <?php piratenkleider_post_pubdateinfo(); ?>
                                        |
                                        <?php comments_popup_link( __( 'Hinterlasse einen Kommentar', 'piratenkleider' ), __( 'Ein Kommentar', 'piratenkleider' ), __( '% Kommentare', 'piratenkleider' ) ); ?>
                                        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '| ', '' ); ?>

                <?php /* How to display all other posts. */ ?>

                <?php else : ?>
                                <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink zu %s', 'piratenkleider' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <?php piratenkleider_post_pubdateinfo(); ?>

                <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                                <?php the_excerpt(); ?>
                <?php else : ?>
                                <?php the_content( __( 'Weiterlesen', 'piratenkleider' ) ); ?>
                                <?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'piratenkleider' ), 'after' => '' ) ); ?>
                <?php endif; ?>

                                        <?php if ( count( get_the_category() ) ) : ?>
                                                <?php printf( __( 'ver&ouml;ffentlicht unter  %2$s', 'piratenkleider' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
                                                |
                                        <?php endif; ?>
                                        <?php
                                                $tags_list = get_the_tag_list( '', ', ' );
                                                if ( $tags_list ):
                                        ?>
                                                <?php printf( __( 'Tagged %2$s', 'piratenkleider' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
                                                |
                                        <?php endif; ?>
                                        <?php comments_popup_link( __( 'Hinterlasse einen Kommentar', 'piratenkleider' ), __( '1 Kommentar', 'piratenkleider' ), __( '% Kommentare', 'piratenkleider' ) ); ?>
                                        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '| ', '' ); ?>

                        <?php comments_template( '', true ); 
                        ?>

                <?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>
                <?php echo "<hr />"; ?>

                <?php endwhile; // End the loop. Whew. ?>

                <?php /* Display navigation to next/previous pages when applicable */ ?>
                <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                            <?php next_posts_link( __( '&larr; &Auml;ltere Beitr&auml;ge', 'piratenkleider' ) ); ?>
                            <?php previous_posts_link( __( 'Neuere Beitr&auml;ge &rarr;', 'piratenkleider' ) ); ?>
                <?php endif; ?>
