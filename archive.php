<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
   $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
   if (!isset($bilderoptions['src-default-symbolbild-archve'])) 
            $bilderoptions['src-default-symbolbild-archve'] = $defaultoptions['src-default-symbolbild-archive'];
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <h1><?php if ( is_day() ) : ?>
                        <?php printf( __( 'Tagesarchiv: %s', 'piratenkleider' ), get_the_date() ); ?>
                     <?php elseif ( is_month() ) : ?>
                        <?php printf( __( 'Monatsarchiv: %s', 'piratenkleider' ), get_the_date('F Y') ); ?>
                     <?php elseif ( is_year() ) : ?>
                        <?php printf( __( 'Jahresarchiv: %s', 'piratenkleider' ), get_the_date('Y') ); ?>
                     <?php else : ?>
                         <?php _e( 'Blogarchiv', 'piratenkleider' ); ?>
                      <?php endif; ?>
                 </h1>    
          
          <?php if ( have_posts() ) the_post(); ?>
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
             <img src="<?php echo $bilderoptions['src-default-symbolbild-archve']?>" alt="" >          
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
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
     <?php get_piratenkleider_socialmediaicons(2); ?>
</div>

<?php get_footer(); ?>
