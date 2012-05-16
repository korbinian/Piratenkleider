<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
   if (!isset($options['src-default-symbolbild'])) 
            $options['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
           <h1 id="page-title"><span><?php printf( __( '%s', 'piratenkleider' ), '' .$defaultoptions['default_text_pretitle_tags']. single_cat_title( '', false ) . '' ); ?></span></h1>
          
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo $options['src-default-symbolbild']?>" alt="" >  
           </div>                                 
          <?php } ?>                  
      </div>
        <div class="skin">
            <?php get_template_part( 'loop', 'tag' ); ?>
             
             
              <div class="widget">
                <h2>&Uuml;bersicht aller Tags</h2>
                <div class="tagcloud">                   
                  <?php wp_tag_cloud(array('smallest'  => 14, 'largest'   => 28)); ?>                  
                </div>    
            </div> 
       </div>
    </div>

    <div class="content-aside">
      <div class="skin">       
          <h1 class="skip"><?php echo $defaultoptions['default_text_title_sidebar']; ?></h1>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
