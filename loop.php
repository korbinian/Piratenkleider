   <?php
   global $options;

        $category_description = category_description();
        if ( ! empty( $category_description ) )
                echo '' . $category_description . ''; 

        if ( ! have_posts() ) : ?>
                <h1><?php _e( 'Nothing found', 'piratenkleider' ); ?></h1>
                <p><?php _e( 'Please try to search:', 'piratenkleider' ); ?></p>
                <div class="fullwidth"><?php get_search_form(); ?></div>
        <?php endif; 

        if ( 'person'== get_post_type()  ) {
            $out = '';
                 $args = array(
		    'post_type' => 'person',
		    'order' => 'ASC',
		    'meta_key' => 'person_last_name',
		    'orderby' => 'meta_value',
		    'posts_per_page' => 30,
		    'offset'    => 0			
                );                 
                $person = new WP_Query( $args );
		if( $person->have_posts() ) {
		    $out .= ' <table class="person">';

		    while ($person->have_posts() ) {
			    $person->the_post();	   
			    $post_id = $person->post->ID;
			    $out .= piratenkleider_display_person($post_id, 'table');			   
		    }
		    $out .= '</table>';
		    wp_reset_postdata();
		} else {
			$out = '<section class="shortcode person"><p>';
			$out .= __('No personal information found.', 'piratenkleider');
			$out .= "</p></section>\n";
		}
            wp_reset_query();
            echo $out;                     
        } else {                                
		while ( have_posts() ) {
                    the_post();                
                    /* gallery */ 
		    if ( in_category( _x('gallery', 'gallery category slug', 'piratenkleider') ) ) { ?>
                        <h2>
                                <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'piratenkleider' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
                                        <?php the_title(); ?>
                                </a>
                        </h2>
                        <?php 
                        piratenkleider_post_pubdateinfo();

                        if ( post_password_required() ) {
                           the_content();
                        } else {			 
                           $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
                           $total_images = count( $images );
                           $image = array_shift( $images );
                           $image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
                           ?>
                               <a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>

                               <p>
                                       <?php printf( __( 'This gallery contains <a %1$s>%2$s photos</a>.', 'piratenkleider' ),
                                                               'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'piratenkleider' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
                                                               $total_images
                                                       ); ?>
                               </p>

                               <?php the_excerpt();
                         }
                         ?>
                         <a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'piratenkleider'), 'category' ); ?>"><?php _e( 'More images', 'piratenkleider' ); ?></a>
                         | <?php
                           comments_popup_link( __( 'Post a comment', 'piratenkleider' ), __( '1 Comment', 'piratenkleider' ), __( '% kommentare', 'piratenkleider' ) ); 
                           edit_post_link( __( 'Edit', 'piratenkleider' ), '|', '' ); 
                    
                     } else {                                
                             echo piratenkleider_post_teaser($options['category-teaser-titleup'],$options['category-teaser-datebox'],$options['category-teaser-dateline'],$options['category-teaser-maxlength'],$options['teaser-thumbnail_fallback'],$options['category-teaser-floating']);
                    }
                /* end of loop */
                }
                if (  $wp_query->max_num_pages > 1 ){ 
                             next_posts_link( __( '&larr; Older entries', 'piratenkleider' ) );
                             previous_posts_link( __( 'Newer entries &rarr;', 'piratenkleider' ) ); 
                } 
        }
?>
