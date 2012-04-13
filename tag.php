<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/default-kategorien.jpg" alt="" width="640" height="240" >
               <div class="caption">  
                   <h2><?php printf( __( 'Schlagwörterarchiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h2>
               </div>   
           </div>                                 
          <?php } ?>                  
      </div>
        <div class="skin">
            <?php if ($options['aktiv-platzhalterbilder-indexseiten'] !=1) { ?>
             <h1><?php printf( __( 'Schlagwörterarchiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1>                
            <?php }
            get_template_part( 'loop', 'tag' ); ?>
             
             
              <div class="widget">
                <h2>Übersicht aller Tags</h2>
                <div class="tagcloud">                   
                 <?php wp_tag_cloud(); ?>                              
                </div>    
            </div> 
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
