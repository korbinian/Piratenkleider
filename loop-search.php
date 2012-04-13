    <?php
            $category_description = category_description();
            if ( ! empty( $category_description ) )
                    echo '' . $category_description . ''; ?>	
            
            <?php while ( have_posts() ) : the_post(); ?>


            <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <?php piratenkleider_post_pubdateinfo(); ?>
                <?php the_excerpt(); ?>
                <?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'twentyten' ), 'after' => '' ) ); ?>



            <?php endwhile; // End the loop. Whew. ?>

            <?php /* Display navigation to next/previous pages when applicable */ ?>
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                <?php next_posts_link( __( '&larr; Ältere Beiträge', 'twentyten' ) ); ?>
                <?php previous_posts_link( __( 'Neuere Beiträge &rarr;', 'twentyten' ) ); ?>
            <?php endif; ?>
