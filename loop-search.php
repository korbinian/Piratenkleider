    <?php
            $category_description = category_description();
            if ( ! empty( $category_description ) )
                    echo '' . $category_description . ''; ?>	
            
            <?php while ( have_posts() ) : the_post(); ?>


            <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'piratenkleider' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <p class="pupdateinfo"><?php piratenkleider_post_pubdateinfo(); ?></p>
                <p><?php echo get_piratenkleider_custom_excerpt(); ?></p>
                <?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'piratenkleider' ), 'after' => '' ) ); ?>



            <?php endwhile; // End the loop. Whew. ?>

            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                <?php next_posts_link( __( '&larr; &Auml;ltere Beitr&auml;ge', 'piratenkleider' ) ); ?>
                <?php previous_posts_link( __( 'Neuere Beitr&auml;ge &rarr;', 'piratenkleider' ) ); ?>
            <?php endif; ?>
