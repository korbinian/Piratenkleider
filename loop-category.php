				<h1><?php printf( __( 'Pressearchiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '' . $category_description . ''; ?>	
					<?php /* If there are no posts to display, such as an empty archive page */ ?>
					<?php if ( ! have_posts() ) : ?>
						<h1><?php _e( 'Nicht gefunden', 'twentyten' ); ?></h1>
						<p><?php _e( 'Vielleicht hilft eine Suche weiter?', 'twentyten' ); ?></p>
						<div class="fullwidth"><?php get_search_form(); ?></div>
					<?php endif; ?>

					<?php while ( have_posts() ) : the_post(); ?>


					<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<?php twentyten_posted_on(); ?>
							<?php the_excerpt(); ?>
							<?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'twentyten' ), 'after' => '' ) ); ?>



					<?php endwhile; // End the loop. Whew. ?>

					<?php /* Display navigation to next/previous pages when applicable */ ?>
					<?php if (  $wp_query->max_num_pages > 1 ) : ?>
								<?php next_posts_link( __( '&larr; Ältere Beiträge', 'twentyten' ) ); ?>
								<?php previous_posts_link( __( 'Neuere Beiträge &rarr;', 'twentyten' ) ); ?>
					<?php endif; ?>
