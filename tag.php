<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
  $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
   if (!isset($bilderoptions['src-default-symbolbild-tag'])) 
            $bilderoptions['src-default-symbolbild-tag'] = $defaultoptions['src-default-symbolbild-tag'];
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
           <h1 id="page-title"><span><?php printf( __( 'Schlagwort %s', 'piratenkleider' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>
          
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo $bilderoptions['src-default-symbolbild-tag']?>" alt="" >  
           </div>                                 
          <?php } ?>                  
      </div>
        <div class="skin">
            <?php get_template_part( 'loop', 'tag' ); ?>
             
             
              <div class="widget">
                <h2><?php _e( '&Uuml;bersicht &uuml;ber die Schlagworte', 'piratenkleider' ); ?></h2>
                <div class="tagcloud">                   
                  <?php wp_tag_cloud(array('smallest'  => 14, 'largest'   => 28)); ?>                  
                </div>    
            </div> 
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
