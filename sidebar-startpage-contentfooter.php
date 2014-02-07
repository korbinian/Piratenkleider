<?php           
  global $defaultoptions;
  global $options;
  global $numentries;
    ?>
        
        

      <div class="startpage-widget-area">
        <h2 class="skip"><?php _e("Weitere Artikel", 'piratenkleider'); ?></h2>
        <div class="first-startpage-widget-area">
          <div class="skin">
            <?php if ( is_active_sidebar( 'first-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'first-startpage-widget-area' ); ?>
            <?php } else { 
                
                 $numold = $options['aktiv-startseite-alteartikel-num'];
                 
                 if ($options['aktiv-startseite-alteartikel']==1) {                  
                    $postslist = get_posts("numberposts=$numold&order=DESC&offset=$numentries"); 
                    if ((isset($postslist)) && (count($postslist)>0)) { ?>
                        <div class="widget">
                            <h3><?php _e("&Auml;ltere Artikel", 'piratenkleider'); ?></h3>
                            <ul>
                            <?php foreach ($postslist as $post) : setup_postdata($post); ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <span class="date"><?php the_time('d.m.Y') ?></span></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>              
                    <?php 
                      }
                  }
                  if ($options['aktiv-startseite-kategorien']==1) {  ?>
                    <div class="widget">
                    <h3><?php _e("Kategorien", 'piratenkleider'); ?></h3>
                    <ul>
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                    </div>
             <?php } } ?>
          </div>
        </div>

        <div class="second-startpage-widget-area">
        <div class="skin">
            <?php if ( is_active_sidebar( 'second-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'second-startpage-widget-area' ); ?>
            <?php } else {                 
                if ($options['aktiv-startseite-tags']==1) {
                ?>    
                <div  class="widget">
                    <?php 
                     $tags = get_tags();
                     if ((isset($tags)) && (count($tags)>0)) { ?>
                            <h3><?php _e("Schlagworte", 'piratenkleider'); ?></h3>

                            <div class="tagcloud">            
                                <?php wp_tag_cloud(array('format' => 'list', 'smallest'  => 14, 'largest'   => 28)); ?>
                            </div>
                              
                    <?php  }  ?>
                     
                </div>
            <?php } } ?>
        </div>
      </div>
      </div>