   <?php
   global $options;

     
                $category_description = category_description();
                if ( ! empty( $category_description ) )
                        echo '' . $category_description . ''; 
		
		if ( ! have_posts() ) : ?>
                        <h1><?php _e( 'Nichts gefunden', 'piratenkleider' ); ?></h1>
                        <p><?php _e( 'Vielleicht hilft eine Suche weiter?', 'piratenkleider' ); ?></p>
                        <div class="fullwidth"><?php get_search_form(); ?></div>
                <?php endif; 
		
		while ( have_posts() ) : the_post(); ?>

                <?php /* gallery */ 

                
		    if ( in_category( _x('gallery', 'gallery category slug', 'piratenkleider') ) ) : ?>
                        <h2>
                                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'piratenkleider' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                </a>
                        </h2>
                        <?php piratenkleider_post_pubdateinfo(); ?>

		    <?php if ( post_password_required() ) : ?>
                        <?php the_content(); ?>
		     <?php else : 			 
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
          

             
                <?php else : 
                               

		    	 piratenkleider_post_teaser($options['category-teaser-titleup'],$options['category-teaser-datebox'],$options['category-teaser-dateline'],$options['category-teaser-maxlength'],$options['teaser-thumbnail_fallback'],$options['category-teaser-floating']);
     

                endif; // This was the if statement that broke the loop into three parts based on categories. ?>

                <?php endwhile; // End the loop. Whew. ?>

                <?php /* Display navigation to next/previous pages when applicable */ ?>
                <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                            <?php next_posts_link( __( '&larr; &Auml;ltere Beitr&auml;ge', 'piratenkleider' ) ); ?>
                            <?php previous_posts_link( __( 'Neuere Beitr&auml;ge &rarr;', 'piratenkleider' ) ); ?>
                <?php endif; ?>
