<?php get_header();    
  global $options;  

  if ( $options['slider-aktiv'] == "1" ){ ?>  
    <div class="section teaser">
        <div class="row">
            <?php get_sidebar( 'teaser' ); ?>
        </div>  
    </div>
<?php } ?>
<div class="section content" id="main-content">
  <div class="row">
    <div class="content-primary">
      <div class="skin">

          <h1 class="skip"><?php _e("Aktuelle Artikel", 'piratenkleider'); ?></h1>
          
      <?php
      $i = 0; 
      $col = 0; 
      
      $numentries = $options['num-article-startpage-fullwidth'] + $options['num-article-startpage-halfwidth']; 
      $col_count = 3; 
      $cols = array();
      while (have_posts() && $i<$numentries) : the_post();
      $i++;
      ob_start();
      if (( isset($options['num-article-startpage-fullwidth']))
                && ($options['num-article-startpage-fullwidth']>=$i )) {
		 piratenkleider_post_teaser($options['teaser-titleup'],$options['teaser-datebox'],$options['teaser-dateline'],$options['teaser_maxlength'],$options['teaser-thumbnail_fallback']);
      } else {
		 piratenkleider_post_teaser($options['teaser-titleup-halfwidth'],$options['teaser-datebox-halfwidth'],$options['teaser-dateline-halfwidth'],$options['teaser-maxlength-halfwidth'],$options['teaser-thumbnail_fallback']);
      }
      $output = ob_get_contents();
      ob_end_clean();
      if (isset($output)) {
        $cols[$col++] = $output;
      }
      endwhile;
      ?>
      <div class="columns">
        <?php
        $z=1;
        foreach($cols as $key => $col) {
            if (( isset($options['num-article-startpage-fullwidth']))
                && ($options['num-article-startpage-fullwidth']>$key )) {
                    echo '<div class="column0">' . $col . '<hr></div>';                              
                } else {                                        
                    echo '<div class="column'.$z.'">' . $col . '</div>';                            
                    $z++;
                    if ($z>2) {
                        $z=1;
                        echo '<hr style="clear: both;">';
                    }
                }            
        }
        ?>     
      </div>

      
      
      
      <?php if ( ! have_posts() ) : ?>
       <h2><?php _e("Nichts gefunden", 'piratenkleider'); ?></h2>
        <p>
            <?php _e("Es konnten keine Artikel gefunden werden. Bitte versuchen Sie es nochmal mit einer Suche.", 'piratenkleider'); ?>
        </p>
        <?php get_search_form(); ?>
        <hr>
      <?php endif; ?>

           
        
      
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
                  if ($options['aktiv-startseite-kategorien']==1) { 
               ?>
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
                if (!isset($options['aktiv-startseite-tags'])) 
                     $options['aktiv-startseite-tags'] = $defaultoptions['aktiv-startseite-tags'];
                
                if ($options['aktiv-startseite-tags']==1) {
                ?>    
                <div  class="widget">
                    <?php 
                     $tags = get_tags();
                     if ((isset($tags)) && (count($tags)>0)) { ?>
                            <h3><?php _e("Schlagworte", 'piratenkleider'); ?></h3>

                            <div class="tagcloud">            
                                <?php wp_tag_cloud(array('smallest'  => 14, 'largest'   => 28)); ?>
                            </div>
                              
                    <?php  }  ?>
                     
                </div>
            <?php } } ?>
        </div>
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
  <?php  get_piratenkleider_socialmediaicons(2); ?>

</div>

<?php get_footer(); ?>