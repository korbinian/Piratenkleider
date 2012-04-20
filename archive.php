<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <h1><?php if ( is_day() ) : ?>
                        <?php printf( __( 'Tagesarchiv: %s', 'twentyten' ), get_the_date() ); ?>
                     <?php elseif ( is_month() ) : ?>
                        <?php printf( __( 'Monatsarchiv: %s', 'twentyten' ), get_the_date('F Y') ); ?>
                     <?php elseif ( is_year() ) : ?>
                        <?php printf( __( 'Jahresarchiv: %s', 'twentyten' ), get_the_date('Y') ); ?>
                     <?php else : ?>
                         <?php _e( 'Blogarchiv', 'twentyten' ); ?>
                      <?php endif; ?>
                 </h1>    
          
          <?php if ( have_posts() ) the_post(); ?>
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/default-kategorien.jpg" alt="">              
           </div>                                 
          <?php } ?>                     
      </div>
        <div class="skin">                      
            <?php 
            rewind_posts(); 
            get_template_part( 'loop', 'archive' ); 
            ?>
	</div>
    </div>

    <div class="content-aside">
      <div class="skin">         
          <h1 class="skip">Weitere Informationen</h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
