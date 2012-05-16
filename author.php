<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
    if (!isset($options['src-default-symbolbild'])) 
            $options['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">   
            <?php if ( have_posts() ) the_post(); ?>
           <h1><?php printf( __( '%s', 'piratenkleider' ), get_the_author() ); ?></h1>
          
            <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
            <div class="symbolbild"> 
              <img src="<?php echo $options['src-default-symbolbild']?>" alt="" >
           </div>                                 
          <?php } ?>                
      </div>
        <div class="skin">
            

        
<?php if ( get_the_author_meta( 'description' ) ) : ?>   
    <?php the_author_meta( 'description' ); ?>
    <hr>
<?php endif; ?>

<?php rewind_posts(); get_template_part( 'loop', 'author' ); ?>


       </div>
    </div>

    <div class="content-aside">
      <div class="skin">      
          <h1 class="skip"><?php _e( 'Weitere Informationen', 'piratenkleider' ); ?></h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
