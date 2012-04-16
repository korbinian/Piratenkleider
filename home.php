<?php get_header();    
  $options = get_option( 'piratenkleider_theme_options' );  
  if (!isset($options['slider-aktiv'])) 
        $options['slider-aktiv'] = $defaultoptions['slider-aktiv'];
  if ( $options['slider-aktiv'] == "1" ){
?>  
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

      <?php
      $i = 0; 
      $col = 0; 
      if (!isset($options['num-article-startpage-fullwidth'])) 
            $options['num-article-startpage-fullwidth'] = $defaultoptions['num-article-startpage-fullwidth'];
      if (!isset($options['num-article-startpage-halfwidth'])) 
            $options['num-article-startpage-halfwidth'] = $defaultoptions['num-article-startpage-halfwidth'];       
      $numentries = $options['num-article-startpage-fullwidth'] + $options['num-article-startpage-halfwidth']; 
      $col_count = 3; 
      $cols = array();
      while (have_posts() && $i<$numentries) : the_post();
      $i++;
      ob_start();
      ?>

      <div class="post" id="post-<?php the_ID(); ?>">
        <div class="post-title">
          <h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
        </div>
        <div class="post-info">
          <div class="commentbubble">
            <?php comments_popup_link( '0', '1', '%', 'comments-link', '-');?>
          </div>
          <div class="cal-icon">
            <span class="day"><?php the_time('j'); ?></span>
            <span class="month"><?php the_time('m.'); ?></span>
            <span class="year"><?php the_time('Y'); ?></span>
          </div>
        </div>
        <div class="post-entry">
        <?php 
            the_content_rss('', FALSE, '', 80); 
          ?>
          <a href="<?php the_permalink() ?>"><strong><?php the_title(); ?></strong> weiterlesen</a>
        </div>
      </div>

      <?php 
      $output = ob_get_contents();
      ob_end_clean();
      $cols[$col++] .= $output;
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
        <h2>Nichts gefunden</h2>
        <p>Entschuldigung, aber es wurde nichts gefunden. :(</p>
        <?php get_search_form(); ?>
        <hr>
      <?php endif; ?>

           
        
      
      <div class="startpage-widget-area">
       
        <div class="first-startpage-widget-area">
          <div class="skin">
            <?php if ( is_active_sidebar( 'first-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'first-startpage-widget-area' ); ?>
            <?php } else { ?>
              
                <div class="widget">
                <h3>Weitere Artikel</h3>

                <ul>
                <?php 
                $postslist = get_posts("numberposts=5&order=DESC&offset=$numentries"); 
                foreach ($postslist as $post) : setup_postdata($post); 
                ?>
                <li><a title="Post: <?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="date"><?php the_time('d.m.Y') ?></span></li>
                <?php endforeach; ?>
                </ul>
                </div>
                <div class="widget">
                <h3>Kategorien</h3>
                <?php wp_list_categories('title_li='); ?>

                </div>
             <?php } ?>
          </div>
        </div>

        <div class="second-startpage-widget-area">
        <div class="skin">
            <?php if ( is_active_sidebar( 'second-startpage-widget-area' ) ) { ?>
                <?php dynamic_sidebar( 'second-startpage-widget-area' ); ?>
            <?php } else { ?>    
                <div  class="widget">
                    <h3>Schlagworte</h3>    
                      <div class="tagcloud">            
                    <?php wp_tag_cloud(array('smallest'  => 12, 'largest'   => 28)); ?>
                      </div>
                </div>
            <?php } ?>
        </div>
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