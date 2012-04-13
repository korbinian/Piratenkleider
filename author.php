<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">   
            <?php if ( have_posts() ) the_post(); ?>
            <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
            <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/404.png" alt="" width="640" height="240" >
               <div class="caption">  
                   <h2><?php printf( __( 'Autorarchiv: %s', 'twentyten' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h2>
               </div>   
           </div>                                 
          <?php } ?>                
      </div>
        <div class="skin">
            
        <?php if ($options['aktiv-platzhalterbilder-indexseiten'] !=1) { ?>
        <h1><?php printf( __( 'Autorarchiv: %s', 'twentyten' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h1>
        <?php  }  ?>  
        
<?php if ( get_the_author_meta( 'description' ) ) : ?>

<?php echo get_avatar( get_the_author_meta('ID'), 60 ); ?>
<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
<?php the_author_meta( 'description' ); ?>

<?php endif; ?>

<?php rewind_posts(); get_template_part( 'loop', 'author' ); ?>


            


       </div>
    </div>

    <div class="content-aside">
      <div class="skin">          
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
