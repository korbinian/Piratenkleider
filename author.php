<?php get_header(); ?>
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/default-kategorien.png" alt="" width="640" height="240" >
               <div class="caption">  
                   <h2><?php printf( __( 'Autorarchiv: %s', 'twentyten' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h2>
               </div>   
           </div>   
      </div>
        <div class="skin">
                <?php if ( have_posts() ) the_post(); ?>
                <?php if ( get_the_author_meta( 'description' ) ) : ?>

                <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
                <h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
                <?php the_author_meta( 'description' ); ?>

                <?php endif; ?>

                <?php	rewind_posts(); get_template_part( 'loop', 'author' ); ?>

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
