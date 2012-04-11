<?php get_header(); ?>
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/tags-cats-suche.jpg" alt="" width="640" height="240" >
               <div class="caption">  
                   <h2><?php printf( __( 'Suchergebnisse für: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h2>
               </div>   
           </div>   
      </div>
        <div class="skin">
			<?php if ( have_posts() ) : ?>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
					<h2><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
<?php endif; ?>

			</div>
    </div>

    <div class="content-aside">
      <div class="skin">          
        <?php 
       if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
        } else { 
        ?>
          <ul class="menu">
              <?php  wp_page_menu( ); ?>
          </ul>
         <?php } ?>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
