<?php get_header(); ?>
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
           <h1><?php the_title(); ?></h1>
          <div class="symbolbild">                   
              <?php 
              if (has_post_thumbnail()) {
                  the_post_thumbnail(); 
              } else {  ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/default-wissen.png" alt=""  >
                <?php  }  ?>                            
           </div>   
      </div>
        <div class="skin">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Seiten:', 'piratenkleider' ), 'after' => '' ) ); ?>
        <?php edit_post_link( __( 'Bearbeiten', 'piratenkleider' ), '', '' ); ?>
        <?php endwhile; ?>
       </div>
    </div>

    <div class="content-aside">
      <div class="skin">       
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
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
 <?php get_piratenkleider_socialmediaicons(2); ?>

</div>

<?php get_footer(); ?>