<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
           <h1 id="page-title"><span><?php printf( __( 'Schlagwörterarchiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>
          
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/default-kategorien.jpg" alt="" > 
           </div>                                 
          <?php } ?>                  
      </div>
        <div class="skin">
            <?php get_template_part( 'loop', 'tag' ); ?>
             
             
              <div class="widget">
                <h2>Übersicht aller Tags</h2>
                <div class="tagcloud">                   
                  <?php wp_tag_cloud(array('smallest'  => 14, 'largest'   => 28)); ?>                  
                </div>    
            </div> 
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
