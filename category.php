<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
        if (!isset($options['src-default-symbolbild'])) 
            $options['src-default-symbolbild'] = $defaultoptions['src-default-symbolbild'];
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
            <h1><?php printf( __( '%s', 'piratenkleider' ), '' .$defaultoptions['default_text_pretitle_category']. single_cat_title( '', false ) . '' ); ?></h1>           
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo $options['src-default-symbolbild']?>" alt="" >           
           </div>                                 
          <?php } ?> 
      </div>
        <div class="skin">
            <?php 
            get_template_part( 'loop', 'category' );?>       
          <div class="widget">               
                <ul>
                     <?php wp_list_categories('title_li='); ?> 
                </ul>                                             
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
