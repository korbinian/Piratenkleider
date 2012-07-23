<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
  $bilderoptions = get_option( 'piratenkleider_theme_defaultbilder' ); 
   if (!isset($bilderoptions['src-default-symbolbild-search'])) 
            $bilderoptions['src-default-symbolbild-search'] = $defaultoptions['src-default-symbolbild-search'];
?> 
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <h1><?php printf( __( 'Suchergebnisse f&uuml;r %s', 'piratenkleider' ), '' .get_search_query() . '' ); ?></h1>                
          
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
                    <img src="<?php echo $bilderoptions['src-default-symbolbild-search'] ?>" alt="" >              
           </div>                                 
          <?php } ?>           
      </div>
        <div class="skin">
            <?php 
	    if ( have_posts() ) : ?>
                <?php
                /* Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called loop-search.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'search' );
                ?>
             <?php else : ?>
                        <h2><?php _e("Nichts gefunden", 'piratenkleider'); ?></h2>
                        <p>
                            <?php _e("Es konnten keine Seiten oder Artikel gefunden werden, 
                            die zu der Sucheingabe passten.
                            Bitte versuchen Sie es nochmal mit einer 
                            anderen Suche.", 'piratenkleider'); ?>
                            
                        </p>
                        <?php get_search_form(); ?>
                        
                        <p>
                            <?php _e("Alternativ verwenden Sie einen der folgenden Links.", 'piratenkleider'); ?>
                                      
                        </p>
                        
                        <div class="widget">
                            <h3><?php _e("Archiv nach Monaten", 'piratenkleider'); ?></h3>                           
                            <?php wp_get_archives('type=monthly'); ?>               
                        </div>
                                                                        
                         <div  class="widget">
                            <h3><?php _e("Artikel nach Schlagworten", 'piratenkleider'); ?></h3>    
                            <div class="tagcloud">
                             <?php wp_tag_cloud(array('smallest'  => 12, 'largest'   => 28)); ?>
                             </div>
                        </div>
                        <div class="widget">
                        <h3><?php _e("&Uuml;bersicht aller Kategorien", 'piratenkleider'); ?></h3>
                        <ul>                            
                          <?php wp_list_categories('title_li='); ?>                               
                        </ul>
                         </div>
                        
                        
             <?php endif; ?>

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
