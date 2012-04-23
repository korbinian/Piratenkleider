<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
   if (!isset($options['src-default-symbolbild'])) 
            $options['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
           <h1 id="page-title"><span><?php printf( __( 'Schlagwörterarchiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></span></h1>
          
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo $options['src-default-symbolbild']?>" alt="" >  
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
