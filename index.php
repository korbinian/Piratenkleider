<?php get_header(); ?>
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <div class="symbolbild">                
              <?php 
              if (has_post_thumbnail()) {
                  the_post_thumbnail(); 
              } else {  ?>
                  <img src="<?php echo get_bloginfo('template_url'); ?>/images/default-wissen.png" alt="" width="640" height="240" >
                <?php  }  ?>            
                <div class="caption">  
                   <h2><?php the_title(); ?></h2>
               </div>   
           </div>   
      </div>
        <div class="skin">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
        <?php edit_post_link( __( 'Bearbeiten', 'twentyten' ), '', '' ); ?>
        <?php endwhile; ?>
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