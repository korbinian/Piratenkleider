<?php           
  global $options;
    ?>
        
        

      <div class="startpage-widget-area">
        <div class="first-startpage-widget-area">
          <div class="skin">
            <?php if ( is_active_sidebar( 'first-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'first-startpage-widget-area' ); ?>
            <?php } else { 
                  if ($options['aktiv-startseite-kategorien']==1) {  ?>
                    <div class="widget">
                    <h3><?php _e("Categories", 'piratenkleider'); ?></h3>
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
                            <h3><?php _e("Tags", 'piratenkleider'); ?></h3>

                            <div class="tagcloud">            
                                <?php wp_tag_cloud(array('format' => 'list', 'smallest'  => 14, 'largest'   => 28)); ?>
                            </div>
                              
                    <?php  }  ?>
                     
                </div>
            <?php } } ?>
        </div>
      </div>
      </div>