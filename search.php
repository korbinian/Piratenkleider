<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
?> 
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <?php if ($options['aktiv-platzhalterbilder-indexseiten']) { ?>         
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/default-suche.jpg" alt="" width="640" height="240" >
               <div class="caption">  
                   <h2><?php printf( __( 'Suchergebnisse für: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h2>
               </div>   
           </div>                                 
          <?php } ?>           
      </div>
        <div class="skin">
            <?php if ($options['aktiv-platzhalterbilder-indexseiten'] !=1) { ?>
              <h1><?php printf( __( 'Suchergebnisse für: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h1>                
            <?php  }
	    if ( have_posts() ) : ?>
                <?php
                /* Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called loop-search.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'search' );
                ?>
             <?php else : ?>
                        <h2>Nichts gefunden</h2>
                        <p>
                            Es konnten keine Seiten oder Artikel gefunden werden, 
                            die zu der Sucheingaben passten.
                            Bitte versuchen Sie es nochmal mit einer 
                            anderen Suche.
                        </p>
                        <?php get_search_form(); ?>
                        
                        <p>
                            Alternativ verwenden Sie einen der folgenden Links.                     
                        </p>
                        
                        <div class="widget">
                            <h3>Archiv nach Monaten</h3>                           
                            <?php wp_get_archives('type=monthly'); ?>               
                        </div>
                                                                        
                         <div  class="widget">
                            <h3>Artikel nach Schlagworten</h3>    
                            <div class="tagcloud">
                             <?php wp_tag_cloud(array('smallest'  => 12, 'largest'   => 28)); ?>
                             </div>
                        </div>
                        <div class="widget">
                        <h3>Übersicht aller Kategorien</h3>
                        <ul>                            
                          <?php wp_list_categories('title_li='); ?>                               
                        </ul>
                         </div>
                        
                        
             <?php endif; ?>

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
